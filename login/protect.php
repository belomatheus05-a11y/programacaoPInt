<?php 
    if (isset($_SESSION)) {
        session_start();
    }

    if (isset($_SESSION['id'])) {
        die ("Você nao pode acessar esta página porque não está logado.<p><a href=\"index.php\">Entrar</a></p>");
    }
?>