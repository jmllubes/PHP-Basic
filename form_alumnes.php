<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="">
    <h2 class="text-center pt-5 pb-3">Inscripció dades alumnes</h2>
    <form class="container mt-5 mb-5" action="alumnes.php" method="post" enctype="multipart/form-data">
    <label for="">Nom complet</label>
    <input class="form-control"  type="text" name="nom" id="" required><br>
    <label for="">DNI</label>
    <input class="form-control"  type="text" name="dni" id="" required><br>
    <label for="">Telefon</label>
    <input class="form-control"  type="tel" name="telefon" id="" required><br>
    <label for="">Email</label>
    <input class="form-control"  type="email" name="email" id="" required><br>
    <label for="">Data de naixement</label>
    <input class="form-control"  type="date" name="data" id="" required><br>
    <label for="">Comarca</label>
    <select class="form-select" name="comarca" id="" required>
    <option value="Segrià">Segrià</option>
    <option value="Plà d'Urgell">Plà d'Urgell</option>
    <option value="Urgell">Urgell</option>
    <option value="Segarra">Segarra</option>
    </select>
    <h3 class="py-5 px-5">Cicles formatius</h3>
    <div class="px-5">
    <div class="form-check form-switch form-check-inline">CFGS DAM<input class="form-check-input"  type="checkbox"   value="CFGS DAM" name="CFGS_DAM" id=""></div>
    <div class="form-check form-switch form-check-inline">CFGS ARI<input class="form-check-input"  type="checkbox"   value="CFGS ARI" name="CFGS_ARI" id=""></div>
    <div class="form-check form-switch form-check-inline">CFGS AUTO<input class="form-check-input"  type="checkbox"  value="CFGS AUTO" name="CFGS_AUTO" id=""></div>
    <div class="form-check form-switch form-check-inline">CFGS MP<input class="form-check-input"  type="checkbox"    value="CFGS MP"  name="CFGS_MP" id=""></div>
    </div>
    <div class="py-3">
    <label for="">Observacions</label><br><br>
    <textarea name="observacions" id="" cols="30" rows="10"></textarea><br><br>
   </div>
     <Label>Foto carnet</Label>
    <input class="form-control"  type="file" name="foto" id="" ><br><br>
    <Label>Curriculum</Label>
    <input class="form-control"  type="file" name="curriculum" id="" ><br><br>
    <input class="btn btn-primary"  type="submit" name="registrar" value="Registrar">
    </form>
</body>
</html>