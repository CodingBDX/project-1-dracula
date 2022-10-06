
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
$hobbies = [
    'lang-en' => ['Hypnose', 'Consumption of human blood', 'Run away from sunlight', 'Transform into a bat', 'Playing piano', 'Sleeping in a coffin'],
    'lang-fr' => ['Hypnose', 'Consommer du sang humain', 'Fuir le soleil', 'Se transformer en chauve-souris', 'Jouer du piano', 'Dormir dans un cerceuil'],
];
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

