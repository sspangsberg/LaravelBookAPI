<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    /**
     * $fillable
     *
     * @var array
     */
    protected $fillable = ['user_id', 'title','description'];


    /**
     * user
     *
     * @return void
     */
    public function user() {
        return $this->belongsTo(User::class);
    }


    /**
     * ratings
     *
     * @return void
     */
    public function ratings() {
        $this->hasMany(Rating::class);
    }
}
