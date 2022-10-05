<div class="contact">
    <?php

require_once 'variables.php';
    ?>
    <h3>Contacts</h3>
    <address>
        <div class="block">
            <h4>Adresse :</h4>
            <p><?php echo $contacts['adresse']; ?></p>
        </div>
        <div class="block">
            <h4>Téléphone :</h4>
            <a href="tel:+408591897"><?php echo $contacts['téléphone']; ?></a>
            <h4>Ch@uve-souris électronique :</h4>
            <a href="mailto:dracula@bramstoker.ro"><?php echo $contacts['courriel']; ?></a>
            <h4>Groupe sanguin :</h4>
            <p><?php echo $contacts['groupe-sanguin']; ?></p>
        </div>
    </address>
</div>
