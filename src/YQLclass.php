<?php
class YQL
{
	private $_endpoint = "http://query.yahooapis.com/v1/public/yql";
	private $_query;
	public function _construct(){
		
		$query = urlencode('select * from weather.forecast where woeid=2502265');
		
		echo '<pre>';
		$result = json_decode($result);\
		echo $result->query->results->channel->item->description;

//print_r($result);

}
	public function query($yqlCode){
		$this->_query = urlencode($yqlCode);
		
	}
	public function submit(){
		$ch = curl_init($this->_endpoint . '?q=' . $query. '&format=json');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		if (curl_error($ch)){
		die(curl_error($ch));
	}
		curl_close($ch);
		
	}

}
?>