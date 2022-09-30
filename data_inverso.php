<?php
function inverter_data($data){
    $dt = array_reverse(explode('/', $data));
    return $dt[0]. '-'. $dt[1].'-'. $dt[2];
};

echo inverter_data("30/11/1982");
