// <?php
// require 'vendor/autoload.php';
// use Laminas\Ldap\Ldap;
// $domini = 'dc=fjeclot,dc=net';
// $opcions = [
//     'host' => 'zend-ivbama.fjeclot.net',
//     'username' => "cn=admin,$domini",
//     'password' => '1234',
//     'bindRequiresDn' => true,
//     'accountDomainName' => 'fjeclot.net',
//     'baseDn' => 'dc=fjeclot,dc=net',
// ];
// $ldap = new Ldap($opcions);
// $ldap->bind();
// $usuari=$ldap->getEntry('uid=sysdev,ou=desenvolupadors,dc=fjeclot,dc=net');
// echo "<b><u>".$usuari["dn"]."</b></u><br>";
// foreach ($usuari as $atribut => $dada) {
//     if ($atribut != "dn") echo $atribut.": ".$dada[0].'<br>';
// }
// ?>

// <?php
require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;
ini_set('display_errors',0);
if ($_GET['usr'] && $_GET['ou']){
    $domini = 'dc=fjeclot,dc=net';
    $opcions = [
        'host' => 'zend-ivbama.fjeclot.net',
        'username' => "cn=admin,$domini",
        'password' => '1234',
        'bindRequiresDn' => true,
        'accountDomainName' => 'fjeclot.net',
        'baseDn' => 'dc=fjeclot,dc=net',
    ];
    $ldap = new Ldap($opcions);
    $ldap->bind();
    $entrada='uid='.$_GET['usr'].',ou='.$_GET['ou'].',dc=fjeclot,dc=net';
    $usuari=$ldap->getEntry($entrada);
    echo "<b><u>".$usuari["dn"]."</b></u><br>";
    foreach ($usuari as $atribut => $dada) {
        if ($atribut != "dn") echo $atribut.": ".$dada[0].'<br>';
    }
}
?>
<html>
	<head>
		<title>
			MOSTRANT DADES D'USUARIS DE LA BASE DE DADES LDAP
		</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	</head>
	<body>
		<h2>Formulari de selecció d'usuari</h2>
		<form action="show.php" method="GET">
			Unitat organitzativa: <input type="text" name="ou"><br>
			Usuari: <input type="text" name="usr"><br>
			<input type="submit"/>
			<input type="reset"/>
		</form>
		<a href="ini.php">Tornar al menú </a>
	</body>
</html>