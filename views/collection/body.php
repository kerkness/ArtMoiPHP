<?if($collections) : ?>
    <?$collectionNumber = 0;?>
    <?foreach($collections as $collection) : ?>
        <? $count = 1;?>

        <div class="category">
            <div class="description"><h2><?=$collection->name?></h2></div>

            <div class="thumbnails">
            <?if($collection->privacy->publicImages == 1) : ?>
                <?if($collection->items) : ?>
                    <?foreach($collection->items as $item) : ?>
                        <div class="thmb">
                            <a href="/~andrewvalko/<?=$pageName?>/<?=$collectionNumber?>?p=<?=$count?>">
                                <img src="<?=$item->images[0]->imageFileThumbnail?>">
                            </a>
                            <div class="spacer" style="width:11px;"></div>
                        </div>
                        <? $count++ ?>
                    <? endforeach ?>
                <?endif?>

            <?else:?>
                 Image are NOT public..Please check out your privacy settings
            <?endif?>

            </div>
            <br clear="all">
        </div>
        <? $collectionNumber ++ ?>
    <?endforeach?>
<?else : ?>

<h1 style="text-align:center"> Sorry ! Page not Found </h1>

<?endif?>


