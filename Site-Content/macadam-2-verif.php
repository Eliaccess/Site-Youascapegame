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
        $hash = $_POST['hashtag'];
        $hashtag = strtoupper($hash);
        if($hashtag == 'THEYOUAARECOMING')
        {
          echo "Ils s'enfuient ces lavettes lol";
          echo "<meta http-equiv='refresh' content='0; url=http://www.youarille.fr/Site-Content/fin.html'>";
        }
        else
        {
          echo "Ils n'ont pas eu peur ...";
          echo "</br>";
          echo "<meta http-equiv='refresh' content='0; url=http://www.youarille.fr/Site-Content/invalide-macadam-3.html'>";
        }
        ?>

        </a2>
  			</br></br></br>
  		</DIV>
	</DIV>
</BODY>