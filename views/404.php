<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <title><?=$pageTitle?></title>

    <!-- ======
    STYLESHEETS
    ======== -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet"  href="/css/error.css">

    <!-- jQuery -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


</head>
<body>

<div class="text-center">
    <div class="errorMessage">
        <div class="col-md-offset-4 col-md-4 col-sm-3">
            <img src="/ArtMoiPHP/images/whiteLogo.png" class="img-responsive">
        </div>
        <div class="col-md-12 col-sm-12">
            <h1><?= $message ?></h1>
            <div class="errorDescription">
            <?if($error == "404") : ?>

                    <p>
                    <?=__("The page you requested couldn't be found.") ?> <br/>
                    <?=__("Check out our %s page",'<a href="https://artmoi.zendesk.com">Support</a>'   )?>
                     <?=__("or head back to ")?><a href="https://<?=Moi::thisDomain()?>">Dashboard</a>
                    </p>

            <?else : ?>
                <p>
                    <?=__("Check out our %s page",'<a href="https://artmoi.zendesk.com">Support</a>'   )?>
                    <?=__("or head back to ")?><a href="https://<?=Moi::thisDomain()?>">Dashboard</a>
                </p>

            <?endif?>
            </div>
        </div>

    </div>


</div>

<!-- =====
 SCRIPTS
 ===== -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>

