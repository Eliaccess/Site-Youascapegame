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
  			<a1>Voyons voir si vous serez discrets ...</a1>
  			</br>
  			<a2>

        <?php
        $co = $_POST['code'];
        $code = strtoupper($co);
        if($code == '1150' OR $code == '2350')
        {
          echo "Yes ! Vous n'êtes pas repérés ...";
          echo "<meta http-equiv='refresh' content='0; url=http://www.youarille.fr/Site-Content/codes.html'>";
        }
        else
        {
          echo "Grrr, ils sont toujours sur leurs gardes à cette heure ...";
          echo "</br>";
          echo "<meta http-equiv='refresh' content='0; url=http://www.youarille.fr/Site-Content/invalide-carte.html'>";
        }
        ?>

        </a2>
  			</br></br></br>
  		</DIV>
	</DIV>
</BODY>