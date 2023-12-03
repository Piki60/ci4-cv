<div class="container-fluid">
    <h2 class="text-center mb-4 text-primary">Projets</h2>
    <div class="row justify-content-center m-5">


        <!-- Projets académiques -->
        <h3 class="text-center mb-4 text-secondary">Projets académiques</h3>
        <?php for ($i = 0; $i < count($projetsAcademiques); $i++) : ?>
            
            <div class="card m-3 mb-5" style="width: 25rem;">
                <div class="card-header text-center text-white bg-secondary">
                    <?= $projetsAcademiques[$i]['titre'] ?>
                </div>
                <div class="card-body">
                    <p class="card-text text-justify">
                        <?= $projetsAcademiques[$i]['description'] ?>
                    </p>
                    <hr class="my-4">
                    <p class="card-text text-justify">
                        <?= $projetsAcademiques[$i]['taches'] ?>
                    </p>
                </div>
            </div>


        <?php endfor; ?>


        <!-- Projets personnels -->
        <h3 class="text-center mb-4 text-secondary">Projets personnels</h3>
        <?php for ($i = 0; $i < count($projetsPersonnels); $i++) : ?>
            
            <div class="card m-3 mb-5" style="width: 25rem;">
                <div class="card-header text-center text-white bg-secondary">
                    <?= $projetsPersonnels[$i]['titre'] ?>
                </div>
                <div class="card-body">
                    <p class="card-text text-justify">
                        <?= $projetsPersonnels[$i]['description'] ?>
                    </p>
                    <hr class="my-4">
                    <p class="card-text text-justify">
                        <?= $projetsPersonnels[$i]['taches'] ?>
                    </p>
                </div>
            </div>

        <?php endfor; ?>
    </div>
</div>
