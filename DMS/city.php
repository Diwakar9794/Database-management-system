<?php 

	require 'connection.php';

	$state_id =$_POST['state_id'];

	$select="SELECT * FROM cities where state_id=".$state_id;
	$result= $conn->query($select);
	?>
	<option class="Select City">Select City</option>
	<?php
	foreach ($result as $val){
		?>
		<option value="<?php echo $val['id']; ?>"> <?php echo $val['name']; ?></option>
		<?php
	}

 ?>