<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Gestions des visiteurs </title>
        
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="JS/lesFonctions.js"></script>
         <script type="text/javascript">
         
             $
           (
               function()
                {
                    
                    //$("#tableau").change(function(){ 
                        
                   
                }
             );
         
        </script>
    </head>
    <body>
        <h1>Page d'accueil : Gestion des visiteurs </h1>
<div id="GestionDeRegion">
    <select id="lstRegion">
      <?php
      foreach ($lesRegions as $regions) {
         echo $regions->REG_NOM;
      }
      
      
      
      ?>  
        
        
    </select>
        <p>Code Region </p> <input type="text">

        <p>Liebelle Secteur</p> <input type="text">
        
        <p>Nom Region</p> <input type="text">
        
        <br> <br>
        <input type="button" value="Modifier regions" id="modifier">
        <br>  <br>  <br>  <br>  <br>  <br> 
      
    </div>    
        <div id="Tableau" align="right">
    
       
    <table cellspacing="2px" cellpadding="2px;" rules="all" style="border:solid 1px black;">
        <caption>Listes des visiteurs</caption>
        <tr> 
            
              <th>Matricule</th>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Ville</th>
           
        </tr>    
       
        <?php 
        
        foreach($lesVisiteurs as $visiteur){
            echo "<tr>";
           
            echo"<td> <a href='index.php/Ctrl_AccueilVisiteurAc/getlesvisiteurs'>".$visiteur->VIS_MATRICULE."</a></td>";
            echo"<td>".$visiteur->VIS_NOM."</td>";
            echo"<td>".$visiteur->Vis_PRENOM."</td>";
            echo"<td>".$visiteur->VIS_VILLE."</td>";
            
            
            echo "</tr>";
        }
        ?>
           
    </table> 
            </div>
     
        </body>
</html>
