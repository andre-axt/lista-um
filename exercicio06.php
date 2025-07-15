<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero_divisores">
            Mostrar divisores de um número:
        </label>
        <input type="number" id="numero_divisores" name="numero_divisores" >
        <button type="submit" name="verificar_divisores"> Verificar </button>
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST ['verificar_divisores'])){
                $numero = $_POST['numero_divisores'];
                $divisores = 0;

                for($i = 1; $i <= $numero; $i++){
                    if($numero % $i == 0){
                        echo "$i";
                        echo '<br>';
                    }
                }

            }
        }

    ?>
</body>
</html>