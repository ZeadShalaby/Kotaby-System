<?php

namespace App\Models;

use App\Models\User;
use App\Models\Media;
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
        'name',
        'description',
        'language',
        'num_pages',
        'dep_id',
        'user_id',
        'star',
        'view',
        'locations'
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

     //? format data to day & month
     public function getCreationDateFormattedAttribute()
     {
         return $this->created_at->format('d-m'); // Format as day-month
     }

     
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->with('meida_one');
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


}
