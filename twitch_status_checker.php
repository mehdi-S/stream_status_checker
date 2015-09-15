<?php
function is_streaming($streamer)
{
	$json = file_get_contents("https://api.twitch.tv/kraken/streams/".$streamer."/");
	$list = json_decode($json, true);
	#var_dump($list);
	if (isset($list['stream']) && $list['stream'] != NULL)
	{
		$link = $list['stream']['channel']['url'];
		$game = $list['stream']['channel']['game'];
		print "\n$streamer is actually streaming on ".$game.".\nurl : ".$link."\n";
		return true;
	}	
	else
	{
		print "\n$streamer is not streaming actually.\n";
		return false;
	}
}
if ($argc > 1)
{
	unset($argv[0]);
	foreach ($argv as $s)
		is_streaming($s);
}
else
{
	return -1;
}
?>
