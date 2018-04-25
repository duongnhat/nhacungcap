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
			font-size:20px;
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
		<?php $_baseUrl = 'http://localhost/quanly/';?>
		<a href="<?php echo $_baseUrl . 'view_ncc.php/?page=1'; ?>">view Ncc</a>
		<a href="<?php echo $_baseUrl . 'view_vattu.php/?page=1'; ?>">view Vatttu</a>
		<a href="<?php echo $_baseUrl . 'new_ncc.php/'; ?>">New Ncc</a>
		<a href="<?php echo $_baseUrl . 'new_vattu.php/'; ?>">New Vat Tu</a>
		<hr>
		<?php
		
		include($viewName);
		?>
		
    </body>
</html>