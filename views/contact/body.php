<? $user = Flight::get('user'); ?>

<div class="contact-container col-md-12 col-sm-12">
    <div class="col-md-6 col-xs-12 center">
        <div class="contactform">

<!--            <form action="/ArtMoiPHP/views/contact/email.php" id="contact_form" method="POST" enctype="multipart/form-data">-->
            <form id="contact_form" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="recipient" value="<?=$user->email?>">
                <label class="form-group" for="name">Name:</label>
                <input type="text" placeholder="name" class="form-control input" name="name" id="name" size="30" value="" /><br />

                <label class="form-group required" for="email">Email:</label>
                <input type="text" placeholder="email" class="form-control input" name="email" id="email" size="30" value="" /><br />

                <label class="form-group" for="phone">Phone:</label><input class="form-control" type="text" name="phone" placeholder="phone" id="phone" size="12" value="" /><br />

                <label class="form-group in put" for="message">Message:</label>
                <textarea name="message" class="form-control" id="message" rows="5" cols="35"></textarea><br />


                <button type="submit" class="btn btn-default" name="submit" value="Submit">Submit</button>

                <div style='clear:both'></div>
                <br/>
               <div id="form-messages"></div>
            </form>
        </div>
    </div>
    <div class="margin-top-lg col-md-8 col-sm-12 center">
            <div class="contact-social-icons col-md-12 col-sm-12">
                <ul class="text-center">

                    <?if($contact) : ?>
                        <?foreach($contact as $c) : ?>
                            <li>
                            <? if($c['name'] == "blogger") : ?>
                                <a href="<?=$c['link']?>" class="blogger-atag"><img src="<?=$c['icon']?>" class="social-icon-image" /></a>
                            <? else : ?>
                                <a href="<?=$c['link']?>"><i class="<?=$c['icon']?> social-icon"></i></a>
                            <?endif?>
                            </li>
                        <?endforeach?>
                    <?endif?>
                </ul>
        </div>
    </div>
</div>



