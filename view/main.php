<?php
  include'../Util.php';
  util::verificar();

?>
<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
		<h3>Sistema Academico</h3>
		<?php
				echo "Seja bem vindo usuário: " .$_SESSION['login']. "<a href= 'login.php'><br>Sair</a>";
		?>
  </body>
</html>