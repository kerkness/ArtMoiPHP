<? if($collection) : ?>
    <div class="creation-container">
    <?foreach($collection->items as $item) :?>
        <div class="col-md-12 col-sm-12" id="imageWrap">
            <img src="<?=$item->imageUrl()?>" class="col-md-8 img-responsive center" id="mainImage" />
        </div>


        <div class="col-md-12 col-sm-12 text-center margin-top-md">
            <? if($item->title) : ?> <span style="font-style:italic;"> <?=$item->title?> </span><?endif?>

            <? if ($item->medium) : ?>
                <span> | <?= $item->medium ?></span>
            <? endif ?>

            <? if( $item->formattedSize() ) : ?>
                <span>| <?= $item->formattedSize() ?> <?=$item->unit?></span>
            <? endif ?>

            <? if($item->formattedDate()) : ?>
                <span> | <?= $item->formattedDate() ?> </span>
            <? endif ?>
            <div class="col-md-2 margin-top-lg border-line center"></div>
            <? if($item->status) : ?> <div class="margin-top-md"><?=$item->status?></div> <?endif?>
            </div>
    </div>
    <?if(count($item->images) > 1) : ?>
        <? Flight::render('creation/thumbnail',array('images' => $item->images));?>
    <?endif?>

        <div id="navigation"class="col-md-12 margin-top-sm">
                        <a class="cat" href="/collection/<?=$pageName?>/item?p=<?if($page == 1 || $page == 0) : ?><?=$collection->itemCount?><? else : ?><?=$page-1?><?endif?>" id="arr-nav-left-link">&lt;</a>
                        <a class="cat" href="/collection/<?=$pageName?>">&equiv;&equiv;&equiv;&equiv;</a>
                        <a class="cat" href="/collection/<?=$pageName?>/item?p=<?if($page == $collection->itemCount) : ?>1<? else : ?><?=$page+1?><?endif?>" id="arr-nav-right-link">&gt;</a>
        </div>

<?endforeach?>
<?endif?>

<script>
    $(function(){
        $(document).arrowsNavigation();
    });
</script>




