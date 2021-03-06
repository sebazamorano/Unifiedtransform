<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Myclass extends Model
{
	protected $table = "classes";
    /**
     * Get the school record associated with the user.
    */
    public function school()
    {
        return $this->belongsTo('App\School');
    }

	public function sections()
    {
        return $this->hasMany('App\Section','class_id');
    }

    public function exam()
    {
        return $this->belongsTo('App\ExamForClass');
    }

	public function books()
    {
        return $this->hasMany('App\Book','book_id');
    }
}
