    
<div class="container">

    <h2>Contacts</h2>


    <div class="alert alert-info">
        <p>Vous pouvez me contacter en remplissant le formulaire ci-dessous. Les champs marqués d'une * sont obligatoires.</p>
    </div>
    <div class="form-group">

        <?php echo form_open('Contacts/save'); ?>

        <div class="mb-3">

            <label for="nom">Nom *</label>
            <?php echo form_input('nom', set_value('nom'), ['class' => 'form-control', 'id' => 'nom','required']); ?>

            <?php
                if (isset($validation) && $validation->hasError('nom')) {
                    echo '<div class="alert alert-danger">' . $validation->getError('nom') . '</div>';
                }
            ?>
        </div>


        <div class="mb-3">

            <label for="prenom">Prénom *</label>
            <?php echo form_input('prenom', set_value('prenom'), ['class' => 'form-control', 'id' => 'prenom', 'required']); ?>
            <?php
                if (isset($validation) && $validation->hasError('prenom')) {
                    echo '<div class="alert alert-danger">' . $validation->getError('prenom') . '</div>';
                }
            ?>
        </div>


        <div class="mb-3">
            <label for="email">Email *</label>
            <?php echo form_input('email', set_value('email'), ['class' => 'form-control', 'id' => 'email', 'required']); ?>
            <?php
                if (isset($validation) && $validation->hasError('email')) {
                    echo '<div class="alert alert-danger">' . $validation->getError('email') . '</div>';
                }
            ?>
        </div>

        <div class="mb-3">
            <label for="sujet">Sujet *</label>
            <?php echo form_input('sujet', set_value('sujet'), ['class' => 'form-control', 'id' => 'sujet', 'required']); ?>
            <?php
                if (isset($validation) && $validation->hasError('sujet')) {
                    echo '<div class="alert alert-danger">' . $validation->getError('sujet') . '</div>';
                }
            ?>
        </div>


        <div class="mb-3">
            <label for="message">Message *</label>
            <?php echo form_textarea('message', set_value('message'), ['class' => 'form-control', 'id' => 'message', 'required']); ?>
            <?php
                if (isset($validation) && $validation->hasError('message')) {
                    echo '<div class="alert alert-danger">' . $validation->getError('message') . '</div>';
                }
            ?>
        </div>
        
        <?php echo form_submit('submit', 'Envoyer', ['class' => 'btn btn-primary']); ?>
        <?php echo form_close(); ?>
        
    </div>
</div>

