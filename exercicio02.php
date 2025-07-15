<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero_tabuada">
            Tabuada:
        </label>
        <input type="number" id="numero_tabuada" name="numero_tabuada" >
        <button type="submit" name="verificar_tabuada"> Verificar </button>
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST ['verificar_tabuada'])){
                $numero = $_POST['numero_tabuada'];
                $resultado;

                for($i = 1; $i <= 10; $i++){
                    $resultado = $numero * $i;
                    echo "Tabuada: $resultado";
                    echo '<br>';
                }
            }
        }

    ?>
</body>
</html>