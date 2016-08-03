<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="icon" href="img/favicon.png">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="lib/prism.css">
    <link rel="stylesheet" href="css/main.css">
    <script defer src="lib/prism.js"></script> 
</head>
<body class="container">
    <header class="page-header">
        <h1><?= $title ?></h1>
        <?php
            if ($subtitle) {
                echo "<p class=\"lead\">$subtitle</p>";
            }
        ?>
    </header>
    