<? $user = Flight::get('user'); ?>
<div class="contact-container col-md-12 col-sm-12">
    <div class="col-md-6 col-xs-12 center">
        <div class="contactform">
            <form id="contact_form" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="recipient" value="<?=$user->email?>">

                <div class="form-group">
                <label class="control-label" for="name"><?= __('Name') // label for name field ?>:</label>
                <input type="text" placeholder="<?= __('Name') // placeholder for name field?>" class="form-control input" name="name" id="name" size="30" value="" /><br />
                </div>

                <div class="form-group">
                <label class="control-label" for="email"><?= __('Email') // label for email field ?>:</label>
                <input type="text" placeholder="<?= __('Email') // label for email field ?>" class="form-control input" name="email" id="email" size="30" value="" /><br />
                </div>

                <div class="form-group">
                <label for="phone" class="control-label"><?= __('Phone') // label for phone field?>:</label><input class="form-control" type="text" name="phone" placeholder="<?= __('phone') // placeholder for phone field?>" id="phone" size="12" value="" /><br />
                </div>

                <div class="form-group">
                <label class="control-label" for="message"><?= __('Message') // label for message field ?>:</label>
                <textarea name="message" class="form-control" id="message" rows="5" cols="35"></textarea><br />
                </div>

                <div class="form-group">
                <button class="btn btn-default" name="submit" value="Submit"><?= __('Submit') // label for submit button ?></button>
                </div>

                <div style='clear:both'></div>
                <br/>
               <div id="form-messages" role="alert"></div>
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



