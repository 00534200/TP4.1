<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8" />
       <title>Titre</title>
    </head>

 <body>
    <div>
			
      <h2>
        ajouter un artiste
      </h2>
			
      <p>
        
      </p>
			
			<form action="exo1.php" method="get">
				
			<p>
        <label>Nom</label> : <input type="text" name="nom" /> </p>
      <p>
        </p> <label>Prenom</label> : <input type="text" name="prenom" /></p>
      <p>
        <label>Annee de naissance</label> : <input type="int" name="annee" /></p>

			<input type="submit" value="inserer" />
				 </select>    
   
 </form>
			
      </div>

  <aside>
  
    <h2>
      Listes des Artistes
    </h2>
    
    <p>
      ----------------------------------------
    </p>

     <table border=1>
          	<thead>
             <tr>
              <th>artiste</th>
              <th>annee de naissance</th>
             </tr>
            <thead>
							
							
							
							
    <?php
							

			   $link=mysqli_connect("dwarves.iut-fbleau.fr","carlu","ludo1811","carlu"); 
							
							$insert = "INSERT INTO Artiste(nom,prenom,anneeNaiss) VALUES (".$nom.",".$prenom.",".$annee.")";
							echo $insert."<br>";
							
							$query = "SELECT nom , prenom , anneeNaiss From Artiste";
							
         $result = mysqli_query($link,$query);
           if ($result){
             while($artiste=mysqli_fetch_assoc($result)){
              echo "<tr>";
              echo "<td>".$artiste['nom']."</td>";
              echo"<td>".$artiste['anneeNaiss']."</td>";
              echo "</tr>";
			       } 
           }   
           else
            die("<p>Erreur dans l'éxécution de la requête.</p>");
         mysqli_close($link);
        ?>
										
			   </table>				
					 </aside>		
						  </body>	
		
							
</html>