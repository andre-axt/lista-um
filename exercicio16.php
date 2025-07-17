<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="imc">
            Pode votar:
        </label>
        <input type="text" id="nome" name="nome" >
        <input type="number" id="idade" name="idade" >
        <button type="submit" name="verificar_voto"> Verificar </button>
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST ['verificar_voto'])){
                $nome = $_POST['nome'];
                $idade = $_POST['idade'];
                
                if($idade > 18 || $idade == 18){
                    echo "$nome pode votar";
                }
                if($idade < 18){
                    echo "$nome não pode votar";
                }
 
            }
        }

    ?>
</body>
</html>