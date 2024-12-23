<?php
include("app/config.php");

// Verifica se houve POST e se o usuario ou a password vazio(s)
if(!$_POST){
	header("Location: ".URL."/login.php");
	exit;
}else{
        
	if(empty($_POST['username']) || empty($_POST['password'])):
        header("Location: ".URL."/login.php");
	    exit;
    endif;

	$username   = preg_replace("@(--|\#|\*|;|=)@s", "", $_POST['username']);
	$password   = preg_replace("@(--|\#|\*|;|=)@s", "", $_POST['password']);

	$username = mysqli_real_escape_string($conexao, $username);
	$password = mysqli_real_escape_string($conexao, $password);
	$password = hash('sha512', AUTH_SALT.$password);

	// Validacao do usuario/password digitados
    $sql = "
        SELECT * 
        FROM USUARIO usu
        WHERE 
        usu.EMAIL_USUARIO = '$username'
        AND usu.SENHA_USUARIO = '$password';
    "; //echo $sql."<br>";
	$query = mysqli_query($conexao, $sql);
	$row = mysqli_num_rows($query);

	if($row):
        if ($row != 1):
            // Mensagem de erro quando os dados sao invalidos e/ou o usuario nao foi encontrado
            header("Location: ".URL."/login.php"."/?msg=".base64_encode("E-mail ou Senha inválidos")."");
            exit;
        else:
            // Salva os dados encontados na variavel $resultado
            $resultado = mysqli_fetch_assoc($query);

            if(@$_POST['remember']==1):
                session_cache_expire(480);
            endif;

            // Se a sessao nao existir, inicia uma
            if (!isset($_SESSION)) session_start();

            // Salva os dados encontrados na sessao
            $_SESSION['usuario_id'] = $resultado['ID_USUARIO'];
            $_SESSION['usuario_nome'] = $resultado['NOM_USUARIO'];
            $_SESSION['usuario_email'] = $resultado['EMAIL_USUARIO'];

            // Redireciona o visitante
            header("Location: ".URLSITE."/form_produto.php");
            exit;
        endif;
	else:
		header("Location: ".URL."/login.php?msg=".base64_encode("E-mail ou Senha inválidos")."");
	endif;
	//row
}
