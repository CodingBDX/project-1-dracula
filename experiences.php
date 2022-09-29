<?php

$experiences = [
    [
        'name' => 'poissonerie',
        'address' => 'impasse de la tête coupee',
        'date' => '1350',
        'description' => 'bonne experience, patron delicieux avec ses employes',
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
    [
        'name' => 'jscer',
        'address' => '56 rue du uc',
        'date' => '900/03',
        'description' => 'superbe impalement',
    ],
];
?>
<div class="experiences">
    <div class="header">
<h3>Experiences</h3>

<div class="drop"></div>

</div>
<div class="content">
    
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

    echo '</br></div>';
}
?>
</div>
</div>