<?$cols = $obj->table_columns();?>
<table border="1" cellspacing="0" cellpadding="3">
<?foreach ($cols as $i=>$v):?>
<tr>
	<th><?=$i?></th>
	<td><?=$obj->$i?></td>
</tr>
<?endforeach;?>
</table>