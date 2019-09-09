<?php 
header('Content-Type: text/html; charset=utf-8');
$login = $_POST['nome_cad'];
$senha = md5($_POST['senha_cad']);
$matricula = $_POST['matri_cad'];
$connect = mysqli_connect('localhost','root','','login_php');
$db = mysqli_select_db($connect,'login_php');
$query_select = "SELECT matricula FROM usuarios WHERE matricula = '$matricula'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['matricula'];
 
    if($matricula == "" || $matricula == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo Seu Nome deve ser preenchido');window.location.href='cadastro.html';</script>";
 
        }else{
            if($logarray == $matricula){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
                die();
 
            }else{
                $query = "INSERT INTO usuarios (usuario,matricula,senha) VALUES ('$login','$matricula','$senha')";
                $insert = mysqli_query($connect, $query);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='cadastro.html#paralogin'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
                }
            }
        }
?>  