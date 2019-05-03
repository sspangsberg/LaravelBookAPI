<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{

    /**
     * $fillable
     *
     * @var array
     */
    protected $fillable = ['book_id','user_id','rating'];

    /**
     * book
     *
     * @return void
     */
    public function book() {
        return $this->belongsTo(Book::class);
    }
}
