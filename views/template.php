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

    <!-- Custom Stylesheets -->
    <!-- TODO: Figure out why "css/styles.css" not working on creation page-->
    <link rel="stylesheet" type="text/css" href="/~andrewvalko/css/styles.css">

    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>
<body>
    <div id="content">
        <?=$header_content?>
        <?=$body_content?>
        <br clear="all" />
    </div>


    <!-- =====
     SCRIPTS
     ===== -->

    <? if( isset($js) and is_array($js) ) : ?>
        <? foreach($js as $src) : ?>
            <script src="<?= $src ?>"></script>
        <? endforeach ?>
    <? endif ?>


</body>
</html>

