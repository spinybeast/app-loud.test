<a href="<?= '/admin/review/edit/new' . time() ?>" class="btn btn-primary pull-right">
    <i class="icon-pencil icon-white"></i>
    Add review
</a>

<h3>Review admin</h3>

<table class="table table-bordered">
    <tr>
        <th width="20">id</th>
        <th width="125">date</th>
        <th width="300">name</th>
        <th width="90">platforms</th>
        <th>video</th>
        <th>vip</th>
        <th>rating</th>
        <th>price</th>
        <th>favorite</th>
        <th>categories</th>
        <th>del</th>
    </tr>
    <!-- id 	_last_time 	_last_user 	name 	description 	parent_id  -->
    <? foreach ($review_list as $review): ?>
        <tr>
            <td><?= $review->id ?></td>
            <td><?= date("d.m.Y H:i:s", $review->date_post) ?></td>
            <td><?= HTML::anchor('/admin/review/edit/' . $review->id, $review->name) ?></td>
            <td><?= Filter_Platforms::getIcons($review->platforms) ?></td>
            <td><?= ($review->tube_link ? 'YouTube' : '') . ($review->meow_link ? 'Vimeo' : '') ?></td>
            <td><?= $review->vip ?></td>
            <td><?= $review->rating ?></td>
            <td><?= $review->price ?></td>
            <td><?= $review->favorite ?></td>
            <td><?= implode(', ', $review->categories->find_all()->as_array('id', 'name')) ?></td>
            <td style="text-align: center"><a class="close" style="float: none;" onclick='confirm_del(this)'>&times;</a>
            </td>

        </tr>
    <? endforeach; ?>
</table>