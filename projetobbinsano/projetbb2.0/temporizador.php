<?php
session_start();

// Verifica se o usuário está logado
function isUserLoggedIn() {
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}

// Define o tempo limite em segundos (5 minutos neste exemplo)
$timeout = 5;

// Verifica se o usuário está logado e se o temporizador já expirou
if (isUserLoggedIn() && isset($_SESSION['last_activity']) && time() - $_SESSION['last_activity'] > $timeout) {
    // Limpa a sessão e desloga o usuário
    session_unset();
    session_destroy();
    header("Location: login.php"); // Redireciona para a página de login
    exit();
}

// Atualiza o tempo da última atividade
$_SESSION['last_activity'] = time();
?>
