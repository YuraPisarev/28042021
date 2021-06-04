<?php

require __DIR__ . '/header.php';

?>

<main class="container">
    <div class="alert alert-warning" role="alert">
        <?= $_GET['message'] ?>
    </div>
</main>

<?php
require __DIR__ . '/footer.php';

?>

