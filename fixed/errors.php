<?php  
    if (count($errors) > 0):
?>

  <div class="error d-flex text-center g-3">
  	<?php foreach ($errors as $error) : ?>
  	  <p> *<?php echo $error ?>  </p> 
  	<?php endforeach ?>
  </div>

<?php  endif ?>
