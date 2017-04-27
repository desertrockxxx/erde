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
  <div class="row">
      <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
        <input name="zahl1" type="range" min="0" max="100" value="0" step="1" 
            onchange="showValue1(this.value); rechnung()" />
        <span id="range1">0</span>
        <script type="text/javascript">
            function showValue1(newValue1)
            {
            	document.getElementById("range1").innerHTML=newValue1;
            }
        </script>
      </div>
  </div>
  <div class="row">
      <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
        <input name="zahl2" type="range" min="0" max="100" value="0" step="1" 
            onchange="showValue2(this.value); rechnung()" />
        <span id="range2">0</span>
        <script type="text/javascript">
            function showValue2(newValue2)
            {
            	document.getElementById("range2").innerHTML=newValue2;
            }
        </script>
      </div>
  </div>
  <div class="row">
      <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
        <input name="zahl3" type="range" min="0" max="100" value="0" step="1" 
            onchange="showValue3(this.value); rechnung()" />
        <span id="range3">0</span>
        <script type="text/javascript">
            function showValue3(newValue3)
            {
            	document.getElementById("range3").innerHTML=newValue3;
            }
        </script>
      </div>
  </div>
<?php
// Mengevariablen
$amount1 = $_GET['amount1'];
$amount2 = $_GET['amount2'];
$amount3 = $_GET['amount3'];

$sorte = $_GET['sorte'];

$fehler= "";
$dimensionError = "Bitte alle Felder ausfüllen!";


//Dimension berechnen
$sum = "";
if(!empty($amount1) && isset($amount1)
    && !empty($amount2) && isset($amount2)
    && !empty($amount3) && isset($amount3)
    && isset($sorte))
    {
        $sum = $amount1 * $amount2 * $amount3;
        require_once("paypal.php");
} else {
    $fehler = $dimensionError;
    $sum = null;
}
?>  

   <?php require_once("ausgabe.php") ;?>
</div>
 
 
<script>
    function rechnung() {
        x = document.getElementById("range1").innerHTML;
        y = document.getElementById("range2").innerHTML;
        z = document.getElementById("range3").innerHTML;
        sum = parseInt(x) + parseInt(y) + parseInt(z);
        document.getElementById("demo").value = sum;
    }
</script>



<!--Warenkorb-->
<div class="row">
    <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
        <h3>Warenkorb</h3>
        <label for="demo">Menge (in l): </label>
        <input type="text" id="demo"/>
    </div>
</div>


<?php require_once("footer.php")?>