<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title> 404 Art Not Found </title>

    <!-- ======
    STYLESHEETS
    ======== -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Custom Stylesheets -->
<!--    <link rel="stylesheet" type="text/css" href="/css/styles.css">-->

    <!-- jQuery -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


</head>
<body>

<div class="container">

    <p class="alert alert-warning"><?= $message ?></p>

    <a href="http://artmoi.com">ArtMoi.com</a>

    <br clear="all" />

</div>



<!-- =====
 SCRIPTS
 ===== -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?// if( isset($js) and is_array($js) ) : ?>
<!---->
<!--    --><?//= Moi_Debug::vars($js) ?>
<!---->
<!--    --><?// foreach($js as $src) : ?>
<!--        --><?// if( $src ) : ?>
<!--            <script src="--><?//= $src ?><!--"></script>-->
<!--        --><?// endif ?>
<!--    --><?// endforeach ?>
<?// endif ?>


</body>
</html>

