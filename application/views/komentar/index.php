
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="row mt-3"></div>
		<div class="col-md-6">

<center>
	Sri Fitriana Ramadhhini
	(6701174032)
	<form action="<?php echo base_url('komentar/input')?>" method="POST">
         <center>
            KOMENTAR:<br>
            <textarea name="komentar" rows="5" cols="100"></textarea><br>
            <button type="submit" name="submit">SUBMIT</button>
            <?php
					if (isset($input))
						echo $input;
						echo"<br>";
					?>
</center>
</div>
	</div>
</div>
</body>
</html>

		