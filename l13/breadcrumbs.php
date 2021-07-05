<?php
/**
 * @var string $rout (From index.php)
 */

$crumbs = explode("/", $rout, );
$currentRout = '';




?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item " aria-current="page">Home</li>
        <li class="breadcrumb-item " aria-current="page">
            <?php
            foreach ($crumbs as $crumb): ?>
                <?php $currentRout .= '/' . $crumb ;
                $currentRout .= '/'?>
                <a href="index.php?rout=<?=$currentRout?>"><?= $crumb ?></a>
            <?php endforeach; ?>

        </li>
    </ol>
</nav>