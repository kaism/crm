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

    public function from_address()
    {
        return $this->belongsTo(EmailAddress::class, 'id');
    }

    public function to_address()
    {
        return $this->belongsTo(EmailAddress::class, 'id');
    }
}
