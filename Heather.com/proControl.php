<div id = "proControl">
	<button type = "button" onclick = 'newProject()'>New Project</button>
	<form id = "newFile">
		<label>New Project:</label><br />
		<input id = "newProj" style = "width: 125px" type = "text" />
		<button type = "button" onclick = 'startProject()'>Create</button>
	</form>
	
	<button type = "button" onclick = 'pickProject()'>Old Project</button>
	<br />
	<form id = "oldFile">
		<label>Choose Project</label>
	    <select id = "dirFind" onchange = 'editProject()'>
	    	<div id = "projList">
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
	    	</div>
	    </select>
		<button type = "button" onclick = 'editProject()'>Add Images</button>
	</form>
</div>
