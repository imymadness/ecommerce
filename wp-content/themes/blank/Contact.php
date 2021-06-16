<?php
	/* Template Name: CONTACT */

	get_header();
?>


<html>
    
    <body>

       <form id="contact-form" method="post" action="" role="form">

    <div class="messages"></div>


  <div class="jumbotron" style="margin: 50px; margin-left: 240px; margin-right: 210px; ">
    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group" style="color: yellow;">
                    <label for="form_name">Firstname *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group" style="color: yellow;">
                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group" style="color: yellow;">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group" style="color: yellow;">
                    <label for="form_need">Number *</label>
                    <input id="form_need" type="text" name="need" class="form-control" placeholder="Please enter your number *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group" style="color: yellow;">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Let us hear your concerns/questions. *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="reset" onclick="hello();" class="btn btn-success btn-send" value="Send message">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="color: yellow;">
                <p class="text-muted" style="text-align: center; ">
                    <strong>*</strong> Thank you for supporting Pasticcini </p>
            </div>
        </div>
    </div>

</form>

</div>
    </body>
</html>

<script type="application/javascript">

function hello()
{
  alert("Message sent successfully! We'll respond to you ASAP, Thank you!");
}
</script>

<?php
 get_footer();
?>