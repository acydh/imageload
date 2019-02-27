
<?php
require 'function.php';
?>

<?php require 'head.php'; // Head file - Contain primary code and head of page ?>
<div class="container">
		<div class="rules">
			Max Size of the image : 4 MB <br/>
			Extensions allowed : jpg, jpeg, png, gif. <br /> <br />
			If the transfer is approved, you will be redirect on your picture.
		</div>
			<?php if($_GET['error'] != '') { ?>
				<div class="error"><?php echo CheckError($_GET['error'],'en'); ?></div>
			<?php } ?>
			<div class="container">
				<div class="form">
					<form action="upload.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="image">Choose an image :</label>
							<input type="file" class="form-control-file" name="image" id="image">
							<input type="hidden" name="lang" value="en" />
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
</div>
<?php require 'footer.php'; // Head file - Contain end of page ?>
