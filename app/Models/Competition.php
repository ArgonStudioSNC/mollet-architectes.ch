<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category',
        'name',
        'location',
        'year',
        'award',
        'volume',
    ];

    /**
     * One to one relationship with Project and Competition
     *
     * @var array
     */
     public function project() {
         return $this->belongsTo('App\Models\Project');
     }

}
