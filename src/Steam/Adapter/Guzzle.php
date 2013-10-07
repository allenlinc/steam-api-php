<?php

namespace Steam\Adapter;

use Guzzle\Http\ClientInterface;
use Guzzle\Http\Client;

class Guzzle extends AdapterAbstract implements AdapterInterface
{
    /**
     * @var ClientInterface
     */
    protected $_client = null;

    /**
     * @param string $url
     * @param array $params
     *
     * @return AdapterInterface
     */
    public function request($url, array $params = array())
    {
        $this->_rawBody = $this->getClient()->get($url, $params)->send()->getBody();
        return $this;
    }

    /**
     * @param ClientInterface $client
     */
    public function setClient(ClientInterface $client)
    {
        $this->_client = $client;
    }

    /**
     * @return ClientInterface
     */
    public function getClient()
    {
        if(is_null($this->_client))
        {
            $this->_client = new Client($this->getBaseSteamApiUrl());
        }

        return $this->_client;
    }
}