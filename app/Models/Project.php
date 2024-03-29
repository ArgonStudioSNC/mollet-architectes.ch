<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'category',
        'client',
        'location',
    ];

    /**
     * One to one relationship with Project and Competition
     *
     * @var array
     */
     public function competition() {
         return $this->hasOne('App\Models\Competition');
     }

}
