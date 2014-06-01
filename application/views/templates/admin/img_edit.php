<div style="width:670px;overflow-x: scroll;">
		<table id="imglist" border="1" cellspacing="0" cellpadding="3" width="<?=count($images)*130?>"  >
			<tr> 
			<?for ($i = 0; $i < count($images); $i++):?>
				<td valign="top" width="130"align="center">
				 	<div>
						<span style="cursor:pointer;" onclick="move_lt(this)"> << </span><span><?=$i+1?></span><span style="cursor:pointer;" onclick="move_rt(this)"> >> </span>
					</div>
					<?=isset($images[$i])?HTML::image($images[$i], array("width"=>"120") ):''?>
					<?=Form::hidden('rev_image_name[]', pathinfo(@$images[$i], PATHINFO_BASENAME) )?>
					<br>
					<span onclick="del_img(this)">delete</span>
				</td>
			<?endfor;?>
			</tr>
		</table>
</div>
<br>
<a id="upload1" style="padding:3px; border-radius:3px; background-color:#ccc;" href="#">Add file</a>
<span id="progress1"></span>
<br>
 
<script>
function del_img(obj){
	fname = $(obj).prev().prev().val()
	$.get( "/admin/review/imgdel/"+'<?=$rev_id?>' , {file:fname}, function(data){
		if(data != 'OK'){
			alert(data); return 0;
		}else{//ok, remove td
			$(obj).parent().remove();
			//fix table wigth
			num = $("#imglist tr").find("td").length
			$("#imglist").attr("width", num*130)
			//recount nums
			$("#imglist td").each(function (i, obj){
				 
				$(obj).find("span:first").next().text(i+1);  
			})
						
			 
		}
	})//on data
    .error(function(h,t) { 
		alert("Request error: "+
				"\n    status:"+h.status+'\n    text:'+h.statusText+"\n    "+t );
    });// end post	
	
}

function move_lt(obj){
	td = $(obj).parent().parent();
	ptd = $(td).prev("td") ;
	if( $(ptd).prop('tagName') != undefined ){
		n1 = parseInt( $(obj).next("span").text() );
		pp = $(ptd).find("span:first").next("span");
		n2 = parseInt( $(pp).text() );
		$(pp).text( n1 );
		$(obj).next("span:first").text( n2 );
		$(td).insertBefore( $(ptd) );
	}
}

function move_rt(obj){	
	td = $(obj).parent().parent();
	ntd = $(td).next("td") ;
	if( $(ntd).prop('tagName') != undefined ){		 
		n1 = parseInt( $(obj).prev("span").text() );
		pp = $(ntd).find("span:first").next("span");
		n2 = parseInt( $(pp).text() );
		$(pp).text( n1);
		$(obj).prev("span").text( n2 );
		$(ntd).insertBefore( $(td) );
	}
}

var myUpload = $('#upload1').upload({
	name: 'file',
	method: 'post',
	enctype: 'multipart/form-data',
	action: '/admin/review/imgupload/'+'<?=$rev_id?>',
	autoSubmit: false,
	onSubmit: function() {
		 
		$('#progress1').text('Sending file...');
	},
	onSelect: function() { 
		 
		myUpload.autoSubmit = false;
		if($("#imglist tr").find("td").length + 1 < 10)  
			{myUpload.submit();}
		else
			{alert('Sorry, 10 files max');}		  
	},
	onComplete: function(data) {
		 
		$('#progress1').text('File send success, result: '+data);
		if( data.indexOf('OK.') != -1 ){
			st = data.indexOf("FILE:[") + 6;
			en = data.indexOf("]", st);
			fn = data.substring(st, en) 			 
			num = $("#imglist tr").find("td").length + 1
			$("#imglist").attr("width", num*130)			
			$("#imglist tr").append(''+
				'<td valign="top" width="130">'+
				'	<div align="center">'+
				'		<span style="cursor:pointer;" onclick="move_lt(this)"> &lt;&lt; </span>'+
				'		<span>'+num+'</span>'+
				'		<span style="cursor:pointer;" onclick="move_rt(this)"> &gt;&gt; </span>'+
				'	</div>'+
				'	<img src="/images/list/<?=$rev_id?>/'+fn+'" width="120">'+
				'	<input type="hidden" name="rev_image_name[]" value="'+fn+'">'+
				'	<br>'+
				'	<span onclick="del_img(this)">delete</span>'+
				'</td>');	
		 
		}
	}
});
</script>

