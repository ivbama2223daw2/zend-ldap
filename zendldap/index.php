<html>
	<head>
		<title>
			AUTENTICANT AMB LDAP DE L'USUARI admin
		</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	</head>
	<body>
		<form action="http://zend-ivbama.fjeclot.net/zendldap/auth.php" method="POST">
			Usuari amb permisos d'administració LDAP: <input type="text" name="adm"><br>
			Contrasenya de l'usuari: <input type="password" name="cts"><br>
			<input type="submit" value="Envia" />
			<input type="reset" value="Neteja" />
		</form>
	</body>
</html>