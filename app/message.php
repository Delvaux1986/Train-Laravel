<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    public function create(){
        DB::insert('insert into minichat (pseudo, msgchat) values (?, ?)');
    }
    protected $fillable = [
        'pseudo', 'msgchat'
    ];
}
