<?php include './assets/template/header.php'; ?>
<h2>Welcome <?php echo $this->session->userdata('username');?></h2>
<div>

<a href="<?php echo base_url();?>volunteer">Volunteer Page</a><br />
<a href="<?php echo base_url();?>admin">Admin Page</a><br />
<a href="<?php echo base_url();?>systemlog">System Log</a><br />
<a href="<?php echo base_url();?>account">Account Page</a><br />
<a href="<?php echo base_url();?>test">Test Page</a><br />

<a href="<?php echo base_url();?>request">Time Sheet Request Page</a><br />
<a href="<?php echo base_url();?>approved">Approve Sheet Request Page</a><br />
</div>
<?php include './assets/template/footer.php'; ?>