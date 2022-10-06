
    <div class="hobbies">

     <div class="header">

     <div class="align-candle">
            <div class="candles">
                <div class="shadow">
    <div class="fire"></div>
    <div class="fire"></div>
    <div class="fire"></div>
    <div class="fire"></div>
    <div class="fire"></div>
</div>
  </div>
</div>
      

            <h3>Hobbies</h3>
<div class="align-candle">
            <div class="candles">
                                <div class="shadow">
    <div class="fire"></div>
    <div class="fire"></div>
    <div class="fire"></div>
    <div class="fire"></div>
    <div class="fire"></div>
</div>
  </div>
</div>
        
        </div>

<div class="content">
    
   
<?php

function getMessage($arrays)
{
    if (isset($_GET['lang-fr'])) {
        echo '<ul><li>'.
             implode('</li><li>', $arrays['lang-fr']).
             '</li></ul>';
    } elseif (isset($_GET['lang-en'])) {
        echo '<ul><li>'.
                     implode('</li><li>', $arrays['lang-en']).
                     '</li></ul>';
    } else {
        echo '<ul><li>'.

 implode('</li><li>', $arrays['lang-fr']).
             '</li></ul>';
    }
}

getMessage($hobbies);
?>
</div>
</div>

