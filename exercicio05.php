<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero_amigo">
            Verificar se dois números são amigos:
        </label>
        <input type="number" id="numero_amigo" name="numero_amigo" >
        <label for="numero_amigo2">

        </label>
        <input type="number" id="numero_amigo2" name="numero_amigo2" >
        <button type="submit" name="verificar_amigo"> Verificar </button>
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST ['verificar_amigo'])){
                $numero = $_POST['numero_amigo'];
                $divisores = 0;
                $numero2 = $_POST['numero_amigo2'];
                $ehamigo = true;



                for($i = 1; $i <= $numero - 1; $i++){
                    if($numero % $i == 0){
                        $divisores += $i;
                    }
                }
                if($divisores != $numero2){
                    $ehamigo = false;
                }

                echo "Os números " . ($ehamigo ? 'são amigos' : 'não são amigos'); 
            }
        }

    ?>
</body>
</html>