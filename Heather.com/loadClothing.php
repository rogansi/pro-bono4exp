<?php
echo "<div id = 'artDisplay'>";
if ($handle = opendir($_SERVER['DOCUMENT_ROOT'] .'/Heather.com/clothing/')) {

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
        	$artTitle = ucfirst($entry);
			echo "<p id = 'para$entry' class = 'para'>$artTitle</p>";
        	echo "<h2 onclick = 'toggleArt(\"$entry\")' id = 'main$entry'><img src = 'clothing/$entry/$entry.JPG' height='230' width = '300' /></h2>";
        	echo "<div class = 'hiddenArt' id = '$entry'>";
        	if ($shandle = opendir($_SERVER['DOCUMENT_ROOT'] .'/Heather.com/clothing/'.$entry.'/')){
        		while (false !== ($sentry = readdir($shandle))) {
                    if ($sentry != "." && $sentry != "..") {
                    	echo "<img onclick = 'switchArt(\"$entry\", \"$sentry\", \"clothing\")' src = 'clothing/$entry/$sentry' height='100' width = '100' />";
					}
        	}
        	
        }
			echo "</div>";
    }
	}
    closedir($handle);
}
echo "</div>";
?>