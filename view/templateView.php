<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?php
        if(isset($pageTitle))
        {
            echo $pageTitle;
        }?>
        Le blog de Jean Forteroche</title>

    <!-- SEO informations -->
    <meta name="google-site-verification" content="X8-Tco-Tv-u7M03i2fAVqnH9iKOF7idAdgP4LQ0E83g" />
    <meta name="description" content="Le site officiel de Jean Forteroche et de son livre Billet simple pour l'Alaska" />
            <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155031259-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-155031259-1');
    </script>

    <!-- Bootstrap & FontAwesome & CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a2ce339fb0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css" />

    <!-- TinyMCE script -->
    <script src="https://cdn.tiny.cloud/1/eao0m8gx6g8dp0oieeo8wvkd3ut5slygyly5rgcyizps38du/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'#newPostContent, #editPostContent'});</script>

</head>
<body class="bgColor-body-lightTheme">

<?php
    echo $pageHeader;
    echo $pageContent;

    if(isset($commentsContent)){echo $commentsContent;}
?>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="public/js/Storage.js"></script>
<script src="public/js/ActiveTab.js"></script>
<script src="public/js/javascript.js"></script>
</body>
</html>