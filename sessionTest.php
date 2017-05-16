<div id="frag_4" style="position:absolute;left:348px;top:573px;width:309px;height:74px; " >
        <?php
        //displays error messages when creating residents on the database - via session variable
        SESSION_START();
		$_SESSION['registration'] = "I work";
		
        if(isset($_SESSION['registration']))
        {
            echo "Error: " . $_SESSION['registration'];
        }
        ?>
</div>