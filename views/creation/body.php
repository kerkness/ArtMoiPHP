<? if(($collections) && ($collections->items)) : ?>
    <div id="piece">
        <div id="image" class="col-md-7 col-sm-12"><img src="<?=$collections->items[0]->images[0]->imageFileSized?>" class="img-responsive"></div>
        <div id="details" class="col-md-12 col-sm-12">
            <?if($collections->items[0]->title) : ?><span class="title col-md-1 col-xs-12"><?=$collections->items[0]->title?></span><?endif?>
            <?if($collections->items[0]->creationDate->year) : ?><span class="year col-md-1 col-xs-12"> <?=$collections->items[0]->creationDate->year?> </span><?endif?>
            <?if($collections->items[0]->medium->name) : ?><span class="media col-md-1 col-xs-12"> <?=$collections->items[0]->medium->name?> </span><?endif?>
            <?if($collections->items[0]->size->height || $collections->items[0]->size->width) : ?> <span class="dimensions col-md-1 col-xs-12"><?=$collections->items[0]->size->height?> x <?=$collections->items[0]->size->width?> <?=$collections->items[0]->size->units->value?></span> <?endif?>
            <?if($collections->items[0]->price || $collections->items[0]->status) : ?>
                <span class="price col-md-1 col-xs-12"><?if($collections->items[0]->price) : ?> <?=$collections->items[0]->price?>
                    <?else:?>
                        <?if($collections->items[0]->status->name == "Sold Out") : ?><?=$collections->items[0]->status->name?><?endif?>
                    <?endif?></span>
            <?endif?>
        </div>
        <div id="navigation" class="col-md-12 col-xs-12">
            <a class="cat" href="/<?=$pageName?>/item?p=<?if($page == 1 || $page == 0) : ?><?=$collections->itemCount?><? else : ?><?=$page-1?><?endif?>" id="arr-nav-left-link">&lt;</a>
            <a class="cat" href="/<?=$pageName?>">&equiv;&equiv;&equiv;&equiv;</a>
            <a class="cat" href="/<?=$pageName?>/item?p=<?if($page == $collections->itemCount) : ?>1<? else : ?><?=$page+1?><?endif?>" id="arr-nav-right-link">&gt;</a>
        </div>
    </div>
<?else : ?>
        <h1 style="text-align:center"> Sorry ! Page not Found </h1>
<? endif?>


<script>
    $(function(){
        $(document).arrowsNavigation();
    });
</script>




