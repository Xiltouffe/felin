<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class felin {
   public $nom; 
   public $email ;
   public $date ;
   public $soin ;
   public $sortie ;
   public $comm ;
   public $tarif ;
           
  function __construct() {  
      
}//nom
   function getnom() {
       return $this->nom;
   }
   
   function setnom($nom) {
       $this->nom = $nom;
   }
  //mail
function getemail() {
       return $this->email;
   }
   
   function setemail($email) {
       $this->email = $email;
   }
   
   //date
   function getdate() {
       return $this->date;
   }
   
   function setdate($date) {
       $this->date = $date;
   }





}
