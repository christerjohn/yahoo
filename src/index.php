<?php
$endpoint = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%3D946738&format=json&diagnostics=true";
$query = urlencode('select * from weather.forecast where woeid=2502265');
$ch = curl_init($endpoint . '?q=' . $query. '&format=json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
if (curl_error($ch)){
	die(curl_error($ch));
}
curl_close($ch);

//echo '<pre>';
$result = json_decode($result);

echo $result->query->results->channel->item->description;
//foreach($result->query->results->channel->item as $a){
//	echo $a->description;
//}
//print_r($result);
?>