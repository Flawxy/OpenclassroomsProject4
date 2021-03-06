<?php
use Project\Controller\PostController;
$controller = new PostController();
?>

<section class="container-lg">
    <div class="row mt-4 mb-2">
        <div class="col col-12 font-headersTitles color-headers-lightTheme text-center">
            <h3 class="h3"><?= $post->getPostTitle(); ?></h3>
        </div>
    </div>
    <div class="row font-weight-bold bgColor-headers">
        <span class="col col-sm-6 col-xl-8">publié le <?= $post->getPostDate(); ?></span>
        <span class="col col-sm-6 col-xl-4 text-right pr-2"><?= $controller->getNumberOfComments($post->getPostId()) ?> commentaire<?php if($controller->getNumberOfComments($post->getPostId()) > 1){echo 's';} ?></span>
    </div>
    <div class="row border font-postsContent bgColor-postsContent-lightTheme">
        <div class="col col-12"><?= $post->getPostContent(); ?></div>
        <div class="col col-12 text-right"><span class="font-weight-bold">FIN DU CHAPITRE</span><br/><a href="index.php">Retour à l'accueil<span class="fa faButtonRight fa-home"></span></a></div>

    </div>
</section>