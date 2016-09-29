<?php

namespace ShopStyle\Query;


class CurlQuery implements IQuery
{
    public function get($url)
    {
        $ch = curl_init();

        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_DNS_USE_GLOBAL_CACHE => 0
        );

        curl_setopt_array($ch, $options);

        $data = curl_exec($ch);

        curl_close($ch);

        return $data;
    }
}
