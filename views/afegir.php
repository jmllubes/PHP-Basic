<h2 class="text-center pt-5 pb-3">Afegir Vols</h2>
<form class="container mt-5 mb-5" action="views/afegir.php" method="post" enctype="multipart/form-data">
    <label for="">Codi</label>
    <input class="form-control"  type="number" name="codi" id="" ><br>
    <label for="">Origen</label>
    <input class="form-control"  type="text" name="origen" id="" ><br>
    <label for="">Destí</label>
    <input class="form-control"  type="text" name="desti" id="" ><br>
    <label for="">Preu</label>
    <input class="form-control"  type="number" name="preu" id="" ><br>
    <Label>Foto destí</Label>
    <input class="form-control"  type="file" name="foto" id="" ><br>
    <input class="btn btn-primary"  type="submit" name="registrar" value="Registrar">

<!-- sdasdasdasda -->
</form>
<?php
@session_start();
if(isset($_REQUEST["registrar"])){
    $_SESSION["codi"][]=$_REQUEST["codi"];
    $_SESSION["origen"][]=$_REQUEST["origen"];
    $_SESSION["desti"][]=$_REQUEST["desti"];
    $_SESSION["preu"][]=$_REQUEST["preu"];
    copy($_FILES['foto']['tmp_name'], "../img/" . $_FILES['foto']['name']);
    $_SESSION["foto"][]= "../img/" . $_FILES['foto']['name'];
    header("Location:../vols.php");
}
?>