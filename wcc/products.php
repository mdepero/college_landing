<?php
require 'body.php';
if (!isset($_GET['cat']) && !isset($_GET['num']))
{
	//DEFAULT PAGE WITH _CATEGORIES
	require 'default.php';	
}
elseif (isset($_GET['cat']) && !isset($_GET['num']))
{
	switch($_GET['cat'])
	{
		case 1:
		require 'prebuilt.php';
		break;
		case 2:
		require 'request.php';
		break;
	}	
}
elseif (isset($_GET['cat']) && isset($_GET['num']))
{
	if ($_GET['cat']==1)
	{
		switch ($_GET['num'])
		{
		case 1:
		require '11.php';
		break;
		case 2:
		require '12.php';
		break;
		case 3:
		require '13.php';
		break;
		case 4:
		require '14.php';
		break;
		
		}
	}
}
else
{
	echo '<div class="body">Invalid URL</div>';
}
?>