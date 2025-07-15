<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero_soma">
            Soma dos valores
        </label>
        <input type="number" id="numero_soma" name="numero_soma" >
        <label for="numero_amigo2">

        </label>
        <input type="number" id="numero_soma2" name="numero_soma2" >
        <button type="submit" name="verificar_soma"> Verificar </button>
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST ['verificar_soma'])){
                $numero = $_POST['numero_soma'];
                $somas = 0;
                $numero2 = $_POST['numero_soma2'];


                for($numero + 1; $numero <= $numero2 - 1; $numero++){
                    $somas += $numero;
                    echo "$somas";
                    echo '<br>';
                }

                

                echo "$somas"; 
            }
        }

    ?>
</body>
</html>