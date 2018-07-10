<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        require 'felin.php';
        
        //Instancie la classe : l'objet est créé
        $leFelin = new felin();
       
        //Definition du nom de CE félin
        $leFelin->setnom($_POST['nom']);
        echo $leFelin->getnom(); 
        
        echo "<br/>";
        //le mail du proprietaire
        $leFelin->setemail($_POST['email']);
        echo $leFelin->getemail()."<br/>";
        
      
         $leFelin->setdate($_POST['date']);
        echo $leFelin->getdate()."<br/>";
        
         $leFelin->setsoin($_POST['soin']);
        echo $leFelin->getsoin()."<br/>";
        
         $leFelin->setsortie($_POST['sortie']);
        echo $leFelin->getsortie()."<br/>";
        
         $leFelin->setcomm($_POST['comm']);
        echo $leFelin->getcomm()."<br/>";
        
          $leFelin->settarif($_POST['tarif']);
        echo $leFelin->gettarif()."<br/>";
        
        
        
        
        
        ?>
  
    </body>
</html>
