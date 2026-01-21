<?php
$json_list = file_get_contents('./musicRecord.json');
var_dump($json_list);

$dischi = json_decode($json_list, true);
var_dump($dischi);
