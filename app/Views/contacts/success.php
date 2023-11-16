<div class="container">
    <h2>Informations reçues</h2>

    <div class="alert alert-success">
        <p>Merci <?=$contacts['prenom']?> <?=$contacts['nom']?> de m'avoir contacté.</p>
    </div>

    <div class="alert alert-info">
        <p>Voici les informations que vous m'avez envoyées :</p>
        <br>
        <p> Sujet : <?=$contacts['sujet']?></p>
        <p> Message : <?=$contacts['message']?></p>
    </div>
    
</div>