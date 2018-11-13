<?php include('includes/header.php');?>
<body>

    <div id='wrapper'>

        <!-- Navigation -->
        <?php include('includes/navigation.php');?>
        
        <form method='post'>
        <?php add_home_remedy();?>
  <div class='form-group'>
    <label for='exampleInputEmail1'>HOME REMEDY FOR:</label>
    <input type='text' class='form-control' id='homeremedy'  name='homeremedy'>
    
  </div>
  <div class='form-group'>
    <label for='exampleTextarea'>HOME REMEDY 1</label>
    <textarea class='form-control' id='exampleTextarea' rows='12' name='hm1'></textarea>
  </div>
  
  <div class='form-group'>
    <label for='exampleInputFile'>Upload image for the disease</label>
    <input type='file' class='form-control-file'  name='file'>
    
  </div>
  
  
  <button type='submit' class='btn btn-primary' name='add'>Submit</button>
</form>
        
        <?php include('includes/footer.php');?>