<?php

error_reporting(E_ALL);
header('Content-Type: text/javascript');
header('X-XSS-Protection:0');
$time = substr($_REQUEST['t'],0,10);
$delta = substr($_REQUEST['t'],-3);
$from_ts = $time-360;
$to_ts = $time-340;
$mysql = mysql_pconnect("10.0.0.2", "ipviking", "jalla256",128) or die(mysql_error());
mysql_select_db("iparmy",$mysql) or die("Could not select database");
$q = "SELECT d.*,l.*,i.org FROM defcon.defcon_main AS d INNER JOIN geoip.geoip_loc AS l on d.locid=l.loc_id 
		INNER JOIN geoip.geoip_isp AS i ON d.isp_ip_from = i.ip_from 
		WHERE day=DAY(now()) AND date_ts BETWEEN $from_ts AND $to_ts";
$resq = mysql_query($q,$mysql) or die(header("db error: ".mysql_error().""));
$x=0;
$honeynet = array(0=>array('lat'=>'38.95','long'=>'-77.46','city'=>'Ashburn','cc'=>'USA'),
					1=>array('lat'=>'32.97','long'=>'-96.83','city'=>'Dallas','cc'=>'USA'),
					2=>array('lat'=>'25.82','long'=>'-80.28','city'=>'Miami','cc'=>'USA'),
					3=>array('lat'=>'44.00','long'=>'-76.02','city'=>'Watertown','cc'=>'USA'),
					4=>array('lat'=>'47.45','long'=>'-122.30','city'=>'Seattle','cc'=>'USA'),
					5=>array('lat'=>'39.32','long'=>'-94.72','city'=>'Kansas City','cc'=>'USA'),
					6=>array('lat'=>'37.33','long'=>'-121.82','city'=>'San Jose','cc'=>'USA'),
					7=>array('lat'=>'37.75','long'=>'-122.68','city'=>'San Fransico','cc'=>'USA'),
					8=>array('lat'=>'33.93','long'=>'-118.40','city'=>'Los Angeles','cc'=>'USA'),
					9=>array('lat'=>'40.70','long'=>'-74.17','city'=>'New Jersey','cc'=>'USA'),
					10=>array('lat'=>'40.77','long'=>'-73.98','city'=>'New York','cc'=>'USA'),
					11=>array('lat'=>'41.98','long'=>'-87.90','city'=>'Chicago','cc'=>'USA'),
					12=>array('lat'=>'39.75','long'=>'-104.87','city'=>'Denver','cc'=>'USA'),
					13=>array('lat'=>'33.65','long'=>'-84.42','city'=>'Atlanta','cc'=>'USA'));
					// atlanta,chicago,
while($row = mysql_fetch_array($resq)) 
{
	$rand_bot = $honeynet[rand(0,13)];
	$entry[$x]['defcon_id'] = $row['defcon_id'];
	$entry[$x]['cc'] = $row['cc'];
	$entry[$x]['ip'] = long2ip($row['ip']);
	$entry[$x]['lat'] = $row['lat'];
	$entry[$x]['long'] = $row['long'];
	$entry[$x]['city'] = $row['city'];
	$entry[$x]['lat2'] = $rand_bot['lat'];
	$entry[$x]['long2'] = $rand_bot['long'];
	$entry[$x]['city2'] = $rand_bot['city'];
	$entry[$x]['cc2'] = $rand_bot['cc'];
	$x++;
}
if(empty($entry)) {
	//echo 'io.j[0]("';
	//echo '("2::")';
	$rand_bot = $honeynet[rand(0,13)];
	$entry[0]['defcon_id'] = 666;
	$entry[0]['cc'] = 'US';
	$entry[0]['ip'] = '74.76.113.228';
	$entry[0]['lat'] = '88.22';
	$entry[0]['long'] = '-104.23';
	$entry[0]['city'] = 'Hillsborough';
	$entry[0]['lat2'] = $rand_bot['lat'];
	$entry[0]['long2'] = $rand_bot['long'];
	$entry[0]['city2'] = $rand_bot['city'];
	$entry[0]['cc2'] = $rand_bot['cc'];
	//$entry = array();
	//echo '");';
}
$i=0;
for($i=0;$i<count($entry);) 
{
	$defcon_id = $entry[$i]['defcon_id'];
	$cc = $entry[$i]['cc']?$entry[$i]['cc']:'secrit';
	$cc2 = $entry[$i]['cc2'];
	$ip = $entry[$i]['ip'];
	$lat = $entry[$i]['lat']?$entry[$i]['lat']:'1';
	$long = $entry[$i]['long']?$entry[$i]['long']:'-1';
	$lat2 = $entry[$i]['lat2'];
	$long2 = $entry[$i]['long2'];
	$city = $entry[$i]['city']?$entry[$i]['city']:'secrit';
	//$city = addslashes($city);
	$city2 = $entry[$i]['city2'];
echo 'io.j['.$i.']("';	
echo '5:::{\"name\":\"marker\",\"args\":[{\"latitude\":'.$lat.',\"longitude\":'.$long.',\"countrycode\":\"'.$cc.'\",\"country\":\"'.$cc.'\",\"city\":\"'.$city.'\",\"latitude2\":'.$lat2.',\"longitude2\":'.$long2.',\"countrycode2\":\"'.$cc2.'\",\"country2\":\"'.$cc2.'\",\"city2\":\"'.$city2.'\",\"type\":\"ipviking.honey\",\"md5\":\"'.$ip.'\"}]}';
echo '");';
$i++;
}
usleep(600);
//sleep(2);
exit(0);
?>