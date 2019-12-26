<?php

use Project\Model\Entity\CommentEntity;
use Project\Model\Manager\CommentManager;


$myAdmin = new CommentManager();
$data = $myAdmin->manageComments();
?>

<section class="container-lg text-center">
<div class="font-weight-bold">Liste des commentaires, classés par leur niveau de signalement :</div>


<?php
/** @var CommentEntity $comment */
foreach ($data as $comment) {
        ?>
    <div class="row">
    <div class="col col-12 border mb-5">
        <div class="row">
            <div class="col col-12 text-center bgColor-headers">
                <strong><?= $comment->getCommentAuthor() ?></strong> le <?= $comment->getCommentDate() ?> | <span class="alert-danger">Niveau de signalement : <span class="moderationLevel moderationLevel<?= $comment->getCommentModeration() ?>"><?= $comment->getCommentModeration() ?></span></span>
                <a class="btn btn-danger btn-sm float-right" href="index.php?adminPage=1&deleteCommentId=<?= $comment->getCommentId() ?>"><span class="fa faButtonLeft fa-trash-alt"></span>SUPPRRIMER</a>
            </div>

        </div>
        <div class="row">
            <div class="col col-12 bgColor-commentMessages-lightTheme">
                <?= $comment->getCommentContent() ?>
            </div>
        </div>
    </div>
    </div>
        <?php
}
?>
</section>