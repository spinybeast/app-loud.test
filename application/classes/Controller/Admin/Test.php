<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Test extends Controller_Admin_Template
{

    public function action_index()
    {
        $this->template->js[] = '/media/js/jquery-ui.js';
        $this->template->css['/media/css/jquery-ui.css'] = 'screen';


        $this->template->content .= '
		test<br>' .
            HTML::anchor('/admin/test/datebs', 'datebs') . '<br>' .
            HTML::anchor('/admin/test/tables', 'tables') . '<br>' .
            HTML::anchor('/admin/test/files', 'files') . '<br>' .
            HTML::anchor('/admin/test/tabs', 'tabs') . '<br>' .
            ' ';
    }

    public function action_tabs()
    {
        $this->template->js[] = '/assets/js/bootstrap-tab.js';
        $this->template->content .= 'test tabs js';

        $this->template->content .= '
		<ul class="nav nav-tabs" id="myTab">
			<li><a href="#home" data-toggle="tab">Home</a></li>
			<li><a href="#profile" data-toggle="tab">Profile</a></li>
			<li><a href="#messages" data-toggle="tab">Messages</a></li>
			<li><a href="#settings" data-toggle="tab">Settings</a></li>
		</ul>
		
		<div class="tab-content">
			<div class="tab-pane active" id="home">home</div>
			<div class="tab-pane" id="profile">profile</div>
			<div class="tab-pane" id="messages">messages</div>
			<div class="tab-pane" id="settings">settings</div>
		</div>
 
		<script>
		    $("#myTab a").click(function (e) {
		  	  
			  	$("#myTab a:last").tab("show");

			})
		</script>

		';

    }

    public function action_tables()
    {
        $this->template->js[] = 'media/js/stupidtable.min.js';

        $this->template->content .= 'test stupidtable js';

        $this->template->content .= '
 <table id="complexTable">
      <thead>
        <tr>
          <th data-sort="int" class="awesome">int</th>
          <th data-sort="float">float</th>
          <th data-sort="string">string</th>
          <th>Can`t sort me!</th>
          <th data-sort="date">date</th>
          <th data-sort="int">Letter frequency</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>15</td> <td>-.18</td> <td>banana</td> <td>arbitrary</td>
          <td>Mar 15, 1986</td><td data-sort-value="1">E</td>
        </tr>
        <tr class="awesome">
          <td>95</td> <td>36</td> <td></td> <td>pointless</td>
          <td>Feb 27, 2086</td><td data-sort-value="2">T</td>
        </tr>
        <tr>
          <td>2</td> <td>-152.5</td> <td></td> <td>silly</td>
          <td>Aug 07, 2004</td><td data-sort-value="3">A</td>
        </tr>
        <tr>
          <td>-53</td> <td>88.5</td> <td>hello</td> <td>eccentric</td>
          <td>Sep 15, 2002</td><td data-sort-value="4">O</td>

        </tr>
        <tr>
          <td>195</td> <td>-858</td> <td>orange</td> <td>garbage</td>
          <td>Mar 15, 1986</td><td data-sort-value="5">I</td>
        </tr>
      </tbody>

    </table>		
				';

        $this->template->content .= '
		  <script>
var date_from_string = function(str){
    var months = ["jan","feb","mar","apr","may","jun","jul",
    "aug","sep","oct","nov","dec"];
    var pattern = "^([a-zA-Z]{3})\\s*(\\d{2}),\\s*(\\d{4})$";
    var re = new RegExp(pattern);
    var DateParts = re.exec(str).slice(1);

    var Year = DateParts[2];
    var Month = $.inArray(DateParts[0].toLowerCase(), months);
    var Day = DateParts[1];
    return new Date(Year, Month, Day);
}

var table = $("#complexTable").stupidtable({
    "date":function(a,b){
        // Get these into date objects for comparison.
        aDate = date_from_string(a);
        bDate = date_from_string(b);

        return aDate - bDate;
    }
});		  </script>
		
		';

    }


    public function action_datebs()
    {
        $this->template->css['/assets/css/datepicker.css'] = 'screen';
        $this->template->js[] = '/assets/js/bootstrap-datepicker.js';

        $this->template->content .= 'test datepicker boo strap';

        $this->template->content .= Form::input('rev_date_post', date('d/m/Y'), array('class' => 'datepicker'));

        $this->template->content .= '
		<script>		 
		$( ".datepicker" ).datepicker({format:"dd/mm/yyyy"});
		</script>
		';

    }

    public function action_files()
    {
        $this->template->css['/assets/css/bootstrap-image-gallery.min.css'] = 'screen';
        $this->template->css['/assets/css/jquery.fileupload-ui.css'] = 'screen';

        $this->template->js[] = '/assets/js/bootstrap-datepicker.js';

        $this->template->content .= 'test files';

        $this->template->content .= View::factory("{$this->folder}/{$this->layout}/fileupload", array());


    }


}	