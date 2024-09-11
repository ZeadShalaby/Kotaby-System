<?php

namespace App\Models;

use App\Models\User;
use App\Models\Media;
use App\Models\Report;
use App\Models\Reviews;
use App\Models\Departments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Books extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'author_name',
        'title',
        'description',
        'language',
        'num_pages',
        'dep_id',
        'user_id',
        'star',
        'view',
        'locations',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'updated_at',
        'created_at',
    ];

    //? format data to day & month &year
    public function getCreationDateFormattedAttribute()
    {
        return $this->created_at->format('d-m-y'); // Format as day-month
    }


    //? Define a scope to filter non-null 'report_at' columns
    public function scopeReported($query)
    {
        return $query->whereNotNull('report_at');
    }

    //? Define a method to reset the 'report_at' column to null
    public function resetReportAt()
    {
        $this->report_at = null;
        $this->report = null;
        $this->save();
    }


    // todo return Type of stars rating
    public function getTypeStars()
    {

        $averageRating = $this->getTotalRating() ?? 0; //? Default to 0 if averageRating is null
        $fullStars = floor($averageRating);
        $halfStar = $averageRating - $fullStars >= 0.5 ? 1 : 0;
        $emptyStars = 5 - ($fullStars + ($halfStar ? 1 : 0));

        return [
            'fullStars' => $fullStars,
            'halfStar' => $halfStar,
            'emptyStars' => $emptyStars,
            'averageRating' => $averageRating
        ];


    }

    //? Calculate total rating of books
    public function getTotalRating()
    {
        //? Assuming 'stars' is the rating column in reviews
        $totalRating = $this->reviews()->sum('star');

        return $totalRating;
    }

    // Relationship to reviews
    public function reviews()
    {
        return $this->hasMany(Reviews::class, 'book_id'); //? Adjust 'book_id' to your foreign key
    }

    public function stars()
    {
        return $this->hasMany(Reviews::class, 'book_id'); //? Assuming you have a Star model for ratings
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->with('media_one');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function department()
    {
        return $this->belongsTo(Departments::class, 'dep_id')->with('media_one');
    }


    // ! check the user add fav | ^ to change color
    public function isFavoritedBy(User $user)
    {
        return $this->favourites()->where('user_id', $user->id)->exists();
    }
    //? relation fav
    public function favourites()
    {
        return $this->belongsToMany(User::class, 'favourites', 'book_id', 'user_id')->withTimestamps();
    }
    // ! //

    // ! to return the total num of favourite for tweet // 
    // ? total favorites for tweet
    public function getFavoritesCount()
    {
        return $this->favorite()->count();
    }

    public function favorite()
    {
        return $this->belongsToMany(User::class, 'favourites', 'book_id')->withTimestamps();
    }
    // ! //

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function media()
    {
        return $this->morphMany(Media::class, 'mediaable');
    }


    public function media_one()
    {
        return $this->morphOne(Media::class, 'mediaable');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function report()
    {
        return $this->morphMany(Report::class, 'mediaable');
    }

    public function report_one()
    {
        return $this->morphOne(Report::class, 'reportable');
    }


}
