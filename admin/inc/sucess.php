<?php if ($session->has('sucess')) : ?>
    <div class="alert alert-success"> 
        <?= "session edit sucessfully!"; ?>
    </div>
<?php endif; $session->remove('sucess'); ?>