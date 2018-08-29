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
        $gare = $_POST['gare'];
        $amphi = $_POST['amphi'];
        $clos = $_POST['clos'];
        $tigre = $_POST['tigre'];
        if($gare == '1' AND $tigre == '5' AND $amphi == '7' AND $clos == '8')
        {
          echo "Le Macadam ouvre ses portes !!!";
          echo "<meta http-equiv='refresh' content='0; url=http://www.youarille.fr/Site-Content/macadam-2.html'>";
        }
        else
        {
          echo "Aie, les portes restent closes ...";
          echo "</br>";
          echo "<meta http-equiv='refresh' content='0; url=http://www.youarille.fr/Site-Content/invalide-macadam.html'>";
        }
        ?>

        </a2>
  			</br></br></br>
  		</DIV>
	</DIV>
</BODY>