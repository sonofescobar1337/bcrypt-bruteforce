<?php
error_reporting(0);

# \n -> linux
# \r\n -> windows
$list_to_dec = explode("\r\n", file_get_contents("list-to-dec.txt")); # change \n to \r\n if you're using windows
# ------------------- #
$word = explode("\r\n", file_get_contents($argv[1]));
$ok_wordlist = [];

if(isset($word)) {
	foreach($list_to_dec as $hash) {
		foreach($word as $wordlist) {
			if (password_verify($wordlist, $hash)) {
				print " [+] $hash -> $wordlist (OK)\n";
				$ok_wordlist[] = $wordlist;
				break;
			} else {
				
			}
		}
	}
	
	if (!empty($ok_wordlist)) {
		file_put_contents("ok.txt", implode("\n", $ok_wordlist));
		print " [+] Wordlist OK telah disimpan ke dalam file ok.txt\n";
	}
} else {
	print "usage: php ".$argv[0]." wordlist.txt\n";
}
?>
