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
        <form action="comment-processor.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Name</label>
                <input type="text"
                       name="username"
                       value="<?= $commentData['username']?? ''?>"
                       id="username"
                       class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <?= foreach ($genders as $id => $label): ?>
                <div class="form-check">
                    <input type="radio"
                           name="gender"
                           value="<?= $id ?>"
                           <?= (isset($commentData['gender']) && $commentData['gender'] === $id) ? 'checked' : '' ?>
                           id="gender-male"
                           class="form-check-input">
                    <label for="gender-male" class="form-check-label">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" value="female" id="gender-female" class="form-check-input">
                    <label for="gender-female" class="form-check-label">Female</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="programming_language" class="form-label">Programming language</label>
                <select name="programming_language" id="programming_language" class="form-control">
                    <optgroup label="Backend">
                        <option value="php">PHP</option>
                        <option value="python">Python</option>
                        <option value="java">Java</option>
                    </optgroup>
                    <optgroup label="Frontend">
                        <option value="js">JavaScript</option>
                        <option value="html">HTML</option>
                        <option value="css">CSS</option>
                    </optgroup>
                </select>
            </div>

            <div class="mb-3">
                <label for="comment" class="form-label">Comment</label>
                <textarea name="comment" id="comment" class="form-control"></textarea>

            </div>
            <button type="submit" class="btn btn-success">Send</button>

        </form>
    </div>


    <?php foreach ($comments as $date => $comment): ?>
           <tr>
               <td>
                   <div class="alert alert-warning" role="alert">
                       <?= $date ?>
                   </div>
               </td>
           </tr>

    <table class="table table-dark table-hover">
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
