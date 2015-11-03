<?if($collection) : ?>
    <? $count = 0;?>
    <div class="col-md-10 col-md-offset-1">
        <div class="col-md-1 col-sm-12 category">
            <div class="description">
                <h2><?=$collection->name?></h2>
            </div>
        </div>
        <div class="col-md-10 col-sm-12">
        <?if($collection->items) : ?>
            <?foreach($collection->items as $item) : ?>
                <? $count++; ?>
                <? if($item->imageThumbnailUrl()) : ?>
                    <div class="col-md-4 col-sm-4 center-block">
                        <a class="thumbnail"  href="/collection/<?=$pageName?>/item?p=<?=$count?>">
                            <img class="img-responsive" src="<?= $item->imageThumbnailUrl() ?>">
                        </a>
                    </div>
                <?endif?>
            <?endforeach?>
        <?endif?>
        </div>
    </div>
<? endif ?>


