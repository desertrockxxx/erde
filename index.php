<?php require_once("header.php")?>
  
<div class="container">
  <div class="row">
    <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
      <h3>Möchten Sie Dimension oder Menge eingeben?</h3>
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-offset-4 col-sm-2">
      <div>
        <form action="menge.php" method="GET">
          <button type="submit" class="btn btn-info" name="auswahl_menge">Menge</button>
        </form>
      </div>
    </div>
    <div class="col-sm-2">
      <div>
        <form action="dimension.php" method="GET">
          <button type="submit" class="btn btn-info" name="auswahl_dimension">Dimension</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
// Auswahl Variablen
$auswahl_dimension = $_GET['auswahl_dimension'];
$auswahl_menge = $_GET['auswahl_menge'];


if(isset($auswahl_dimension)){
    require_once("dimension.php");
}
if(isset($auswahl_menge)){
    require_once("menge.php");
}
?>

<?php require_once("footer.php")?>


