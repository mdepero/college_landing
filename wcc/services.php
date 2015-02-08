<?php
require 'body.php';

if (!isset($_GET['cat']) && !isset($_GET['num']))
{
	//DEFAULT PAGE WITH _CATEGORIES
	require 'defaults.php';	
}
elseif (isset($_GET['cat']) && !isset($_GET['num']))
{
	switch($_GET['cat'])
	{
		case 1:
		require '1s.php';
		break;
		case 2:
		require '2s.php';
		break;
		case 3:
		require '3s.php';
		break;
		case 4:
		require '4s.php';
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
		require '11s.php';
		break;
		case 2:
		require '12s.php';
		break;
		}
	}
	else
	{
		echo '<div class="error">Invalid URL</div>';
	}
	
}
else
{
	echo '<div class="error">Invalid URL</div>';
}

?>


