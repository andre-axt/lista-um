<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero_positivo">
            Verfica se é um número é positivo ou negativo:
        </label>
        <input type="number" id="numero_positivo" name="numero_positivo" >
        <button type="submit" name="verificar_positivo"> Verificar </button>
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST ['vericar_positivo'])){
                $numero = $_POST['numero_positivo'];

                $ehpositivo = true;

                if($numero < 0){
                    $ehpositivo = false;
                }

                echo "O número $numero  " . ($ehpositivo ? 'é positivo' : 'é negativo');
            }
        }

    ?>
</body>
</html>
