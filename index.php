<?php require_once("header.php")?>
  
<div class="container">
  <div class="row">
    <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
      <h3>Möchten Sie Dimension oder Menge eingeben?</h3>
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-offset-4 col-sm-2">
      <div>
        <form action="menge.php" method="GET">
          <button type="submit" class="btn" name="auswahl_menge">Menge</button>
        </form>
      </div>
    </div>
    <div class="col-sm-2">
      <div>
        <form action="dimension.php" method="GET">
          <button type="submit" class="btn" name="auswahl_dimension">Dimension</button>
        </form>
      </div>
    </div>
  </div>
  
</div>

<?php require_once("footer.php")?>


