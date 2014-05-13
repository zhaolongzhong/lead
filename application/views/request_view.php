<!DOCTYPE HTML>
<html>
  <head>
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
  </head>
  <body>
    
    <script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>



    <form method="POST" action="<?php echo base_url();?>request/insert">
    
    <table>

    <tr><td>
    Requested by </td><td> User ID:<?php echo $this->session->userdata('fname');?>
    </tr></td>
    <tr><td>
    Start Time: </td><td>



    <div id="starttime" class="input-append date">
      <input type="text" name="starttime"></input>
      <span class="add-on">
        <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
      </span>
    </div>
    <script type="text/javascript">
      $('#starttime').datetimepicker({
        format: 'yyyy-MM-dd hh:mm:ss',
        language: 'en'
      });
    </script>

     </tr></td>
    <tr><td>
    End Time: </td><td>



    <div id="endtime" class="input-append date">
      <input type="text" name="endtime"></input>
      <span class="add-on">
        <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
      </span>
    </div>
    <script type="text/javascript">
      $('#endtime').datetimepicker({
        format: 'yyyy-MM-dd hh:mm:ss',
        language: 'en'
      });
    </script>


    </tr></td>
    <tr><td>
    Comments: </td><td><textarea name="comments" rows="4" cols="50"></textarea>
    </tr></td>
    <tr><td>
    <input type="submit" value="submit" >
    </tr></td>
    </table>

</form>
  </body>
<html>