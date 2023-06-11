<!-
Code Initiator - Hussain Moulana
Begin Date - June - 2023
>

<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  
    endif 
?>
