<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero_fatorial">
            Fatorial:
        </label>
        <input type="number" id="numero_fatorial" name="numero_fatorial" >
        <button type="submit" name="verificar_fatorial"> Verificar </button>
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST ['verificar_fatorial'])){
                $numero = $_POST['numero_fatorial'];
                $resultado = 0;

                if($numero < 0){
                    $numero = $numero * (-1);
                }

                for($i = $numero - 1; $i == 0; $i--){
                    $numero = $numero * $i;
                    echo "fatorial: $numero";
                }

                echo "fatorial: $numero"; 
            }
        }

    ?>
</body>
</html>