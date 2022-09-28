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
        'name' => '',
        'address' => '',
        'date' => '',
        'description' => '',
    ],
];
?>
<div class="experiences">
<h3>Experiences</h3>
<?php
foreach ($experiences as $key => $experience) {
    foreach ($experience as $key => $value) {
        switch ($key) {
            case 'address' === $key:
                echo '<i>'.$value.'</i>'."\n";

                break;

            case 'date' === $key:
                echo '<time>'.$value.'</time>'."\n";

                break;

            case 'description' === $key:
                echo '<mark>'.$value.'</mark>'."\n";

                break;

            default:'name' === $key;
                echo '<h4>'.$value.'<h4>'."\n";

                break;
        }
    }
}
?>
</div>