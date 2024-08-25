<?php

namespace App\Models;

use App\Models\Books;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Locations extends Model
{
    use HasFactory;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'bock_id',
        'address1',
        'address2',
        'postcode',
        'city',
        'country',
        'state',
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
        return $this->belongsTo(Books::class, 'book_id')->with('meida_one');
    }


}
