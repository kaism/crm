<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function path()
    {
    	return "/clients/{$this->id}";
    }

    public function emailAddresses()
    {
        return $this->hasMany(EmailAddress::class);
    }
}
