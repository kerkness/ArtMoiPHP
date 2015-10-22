
<?if($collections) : ?>
    <?$collectionNumber = 0;?>

    <?foreach($collections as $collection) : ?>
        <? $count = 1;?>
        <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-1 col-sm-12 category">
                        <div class="description">
                            <h2><?=$collection->name?></h2>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-12">
                            <? foreach($collection->items as $item) : ?>
                                <div class="col-lg-3 col-md-6 col-sm-12 center-block">
                                <a class="thumbnail"  href="/<?=$pageName?>/<?=$collectionNumber?>?p=<?=$count?>">
                                    <img class="img-responsive" src="<?= $item->images[0]->imageScaled500 ?>">
                                </a>
                                </div>
                            <? $count++; ?>
                            <? endforeach ?>
                    </div>
                </div>
        </div>
    <?$collectionNumber++;?>
    <?endforeach?>

<?else : ?>
    <h1 style="text-align:center"> Sorry ! Page not Found </h1>
<? endif ?>


