<h3>
    <?= $category->id > 0 ? ('Edit `'.$category->name.'`') : 'Add category'?>
</h3>
<?=Form::open('/admin/category/update/'.$category->id)?>
<table class="table table-bordered">
<tr>
	<th><?=__('Name')?></th>
	<td><?=Form::input('cat_name', $category->name )?></td>
</tr>
<tr>
	<th><?=__('Description')?></th>
	<td><?=Form::textarea('cat_desc', $category->description)?></td>
</tr>
<tr>
	<th><?=__('Platform')?></th>
	<td><?=Form::select('cat_platform', Filter_Platforms::getAll(), $category->platform)		?></td>
</tr>
<tr>
	<th><?=__('Parent')?></th>
	<td align="right">
		iOS: <?=Form::select('cat_parent_ios', $cat_list_ios, $category->parent_id)?><br>
		Andr: <?=Form::select('cat_parent_andr', $cat_list_andr, $category->parent_id)?><br>
		BB: <?=Form::select('cat_parent_bb', $cat_list_bb, $category->parent_id)?><br>
		Win: <?=Form::select('cat_parent_win', $cat_list_win, $category->parent_id)?>
		</td>
</tr>
<tr>
	<td colspan="2"><?=Form::submit('cat_submit', __('Submit'), array('class' => 'btn btn-primary'))		?></td>
</tr>
</table>
<?=Form::close()?>