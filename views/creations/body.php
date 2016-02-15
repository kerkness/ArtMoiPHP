<?if($items) : ?>
<? $count = $paginate->limit * ($paginate->page-1)  ?>
<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
    <div class="col-md-1 col-sm-12 category">
        <div class="description">
            <h2 class="text-center"><?= __('Creations') ?></h2>
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


    <? if( $paginate->lastPage > 1 ) : ?>
    <div class="col-md-12 col-sm-12">
        <?if ( $paginate->prevPage ) : ?>
            <a href="/collection/creations?page=<?=$paginate->prevPage?>" class="btn btn-moi"><?= __('Prev') // label for next button ?></a>
        <?endif?>

        <?if ( $paginate->nextPage ) : ?>
            <a href="/collection/creations?page=<?=$paginate->nextPage?>" class="btn btn-moi"><?= __('Next') // label for next button ?></a>

        <?endif?>
    </div>
    <? endif ?>

</div>
<?endif?>
<? if( ! $items ) : ?>
    <div class="category">
        <div class="description">
            <h2 class="text-center"><?= __('No creations found.') ?></h2>
        </div>
    </div>
<? endif ?>


