  <div class="row">
    <div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
        <div class="paypalform">
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <div align="center">
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="business" value="email@host.com">
                <input type="hidden" name="item_name" value="Erde für <?php echo $_GET['sorte'];?>">
                <input type="hidden" name="item_number" value="pro Liter">
                <!--Der Preis pro Stück-->
                <input type="hidden" name="amount" value="2.00">
                <input type="hidden" name="currency_code" value="EUR">
                <input type="image" src="https://www.paypalobjects.com/de_DE/DE/i/btn/btn_cart_LG.gif" 
                    border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
                <img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
                <input type="hidden" name="add" value="1">
                <!--Die Anzahl-->
                <input type="hidden" name="quantity" value="<?php echo $sum;?>">
                </div>
            </form>
        </div>
    </div>
  </div>

