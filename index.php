<html>
    <head>
        
    </head>
    
    <body>
	
	<div style="position: relative; top: 0; left: 0;">
		<img src="./faces/face1.jpg" style="position: relative; top: 0; left: 0;">
        	<?php
            	$dir = "./frames/";
            	if (is_dir($dir)){
                	if ($handle = opendir($dir)) {
                	    	while (($file = readdir($handle)) !== false) {
                        		if ($file != "." and $file != ".."){
                            			$file_path = $dir . $file;
                            			echo "<img src=\"$file_path\" style=\"position: absolute; top: 0; left: 0;\"/>";
                        		}
                    		}	
                	}
           	 }
     		?>
    </body>
</html>
