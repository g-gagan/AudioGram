<?php
	ob_start();
	header("Content-type:text/event-stream"); 
	
	$count = 1;
	
	while(true)
	{
		echo "event:myevent\n";
		echo "retry:10000\n";
		$oldfile=filemtime("../songlinks.txt");
		$file=file_get_contents("../songlinks.txt");
		echo "data:<h2>link is: $file</h2>\n\n";
		ob_flush();
		flush();
		sleep(3);
	}
?>