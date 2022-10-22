<?php
class client 
{

private string $nom
private string $prenom;
private string $email;
private float $tel;

public static function getNom():string
{
return self::$nom;
}
public static function setPrenom(string $filiere):void
{
self::$prenom=$prenom;
}
public function __construct(string $nom,string $prenom,string $email,float $tel)
{
$this-> nom=$nom;
$this-> prenom=$prenom;
$this-> email=$email;
$this-> tel=$tel;
}
public function getNom():string {return $this->nom;}
public function setNom(string $nom) {$this->nom=$nom;}

public function getPrenom():string {return $this->prenom;}
public function setPrenom(string $prenom) {$this->prenom=$prenom;}
public function getEmail():string {return $this->email;}
public function setEmail(string $email) {$this->email=$email;}
public function getTel():float {return $this->tel;}
public function setTel(float $tel) {$this->tel=$tel;}
}
?>