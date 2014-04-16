<?php
use API\Wapi;

class WypokPajonk
{
    private $tags = array();
    private $wapi;

    public function __construct()
    {
        include('config.php');
        // ustaw swój klucz i sekret
        $this->wapi = new API\Wapi(APPLICATION_KEY, APPLICATION_SECRET);
    }

    public function setTags($tags)
    {
        if(is_null($tags))
            $this->tags = array();
        if(!is_array($tags))
        {
            $this->tags[] = $tags;
            return;
        }
        $this->tags = $tags;
    }

    public function fetchEntries()
    {
        $result = $this->wapi->doRequest('search/entries', array('q' => '#suchar'));
        if (!$this->wapi->isValid())
            throw new Exception($this->wapi->getError());
        return $result;
    }

}