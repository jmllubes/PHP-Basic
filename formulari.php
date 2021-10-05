<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="formulari.php" method="post">
<Label>Entra un numero</Label><br>
<input type="text" name="numero1" id="numero1" required placeholder="Escriu un nombre"><br>
<Label>Entra un segon numero</Label><br>
<input type="text" name="numero2" id="numero2" required placeholder="Escriu un nombre"><br>
sumar<input type="radio" name="operacio" required value="sumar" id="">
restar<input type="radio" name="operacio" required value="restar" id="">
multiplicar<input type="radio" name="operacio" required value="multiplicar" id="">
dividir<input type="radio" name="operacio" required value="dividir" id=""><br>
<input type="submit" name="calcula" value="Calcula">
</form>

<?php
if(isset($_REQUEST["calcula"])){ //al clicar el boto calcula
    echo "entra";
    $numero1=$_REQUEST["numero1"];
    $numero2 = $_REQUEST["numero2"];
    $operacio = $_REQUEST["operacio"];
    echo $numero1;
    if($operacio == "sumar"){
        $total=$numero1+$numero2;
        echo "La suma de $numero1 i $numero2 es = ". $total;
    }
    else if($operacio == "restar"){
        echo "La resta de " .$numero1. " i " .$numero2. " es = ". $numero1-$numero2;
    }
    else if($operacio == "multiplicar"){
        echo "La multiplicació de " .$numero1. " i " .$numero2. " es = ". $numero1*$numero2;
    }
    else{
        if($numero2 == 0){
            echo "error no es pot dividir per 0";
        }
        else{
            echo "La divisió de " .$numero1. " i " .$numero2. " es = ". $numero1/$numero2;

        }
    }
}

?>

</body>
</html>