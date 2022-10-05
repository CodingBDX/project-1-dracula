<?php
$studies = [
    [
        'Diplome' => 'CAP petite enfance',
        'Lieux' => 'Timiçoara',
        'Date' => '1623'
    ],
    [
        'Diplome' => 'Baccalaureat série ES',
        'Lieux' => 'Bucarest',
        'Date' => '1897',
    ],
    [
        'Diplome' => 'BTS  Hostellerie restauration',
        'Lieux' => 'Transilvanie',
        'Date' => '1900',
    ],
    [
        'Diplome' => 'Doctora de Medecin légiste',
        'Lieux' => 'Paris',
        'Date' => '1940'
    ],
    [
        'Diplome' => 'Deuxième Etoile de Ski',
        'Lieux' => 'Carpates',
        'Date' => '2000'
    ],
];

?>
<div class="formation">
    <h3>Formation</h3>
    <?php
    foreach ($studies as $key => $study) {
        foreach ($study as $key => $value) {
            switch ($key) {
                case 'Diplome' === $key:
                    echo '<i>' . $value . '</i>' . '</br>';

                    break;

                case 'Date' === $key:
                    echo '<time>' . $value . '</time>' . '</br>';

                    break;

                case 'Lieux' === $key:
                    echo '<mark>' . $value . '</mark>' . '</br>';

                    break;
            }
        }
    }
    ?>
</div>

