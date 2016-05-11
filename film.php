/*
  a/clarté -->4
  b/fonctionnement -->4
  c/ --> 0,5
*/



<!DOCTYPE html>
<html>

<head>
  <meta charset="latin1">
  <meta name="viewport" content="width=device-width">
  <title>Films</title>
</head>

<body>
  <table>
    <thead>
      <tr>
        <th>Titre</th>
        <th>Annee</th>
        <th>Genre</th>
        <th>Real</th>
      </tr>
    </thead>
    <?php
      $link = mysqli_connect("sql7.freemysqlhosting.net","sql7119022","3FMy1XLWrE","sql7119022"); 
      if(!$link){
        die("<p>Connexion au serveur impossible</p>");
      }
      $res = mysqli_query($link,"select f.titre,f.annee,f.genre,a.nom from Film f, Artiste a where f.idMes = a.idArtiste");
      if(!$res){
        die("<p>Resultat non-disponible</p>");
      }
      else{
        foreach($res as $value){
          echo "<tr>";
          echo "<td>".$value['titre']."</td>";
          echo "<td>".$value['annee']."</td>";
          echo "<td>".$value['genre']."</td>";
          echo "<td>".$value['nom']."</td>";
          echo "</tr>";
        }
       }
    mysqli_close($link);
    ?>
  </table>
</body>

</html>