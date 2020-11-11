<?php

namespace App\Date

class Month {
    
    public function __construct(string : $month,int $year)
    {
        if $month < 1 || $month >12 {
            throw new \Exception(message:"le mois $month n'est pas valide");
        }
        if($year < 1700){
            throw new \Exception(message:"l'année est inferieur à 1700 """) ;   
        }
    }
}