<?php

namespace ShopStyle\Query;


class BasicQuery implements IQuery
{
    public function get($url)
    {
        $url .= '&suppressResponseCode=1';
        return file_get_contents($url);
    }
}