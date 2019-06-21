<?php 
    $nome = $_POST['Nome_p'];
    $CPF = $_POST['CPF_p'];
    $Email = $_POST['email_p'];
    $Telefone = $_POST['telefone_p'];
    $Atendimento = $_POST['atendimento_p'];
    $Profissional = $_POST['profissional'];
    $connect = mysqli_connect('localhost','root','', 'agendamento_php');
    if ($connect){
            $sql = "INSERT INTO agendamento(Nome, CPF, Email, Telefone, Atendimento, Profissional) VALUES ('$nome','$CPF','$Email','$Telefone','$Atendimento','$Profissional')";    
            $salva = mysqli_query($connect, $sql);
            if ($salva) {
                echo "ok";


            }else{
                echo mysql_erro($connect);
            }
            
                // if (!$salva){
                //     echo"<script language='javascript' type='text/javascript'>alert('Erro');</script>";
                //     die();
                // }else{
                //     setcookie("Nome",$nome);

    header("Location:listagem.php");
                // }
     } else{
        echo "erro";
     }  
?>