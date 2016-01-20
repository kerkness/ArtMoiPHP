<?if($items && ($items->publish == "1" || $items->publish == true )) : ?>
    <? $count = 0  + $skip;?>
    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
        <div class="col-md-1 col-sm-12 category">
            <div class="description">
                <h2 class="text-center"><?=$items->name?></h2>
            </div>
        </div>
        <div class="col-md-10 col-sm-12">
        <?if($items->items) : ?>
            <?foreach($items->items as $item) : ?>
                <? $count++; ?>
                <? if($item->imageThumbnailUrl()) : ?>
                    <div class="col-lg-3 col-md-4 col-sm-4 center-block">
                        <a class="thumbnail"  href="/item/<?=$collectionId?>?p=<?=$count?>">
                            <img class="img-responsive" src="<?= $item->imageThumbnailUrl() ?>">
                        </a>
                    </div>
                <?endif?>
            <?endforeach?>
        <? else : ?>
            <div class="category">
            <div class="description">
                <h2 class="text-center"><?= __('No creations found.') ?></h2>
            </div>
            </div>
        <?endif?>
        </div>

        <div class="col-md-12  col-sm-12">
            <?if ( $skip !== 0 ) : ?>
                <a href="/collection/<?=$collectionId?>?page=<?=$page-1?>&skip=<?=$skip-30?>" class="btn btn-moi"><?= __('Prev') // label for next button ?></a>
            <?endif?>
            <?if ( $skip+30 < $items->itemCount ) : ?>
                <a href="/collection/<?=$collectionId?>?page=<?=$page+1?>&skip=<?=$skip+30?>" class="btn btn-moi"><?= __('Next') // label for next button ?></a>
            <?endif?>
        </div>

    </div>
<? endif ?>



