<?php

require __DIR__ . '/header.php';
$comments = require __DIR__ . '/comments-list.php';
?>

<?php $action = isset($commentData, $_GET['id'])
                ? 'update.php?id='
                : 'comment-processor.php';
?>

<main class="container">
    <div class="bg-light p-5 rounded">
        <?php require __DIR__ . '/omment-form.php'?>
    </div>

    <table class="table table-dark table-hover">

        <?php foreach ($comments as $date => $comment): ?>
           <tr>
               <td>
                   <div class="alert alert-warning" role="alert">
                       <?= $date ?>
                   </div>
               </td>
           </tr>


        <?php foreach ($comment as $file => $comment1): ?>
            <tr>
                <td>
                    <b><?= $comment1['username'] ?></b><br>
                    <?= $comment1['gender'] ?><br>
                    <?= $comment1['programming_language'] ?>
            </td>
                <td>
                    <?= date('Y-m-d H:i:s', $comment1['time']) ?><br>
                    <?= $comment1['comment'] ?>
                    <div>
                        <a href="edit.php?id=<?= "$date/$file" ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="delete.php?id=<?= "$date$file" ?>" class="btn btn-sm btn-danger">Delete</a>
                    </div>

                </td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
    </table>
</main>

<?php
require __DIR__ . '/footer.php';

?>
