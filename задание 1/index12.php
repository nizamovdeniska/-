<?php
$arr = ['html', 'css', 'php', 'js', 'jq'];
foreach($arr as $a)
{
	if($a == 'jq')
	{
		echo($a);
	}
	else
		echo($a.", ");
}