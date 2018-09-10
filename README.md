# get-geoinfo-sample-php

## usage

```
$ composer install
$ cd ./geodb
$ wget http://geolite.maxmind.com/download/geoip/database/GeoLite2-City.mmdb.gz
$ gunzip GeoLite2-City.mmdb.gz
$ cd ../
$ php GetGeoInfo.php "192.168.24.1"
```

Output Example

```
array(8) {
  'Country ISO Code' =>
  string(2) "JP"
  'Country Name' =>
  string(5) "Japan"
  'Country Name Localization' =>
  string(6) "日本"
  'Most Specific Subdivision Name' =>
  string(8) "Shizuoka"
  'Most Specific Subdivision ISO Code' =>
  string(2) "22"
  'City' =>
  string(8) "Kikugawa"
  'Zip Code' =>
  string(8) "437-1514"
  'LatLng' =>
  array(2) {
    'latitude' =>
    double(34.xxxx)
    'longitude' =>
    double(138.xxxx)
  }
}
```
