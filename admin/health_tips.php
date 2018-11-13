<?php include('includes/header.php');?>
<body>

    <div id='wrapper'>

        <!-- Navigation -->
        <?php include('includes/navigation.php');?>
        <form method='post'>
  <?php add_health_tip();?>
  <div class='form-group'>
    <label for='exampleTextarea'>Health tip 1</label>
    <textarea class='form-control' id='exampleTextarea' rows='3' name='ht1'></textarea>
  </div>
  <div class='form-group'>
    <label for='exampleTextarea'>Health tip 2</label>
    <textarea class='form-control' id='exampleTextarea' rows='3' name='ht2'></textarea>
  </div>
  <div class='form-group'>
    <label for='exampleTextarea'>Health tip 3</label>
    <textarea class='form-control' id='exampleTextarea' rows='3' name='ht3'></textarea>
  </div>
  
  
  
  <button type='submit' name='add' class='btn btn-primary'>Submit</button>
</form>
        
        <?php include('includes/footer.php');?>