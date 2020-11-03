<?php
$servername =  "localhost";
$username = "root";
$password = "";
$database ="fseletro";
// Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificando a conexão
if (!$conn) {
    die("A conexão ao Banco de Dados falhou: " . mysqli_connect_error());
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
    <!-- categoria -->
    <header>
        <h2>Produtos</h2>
    </header>

    <hr>
    <main class="produtosMain">

        <section class="categoria">
            <h3>
                Categorias
            </h3>
            <ol>
                <li onclick="exibirTodos()">Todos(12)</li>
                <li onclick="exibirCategoria('geladeira')">
                    Geladeiras (3)
                </li>

                <li onclick="exibirCategoria('fogao')">
                    Fogões (2)
                </li>

                <li onclick="exibirCategoria('microondas')">
                    Microondas (3)
                </li>

                <li onclick="exibirCategoria('lavadora')">
                    Lavadora de roupas (2)
                </li>

                <li onclick="exibirCategoria('lavalouca')">
                    lava louças (2)
                </li>
            </ol>

        </section>
        <main class="produtos">

        <?php 
                    $sql = "select * from fseletro.produtos";
                    $result = $conn->query($sql);
                
                    if ($result->num_rows > 0) {
                        while($rows = $result->fetch_assoc()){
                ?>

            <div class="boxProduto" id="<?php echo $rows["categoria"];?>">
                <img onclick="destaque(this)" height="120px"
                    src="<?php echo $rows["imagem"];?>" alt="">
                <br>
                <p class="descricao"><?php echo $rows["descricao"];?></p>
                <hr>
                <p class="precoAntigo"> <?php echo $rows["preco"];?></p>
                <p class="precoAtual"><?php echo $rows["precofinal"];?></p>
            </div>

            <?php  
                        }
                    }else {
                        echo "Nenhum produto cadastrado!";
                    }
                ?>


        </main>
    </main>
    <?php
    include('rodape.html');
    ?>
    <script src="./js/script.js"></script>
</body>

</html>