<?php
if ($handle = opendir($_SERVER['DOCUMENT_ROOT'] .'/Heather.com/Projects/')) {

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
        	echo "<option value = $entry>$entry</option>";
        }
    }
    closedir($handle);
}
?>
