<div class="navbar navbar-default">
    <div class="container-fluid">
        <div class="col-sm-offset-0 col-sm-12  header-title"><?= DEFAULT_TITLE ?></div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navigationbar" aria-expanded="false">
                <span class="sr-only">Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-navigationbar">
            <ul class="nav navbar-nav">
                <li><a class="cat" href="/">Home</a></a></li>
                <? foreach( Flight::get('pages') as $page ) : ?>
                    <li><a class="cat" href="/<?= $page['id'] ?>"><?= $page['name'] ?></a></li>
                <? endforeach ?>
                <li><a class="cat" href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<div style='clear:both'></div>