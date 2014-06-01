<h3>
    <?= $review->id ? 'Edit "' . $review->name . '"' : 'Add review' ?>
</h3>

<?= Form::open('/admin/review/update/' . $review->id, array('enctype' => 'multipart/form-data')) ?>
<table class="table table-bordered">
<tr>
    <th>Name</th>
    <td><?= Form::input('rev_name', $review->name) ?></td>
</tr>
<tr>
    <th>Icon</th>
    <td>
        <?php if ($review->id): ?>
            <table>
                <tr>
                    <td>
                        old icon<br>
                        <img src="/images/icon/icon-<?= $review->id ?>.png" class="artwork"/>
                        <!--  <span class="mask"  ></span>  -->
                        <br>
                        <a id="upload_icon" style="padding:3px; border-radius:3px; background-color:#ccc;" href="#">Change
                            file</a>
                    </td>
                    <td> =></td>
                    <td>
                        new icon<br>
                        <img id="new_icon" src="/images/iconnew/icon-<?= $review->id ?>.png" class="artwork"/>
                        <!--  <span class="mask"  ></span>  -->
                        <br>
                        <a style="padding:3px; border-radius:3px; background-color:#ccc;" href="#"
                           onclick="del_newicon()">Left old (remove this)</a>
                    </td>
                </tr>
            </table>
        <?php else: ?>
            <div class="input-append">
                <input class="span4" id="appendedInputButton" type="text">
                <button class="btn btn-primary" type="button">Upload</button>
            </div>
        <? endif; ?>
        <br>
        <span id="progress_icon"></span>
        <script>
            function del_newicon() {
                $.get("/admin/review/icondel/" + '<?=$review->id?>', {}, function (data) {
                    if (data != 'OK') {
                        alert(data);
                        return 0;
                    } else {//ok, remove td
                        d = new Date();
                        $("#new_icon").attr("src", "/images_/icon/icon-<?=$review->id?>.png?" + d.getTime());
                    }
                })//on data
                    .error(function (h, t) {
                        alert("Request error: " +
                            "\n    status:" + h.status + '\n    text:' + h.statusText + "\n    " + t);
                    });// end post

            }
            var myUpload = $('#upload_icon').upload({
                name: 'file',
                method: 'post',
                enctype: 'multipart/form-data',
                action: '/admin/review/iconupload/' + '<?=$review->id?>',
                autoSubmit: false,
                onSubmit: function () {
                    $('#progress_icon').text('Sending file...');
                },
                onComplete: function (data) {
                    $('#progress_icon').text('File send success, result: ' + data);
                    d = new Date();
                    $("#new_icon").attr("src", "/images_/iconnew/icon-<?=$review->id?>.png?" + d.getTime());
                }
            });
        </script>
    </td>
</tr>

<tr>
    <th>Description</th>
    <td><?= Form::textarea('rev_desc', $review->description) ?></td>
</tr>
<tr>
    <th>Images</th>
    <td><?= $images_block ?></td>
</tr>
<tr>
    <th valign="top">Select platform</th>
    <td>
        <ul class="nav nav-tabs" id="myTab">
            <?php foreach (Filter_Platforms::getAllIcons() as $name => $icon): ?>
                <li>
                    <a href="#<?= $name ?>" data-toggle="tab">
                        <?= $icon ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="tab-content">
            <div class="tab-pane" id="iOS">
                Store link
                : <?= Form::input('rev_ref_ios', isset($review->ref_ios) ? $review->ref_ios : "", array("style" => "width:80%")) ?>
                <br>
                <table>
                    <tr>
                        <th>Primary category (required)</th>
                        <th>Secondary category (optional)</th>
                    </tr>
                    <tr>
                        <td><?= Form::select('rev_category_ios[]', $cat_list_ios, $cat_sel_ios, array('multiple' => 'multiple')) ?></td>
                        <td><?= Form::select('rev_category_ios[]', $cat_list_ios, $cat_sel_ios, array('multiple' => 'multiple')) ?></td>
                    </tr>
                </table>
            </div>
            <div class="tab-pane" id="googleplay">
                <?= __('Store link') ?>: <?= Form::input('rev_ref_andr', $review->ref_andr) ?>
                <?= __('Category') ?>
                <?= Form::select('rev_category_andr[]', $cat_list_andr, $cat_sel_andr, array('multiple' => 'multiple')) ?>
            </div>
            <div class="tab-pane" id="blackberry">
                <?= __('Store link') ?>: <?= Form::input('rev_ref_bb', $review->ref_bb) ?>
                <?= __('Category') ?>
                <?= Form::select('rev_category_bb[]', $cat_list_bb, $cat_sel_bb, array('multiple' => 'multiple')) ?>
            </div>
            <div class="tab-pane" id="windowsphone">
                <?= __('Store link') ?>: <?= Form::input('rev_ref_win', $review->ref_win) ?>
                <?= __('Category') ?>
                <?= Form::select('rev_category_win[]', $cat_list_win, $cat_sel_win, array('multiple' => 'multiple')) ?>
            </div>
        </div>

    </td>
