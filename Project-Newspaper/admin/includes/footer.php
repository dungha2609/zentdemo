    <script src="<?php echo $_DOMAIN; ?>js/jquery.form.min.js"></script>  
    <script src="<?php echo $_DOMAIN; ?>js/form.js"></script>
	<?php

	if (isset($_GET['tab']))
	{
	    $tab = trim(addslashes(htmlspecialchars($_GET['tab'])));

	    echo '<script>$(".sidebar ul a:eq(1)").removeClass("active");</script>';

	    switch ($tab) {
	    	case 'profile':
	    		echo '<script>$(".sidebar ul a:eq(2)").addClass("active");</script>';
	    		break;

	    	case 'posts':
	    		echo '<script>$(".sidebar ul a:eq(3)").addClass("active");</script>';
	    		break;

	    	case 'photos':
	    		echo '<script>$(".sidebar ul a:eq(4)").addClass("active");</script>';
	    		break;

	    	case 'categories':
	    		echo '<script>$(".sidebar ul a:eq(5)").addClass("active");</script>';
	    		break;

	    	case 'setting':
	    		echo '<script>$(".sidebar ul a:eq(6)").addClass("active");</script>';
	    		break;	 	
	    }
	}

	?>
</body>
</html>