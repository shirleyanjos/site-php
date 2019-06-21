<?php 
    $entrar = $_POST['entrar'];
    $login = $_POST['nome_cad'];
    $senha = md5($_POST['senha_cad']);
    $connect = mysqli_connect('localhost','root','', 'login_php');
    $db = mysqli_select_db($connect, 'login_php');
        if (isset($entrar)) {
                     
            $verifica = mysqli_query($connect, "SELECT * FROM usuarios WHERE usuario = '$login' AND senha = '$senha'") or die("erro ao selecionar");
                if (mysqli_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='cadastro.html';</script>";
                    die();
                }else{
                    setcookie("usuario",$login);
                    header("Location:agendamento_teste.html");
    

                }
        }
?>