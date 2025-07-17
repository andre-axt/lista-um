<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="imc">
            Calcular IMC:
        </label>
        <input type="number" id="imc" name="imc" >
        <input type="double" id="imc2" name="imc2" >
        <button type="submit" name="verificar_imc"> Verificar </button>
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST ['verificar_imc'])){
                $peso = $_POST['imc'];
                $altura = $_POST['imc2'];
                $valor = $peso / ($altura * $altura) ;

                if($valor < 18.5){
                    echo "Abaixo do peso";
                }
                if($valor > 18.5 && $valor < 24.9){
                    echo "Peso normal";
                }
                if($valor > 25 && $valor < 29.9){
                    echo "Sobrepeso";
                }
                if($valor > 30){
                    echo "Obeso";
                }
 
            }
        }

    ?>
</body>
</html>