<html>
<head>
<title>Download</title>
</head>

<body bgcolor="#99FF99">
<center><h1>LIST OF FILES ON SERVER</h1>
<h3>Download by clicking on the download links aside every filename</h3></center>
<hr>
<?php
	$dir = 'upload';
	$ffs = scandir($dir);
    echo '<center><table><ol>';
    foreach($ffs as $ff){
        if($ff != '.' && $ff != '..'){
            echo '<tr><td><li>'.$ff;
            if(is_dir($dir.'/'.$ff)) listFolderFiles($dir.'/'.$ff);
            echo '<a href="upload/'.$ff.'"> download </a></li></td></tr>';
        }
    }
    echo '</ol></table></center>';
?>
</body>
</html>