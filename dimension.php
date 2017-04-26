<?php require_once("header.php")?>

<div class="container">
  <div class="row">
    <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" id="dimension_form" method="GET">
        <h3>Wieviel Kubik benötigen Sie?</h3>
        <p>
          <label for="amount1">Breite:</label>
          <input type="text" name="amount1" id="amount1">
          cm
        </p>
        <div id="slider-range-max1"></div>
        <p>
          <label for="amount2">Länge:</label>
          <input type="text" name="amount2" id="amount2">
          cm
        </p>
        <div id="slider-range-max2"></div>
        <p>
          <label for="amount3">Höhe:</label>
          <input type="text" name="amount3" id="amount3">
          cm
        </p>
        <div id="slider-range-max3"></div>

        <div>
        <label for="select_1">Sorte:</label>
            <select class="form-control" id="select_1" name="sorte">
                <option value="Gurke">Gurke</option>
                <option value="Tomate">Tomate</option>
                <option value="Aubergine">Aubergine</option>
                <option value="Erdbeere">Erdbeere</option>
                <option value="Kartoffel">Kartoffel</option>
            </select>
        </div>
        
        <div>
          <button type="submit" class="btn btn-primary">Eingabe absenden</button>
          <input type="button" class="btn btn-danger" value="Zurück" onclick="location.href = '/';">
        </div>
    </form>
    </div>
  </div>
  
<?php
//Dimension berechnen
$sum = "";
if(!empty($amount1) && isset($amount1)
    && !empty($amount2) && isset($amount2)
    && !empty($amount3) && isset($amount3)
    && isset($sorte))
    {
        $sum = $amount1 * $amount2 * $amount3;
        $ergebnis = $sum . " l";
        require_once("paypal.php");
} else {
    $fehler = $dimensionError;
    $sum = null;
}
?>  

   <?php require_once("ausgabe.php") ;?>
</div>
  

<?php require_once("footer.php")?>