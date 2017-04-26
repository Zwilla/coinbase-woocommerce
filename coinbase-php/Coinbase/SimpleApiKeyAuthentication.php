<?php
//@coauthor      Miguel Padilla (Zwilla) Copyright 2017
class WC_Coinbase_SimpleApiKeyAuthentication extends WC_Coinbase_Authentication
{
    private $_apiKey;

    public function __construct($apiKey)
    {
        $this->_apiKey = $apiKey;
    }

    public function getData()
    {
        $data = new stdClass();
        $data->apiKey = $this->_apiKey;
        return $data;
    }
}