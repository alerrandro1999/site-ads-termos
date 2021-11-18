<?php 

require __DIR__.'/vendor/autoload.php';

use App\Session\Login;

Login::requireLogin();

?>

<h1>bem vindo</h1>
<a href="logout.php">Sair</a>
