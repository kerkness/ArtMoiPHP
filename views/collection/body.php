<?if($collection) : ?>
    <? $count = 1;?>
    <div class="col-md-10 col-md-offset-1">
        <div class="col-md-1 col-sm-12 category">
            <div class="description">
                <h2><?=$collection->name?></h2>
            </div>
        </div>
        <div class="col-md-10 col-sm-12">
        <?if($collection->items) : ?>
            <?foreach($collection->items as $item) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 center-block">
                        <a class="thumbnail"  href="/collection/<?=$pageName?>/item?p=<?=$count?>">
                            <img class="img-responsive" src="<?= $item->imageThumbnailUrl() ?>">
                        </a>
                    </div>
                <? $count++; ?>
            <?endforeach?>
        <?endif?>
        </div>
    </div>

<?//else : ?>
<!--    <h1 style="text-align:center"> Sorry ! Page not Found </h1>-->
<? endif ?>


