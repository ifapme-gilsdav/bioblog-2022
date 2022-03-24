<?php
    $appName = "BioBlog";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName ?><?= isset($title) ? " - $title" : '' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<!-- <?php
if (isset($title)) {
    echo $title;
} else {
    echo '';
}
?>

<?= isset($title) ? $title : '' ?>

<?= $appName . ' - ' . $title ?>
<?= "$appName - $title" ?> => BioBlog - Accueil
<?= '$appName - $title' ?> => $appName - $title
 -->
