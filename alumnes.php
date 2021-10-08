<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if(isset($_REQUEST["registrar"])){
        $_SESSION["nom"][] = $_REQUEST["nom"];
        $_SESSION["dni"][] = $_REQUEST["dni"];
        $_SESSION["email"][] = $_REQUEST["email"];
        $_SESSION["telefon"][] = $_REQUEST["telefon"];
        $_SESSION["data"][] = $_REQUEST["data"];
        $_SESSION["comarca"][] = $_REQUEST["comarca"];
        $_SESSION["observacions"][] = $_REQUEST["observacions"];
        copy($_FILES['foto']['tmp_name'], $_FILES['foto']['name']);
        copy($_FILES['curriculum']['tmp_name'], $_FILES['curriculum']['name']);
        $_SESSION["foto"][]= $_FILES['foto']['name'];
        $_SESSION["curriculum"][]=$_FILES['curriculum']['name'];
        $cicles=array();
        if(!isset($_SESSION["curs"])){ //comprova si ja existeix la variable session curs
            $_SESSION["curs"]=array(); //la crea si no existeix, la primera vegada
        }        
        if(isset($_REQUEST["CFGS_DAM"])){  // HAS CHEKEJAT DAM?
            $cicles[]=$_REQUEST["CFGS_DAM"];  //AFEGIR AL ARRAY
        }
        if(isset($_REQUEST["CFGS_ARI"])){
            $cicles[]=$_REQUEST["CFGS_ARI"];
        }
        if(isset($_REQUEST["CFGS_MP"])){
            $cicles[]=$_REQUEST["CFGS_MP"];
        }
        if(isset($_REQUEST["CFGS_AUTO"])){
            $cicles[]=$_REQUEST["CFGS_AUTO"];
        }
        array_push($_SESSION["curs"],$cicles);
    
?>
    <table class="table">
        <tr>
            <th>Nom</th>
            <th scope="col">Dni</th>
            <th scope="col">Email</th>
            <th scope="col">Telefon</th>
            <th scope="col">Data</th>
            <th scope="col">Comarca</th>
            <th scope="col">Cicles</th>
            <th scope="col">Observacions</th>
            <th scope="col">Foto</th>
            <th scope="col">Curriculum</th>

        </tr>
        
            <?php
var_dump($_SESSION['curs']);
            
for ($i=0; $i < sizeof($_SESSION['nom']); $i++) { 

echo "<tr>";
echo "<td>" . $_SESSION['nom'][$i] . "</td>";
echo "<td>" . $_SESSION['dni'][$i] . "</td>";
echo "<td>" . $_SESSION['email'][$i] . "</td>";
echo "<td>" . $_SESSION['telefon'][$i]."</td>";
echo "<td>" . $_SESSION['data'][$i]."</td>";
echo "<td>" . $_SESSION['comarca'][$i]."</td>";
echo "<td>";
foreach ($_SESSION['curs'][$i] as $variable) {
    echo $variable . " ";
}
echo "</td>";
echo "<td>". $_SESSION['observacions'][$i] . "</td>";
echo "<td><img src='" . $_SESSION['foto'][$i] . "'  class=\"img-fluid\"></td>";
echo "<td><a href='" . $_SESSION['curriculum'][$i] . "' target=\"_blank\">Curriculum</a></td>";
echo "</tr>";



}
    }
?>
        
    </table>
    <a href="form_alumnes.php" class="btn btn-primary">Tornar al formulari</a>

    

</body>

</html>