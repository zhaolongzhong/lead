<?php include './assets/template/header_admin.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://sandbox.scriptiny.com/table-sorter/style.css" />
<script type="text/javascript">
$(document).ready(function () {

    (function ($) {

        $('#filter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('.searchable tr').hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

});
</script>
</head>
<div class="container">
		<div class="row">
				
			<div id="content" class="span12">

<h2>Volunteers</h2>

<?php echo $msg;?>
<input id="filter" type="text" class="" placeholder="Search here...">

<div class="well">

<div>
<body>
	
	<table cellpadding="0" cellspacing="0" border="0" id="table" class="sortable" style="width:1000px">

		<thead>
		<tr>
		 	<th>Email</th>
		 	<th>Age</th>
			<th>First Name</th>		
			<th>Last Name</th>
			<th>Active</th>
			<th>Approved</th>
			<th>Address</th>
			<th>City</th>
			<th>State</th>
			<th>Primary Phone</th>
			<th>Alternative Phone</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody class="searchable">
		<?php 
		foreach ($query as $volunteer)
		{
		?>
		<tr>
			<td><?php echo $volunteer->username; ?></td>
			<td><?php echo $volunteer->age; ?></td>
			<td><?php echo $volunteer->fname; ?></td>
			<td><?php echo $volunteer->lname; ?></td>
			<td><?php echo $volunteer->activevolunteer; ?></td>
			<td><?php echo $volunteer->approved; ?></td>
			<td><?php echo $volunteer->streetaddress; ?></td>
			<td><?php echo $volunteer->city; ?></td>
			<td><?php echo $volunteer->statecode; ?></td>
			<td><?php echo $volunteer->primaryphone; ?></td>
			<td><?php echo $volunteer->altphone; ?></td>
			<td>
			<a href="<?php echo base_url(); ?>volunteer_update?username=<?php echo $volunteer->username; ?>">Edit</a>
			<a href="<?php echo base_url(); ?>volunteer/approve?username=<?php echo $volunteer->username; ?>">Approve</a>
			</td>
		<tr>
		<?php
		}
		?>
		</tbody>
	</table>
	<div id="controls">
		<div id="perpage">
			<select onchange="sorter.size(this.value)">
				<option value="10" selected="selected">5</option>
				<option value="20" >10</option>
				<option value="40" >30</option>
			</select>
			<span>Entries Per Page</span>
		</div>
		<div id="navigation">
			<img src="http://sandbox.scriptiny.com/table-sorter/images/first.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" />
			<img src="http://sandbox.scriptiny.com/table-sorter/images/previous.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" />
			<img src="http://sandbox.scriptiny.com/table-sorter/images/next.gif" width="16" height="16" alt="First Page" onclick="sorter.move(1)" />
			<img src="http://sandbox.scriptiny.com/table-sorter/images/last.gif" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" />
		</div>
		Displaying Page <span id="currentpage"></span> of <span id="pagelimit"></span></div>
	</div>
	<script type="text/javascript" src="http://sandbox.scriptiny.com/table-sorter/script.js"></script>
	<script type="text/javascript">
        var sorter = new TINY.table.sorter("sorter");
	sorter.head = "head";
	sorter.asc = "asc";
	sorter.desc = "desc";
	sorter.even = "evenrow";
	sorter.odd = "oddrow";
	sorter.evensel = "evenselected";
	sorter.oddsel = "oddselected";
	sorter.paginate = true;
	sorter.currentid = "currentpage";
	sorter.limitid = "pagelimit";
	sorter.init("table",1);
  </script>

	
</body>
</div>

</div>


			</div>
		
		</div>
	</div>
</html>
<?php include './assets/template/footer_1.php'; ?>





