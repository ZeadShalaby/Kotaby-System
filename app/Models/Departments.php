<?php

namespace App\Models;

use App\Models\Books;
use App\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departments extends Model
{
    use HasFactory, SoftDeletes;

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
        'deleted_at'
    ];


    //! ////////

    // todo Method to get the count of books for this department
    public function getBooksCount()
    {
        return $this->books()->count();
    }
    //todo Define the one-to-many relationship with books
    public function books()
    {
        return $this->hasMany(Books::class, 'dep_id');
    }

    // ! ///////


    //! ////////
    // todo Method to get the count of books for this department
    public function getstarCount()
    {
        return $this->stars()->count();
    }
    //todo Define the one-to-many relationship with books
    public function stars()
    {
        return $this->hasMany(Books::class, 'stars');
    }

    // ! ///////

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
