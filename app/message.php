<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    public function create(){
       //
    }
    protected $fillable = [
        'pseudo', 'msgchat'
    ];
}
