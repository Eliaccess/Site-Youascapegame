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
  			<a1>Bienvenue</a1>
  			</br>
  			<a2>

        <?php
        $log = $_POST['login'];
        $login = strtoupper($log);
        if($login == 'TAMPICAROTTE@GMAIL.COM' && $password == '')
        {
          echo "Tampi Carotte du 60";
        }
        else
        {
          echo "Inconnu au bataillon";
        }
        ?>

        </a2>
  			</br></br></br>
  		</DIV>
  		<DIV ID='LOGIN'>
  			<FORM METHOD="POST" ACTION="gmail-verif.php">
          <input type="hidden" name="login" value=
          <?php
          echo "$login";
          ?>
          >
  				<input type="password" name="password" size="48" placeholder="Saisissez votre mot de passe">
  				<DIV ID='BOTTOM'></br></br></br></br>
  					<table>
  						<tr><td><a href="error.html">Mot de passe oublié ?</a></td><td><input type="submit" class="button" name="Suivant"></td></tr>
  					</table>
  				</DIV>
			</FORM>
  		</DIV>
	</DIV>
</BODY>