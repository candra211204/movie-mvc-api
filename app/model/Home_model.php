<?php
class Home_model
{
    public function getDataApi($query)
    {
        $url = 'http://www.omdbapi.com/?apikey=880341ba&s='.$query;
        
        $curlInit = curl_init($url);
        curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curlInit);
        if ($response === false) {
            echo 'Connection failed!';
        } else {
            $data = json_decode($response, true);
        }
        
        if ($data['Response'] === 'False') return;

        $data = $data['Search'];

        curl_close($curlInit);
        
        return $data;
    }
}