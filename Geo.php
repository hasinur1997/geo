<?php
/**
 * Class Geo
 */
class Geo
{
    protected $api = "http://ipinfo.io/%s/json";

    protected $propertise = [];

    public function __get( $key ) {
        if ( isset($this->propertise[$key]) ) {
            return $this->propertise[$key];
        }

        return null;
    }

    public function request($ip) {
        $url = sprintf($this->api, $ip);

        $data = $this->sendRequest($url);

        $this->propertise = $data;
    }

    protected function sendRequest($url) {
        $data = json_decode( file_get_contents( $url ) );

        return (array)  $data;
    }
}