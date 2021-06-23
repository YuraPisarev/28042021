<?php



$action = isset($commentData, $_GET['id'])
    ? 'update.php?id='
    : 'comment-processor.php';


require __DIR__ . '/header.php';
?>

<main class="container">
    <div class="bg-light p-5 rounded">
        <?php require __DIR__ . '/omment-form.php'?>
    </div>
</main>

<?php
require __DIR__ . '/footer.php';

?>
