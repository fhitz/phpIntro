<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>sandbox</title>
	</head>
	<body>

		<?php $link_name = "Second Page"; ?>
		<?php $id =2; ?>
		<?php $company = "Johnson & Johnson"; ?>
		
		<a href="second-page.php?id=<?php echo $id; ?>&company=<?php echo urlencode($company); ?>"> <?php echo $link_name; ?></a>


	</body>
</html>