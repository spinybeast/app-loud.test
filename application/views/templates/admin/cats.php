<a href="<?='/admin/category/edit/0' . time()?>" class="btn btn-primary pull-right">
    <i class="icon-pencil icon-white"></i>
    Add category
</a>

<h3>Category admin</h3>

<table class="table table-bordered">
<thead>
<tr>
	<th data-sort="int">id</th>
	<th data-sort="string">name</th>
	<th data-sort="string">description</th>
	<th data-sort="string">parent</th>
	<th data-sort="int">platform</th>
	<th data-sort="int">reviews</th>
	<th data-sort="int">del</th>	
</tr>
</thead>
<tbody>
<!-- id 	_last_time 	_last_user 	name 	description 	parent_id  -->
<?foreach ($cat_list as $cat):?>
<tr>
	<td><?=$cat->id?></td>
	<td><?=HTML::anchor('/admin/category/edit/'.$cat->id, $cat->name)?></td>
	<td><?=$cat->description?></td>
	<td><?=$cat->parent->name?></td>
	<td><?=Filter_Platforms::getIcons($cat->platform)?></td>
	<td><?=$cat->rev_num?></td>
	<td style="text-align: center"><a class="close" style="float: none;"onclick='confirm_del(this)'>&times;</a></td>
</tr>
<?endforeach;?>
</tbody>
</table>		
<script>
	function confirm_del(obj){
		id = $(obj).parent().parent().find('td:first').text();
		if( confirm("Delete cat "+id+"?") )
			$.get( "/admin/category/delete/"+id , {}, function(data){
				if(data != 'OK'){
					alert(data); return 0;
				}else{//ok, remove row
					row = $(obj).parent().parent().remove();
				}
			})//on data
		    .error(function(h,t) { 
	    		alert("Request error: "+
	    				"\n    status:"+h.status+'\n    text:'+h.statusText+"\n    "+t );
	        });// end post	

	}
</script>
