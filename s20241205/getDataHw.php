<?php
$data = [
    'name' => 'youyu',
    'mobile' => '0912-345-678',
    'word' => 'Live in the present',
];

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// dd($data);

$myJSON = json_encode($data);

echo $myJSON;