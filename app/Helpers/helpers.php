<?php
use Carbon\Carbon;

if (! function_exists('postRequest')) {
    function postRequest($path,$payload,$header)
    {

        $base_url = config('app.api_wa.base_url');
        $url = $base_url.$path;
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        
        $result = curl_exec($ch);

        curl_close($ch);
        
        return json_decode($result);
    }
}

?>