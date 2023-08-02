<?php
/* une interface se comporte comme une classe abstraite dont
toutes les methodes sont abstraites
une classe à la possibilité d'implementer plusieurs interface
en le separant par des virgules
*/


interface Employer{
public function travailler();
public function diriger();
}

class Personne implements Employer{
    public function presenter(){
        echo 'je suis une personne';
    }
    public function travailler(){
        echo 'je travail à ODC';
    }
    public function diriger(){
        echo 'je dirige le projet';
    }
}
$personne = new Personne();
$personne->presenter();