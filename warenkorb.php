<?php require_once("dbconfig.php");?>


<!--Warenkorb-->
<div class="row">
    <div class="warenkorb">
    <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" name="form_warenkorb" method="GET">
            <h3>Warenkorb</h3>
            <div>
                <label for="demo">Menge: </label>
                <input type="text" name="menge_warenkorb" id="menge_warenkorb"/> cm<sup>3</sup>/l
            </div>
            <div>
                <label for="sorte_warenkorb">Sorte: </label>
                <input type="text" name="sorte_warenkorb" id="sorte_warenkorb"/>
            </div>
            <div>
                <button type="submit" class="btn">Bestätigen</button>
            </div>
        </form>
    </div>
    </div>
</div>
