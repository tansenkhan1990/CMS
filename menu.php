<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Red Blog Theme - Free CSS Templates</title>
<meta name="keywords" content="Red Blog Theme, Free CSS Templates" />
<meta name="description" content="Red Blog Theme - Free CSS Templates by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>



<div id="templatemo_top_wrapper">
	<div id="templatemo_top">
    
        <div id="templatemo_menu">
                    
            <ul>
            	<li><a href="index.php" class="current">Home</a></li>
            <?php
			foreach($mycms->showMenu("menu") as $m)
			{
				extract($m);
				?>
                <li><a href="index.php?page_id=<?php echo $id; ?>"><?php echo $name; ?></a></li>
                <?php
			}
			?>

            </ul>    	
        
        </div> <!-- end of templatemo_menu -->
        
        <div id="twitter">
        	<a href="#">follow us <br />
        	on twitter</a>
        </div>
        
  </div>
</div>