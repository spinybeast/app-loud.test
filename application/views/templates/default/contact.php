<div class="center contact-page">
    <div class="information_page">
        <h1 class="contact">Contact us</h1>

        <div class="description contact">
            <div>
                We love getting messages. Feel free to ask any questions about this resource, request a review or
                promotion
                for your new app, and, certainly, feedbacks. Just fill the form below and send it. We're waiting for
                your
                messages.
                <p>
                    <span class="important">*</span> Please, note: all the fields required.
                </p>
            </div>
            <?= Form::open() ?>
            <div>
                <span class="important" id="senderNameError"></span><br/>
                <?= Form::label("senderName", "Name") ?>
                <?= Form::input("senderName", "", array("id" => "senderName")) ?>
            </div>
            <div>
                <div class="clear"></div>
                <span class="important" id="senderEmailError"></span> <br/>
                <?= Form::label("senderEmail", "E-mail") ?>
                <?= Form::input("senderEmail", "", array("id" => "senderEmail")) ?>
            </div>
            <div>
                <div class="clear"></div>
                <span class="important" id="mailSubjectError"></span><br/>
                <?= Form::label("mailSubject", "Subject") ?>
                <?=
                Form::select("mailSubject", array(
                    "" => "",
                    "Question" => "Question",
                    "Review" => "Review",
                    "Promotion" => "Promotion",
                    "Advertising" => "Advertising",
                    "Other" => "Other"), "", array("id" => "mailSubject"))
                ?>
            </div>
            <div>
                <div class="clear"></div>
                <span class="important" id="mailTextError"></span><br/>

                <div class="text">
                    <?= Form::textarea("mailText", "", array("id" => "mailText")) ?>
                </div>
            </div>
            <div class="send">
                <span class="type">Type symbols from picture</span>
                <span class="important" id="captchaError"></span> <br/>
                <?= Form::input("captcha", "", array("id" => "captcha")) ?>
                <?= Captcha::instance() ?>
                <img class="ajax_loader" src="/media/images/main/ajax_loader.gif" alt=""/>
                <button class="button" onclick="checkContactsForm(); return false;">Send Message</button>
                <span class="important" id="mailError"></span>
            </div>
            <?= Form::close() ?>
        </div>
    </div>
</div>
