<?php
error_reporting(E_ALL);
header('Content-Type: text/javascript');
header('X-XSS-Protection:0');
$data = 'io.j[0]("1:::{\"name\":\"marker\",\"args\":[{\"latitude\":46,\"longitude\":25,\"countrycode\":\"RO\",\"country\":\"Romania\",\"city\":null,\"latitude2\":50.77080154418945,\"longitude2\":6.105299949645996,\"countrycode2\":\"DE\",\"country2\":\"Germany\",\"city2\":\"Aachen\",\"type\":\"dionaea.capture\",\"md5\":\"cbb2d29aab8d0823630096ab5ce5eaee\"}]});';
//echo $data;
//io.j[0]("7:::1+0");
?>
5:::{"name":"marker","args":[{"latitude":22.63330078125,"longitude":120.3499984741211,"countrycode":"TW","country":"Taiwan","city":"Kaohsiung","latitude2":50.77080154418945,"longitude2":6.105299949645996,"countrycode2":"DE","country2":"Germany","city2":"Aachen","type":"dionaea.capture","md5":"d987a9af709bfd188071aa3f5e027aac"}]}
