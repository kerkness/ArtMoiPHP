<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <title><?=$pageTitle?></title>

    <!-- ======
       FONTS
    ======== -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700,500italic,500,700italic' rel='stylesheet' type='text/css'>

    <!-- ======
    STYLESHEETS
    ======== -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet"  href="/ArtMoiPHP/css/error.css">

    <!-- jQuery -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


</head>
<body id="errorPage">
<nav class="navbar" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="col-md-2 col-sm-4 col-xs-6">
                 <a class="navbar-brand" href="https://www.artmoi.com">
                    <img src="/ArtMoiPHP/images/ArtMoiLogo.png" id="logo" class="img-responsive">
                 </a>
            </div>
        </div>
    </div>
</nav>

<header class="intro text-center">
    <div class="intro-body">
        <div class="container">

            <div class="col-md-12 errorMessage">
             <div class="col-md-10 col-md-offset-1 whiteTextBox">
            <h2><?=__("Oops! We can't find this url. Let's troubleshoot for a moment...") ?></h2>
            <div class="errorDescription">
                <p>
                    <?=__("1. Does the artmoi.me address you entered have a typo?")?><br/>
                    <?=__("Double-check your spelling.")?>
                </p>

                <p>
                    <?=__("2. Are you an ArtMoi Studio user and you're looking for your artmoi.me site?")?><br/>
                    <?=__("Learn how to activate it here:")?>
                    <a href="http://artmoi.helpscoutdocs.com/article/53-enabling-your-public-profile" class="moicolor"><?=__("Enabling your Public Profile")?></a>
                </p>

                <p>
                    <?=__("3. None of the above?")?><br/>
                    <?=__("Contact us anytime at ")?><a href="#" id="email" class="moicolor">moi@artmoi.com</a>
                </p>


                <div class="errorDetails hidden" reference="<?=$errorKey?>">
                        <p><?= __('We logged this error with a reference of %s at roughly %s.', $errorKey, date('h:i:s A, l jS \of F Y ', time() )) ?></p>
                        <? if( Moi::environment() != Moi::$production ) : ?>
                        <h5>ERROR:: <?= $message ?></h5>
                        <div><?= $ex->getTraceAsString(); ?></div>
                </div>
            <?endif?>
            </div>
        </div>
    </div>
    </div>
    </div>

</header>

<!-- =====
 SCRIPTS
 ===== -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/ArtMoiPHP/scripts/error.js"></script>

</body>
</html>

