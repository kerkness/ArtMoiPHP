
<!--<pre>--><?//print_r($collections)?><!--</pre>-->

<?if($collections) : ?>
    <?$collectionNumber = 0;?>
    <?foreach($collections as $collection) : ?>
    <? $count = 1;?>
        <div class="category">
            <div class="description"><h2><?=$collection->name?></h2></div>
            <div class="thumbnails">
                <?foreach($collection->items as $item) : ?>
                    <div class="thmb">
                        <a href="/~andrewvalko/<?=$pageName?>/<?=$collectionNumber?>?p=<?=$count?>">
                            <img src="<?=$item->images[0]->imageFileThumbnail?>">
                        </a>
                    </div>
                    <? $count++ ?>
                <? endforeach ?>
            </div>
            <br clear="all">
        </div>
        <? $collectionNumber ++ ?>
    <?endforeach?>
<?else : ?>

<h1 style="text-align:center"> Sorry! 404 Page not Found </h1>

<?endif?>


