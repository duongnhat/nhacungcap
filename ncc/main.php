<!DOCTYPE html>
<html>
    <head>
        <title>trang chu</title>
		<style type="text/css">
        form{
            font-size:50px;
			
            background-color:green;
        }
		h2{
			font-size:30px;
			color:red;
		}
		a{
			font-size:60px;
			color:blue;
		}
		b{
			font-size:20px;
			color:white;
		}
    </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
		<form method="get">
			<input type="submit" name="editncc" value="Edit Inf ncc"/>
			<input type="submit" name="editvattu" value="Edit Inf vattu"/>
			<input type="submit" name="new_ncc" value="New Inf NCC"/>
			<input type="submit" name="new_vattu" value="New Inf Vat Tu"/>
			<input type="submit" name="view_ncc" value="View Inf NCC"/>
			<input type="submit" name="view_vattu" value="View Inf VAT TU"/>
		</form>
		<hr>
		<?php
			if (isset($_GET['editncc'])){ include("edit.php"); ?>
				<!--<iframe src="http://localhost/edit.php/" width="100%" height="400px" frameborder="0"></iframe>-->
			<?php }
			if (isset($_GET['editvattu'])){ ?>
				<iframe src="http://localhost/edit_vattu.php/" width="100%" height="400px" frameborder="0"></iframe>
			<?php }
			if (isset($_GET['new_ncc'])){
				include("new_ncc.php");
			}
			if (isset($_GET['new_vattu'])){
				include("new_vattu.php");
			}
			if (isset($_GET['view_ncc'])){
				include("view_ncc.php");
			}
			if (isset($_GET['view_vattu'])){
				include("view_vattu.php");
			}
		?>
    </body>
</html>