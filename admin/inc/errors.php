<?php if ($session->has('errors')) : ?>
    <div class="alert alert-denger btn-danger">
        <?php foreach ($session->get('errors') as $error) : ?>
            <p><?= $error; ?></p>
        <?php endforeach;
        $session->remove('errors'); ?>
    </div>

<?php endif; ?>