<?php require_once("header.php");?>

<div class="container">
  <div class="row">
    <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" id="menge_form" method="GET">
        <h3>Wieviel darf es sein?</h3>
        <div>
          <label for="menge">Menge</label> 
          <input type="number" id="menge" name="menge" min="0" max="9999" step="1" value="0" 
                onchange="showMenge(this.value)"> cm<sup>3</sup>/l
        </div>
        <div>
        <label for="select_1">Sorte:</label>
            <select class="form-control" id="select_1" name="sorte"
                onchange="waehleSorte(this.value);">
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
$sorte = $_GET['sorte'];
$menge = $_GET['menge'];

$fehler= "";
$mengeError = "Bitte Menge angeben!";

//Prüfe, ob menge 0 ist oder nicht gesetzt
if(isset($menge) && $menge != 0){
    $fehler = "";
    $sum = $menge;
    require_once("paypal.php");
} else {
    $fehler = $mengeError;
}
?>
  
   <?php require_once("ausgabe.php") ;?>
</div>

<script>
    function showMenge(newValue)
    {
        document.getElementById("menge_warenkorb").value=newValue;
    }
    function waehleSorte(newValue)
    {
        document.getElementById("sorte_warenkorb").value=newValue;
    }
</script>

<?php require_once("warenkorb.php");?>


<?php require_once("footer.php");?>

