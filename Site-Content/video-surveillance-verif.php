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
  			<a1>Test de la combinaison ...</a1>
  			</br>
  			<a2>

        <?php
        $co = $_POST['code'];
        $code = strtoupper($co);
        if($code == '1996')
        {
          echo "Code trouvé, la fille peut s'échapper !";
          echo "<meta http-equiv='refresh' content='0; url=http://www.youarille.fr/Site-Content/fuite.html'>";
        }
        else
        {
          echo "Mince, le code n'est pas bon ...";
          echo "</br>";
          echo "<meta http-equiv='refresh' content='0; url=http://www.youarille.fr/Site-Content/invalide-video-surveillance.html'>";
        }
        ?>

        </a2>
  			</br></br></br>
  		</DIV>
	</DIV>
</BODY>