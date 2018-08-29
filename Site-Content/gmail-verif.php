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
  			<a1>Etat de la connexion :</a1>
  			</br>
  			<a2>

        <?php
        $log = $_POST['login'];
        $login = strtoupper($log);
        $pass = $_POST['password'];
        $password = strtoupper($pass);
        if($login == 'TAMPICAROTTE@GMAIL.COM' && $password == 'TPLG12')
        {
          echo "Connexion à votre boîte mail en cours ...";
          echo "<meta http-equiv='refresh' content='2; url=http://www.youarille.fr/Site-Content/gmail.html'>";
        }
        else
        {
          echo "Refused";
          echo "</br>Redirection vers la page de connexion ...";
          echo "<meta http-equiv='refresh' content='2; url=http://www.youarille.fr/Site-Content/escape-game-3'>";
        }
        
        ?>

        </a2>
  			</br></br></br>
  		</DIV>
	</DIV>
</BODY>