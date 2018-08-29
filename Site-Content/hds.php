<!-- Regarder le code source c'est tricher :D -->
<!DOCTYPE html>
<HEADER>
	<LINK rel="stylesheet" type="text/css" href="style3.css">
	<HTML lang="fr">
	<META charset="utf-8"/>
</HEADER>

<HEAD>

</HEAD>
<BODY>
	<DIV ID='PRESENTATION' class="container">
  		<DIV ID='LOGO'>
  			<img src="logo-google.png" alt="Google" class="image" style="width:30%">
  			</br>
  			<a1>Requête vers Maps et le YouaTool ...</a1>
  			</br>
  			<a2>

        <?php
        $adr = $_POST['adresse'];
        $adresse = strtoupper($adr);
        if($adresse == '66 AVENUE DE LANDSHUTT' OR $adresse == '66AVENUEDELANDSHUTT' OR $adresse == '66AVENUEDELANDSHUT' OR $adresse == '66 AVENUE DE LANDSHUT')
        {
          echo "Adresse trouvée : Halle des Sports</br>Déplacement vers le lieu en cours ...";
          echo "<meta http-equiv='refresh' content='2; url=http://www.youarille.fr/Site-Content/video-surveillance.html'>";
        }
        else
        {
          echo "Incorrecte";
          echo "</br>Redirection vers Gmail ...";
          echo "<meta http-equiv='refresh' content='2; url=http://www.youarille.fr/Site-Content/gmail.html'>";
        }
        ?>

        </a2>
  			</br></br></br>
  		</DIV>
	</DIV>
</BODY>