</tr>
<!--
	<tr >
		<th><?= __('iOS link') ?></th>
		<td><?= Form::input('rev_ref_ios', isset($review->ref_ios) ? $review->ref_ios : "") ?></td>
	</tr>
	<tr >
		<th><?= __('Category') ?> iOS</th>
		<td><?= Form::select('rev_category_ios[]', $cat_list_ios, $cat_sel_ios, array('multiple' => 'multiple')) ?></td>
	</tr>
	
	<tr class="tab-pane active" id="googleplay">
		<th><?= __('Android link') ?></th>
		<td><?= Form::input('rev_ref_andr', $review->ref_andr) ?></td>
	</tr>
	<tr>
		<th><?= __('Category') ?> Android</th>
		<td><?= Form::select('rev_category_andr[]', $cat_list_andr, $cat_sel_andr, array('multiple' => 'multiple')) ?></td>
	</tr>
	
	<tr>
		<th><?= __('BlackBerry link') ?></th>
		<td><?= Form::input('rev_ref_bb', $review->ref_bb) ?></td>
	</tr>
	<tr>
		<th><?= __('Category') ?> BlackBerry</th>
		<td><?= Form::select('rev_category_bb[]', $cat_list_bb, $cat_sel_bb, array('multiple' => 'multiple')) ?></td>
	</tr>
	
	<tr>
		<th><?= __('Win link') ?></th>
		<td><?= Form::input('rev_ref_win', $review->ref_win) ?></td>
	</tr>
	<tr>
		<th><?= __('Category') ?> Windows</th>
		<td><?= Form::select('rev_category_win[]', $cat_list_win, $cat_sel_win, array('multiple' => 'multiple')) ?></td>
	</tr>
 -->
<tr>
    <th>YouTube id</th>
    <td><?= Form::input('rev_tube_link', $review->tube_link) ?></td>
</tr>
<tr>
    <th>Vimeo id</th>
    <td><?= Form::input('rev_meow_link', $review->meow_link) ?></td>
</tr>
<tr>
    <th>Price</th>
    <td>
        <label class="checkbox">
            <?= Form::checkbox('rev_is_free', 0, $review->price == 0) ?>
            Free
        </label>

        <div class="input-prepend input-append">
            <span class="add-on">Price</span>
            <?= Form::input('rev_price', $review->price, array('class' => 'span2')) ?>
            <span class="add-on">$</span>
        </div>
    </td>
</tr>
<tr>
    <th>Date post</th>
    <td>
        <?php $datePost = $review->date_post > 0 ? date('d/m/Y', $review->date_post) : date('d/m/Y');?>
        <div class="input-append date" data-date="<?= $datePost ?>" data-date-format="dd-mm-yyyy">
            <?= Form::input('rev_date_post', $datePost, array('class' => 'span2 datepicker', 'readonly' => '')) ?>
            <span class="add-on"><i class="icon-calendar"></i></span>
        </div>
    </td>
</tr>
<tr>
    <th>Vip</th>
    <td><?= Form::input('rev_vip', $review->vip) ?></td>
</tr>
<tr>
    <th>Rating</th>
    <td><?= Form::input('rev_rating', $review->rating) ?></td>
</tr>
<tr>
    <th>Favorite</th>
    <td><?= Form::input('rev_favorite', $review->favorite) ?></td>
</tr>

<tr>
    <td colspan="2">
        <?= Form::submit('cat_submit', __('Submit'), array('onclick' => 'check_form()', 'class' => 'btn btn-primary')) ?>
    </td>
</tr>
</table>
<?= Form::close() ?>

<script>

    $("#myTab a").click(function (e) {
        $("#myTab a:last").tab("show");
    })

    $(".datepicker").datepicker({format: "dd/mm/yyyy"});
    function check_form() {

        return true;
    }


</script>
 