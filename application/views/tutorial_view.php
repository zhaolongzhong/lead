<?php include './assets/template/header.php'; ?>

<h1>How to use Model-View-Controller(MVC) in codeigniter</h1>
<h2>This is the structure of CodeIgniter.</h2>
<div>
<b>views:</b> Display information in the database or other information.<br />
<b>models:</b> Retrieve the data from database<br />
<b>controller:</b> Receive data from models and send it to views<br />
</div>
<img src="./assets/img/mvc" alt="" height="" width="">
<div>
	<h2>Create controller</h2>
	<h4>controller name</h4>
	Say you want your new page url like below:<br/>
	http://babbage.cs.missouri.edu/~cs4380sp14grp12/lead/mizzou<br/>
	In order to do that, we need to create a controller called <font color="red">mizzou.php</font></br>
	If we want the url like http://babbage.cs.missouri.edu/~cs4380sp14grp12/lead/login<br/>
	we need to create a controller called <font color="red">login.php</font>;
	<br/>
	<h4>controller content</h4>
	The class name is <font color="red">Mizzou</font> which starts with capital M.
	<pre>
	&lt;?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Mizzou extends CI_Controller {

		public function index()
		{
			$data['msg'] = 'message mizzou';                  //store a string to $data, you can use it in view like echo $msg;
			
			$this->load->model('mizzou_model');               //load a model called mizzou_model
			$query = $this->mizzou_model->get_all_user_info();//load a function from mizzou_model, the function return some result
			$data['query'] = $query->result();              //store the result to $data, you can use the result in view by calling $query

			$this->load->view('mizzou_view', $data);          //load a view called mizzou_view, and pass $data to the view
		}
	}
	?&gt;
		</pre>

	<h4> Save the controller</h4>
	Save the contents above to mizzou.php and copy mizzou.php to foler called <font color="red">controllers</font>.
</div>
<div>
	<h2>Create view<h2>
	<h4>view name</h4>
		You can name a view whatever you like. But I prefer controllername_view, say you have a controller called mizzou.php, I'll name the view as mizzou_view.php.
	<h4>view content<h4>
	<pre>
&lt;ul&gt;
	uid | username | password
	&lt;?php 
		foreach ($query as $user)
		{
	?&gt;
		&lt;li&gt;
			&lt;?php echo $user-&gt;uid; ?&gt; | &lt;?php echo $user-&gt;username; ?&gt; | &lt;?php echo $user-&gt;password; ?&gt;
		&lt;/li&gt;
	&lt;?php
		}
	?&gt;
&lt;/ul&gt;		
	</pre>
	Save the contents above to mizzou_view.php and put it in views folder.
</div>
<div>
	<h2> Create model</h2>
	You can name a view whatever you like. But I prefer controllername_view, say you have a controller called mizzou.php, I'll name the view as mizzou_model.php.
	<h4>model content</h4>
	<pre>
&lt;?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class <font color="red"> Mizzou_model </font> extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function get_all_user_info(){
        $query = $this->db->get('UserAuthentication');
        return $query;
    }
}
?&gt;		
	</pre>
	Save the contents to mizzou_model.php and put it in models folder.
</div>

Go to http://babbage.cs.missouri.edu/~cs4380sp14grp12/lead/mizzou to check it out.


<?php include './assets/template/footer.php'; ?>