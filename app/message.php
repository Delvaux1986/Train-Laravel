<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

    class Message extends Model{
        
        public function showMessages() {
            $messages = DB::table('minichat')->get();

            return view('minichat', $messages);
        }
    }