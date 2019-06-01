<?php 
include 'includes/header.php'; 
include 'includes/variables.php'; 
include 'includes/functions.php'; 
?>
	<div class="padding-top padding-bottom">

		<table class="table">
			<thead class="thead">
				<tr>
					<th>Locations</th>
					<th>Travel Links</th>
				</tr>
			<thead>
			<?php foreach ($travelSite as $key => $value) { ?>
			<tr>
				<td><?php echo $key ?></td>
				<td><a href="<?php echo $value; ?>" target="_blank"><?php echo $value; ?></a></td>
			</tr>
			<?php } ?>
		</table>

	</div><!-- /padding-top padding-bottom -->
<?php include 'includes/footer.php'; ?>