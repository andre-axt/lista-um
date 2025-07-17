<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero_temperatura">
            Converter temperatura:
        </label>
        <input type="number" id="numero_temperatura" name="numero_temperatura" >
        <button type="submit" name="verificar_temperatura"> Verificar </button>
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST ['verificar_temperatura'])){
                $numero = $_POST['numero_temperatura'];
                $converter = ($numero * 9/5) + 32;
                echo "$converter";
            }
        }

    ?>
</body>
</html>