<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailAddress extends Model
{
    public function client()
    {
    	return $this->belongsTo(Client::class);
    }

    public function sentEmails()
    {
        return $this->hasMany(Email::class, 'from');
    }
    
    public function receivedEmails()
    {
        return $this->hasMany(Email::class, 'to');
    }
}
