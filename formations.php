<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    
    
    <title>Document</title>

<?php
$studies = [
    [
    'Diplome'=>'CAP petite enfance',
    'Lieux'=>'Timiçoara', 
    'Date_debut'=> '1600',
    'Date_fin'=> '-1632',
    ],
    [
    'Diplome'=>'Baccalaureat série ES', 
    'Lieux'=>'Bucarest', 
    'Date_debut'=> '1800',
    'Date_fin'=> '-1836',
    ],
    [
    'Diplome'=>'BTS  Hostellerie restauration',
    'Lieux'=>'Transilvanie',
    'Date_debut'=> '1898',
    'Date_fin'=> '-1900',
    ],
    [
    'Diplome'=>'Doctora de Medecin légiste',
    'Lieux'=>'Paris',
    'Date_debut'=> '1900',
    'Date_fin'=> '-1940',
    ],
    [
    'Diplome'=>'Deuxième Etoile de Ski',
    'Lieux'=>'Carpates',
    'Date_debut'=> '2000',
    'Date_fin'=> '-2022',
    ],
];

?>
<div class="formation">
<h3>Formation</h3>
<span class="drop"></span><span class="drop"></span><span class="drop"></span><span class="drop"></span>
</div>
<div class="content">
<?php
foreach ($studies as $key => $study) {
    echo'<div class="centre">';
    foreach ($study as $key => $value) {
        
        
        //echo "<i>".$value."</i>";
        switch ($key) {
            
            
            
            
            case 'Diplome' === $key:
                echo'<div class="tabulations">';
                echo '<i>'.$value.'</i>';
                echo'</div>';
            break;
                
            
            
            case 'Date_debut' === $key:
               
                echo '<i>'.$value.'</i>';
                
    
            break;
            
            case 'Date_fin' === $key:
                
                echo '<i>'.$value.'</i>';
                
    
            break;


            case 'Lieux' === $key:
                echo'<div class="tabulations">';               
                echo '<i>'.$value.'</i>';
                echo'</div>';  
 
            break;
            
        }  
        
         
        
        
        
           
    
    }
    
    echo '<br>'; 
    echo'</div>';
}

?>
</div>

