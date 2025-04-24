<html>
    <body>
    <?php 
  if($this->session->flashdata('success')){
    echo $this->session->flashdata('success');
  }

  if($this->session->flashdata('error')){
    echo $this->session->flashdata('error');
  }
  ?>
  <?php echo form_open('Change_password'); ?>
        <input type="text" placeholder="Current Password" name="current">
        <input type="text" placeholder="New Password" name="new">
        <input type="submit"  placeholder="Submit" name="submit">
        <?php echo form_close(); ?>
    </body>
</html>