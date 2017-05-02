<?php require_once("header.php");?>
<div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" id="dimension_form" method="GET">
    <h3>Wieviel Kubik benötigen Sie?</h3>
    <div class=row>
    <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
        <input name="zahl1" type="range" min="1" max="100" value="1" step="1" 
            onchange="showValue1(this.value); rechnung()" />
        <span id="range1">1</span>
        <script type="text/javascript">
        function showValue1(newValue)
        {
        	document.getElementById("range1").innerHTML=newValue;
        }
        </script>
    </div>
    </div>
    
    <div class=row>
    <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
        <input name="zahl2" type="range" min="1" max="100" value="1" step="1" 
            onchange="showValue2(this.value); rechnung()" />
        <span id="range2">1</span>
        <script type="text/javascript">
        function showValue2(newValue)
        {
        	document.getElementById("range2").innerHTML=newValue;
        }
        </script>
    </div>
    </div>
  
    <div class=row>
    <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
        <input name="zahl3" type="range" min="1" max="100" value="1" step="1" 
            onchange="showValue3(this.value); rechnung()" />
        <span id="range3">1</span>
        <script type="text/javascript">
        function showValue3(newValue)
        {
        	document.getElementById("range3").innerHTML=newValue;
        }
        </script>
    </div>
    </div>
    
    <div class="row">
    <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
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
    </div>
    
    <div class="row">
    <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
        <button type="submit" class="btn btn-primary">Eingabe absenden</button>
        <input type="button" class="btn btn-danger" value="Zurück" onclick="location.href = '/';">
    </div>
    </div>
    </form>
</div>
 
 
<script>
    /* global x, y, z, sum*/
    function rechnung() {
        x = document.getElementById("range1").innerHTML;
        y = document.getElementById("range2").innerHTML;
        z = document.getElementById("range3").innerHTML;
        sum = parseInt(x) * parseInt(y) * parseInt(z);
        document.getElementById("menge_warenkorb").value = sum;
    }
    function waehleSorte(newValue)
    {
        document.getElementById("sorte_warenkorb").value=newValue;
    }
</script>

<?php require_once("warenkorb.php");?>

<?php require_once("footer.php");?>