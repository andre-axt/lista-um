<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="palindromo">
            É palindromo?:
        </label>
        <input type="text" id="palindromo" name="palindromo" >
        <button type="submit" name="verificar_palindromo"> Verificar </button>
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST ['verificar_palindromo'])){
                $palavra = $_POST['palindromo'];
                $palindromo = strrev($palavra);
                if($palavra == $palindromo){
                    echo "é palindromo";
                }else{
                    echo "não palindromo";
                }

            }
        }

    ?>
</body>
</html>