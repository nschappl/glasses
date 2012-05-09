<html>
    <head>
        
    </head>
    
    <body>
        Testing
        <?php
            $dir = "./frames/";
            if (is_dir($dir)){
                if ($handle = opendir($dir)) {
                    while (($file = readdir($handle)) !== false) {
                        if ($file != "." and $file != ".."){
                            $file_path = $dir . $file;
                            echo "<img src=\"$file_path\" />";
                        }
                    }
                }
            }
        
        
        ?>
    </body>
</html>