<?if($lists) : ?>
    <div class="category">
        <?if($lists) : ?>
            <? foreach($lists as $list) : ?>
                <div class="description"><h2><?=$list->name?></h2></div>

                <div class="thumbnails">
                    <? $collection = Flight::artmoiController()->collection($list->publicId) ?>
                    <? if ($collection) : ?>
                        <?foreach ($collection->items as $item) : ?>
                            <a href="/creation/<?=$list->publicId?>/<?=$item->posIndex?>">
                                <img src="<?=$item->images[0]->imageScaled100?>">
                            </a>
                        <? endforeach?>
                    <? endif?>
                </div>
                <br clear="all">
            <? endforeach ?>
        <?endif?>
    </div>
<?endif?>


