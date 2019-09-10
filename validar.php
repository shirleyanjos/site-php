<?php 
    $entrar = $_POST['entrar'];
    $matricula = $_POST['matri_cad'];
    $senha = md5($_POST['senha_cad']);
    $connect = mysqli_connect('localhost','root','', 'login_php');
    
    
    $db = mysqli_select_db($connect, 'login_php');
        if (isset($entrar)) {
                     
            $verifica = mysqli_query($connect, "SELECT * FROM usuarios WHERE matricula = '$matricula' AND senha = '$senha'") or die("erro ao selecionar");
                if (mysqli_num_rows($verifica)<=0){
                echo"<script language='javascript' type='text/javascript'>alert('Matricula e/ou senha incorretos');window.location.href='cadastro.html';</script>";
                    die();
                }else{
                    setcookie("matricula",$matricula);
                    header("Location:usuario.html");
    

                }
        }
?>

<p> Seja bem vindo(a)<strong> <?php echo $_SESSION['$login']; ?></strong>strong></p>