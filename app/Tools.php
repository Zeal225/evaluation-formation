<?php

namespace App;

class Tools
{
    public static function listeDepartements(){
        return [
            '1' => 'Departement Solution Developpement',
            '2' => 'Departement Formation',
            '3' => 'Departement Ressources Humaines',
            '4' => 'Departement Marketing'
        ];
    }

    public static function listeServices(){
        return [
            '1' => 'Service Developpement Maintenance Application',
            '2' => 'Service Formation',
            '3' => 'Service Ressources Humaines',
            '4' => 'Service Marketing'
        ];
    }

    public static function listeTypeCompte(){
        return [
            '1' => 'Directeur',
            '2' => 'Chef de Departement',
            '3' => 'Chef de Service',
            '4' => 'Agent',
        ];
    }

    public static function listeAgence(){
        return [
            '1' => 'CGRAE Plateaux',
            '2' => 'CGRAE Treichville',
            '3' => 'CGRAE Cocody',
        ];
    }
}
