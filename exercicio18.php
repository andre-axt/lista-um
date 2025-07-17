<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numeros">
            Números:
        </label>
        <input type="number" id="numero1" name="numero1" >
        <input type="number" id="numero2" name="numero2" >
        <input type="number" id="numero3" name="numero3" >
        <button type="submit" name="verificar_numero"> Verificar </button>
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST ['verificar_numero'])){
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                $numero3 = $_POST['numero3'];

                if($numero1 > $numero2 && $numero1 > $numero3){
                    echo "$numero1";
                }
                if($numero2 > $numero1 && $numero2 > $numero3){
                    echo "$numero2";
                }
                if($numero3 > $numero1 && $numero3 > $numero2){
                    echo "$numero3";
                }
            }
        }

    ?>
</body>
</html>