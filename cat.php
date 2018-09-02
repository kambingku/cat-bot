<?php
// Created by Anak Kambing
// Not For Sale 
function cat($token, $jumlah, $wait){
    $x = 0; 
    while($x < $jumlah) {
		
		$body = 'token='.$token.'';
				
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://anggaid.000webhostapp.com/api.php");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36"));
        $server_output = curl_exec ($ch);
        curl_close ($ch);
	echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
print "TUYUL CAT TEMBOK WOY\n\n";
echo "TOKEN?\nInput : ";
$token = trim(fgets(STDIN));
echo "Jumlah?\nInput : ";
$jumlah = trim(fgets(STDIN));
echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
$wait = trim(fgets(STDIN));
$execute = cat($token, $jumlah, $wait);
print $execute;
print "UDAH WOY\n";
?>
