<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="ano">
            Ano é bissexto:
        </label>
        <input type="number" id="ano" name="ano" >
        <button type="submit" name="verificar_ano"> Verificar </button>
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST ['verificar_ano'])){
                $numero = $_POST['ano'];
                $ehbissexto = false;

                if($numero % 4 == 0 && $numero % 100 != 0){
                    $ehbissexto = true;
                }
                if($numero % 100 == 0 && $numero % 400 == 0){
                    $ehbissexto = true;
                }

                echo $ehbissexto ? "é bissexto" : "não é bissexto";
 
            }
        }

    ?>
</body>
</html>