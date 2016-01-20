<? if($collection) : ?>
    <div class="col-md-12">
    <? foreach( ($collection->items) ? $collection->items : $collection  as $item) : ?>

        <? if($item->imageUrl()) : ?>
            <div class="col-md-12 col-sm-12" id="imageWrap">
                <img src="<?=$item->imageUrl()?>" class="col-md-8 img-responsive center" id="mainImage" />
            </div>
        <? endif ?>

        <div class="col-md-12 col-sm-12 text-center margin-top-md">
            <span style="font-style:italic;"> <?= ($item->title) ? $item->title : "Untitled" ?> </span>

            <? if ($item->medium) : ?>
                <span> | <?= $item->medium ?></span>
            <? endif ?>

            <? if( $item->formattedSize() ) : ?>
                <span>| <?= $item->formattedSize() ?> <?=$item->unit?></span>
            <? endif ?>

            <? if($item->formattedDate()) : ?>
                <span> | <?= $item->formattedDate() ?> </span>
            <? endif ?>
            <div class="col-md-2 border-line center"></div>
            <? if($item->status) : ?> <div class="margin-top-md"><?=$item->status?></div>  <?endif?>
            <? if($item->price) : ?> <span><?=$item->price?></span>  <?endif?>
        </div>
     </div>

     <?if(count($item->images) > 1) : ?>
         <? Flight::render('creation/thumbnail',array('images' => $item->images));?>
     <?endif?>

        <div id="navigation"class="col-md-12 margin-top-md">
            <a class="cat" href="/item/<?=$action?>?p=<?if($page == 1 || $page == 0) : ?><?=$page?><? else : ?><?=$page-1?><?endif?>" id="arr-nav-left-link">&lt; prev</a>
            &nbsp;&nbsp;&nbsp;<a class="cat" href="/collection/<?=$collectionId?>">&equiv;&equiv;&equiv;&equiv;</a>&nbsp;&nbsp;&nbsp;
            <a class="cat" href="/item/<?=$action?>?p=<?if($page == $t) : ?>1<? else : ?><?=$page+1?><?endif?>" id="arr-nav-right-link">next &gt;</a>
        </div>


<?endforeach?>
<?endif?>

<script>
    $(function(){
        $(document).arrowsNavigation();
    });
</script>




