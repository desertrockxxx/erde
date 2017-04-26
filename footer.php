<!--Slider-->
<script>
/* global $*/
  $( function() {
    $( "#slider-range-max1" ).slider({
      range: "max",
      min: 0,
      max: 999,
      value: 0,
      slide: function( event, ui ) {
        $( "#amount1" ).val( ui.value );
      }
    });
    $( "#amount1" ).val( $( "#slider-range-max1" ).slider( "value" ) );
  } );
  
  $( function() {
    $( "#slider-range-max2" ).slider({
      range: "max",
      min: 0,
      max: 999,
      value: 0,
      slide: function( event, ui ) {
        $( "#amount2" ).val( ui.value );
      }
    });
    $( "#amount2" ).val( $( "#slider-range-max2" ).slider( "value" ) );
  } );
  
  $( function() {
    $( "#slider-range-max3" ).slider({
      range: "max",
      min: 0,
      max: 999,
      value: 0,
      slide: function( event, ui ) {
        $( "#amount3" ).val( ui.value );
      }
    });
    $( "#amount3" ).val( $( "#slider-range-max3" ).slider( "value" ) );
  } );
  
</script>
</body>
</html> 
