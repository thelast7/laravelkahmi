<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftartip extends Model
{
    protected $fillable = ['title', 'body', 'tip_id', 'image', 'slug'];


    public function tip()
    {
    	return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value)
    {
    	$this->attributes['title'] = $value;
    	$this->attributes['slug']  = str_slug($value);
    }

    public function getImageUrlAttribute($value)
    {
		$imageUrl = "";

		if ( ! is_null($this->image) ) {
			$imagePath = public_path() . "/img/tipz/" . $this->image;
			if ( file_exists($imagePath)) $imageUrl = asset('img/tipz/'. $this->image);
		}

		return $imageUrl;

    }

    public function getImageThumbAttribute()
	  {
		$imageUrl = "";

		if ( ! is_null($this->image) ) {
			$imagePath = public_path() . "/img/tipz/thumb_" . $this->image;
			if ( file_exists($imagePath)) $imageUrl = asset('img/tipz/thumb_'. $this->image);
		}

		return $imageUrl;
    }
}
