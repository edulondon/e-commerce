<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}

if (isset($_POST["custom"])) {

	# code...
	$trx_id = generate_string($permitted_chars, 20);
		$p_st = "not confirmed";
		$amt = $_GET["amt"];
		//$cc = $_POST["custom"];
		$cm_user_id = $_POST["custom"];
		//$c_amt = $_COOKIE["ta"];

		include_once("db.php");
		$sql = "SELECT p_id,qty FROM cart WHERE user_id = '$cm_user_id'";
		$query = mysqli_query($con, $sql);
		if (mysqli_num_rows($query) > 0) {
			# code...
			while ($row=mysqli_fetch_array($query)) {
			$product_id[] = $row["p_id"];
			$qty[] = $row["qty"];
			}

			for ($i=0; $i < count($product_id); $i++) { 
				$sql = "INSERT INTO orders (user_id,product_id,qty,trx_id,p_status) VALUES ('$cm_user_id','".$product_id[$i]."','".$qty[$i]."','$trx_id','$p_st')";
				mysqli_query($con,$sql);
			}

			$sql = "DELETE FROM cart WHERE user_id = '$cm_user_id'";
			if (mysqli_query($con,$sql)) {
				?>
 <?php
		include_once("./includes/header.php");
	?>
    <style>
    table tr td {
        padding: 10px;
    }
    </style>

    <?php
		include_once("./includes/menu.php");
	?>

    <p><br /></p>
    <p><br /></p>
    <p><br /></p>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <h1>Thankyou </h1>
                        <hr />
                        <p>Hello <?php echo "<b>".$_SESSION["name"]."</b>"; ?>,Your request was
                            successfully completed and your Transaction id is <b><?php echo $trx_id; ?>. </b><br />
                            One of our agents will contact you as soon as your request is approved. <br /></p>
                        <a href="profile.php" class="btn btn-success btn-lg">Click here to complete your profile</a>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>

</html>

<?php
 include_once("./includes/footer.php");
			}
		}else{
			header("location:index.php");
		}
		
	
}



?>