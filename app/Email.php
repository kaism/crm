<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $guarded = [];

    public function path()
    {
    	return "/emails/{$this->id}";
    }
}
