<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Books;
use App\Models\Media;
use App\Models\Report;
use App\Models\Reviews;
use App\Models\Favourites;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
        'social_type',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'updated_at',
        'social_type',
        'email_verified_at'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // User.php
    public function getTotalStarCount()
    {
        return $this->books()->with('stars')->get()->flatMap(function ($book) {
            return $book->stars;
        })->count();
    }

    //? Function to get the total number of downloads for a user's books
    public function getCountDownload()
    {
        //? Sum the 'download' column in the related 'books' table
        $totalDownloads = $this->books()->sum('download');

        //? Return the total number of downloads (no rounding needed if integer)
        return $totalDownloads;
    }

    //? Relationship: A user has many books
    public function books()
    {
        return $this->hasMany(Books::class);
    }


    // ! to return the total num of books for users // 
    // ? total share for tweet
    public function getBookssCount()
    {
        return $this->book()->count();
    }

    public function book()
    {
        return $this->hasMany(Books::class, 'user_id');
    }
    // ! //



    // ! to return the total num of books for users // 
    // ? total share for tweet
    public function getCountFav()
    {
        return $this->fav()->count();
    }

    public function fav()
    {
        return $this->hasMany(Favourites::class, 'user_id');
    }
    // ! //

    // todo return Type of stars rating
    public function getTypeStars()
    {

        $averageRating = $this->getAverageRating() ?? 0; //? Default to 0 if averageRating is null
        $fullStars = floor($averageRating);
        $hasHalfStar = $averageRating - $fullStars >= 0.5;
        $emptyStars = 5 - ($fullStars + ($hasHalfStar ? 1 : 0));

        return [
            'fullStars' => $fullStars,
            'hasHalfStar' => $hasHalfStar,
            'emptyStars' => $emptyStars,
            'averageRating' => $averageRating
        ];


    }

    // todo calculate total view
    public function getCountview()
    {
        //? Assuming 'view' is the view column in books
        $sumReading = $this->book()->sum('view');
        return $sumReading;
    }



    // todo calculate total rating
    public function getCountMyReview()
    {
        //? Assuming 'stars' is the rating column in reviews
        $average = $this->reviews()->count('user_id');

        //? Round to the nearest decimal
        return $average;
    }

    // todo calculate total rating
    public function getCountStar()
    {
        //? Assuming 'stars' is the rating column in reviews
        $average = $this->reviews()->sum('star');

        //? Round to the nearest decimal
        return $average;
    }


    // todo calculate total rating
    public function getAverageRating()
    {
        //? Assuming 'stars' is the rating column in reviews
        $average = $this->reviews()->avg('star');

        //? Round to the nearest decimal
        return round($average, 1);
    }


    public function reviews()
    {
        return $this->hasMany(Reviews::class, 'user_id'); //? Adjust 'author_id' to your foreign key
    }

    //? Define a scope to filter non-null 'report_at' columns
    public function scopeReported($query)
    {
        return $query->whereHas('report'); // Ensure 'reports' is the name of the relationship method in Books model
    }


    //? Define a method to reset the 'report_at' column to null
    public function resetReportAt($bookid)
    {
        $report = Report::where('reportable_id', $bookid)->first();
        $report->delete();
    }

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
        return $this->morphMany(Report::class, 'reportable');
    }

    public function report_one()
    {
        return $this->morphOne(Report::class, 'reportable');
    }

}
