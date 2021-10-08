<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 60px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Style the top navigation bar */
.navbar {
  display: flex;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  color: white;
  padding: 14px 20px;
  text-decoration: none;
  text-align: center;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row, .navbar {   
    flex-direction: column;
  }
}
</style>
</head>
<body>

<!-- Header -->
<div class="header">
  <h1>Vols</h1>
  <p>Benvigut a la pàgina de vols</p>
</div>

<!-- Navigation Bar -->
<div class="navbar">
    <?php
    session_start();
    if($_SESSION["usuari"]=="admin"){
  echo "<a href=\"#\">Afegir vols</a>";
  echo "<a href=\"#\">Mostrar vols</a>";
  echo "<a href=\"#\">Eliminar vols</a>";
  echo "<a href=\"login.php\" style=\"align-self: flex-end\">Sortir</a>";
    }
    else{
      echo "<a href=\"#\">Mostrar vols</a>";
      echo "<a href=\"login.php\" style=\"align-self: flex-end\">Sortir</a>";
    }
  ?>
</div>

<!-- The flexible grid (content) -->

<?php
if($_SESSION["usuari"]=="admin"){
  echo "<div class=\"row container mt-5 mb-5\">";
  include "views/afegir.php";
  echo "</div>";
  echo "<div class=\"row container mt-5 mb-5\">";
  include "views/mostrar.php";
  echo "</div>";
  echo "<div class=\"row container mt-5 mb-5\">";
  include "views/eliminar.php";
  echo "</div>";

}
  ?>


<!-- Footer -->
<div class="footer container mt-5 mb-5">
  <h2>Footer</h2>
</div>

</body>
</html>


