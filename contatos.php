<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletro";

    // Criando a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificando a conexão
    if (!$conn) {
        die("A conexão ao Banco de Dados falhou: " . mysqli_connect_error());
    }

    if(isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

    
$sql = "insert into fseletro.comentarios (nome, msg) values ('$nome', '$msg')";
        $result = $conn->query($sql);
    }
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>full stack eletro </title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>
    <!-- Inicio Menu -->

    <?php
    include('menu.html');
    ?>

    <!-- Fim do menu -->
    <h2>Contatos</h2>
    <hr>

    <section class="contato">

        <div>

            <p><img src="img/img/email.png" width="40">Contato@fullstackeletro.com</p>
        </div>

        <div>

            <p><img src="img/img/whatsapp.png" width="40">(11) 99999-9999,</p>
        </div>



    </section>

    <form method="post">
        <label>Nome: </label><br>
        <input type="text" name="nome" style="width:400px;">
        <br><br>
        <label>Mensagem:</label><br>
        <textarea style="width:400px" name="msg"></textarea>

        <input type="submit" name="submit" value="Enviar">
    </form>
    <?php 
                $sql = "select * from fseletro.comentarios";
                $result = $conn->query($sql);
            
                if ($result->num_rows > 0) {
                    while($rows = $result->fetch_assoc()){
            ?>

            <div class="msgm">
                <p>Data: <?php echo $rows["data"]; ?></p>  
                <p>Nome: <?php echo $rows["nome"]; ?></p>   
                <p>Mensagem: <?php echo $rows["msg"]; ?></p>    
                <hr>

                <?php  
                    }
                }else {
                    echo "Nenhum comentário ainda!";
                }
            ?>
            
    <br> <br> <br> <br> <br>
    <br> <br> <br> <br> <br>

    <footer id="rodape">

        <p id="Formas_pagamentos"><b> Formas de pagamentos</p></b>
        <img width="300" src="./img/img/pagamentos-bandeiras-01.png" alt="Formas de pagamentos">
        <p> &copy; Recode Pro</p>
    </footer>
    <script src="./js/script.js"></script>

</body>

</html>