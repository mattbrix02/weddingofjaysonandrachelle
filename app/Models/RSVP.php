<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RSVP extends Model
{
    protected $fillable = ['FirstName', 'LastName', 'email' , 'number' , 'Accept', 'Confirm'];

    protected $table = 'rsvps';
    use HasFactory;
    //
}
