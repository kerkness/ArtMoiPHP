<div class="contact-container col-md-12 col-md-offset-2">
    <div class="col-md-3 col-xs-12 center-block"><img src="/images/contact.jpg" class="img-responsive"></div>
    <div class="col-md-5 col-xs-12 center-block">
       <span class="emailto"> Please send an email to <script type="text/javascript"> document.write("<n uers=znvygb:naqerj@naqerjinyxb.pbz>naqerj@naqerjinyxb.pbz</n>".replace(/[a-zA-Z]/g, function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);})); </script> or fill in the contact form below.		<br clear="all" /></span>
        <div class="contactform">

            <form action="/views/contact/email.php" id="contact_form" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="recipient" value="<?=USER_EMAIL?>">
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
</div>
