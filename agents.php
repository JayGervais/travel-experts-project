<?php 
include 'includes/header.php'; 
include 'includes/functions.php'; 
?>
	<div class="padding-top padding-bottom">

		<!-- Call and display data from agents table -->
		<table class="table">
			<thead class="thead">
				<tr>
					<th>Agent</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Position</th>
				</tr>
			<thead>

		<?php
		$agentData = agentData($conn);
		foreach($agentData as $row) { ?>
			<tr>
				<td><?php echo $row['AgtFirstName'] . " " . $row['AgtLastName']; ?></td>
				<td><?php echo $row['AgtBusPhone']; ?></td>
				<td><?php echo $row['AgtEmail']; ?></td>
				<td><?php echo $row['AgtPosition']; ?></td>
			</tr>
		<?php } ?>
		</table>

	</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>