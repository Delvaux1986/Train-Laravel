<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function Securisation($donnees){ 
        $donnees = htmlspecialchars($donnees); 
        $donnees = trim($donnees); 
        $donnees = stripcslashes($donnees); 
        $donnees = strip_tags($donnees); 
        return $donnees; 

    } 
    
}
