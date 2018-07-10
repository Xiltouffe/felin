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
        require 'felin.php';
        
        ?>
        
<p>
    
    Veuillez remplir ce formulaire :
</p>

<form action="page.php" method="post">
<p>
    <label for="nom de l'animal">nom de l'animal</label>
    <input type="text" name="nom" />
    
    <br>
    <label for="email">email</label>
    <input type="email" name="email" />
    
    <br>
    <label for="date d'entrée de l'animal">date d'entrée de l'animal</label>
    <input type="date" name="date" /> 
    
    <br>
    <label for="nature des soins">nature des soins</label>
    <select name="soin">
    <option value="choix1">vaccin</option>
    <option value="choix2">malade</option>
    <option value="choix3">opération</option>
    <option value="choix4">visite médical</option>
</select>
    
    <br>
    <label for="commentaire">commentaire</label>
    <input type="text" name="comm" />
    
    <br>
    <label for="date de sortie">date de sortie</label>
    <input type="date" name="sortie" />
    
    <br>
    <label for="tarif">tarif</label>
    <input type="text" name="tarif" />
    
    <br>
    <input type="submit" value="Valider" />
</p>
</form>        
        
        
    </body>
</html>












