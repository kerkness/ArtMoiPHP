
    <? if(($collections) && ($collections->items)) : ?>
            <div id="content">
                <div id="piece">
                    <div id="image" style="background: url('<?=$collections->items[0]->images[0]->imageFileSized?>') no-repeat center top; height: 580px; background-size:auto 100%; "></div>
            <div id="details">
                        <?if($collections->items[0]->title) : ?><span clas="title"><?=$collections->items[0]->title?></span><?endif?>
                        <?if($collections->items[0]->creationDate->year) : ?><span class="year"> <?=$collections->items[0]->creationDate->year?> </span><?endif?>
                        <?if($collections->items[0]->medium->name) : ?><span class="media"> <?=$collections->items[0]->medium->name?> </span><?endif?>
                        <?if($collections->items[0]->size->height || $collections->items[0]->size->width) : ?> <span class="dimensions"><?=$collections->items[0]->size->height?> x <?=$collections->items[0]->size->width?> <?=$collections->items[0]->size->units->value?></span> <?endif?>
                        <?if($collections->items[0]->price || $collections->items[0]->status) : ?><span class="price"><?if($collections->items[0]->price) : ?> <?=$collections->items[0]->price?><?else:?><?=$collections->items[0]->status->name?><?endif?></span><?endif?>
                    </div>
                    <div id="navigation">
                        <a class="cat" href="/~andrewvalko/<?=$pageName?>/<?=$collectionNumber?>?p=<?if($page == 1 || $page == 0) : ?><?=$collections->itemCount?><? else : ?><?=$page-1?><?endif?>" id="arr-nav-left-link">&lt;</a>
                        <a class="cat" href="/~andrewvalko/<?=$pageName?>">&equiv;&equiv;&equiv;&equiv;</a>
                        <a class="cat" href="/~andrewvalko/<?=$pageName?>/<?=$collectionNumber?>?p=<?if($page == $collections->itemCount) : ?>1<? else : ?><?=$page+1?><?endif?>" id="arr-nav-right-link">&gt;</a>
                    </div>
                </div>
            </div>
    <?else : ?>
        <h1 style="text-align:center"> Sorry! 404 Page not Found </h1>
    <? endif?>







