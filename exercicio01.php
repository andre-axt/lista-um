
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero_par">
            Verfica se é um número par:
        </label>
        <input type="number" id="numero_par" name="numero_par" >
        <button type="submit" name="verificar_par"> Verificar </button>
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST ['verificar_par'])){
                $numero = $_POST['numero_par'];

                $ehpar = true;

                if($numero % 2 != 0){
                    $ehpar = false;
                }

                echo "O número $numero  " . ($ehpar ? 'é par' : 'é primo');
            }
        }

    ?>
</body>
</html>