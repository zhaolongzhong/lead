<?php include './assets/template/header_admin.php'; ?>
<link rel="stylesheet" href="http://sandbox.scriptiny.com/table-sorter/style.css" />
<div class="container">
		<div class="row">
				
			<div id="content" class="span12">
<h1>Phone</h1>

<div class="well">
	<table cellpadding="0" cellspacing="0" border="0" id="phone" class="sortable" style="width:1000px" name='phone'>
		<thead>
		<tr>
		 	<th>Email</th>
			<th>First Name</th>		
			<th>Last Name</th>
			<th>Primary Phone</th>
			<th>Alternative Phone</th>
		</tr>
		</thead>
		<tbody>
		<?php 
		foreach ($query as $volunteer)
		{
		?>
		<tr>
			<td><?php echo $volunteer->username; ?></td>
			<td><?php echo $volunteer->fname; ?></td>
			<td><?php echo $volunteer->lname; ?></td>
			<td><?php echo $volunteer->primaryphone; ?></td>
			<td><?php echo $volunteer->altphone; ?></td>
		<tr>
		<?php
		}
		?>
		</tbody>
	</table>
		<div id="controls">
		<div id="perpage">
			<select onchange="sorter.size(this.value)">
			<option value="5">5</option>
				<option value="10">10</option>
				<option value="20">20</option>
				<option value="50" selected="selected">50</option>
				<option value="100">100</option>
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
</div>

<a id="dlink"  style="display:none;"></a>

<input type="button" onclick="tableToExcel('phone', 'Phone', 'Phone.xls')" value="Export to Excel">

<script type="text/javascript">
	
	var tableToExcel = (function () {
        var uri = 'data:application/vnd.ms-excel;base64,'
        , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
        , base64 = function (s) { return window.btoa(unescape(encodeURIComponent(s))) }
        , format = function (s, c) { return s.replace(/{(\w+)}/g, function (m, p) { return c[p]; }) }
        return function (table, name, filename) {
            if (!table.nodeType) table = document.getElementById(table)
            var ctx = { worksheet: name || 'Worksheet', table: table.innerHTML }

            document.getElementById("dlink").href = uri + base64(format(template, ctx));
            document.getElementById("dlink").download = filename;
            document.getElementById("dlink").click();

        }
    })()
</script>

			</div>
		
		</div>
	</div>

<?php include './assets/template/footer_1.php'; ?>