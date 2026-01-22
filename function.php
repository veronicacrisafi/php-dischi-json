<?php
function getDischi()
{
    $json_list = file_get_contents('./musicRecord.json');
    return json_decode($json_list, true);
}
