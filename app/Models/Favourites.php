<?php

namespace App\Models;

use App\Models\User;
use App\Models\Books;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favourites extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'book_id',
        'user_id',
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

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function book()  
    {
        //? Load the book relationship along with 'media_one'
        return $this->belongsTo(Books::class, 'book_id')->with('media_one');
     
    }

    // todo return Type of stars rating
    public function getTypeStars()
    {

        $averageRating = $this->getTotalRating() ?? 0; //? Default to 0 if averageRating is null
        $fullStars = floor($averageRating);
        $halfStar = $averageRating - $fullStars >= 0.5 ? 1 : 0;
        $emptyStars = 5 - ($fullStars + ($halfStar ? 1 : 0));
        
        return [
            'fullStars'     => $fullStars,
            'halfStar'      => $halfStar,
            'emptyStars'    => $emptyStars,
            'averageRating' => $averageRating
        ];


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

    // ! to return the total num of favourite for Book // 
    // ? total favorites for Books
    public function getFavoritesCount()
    {
        return $this->favorite()->count();
    }

    public function favorite()
    {
        return $this->belongsToMany(User::class, 'favourites', 'book_id')->withTimestamps();
    }
   // ! //

}
