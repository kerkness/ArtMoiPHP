<div class="navbar navbar-default">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navigationbar" aria-expanded="false">
                <span class="sr-only">Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="header-title"><?= DEFAULT_TITLE ?></div>

        <div class="collapse navbar-collapse" id="bs-navigationbar">
            <ul class="nav navbar-nav">
                <li><a class="cat" href="/"><?= __('Home') // label for home button?></a></a></li>
                <?if(Flight::get('showCreations') == true) : ?>
                <li>
                    <a class="cat" href="/collection/creations"><?=  __('Creations') // label for creations button ?></a>
                </li>
                <?endif?>
                <?if(Flight::get('pages')) : ?>
                    <li>
                        <div class="dropdown"><button class="btn dropdown-toggle" id="collectionMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?=  __('Collections') // label for collection button ?><span class="caret"></span></button>
                            <ul class="dropdown-menu" aria-labelledby="collectionMenu">
                                <? foreach( Flight::get('pages') as $page ) : ?>
                                    <li><a class="cat" href="/collection/<?= $page['id'] ?>"><?= $page['name'] ?></a></li>
                                <? endforeach ?>
                            </ul>
                        </div>
                    </li>
                <?endif?>
                <li><a class="cat" href="/contact"><?=  __('Contact') // label for contact button ?></a></li>
            </ul>
        </div>
    </div>
</div>
<div style='clear:both'></div>