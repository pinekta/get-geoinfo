<?php

require_once './vendor/autoload.php';
use GeoIp2\Database\Reader;

if (count($argv) <= 1) {
    echo "Please set IP addressment as argument." . PHP_EOL;
    return;
}

$ip = $argv[1];

try {
    $reader = new Reader('./geodb/GeoLite2-City.mmdb');
    $record = $reader->city($ip);
    $result = [
        'Country ISO Code' => $record->country->isoCode,
        'Country Name' => $record->country->name,
        'Country Name Localization' => $record->country->names['ja'],
        'Most Specific Subdivision Name' => $record->mostSpecificSubdivision->name,
        'Most Specific Subdivision ISO Code' => $record->mostSpecificSubdivision->isoCode,
        'City' => $record->city->name,
        'Zip Code' => $record->postal->code,
        'LatLng' => [
            'latitude' => $record->location->latitude,
            'longitude' => $record->location->longitude,
        ]
    ];
    var_dump($result);
} catch (Exception $e) {
    echo "ERROR: " .$e->getMessage() . PHP_EOL;
}

