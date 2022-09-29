<?php

$experiences = [
    [
        'name' => 'poissonerie',
        'address' => 'kil 33 dead',
        'date' => '08/1300',
        'description' => 'loremdddd dfdf df',
    ],
    [
        'name' => 'bouro',
        'address' => 'place notre dame',
        'date' => '06.1789',
        'description' => 'decapiter les rois et reines',
    ],
    [
        'name' => 'edouard',
        'address' => '56 rue de la joue',
        'date' => '1234.34',
        'description' => 'superbe impalement',
    ],
];
?>
<div class="experiences">
    <div class="header">
<h3>Experiences</h3>
</div>
<div class="content">
    
    <div class="content-experiences">
<?php
foreach ($experiences as $key => $experience) {
    echo ' <div class="time">';
    echo ' <span class="rounded"></span>';

    echo '     <span class="line"></span>';
    echo '</div>';
    echo '<div class="data-experiences">';
    foreach ($experience as $key => $value) {
        switch ($key) {
            case 'address' === $key:
                echo '<i>'.$value.'</i>'.'</br>';

                break;

            case 'date' === $key:
                echo '<time>'.$value.'</time>'.'</br>';

                break;

            case 'description' === $key:
                echo '<mark>'.$value.'</mark>'.'</br>';

                break;

            default:'name' === $key;
                echo '<h4>'.$value.'<h4>';

                break;
        }
    }
    echo '</div>';
}
?>
</div>
</div>
</div>