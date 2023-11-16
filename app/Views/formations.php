<div class="container">
    <h1 class="title mb-5 display-4">
        Formations
    </h1>

    <div class="col">

        <?php for($i = 0; $i < count($nomFormation); $i++): ?>

        <div class="card text-center mx-auto mb-5">

            <div class="row g-0">

                <div class="col-md-4">
                    <img src="<?= base_url($imagesFormation[$i]) ?>" class="img-fluid rounded-start w-100"
                        alt="Logo de la formation <?= $nomFormation[$i] ?>">
                </div>

                <div class="col md-8">
                    <div class="card-header">
                        <h5><?= $nomFormation[$i] ?></h5>
                    </div>

                    <div class="card-body">
                        <p class="card-text text-info"> <?= $lieuFormation[$i]?></p>
                        <p class="card-text text-muted">Année : <?= $dateFormation[$i]?></p>
                        <p class="card-text text-justify">
                            <?= $descFormation[$i]?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <?php endfor; ?>
    </div>
</div>