<div class="center">
    <ul class="reviews">
        <li>
            <div class="review_date">
                <?= date('M d, Y') ?>
            </div>
            <div class="review_content">
                <div class="review_icon">
                    <div class="fake_icon"></div>
                </div>
                <div class="right_labels">
                    <div class="price"></div>
                </div>
                <div class="clear"></div>
                <div class="name"></div>
                <div class="description"></div>
            </div>
        </li>
    </ul>
    <?= Form::open(Route::url('review_preview')) ?>
    <div class="review_add_form">
        <div>
            <div class="input icon">1. Upload icon</div>
            <div class="button" id="iconuploader">Browse</div>
        </div>
        <div>
            <?= Form::input('price', '', array('class' => 'input mini', 'placeholder' => '2. Price', 'for' => 'price')) ?>
            <?= Form::radio('price', 0, false, array('id' => 'price')) ?>
            <div class="input mini" for="free">Free</div>
            <?= Form::radio('price', 0, false, array('id' => 'free')) ?>
        </div>
        <div>
            <?= Form::input('name', '', array('class' => 'input midi', 'placeholder' => '3. Type your app name')) ?>
        </div>
        <div>
            <div class="review_short_description">
                <?= Form::textarea('description', '', array('placeholder' => '4. Type short description')) ?>
            </div>
        </div>
        <div>
            <div class="review_description">
                <?= Form::textarea('description', '', array('placeholder' => '4. Type the description')) ?>
            </div>
        </div>
        <div>
            <?= Form::input('ref_ios', '', array('class' => 'input store_link', 'placeholder' => '5. Appstore link')) ?>
            <?= HTML::image('/media/images/bages/appstore.png') ?>
        </div>
        <div>
            <?= Form::input('ref_andr', '', array('class' => 'input store_link', 'placeholder' => '6. Google Play link')) ?>
            <?= HTML::image('/media/images/bages/gplay.png') ?>
        </div>
        <div>
            <?= Form::input('ref_bb', '', array('class' => 'input store_link', 'placeholder' => '7. BlackBerry link')) ?>
            <?= HTML::image('/media/images/bages/bbstore.png') ?>
        </div>
        <div>
            <?= Form::input('ref_win', '', array('class' => 'input store_link', 'placeholder' => '8. Windows Mobile link')) ?>
            <?= HTML::image('/media/images/bages/winstore.png') ?>
        </div>
        <div>
            <span class="button" id="fileuploader">Browse</span>
        </div>
        <div>
            <div class="jcarousel-wrapper" style="height: 240px">
                <div class="jcarousel-frame-wrapper">
                    <div class="jcarousel-frame">
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <div class="jcarousel-prev">
                            <div class="transparent"></div>
                            <span></span>
                        </div>
                        <div class="jcarousel-next">
                            <div class="transparent"></div>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="jcarousel">
                    <ul>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <?= Form::input('tube_link', '', array('class' => 'input big', 'placeholder' => '10. YouTube link')) ?>
            <span class=" social youtube">&nbsp;</span>
        </div>
        <div>
            <?= Form::input('facebook', '', array('class' => 'input big', 'placeholder' => '11. Facebook link')) ?>
            <span class="social facebook">&nbsp;</span>
        </div>
        <div>
            <?= Form::input('twitter', '', array('class' => 'input big', 'placeholder' => '12. Twitter link')) ?>
            <span class="social twitter">&nbsp;</span>
        </div>
        <div>
            <?= Form::input('vk', '', array('class' => 'input big', 'placeholder' => '13. VK link')) ?>
            <span class="social vkontakte">&nbsp;</span>
        </div>
        <div>
            <?= Form::input('google', '', array('class' => 'input big', 'placeholder' => '14. Google+ link')) ?>
            <span class="social google">&nbsp;</span>
        </div>
        <div class="buttons">
            <?= Form::button(false, 'Cancel', array('class' => 'button')) ?>
            <?= Form::submit(false, 'Submit', array('class' => 'button')) ?>
        </div>

        <?= Form::close(); ?>
    </div>
</div>
<div class="clear"></div>
<script type="text/javascript">
    $(function () {
        $('.review_add_form > div').not(':last').append('<span class="checkbox">&nbsp;</span>');

        $(':text').on('focus',function () {
            $(this).addClass('filled');
        }).on('blur', function () {
            var checkbox = $(this).parent().find('span.checkbox');
            if ($(this).val() == '') {
                $(this).removeClass("filled");
                checkbox.removeClass('checked');
            } else {
                var field = $(this).prop('name');
                $('.review_content .' + field).text($(this).val());
                checkbox.addClass('checked');
                if ($(this).hasClass('store_link')) {
                    $('.hidden').show();
                }
            }
        });
        $('textarea').on('focus',function () {
            $(this).parent().addClass('filled');
        }).on('blur', function () {
            var checkbox = $(this).parent().parent().find('span.checkbox');
            if ($(this).val() == '') {
                $(this).parent().removeClass('filled');
                checkbox.removeClass('checked');
            } else {
                $('.review_content .description').text($(this).val());
                checkbox.addClass('checked');
            }
        });

        $('.input.mini').on('click', function () {
            $(this).addClass('filled').siblings().removeClass('filled');
            $(':radio').prop('checked', false);
            $('#' + $(this).attr('for')).prop('checked', true);
        });

        $("#iconuploader").uploadFile({
            url: '<?= Route::url('images-new', array('action' => 'upload'))?>',
            dragDrop: false,
            showAbort: false,
            doneStr: '',
            maxFileSize: 2000000,
            showFileCounter: false,
            onSuccess: function (files) {
                $('.review_icon').html('<img src="/reviews/temp/' + files[0] + '">');
                $('.input.icon').html(files[0]).addClass('filled');
            }

        });

        $("#fileuploader").uploadFile({
            url: '<?= Route::url('images-new', array('action' => 'upload'))?>',
            dragDropStr: '',
            doneStr: '',
            maxFileSize: 2000000,
            showFileCounter: false,
            onSuccess: function (files) {
                var image = $('<li>').html('<img width="216" height="200" src="/reviews/temp/' + files[0] + '">');
                $('.jcarousel ul').append(image);
            }

        });
    });
</script>