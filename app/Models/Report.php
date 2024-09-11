<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'reportable_type',
        'reportable_id',
        'comment',
        'report',
        'created_at',
        'updated_at'
    ];

    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function reportable()
    {
        return $this->morphTo();
    }

    //    return $this->morphTo(__FUNCTION__, 'imageable_type', 'imageable_id');


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'updated_at',
        'created_at'
    ];


}
