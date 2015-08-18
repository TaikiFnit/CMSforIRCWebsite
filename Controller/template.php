<?php

/**
* view template
*/
class template
{
	function show($filePath)
	{
		extract((array)$this);	
		include($filePath);
	}
}