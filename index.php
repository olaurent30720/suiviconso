<?php include ("head.php"); ?>
<body>

  <header>
    <h1 class="animate__animated animate__lightSpeedInLeft">Suivi-Carbu</h1>
  </header>

  <main>
    <h2>Page d'accueil</h2>
    <?php

      if (isset($_COOKIE["plein"])) {
        echo "<table>"
            ."<thead>"
            ."<tr>"
            ."<th>Date</th>"
            ."<th>Prix/L </th>"
            ."<th>Conso</th>"
            ."</tr>"
            ."</thead>"
            ."<tbody>";

        foreach ($_COOKIE["plein"] as $key => $value) {
          list($datePlein, $prixLitre, $moyenneLitresAuCent) = explode("|", $value);

          if ($moyenneLitresAuCent < 6) { 
          echo "<tr>"
          ."<td>$datePlein</td>"
          ."<td>$prixLitre</td>"
          ."<td class='vert'>$moyenneLitresAuCent</td>"
          ."</tr>";
          } else if ($moyenneLitresAuCent > 7){
            echo "<tr>"
            ."<td>$datePlein</td>"
            ."<td>$prixLitre</td>"
            ."<td class='rouge'>$moyenneLitresAuCent</td>"
            ."</tr>";  
          } else {
            echo "<tr>"
          ."<td>$datePlein</td>"
          ."<td>$prixLitre</td>"
          ."<td>$moyenneLitresAuCent</td>"
          ."</tr>";
          }
        }

        echo "</tbody>"
            ."</table>";

      } else {

        echo "<p>Pour ajouter un plein ?<br>Cliquez sur le bouton ci-dessous :</p>";

      }

    ?>

    <div>
      <a class="btn" href="ajout--formulaire.php">AJOUTER</a>
    </div>
  </main>

</body>
</html>