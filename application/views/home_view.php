<?php include './assets/template/header.php'; ?>
<a href="<?php echo base_url();?>login/do_logout/">Logout</a> <a>| Welcome <?php echo $this->session->userdata('username');?></a>
<div>

<a href="<?php echo base_url();?>volunteer">Volunteer Page</a>
<a href="<?php echo base_url();?>admin">Admin Page</a>
<a href="<?php echo base_url();?>systemlog">System Log</a>
<a href="<?php echo base_url();?>account">Account Page</a>
<a href="<?php echo base_url();?>test">Test Page</a>

</div>
<?php include './assets/template/footer.php'; ?>