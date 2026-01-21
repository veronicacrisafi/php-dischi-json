<?php
$json_list = file_get_contents('./musicRecord.json');


$dischi = json_decode($json_list, true);
