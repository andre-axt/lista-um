<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero_soma">
            Sequência de Fibonacci:
        </label>
        <input type="number" id="numero_soma" name="numero_soma" >
        <button type="submit" name="verificar_soma"> Verificar </button>
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST ['verificar_soma'])){
                $numero = $_POST['numero_soma'];
                $array = array();
                $array[0] = 0;
                $array[1] = 1;
                echo "$array[0]";
                echo "<br>";
                echo "$array[1]";
                echo "<br>";

                for($i = 2; $array[$i - 1] <= $numero; $i++){
                    $array[$i] = $array[$i -1] + $array[$i - 2];
                    echo "$array[0]";
                    echo "<br>";
                }

                

            }
        }

    ?>
</body>
</html>