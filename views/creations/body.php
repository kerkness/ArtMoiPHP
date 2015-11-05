<?if($items) : ?>
<? $count = 0 + $skip;?>
<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
    <div class="col-md-1 col-sm-12 category">
        <div class="description">
            <h2 class="text-center">Creations</h2>
        </div>
    </div>
    <div class="col-md-10 col-sm-12">
            <?foreach($items as $item) : ?>
                <? $count++; ?>
                <?if($item->imageThumbnailUrl()) : ?>
                <div class="col-lg-3 col-md-4 col-sm-4 center-block">
                    <a class="thumbnail"  href="/item/creations?p=<?=$count?>">
                        <img class="img-responsive" src="<?= $item->imageThumbnailUrl() ?>">
                    </a>
                </div>
                <?endif?>
            <?endforeach?>
    </div>


    <div class="col-md-12 col-sm-12">
        <?if ( $skip !== 0 ) : ?>
            <a href="/collection/creations?page=<?=$page-1?>&skip=<?=$skip-30?>" class="btn btn-moi"><?= __('Prev') // label for next button ?></a>
        <?endif?>

        <?if ( $skip+30 <  $creationLimit && $skip+30 < Flight::get('itemCount')) : ?>
            <a href="/collection/creations?page=<?=$page+1?>&skip=<?=$skip+30?>" class="btn btn-moi"><?= __('Next') // label for next button ?></a>

        <?endif?>
    </div>
</div>
<?endif?>