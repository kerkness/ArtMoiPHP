<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?= (DEFAULT_DESCRIPTION) ? DEFAULT_DESCRIPTION : "" ?>">
    <meta name="keywords" content="<?= (DEFAULT_KEYWORD) ? DEFAULT_KEYWORD : "" ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title> <?=(DEFAULT_TITLE) ? ($pageName) ? DEFAULT_TITLE." | ".$pageName  : DEFAULT_TITLE : "" ?> </title>

    <!-- ======
    STYLESHEETS
    ======== -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/css/styles.css">

    <!-- jQuery -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


</head>
<body>

    <div class="container">
        <?=$header_content?>
        <?=$body_content?>
        <br clear="all" />
    </div>


    <!-- =====
     SCRIPTS
     ===== -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <? if( isset($js) and is_array($js) ) : ?>
        <? foreach($js as $src) : ?>
            <script src="<?= $src ?>"></script>
        <? endforeach ?>
    <? endif ?>


</body>
</html>

