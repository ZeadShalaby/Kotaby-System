<?php

namespace App\Models;

use App\Models\Books;
use App\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departments extends Model
{
    use HasFactory;

       /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'code',
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

    // ! to return the total num of Boos for Departments // 
    // ? total Boos for Departments
    public function getBooksCount()
    {
        return $this->books()->count();
    }

    public function books()
    {
        return $this->belongsToMany(Books::class, 'books', 'book_id')->withTimestamps();
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
