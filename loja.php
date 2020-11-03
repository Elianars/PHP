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
    <header>
        <h2>Lojas</h2>
    </header>
    <hr>
    <section class="lojas">

        <div class="local">
            <h3>
                Rio de janeiro
            </h3>
            <p>
                Avenida Presidente vargas, 5000
            </p>
            <p>
                10 &ordm; andar
            </p>
            <p>
                Centro
            </p>
            <p>
                (21) 3333-3333
            </p>

        </div>

        <div class="local">
            <h3>
                São Paulo
            </h3>
            <p>
                Avenida Paulista,985
            </p>
            <p>
                3 &ordm; andar
            </p>
            <p>
                Jardins
            </p>
            <p>
                (11) 4444-4444
            </p>

        </div>

        <div class="local">
            <h3>
                Santa Catarina
            </h3>
            <p>
                Rua Major &Aacute;Vila, 370
            </p>
            <p>
                Vila Mariana
            </p>
            <p>
                (47) 5555-5555
            </p>
        </div>

    </section>
    <br> <br> <br> <br> <br>
    <br> <br> <br> <br> <br>
    <?php
    include('rodape.html');
    ?>
    
    <script src="./js/script.js"></script>
</body>

</html>