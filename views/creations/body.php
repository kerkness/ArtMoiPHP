<?if($collection) : ?>
<? $count = 0;?>
<div class="col-md-10 col-md-offset-1">
    <div class="col-md-1 col-sm-12 category">
        <div class="description">
            <h2>Creations</h2>
        </div>
    </div>
    <div class="col-md-10 col-sm-12">
            <?foreach($collection as $item) : ?>
                <? $count++; ?>
                <div class="col-lg-3 col-md-6 col-sm-12 center-block">
                    <a class="thumbnail"  href="/collection/<?=$pageName?>/item?p=<?=$count?>&t=<?=count($collection)?>">
                        <img class="img-responsive" src="<?= $item->imageThumbnailUrl() ?>">
                    </a>
                </div>
            <?endforeach?>
    </div>
</div>
<?endif?>