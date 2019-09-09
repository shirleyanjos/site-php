 <table border="1px" width="80%">
     <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Atendimento</th>

    </tr>
 
 <?php  
 $connect = mysqli_connect('localhost','root','', 'agendamento_php');
    if ($connect){
            $sql = "SELECT * FROM  agendamento";
            $salva = mysqli_query($connect, $sql);
            if ($salva) {
                while($atendimento = mysqli_fetch_array($salva)){
                   $nome = $atendimento['Nome'];
                   $cpf = $atendimento['CPF'];
                   $email = $atendimento['Email'];
                   $telefone = $atendimento['Telefone'];
                   $atendimento = $atendimento['Atendimento'];
       


                   ?>
                   <tr>
                    <td><?php echo $nome ?></td>
                    <td><?php echo $cpf ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $telefone ?></td>
                    <td><?php echo $atendimento ?></td>


                   </tr>
            <?php }
            
            }else{
                echo mysql_erro($connect);
            }
            
                // if (!$salva){
                //     echo"<script language='javascript' type='text/javascript'>alert('Erro');</script>";
                //     die();
                // }else{
                //     setcookie("Nome",$nome);
                //     header("Location:agendamento_teste.html");

                // }
     } else{
        echo "erro";
     }  
?>