<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Formulaire ajout d'un visiteur</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="<?php base_url() ?>JS/lesFonctions.js"></script>
         <script type="text/javascript">
         
             $
           (
               function()
                {
                    
                    $("#regionsFormulaire").change(function(){ 
                         function(){
                        ($(this).val());
                    });
                        
                   
                   
                   
                   
                }
             );
         
        </script>
    </head>
    <body>
        <p>Matricule</p> <input type="text">
        <p>Nom</p> <input type="text">
         <p>Prenom</p> <input type="text">
          <p>Adresse</p> <input type="text">
           <p>cp</p> <input type="text">
            <p>ville</p> <input type="text">
             <p>Date D'embauche</p> <input type="text">
              <p>Code secteur</p> <input type="text">
               <p>Code L'aboratoire</p> <input type="text">
               
               <div id="regionsFormulaire">
             
               </div>
    </body>
</html>
