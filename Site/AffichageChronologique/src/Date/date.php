<?php
class Date{
    
    var $days = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
    var $months = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Decembre');
    
    
    
    
    
    
    
    
    function getAll($year){
        $r = array();
        /**
        $date = strtotime($year."-01-01");
        while(date('Y',$date) <= $year)
        { 
            //Ce que je veux => $r[ANNEE][MOIS][JOUR] = JOUR DE LA SEMAINE
            $y = date('Y',$date);       
            $m = date('n',$date);
            $d = date('j',$date);
            $w = str_replace('0','7',date('w',$date));
            $r[$y][$m][$d]= [$w];
            $date = strtotime(date('Y-m-d',$date).'+1 DAY');
        }
        */
        $date = new DateTime($year.'-01-01');
                while($date->format('Y')<= $year)
                { 
                    //Ce que je veux => $r[ANNEE][MOIS][JOUR] = JOUR DE LA SEMAINE
                    $y = $date->format('Y');       
                    $m = $date->format('n');
                    $d = $date->format('j');
                    $w = str_replace('0','7',$date->format('w'));
                    $r[$y][$m][$d]= [$w];
                    $date->add(new DateInterval('P1D'));
                }
        return $r;
        
    }
}