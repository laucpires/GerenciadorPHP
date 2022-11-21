<?php
/* $_SESSION - VARIÁVEL SUPERGLOBAL (DISPONÍVEL EM TODOS OS ESCOPOS) DE SESSÃO

session_cache_expire(30) // TEMPO DE VIDA DA SESSÃO - NÃO OBRIGATÓRIO, A MESMA POSSUI 180 MINUTOS PADRÕES ANTES DE SE APAGAR SOZINHA

session_start(); // INICIA A SESSÃO

$_SESSION['usuario'] = 'nome do usuario'; // PASSANDO O VALOR DIRETAMENTE PARA A SESSÃO
echo $_SESSION['usuario'];

$usuario = 'nome de usuário';
$_SESSION['usuario'] = $usuario // PEGANDO O VALOR DE UMA VARIÁVEL EXISTENTE QUE POSSUI O VALOR QUE SERÁ PRECISO

unset($_SESSION['usuario']); // DESTRÓI A VARIÁVEL DE SESSÃO

session_destroy(); // DESTRÓI TODAS AS VARIÁVEIS DE SESSÃO

if(isset($_SESSION['usuario'])) {
    echo "Usuário existe";
} else {
    echo "Usuário não existe";
} // VERIFICA SE A SESSÃO EXISTE */
?>