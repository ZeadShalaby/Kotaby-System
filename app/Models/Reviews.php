<?php

namespace App\Models;

use App\Models\User;
use App\Models\Books;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reviews extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'comment',
        'user_id',
        'book_id',
        'comment',
        'star',
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
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->with('media_one');
    }

    /*
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function book()
    {
        return $this->belongsTo(Books::class, 'book_id')->with('media_one');
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
