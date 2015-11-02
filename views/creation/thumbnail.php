

<?if($images) : ?>
    <div class="col-md-8 col-sm-12 center">
        <? foreach($images as $image) : ?>
            <div class="col-md-2 col-xs-4">
                <a href="<?=$image->imageFile?>" class="thumbnailImage"><img src="<?=$image->imageFileThumbnail?>" class="img-responsive"/> </a>
            </div>
        <? endforeach ?>
    </div>
    </div>
<?endif?>

<script>
    +function ($) {
        $(document).ready(function(){
            $(".thumbnailImage").click(function(){
                $('#mainImage').hide();
                $('#mainImage').css('min-width',"100px");
                $('#mainImage').css('min-height',"100px");
                $('#imageWrap').css('background', "url('/images/loading.gif') no-repeat 50% 50%");
                $('#imageWrap').css('background-size', "20px 20px");

        var i = $('<img />').attr('src',this.href).load(function() {
            $('#mainImage').attr('src', i.attr('src'));
            $('#imageWrap').css('background-image', 'none');
            $('#mainImage').fadeIn();
         });
        return false;
        });
    });
    }(jQuery);

</script>
</div>

<br clear="all" />