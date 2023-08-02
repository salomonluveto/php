<?php
/*un fichier doit conténir seulement une classe
le nom du fichier doit etre egale a celle de la classe
*/
class Voiture{
    public $couleur;
    protected $model;
    protected $prix ;
    //constructeur
    public function __construct($couleur,$model,$prix){
   $this->couleur = $couleur;
   $this->model = $model;
   $this->prix = $prix;
    }
    /*
    constructeur par defaut
     public function __construct($couleur,$model,$prix){
   $this->couleur ="rouge";
   $this->model = "mazda";
   $this->prix = 2500;
    }
    */
public function accelerer(){
    echo " <br/>la voiture $this->model accélère";
}
public function prix_voiture($devise){
    echo "<br/> la voiture $this->model coute $this->prix $devise";
}
public static function rouler(){
    echo "une voiture roule";
}
/*public function __destruct(){
    echo "Fin de l'objet";
}
*/
}
class Bus extends Voiture{
    //la redéfinition
    public function accelerer(){
        echo " <br/>le bus $this->model accélère";
    }
public function check_model(){
    //pour appeler la méthode de la classe parent
    parent :: acceler();
}
}
// déclaration de la classe abstraite
abstract class A{
//cette methode oblige à toutes les classes filles d'implementer cette methode sinon erreur 
abstract public function freiner(){

}
}
//une classe finale esr une classe dont on ne peut pas hériter
final class B{
}
//une methode finale est une methode qui ne permete pas aux classes filles de redefinir ses methode 
class C{
    final public function methode1(){

    }
}
/* test pour la class voiture

$voiture1 = new Voiture('verte','mercedes',5000);
Voiture :: rouler();

echo $voiture1->accelerer();
echo $voiture1->prix_voiture('CDF');
*/
$voiture1 = new Bus('verte','mercedes',5000);
echo $voiture1->accelerer();

/*le destructeur est lancé la fin du script

 une methode static est une methode qui appartient à la classe, on ne crée pas un objet pour ca
on l'appel directement apartir de la classe

pour l'héritage on utilise le mot clé extends ex:
Class Fille extends Mere{   
}tés

dans une classe abstraite on instancie pas, seul les classes filles qui béneficient de ses methodes et prorprié

une methode finale ne peut pas etre créé dans une classe final

si une methode est abstract la classe doit aussi etre abstract
