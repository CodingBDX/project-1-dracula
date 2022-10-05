<div class="contact">
    <?php

    $contacts = [
        "adresse" => "Château Nosferatu,<br> Rue General Traian Moșoiu 24,<br>507025 BRAN,<br>Roumanie",
        "téléphone" => "+40 (859) 666-1897",
        "courriel" => "dracula@bramstoker.ro",
        "groupe-sanguin" => "O (buveur universel)"
    ];

    ?>
    <h3>Contacts</h3>
    <address>
        <div class="block">
            <h4><img src="img/castle.png" alt="castle-icon"> Adresse :</h4>
            <p><?php echo $contacts["adresse"] ?></p>
        </div>
        <div class="block">
            <h4><img src="img/phone-call.png" alt="phone-icon"> Téléphone :</h4>
            <a href="tel:+408591897"><?php echo $contacts["téléphone"] ?></a>
            <h4><img src="img/bat.png" alt="bat-icon"> Ch@uve-souris électronique :</h4>
            <a href="mailto:dracula@bramstoker.ro"><?php echo $contacts["courriel"] ?></a>
            <h4><img src="img/blood-donation.png" alt="blood-icon"> Groupe sanguin :</h4>
            <p><?php echo $contacts["groupe-sanguin"] ?></p>
        </div>
    </address>
</div>
