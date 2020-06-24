<?php

namespace Ljcgrowup\SearchZipcode;

class SearchZipcode
{
    private $baseUrl;
    private $formatData;

    public function __construct($baseUrl = null, $formatData = null)
    {
        $this->baseUrl = $baseUrl;
        $this->formatData = $formatData;
    }

    public function setBaseUrl(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function setFormatData(string $formatData)
    {
        $this->formatData = $formatData;
    }

    public function getAddressFromZipcode(string $zipcode): array
    {
        $zipcode = preg_replace('/[^0-9]/im', '', $zipcode);
        
        $format = $this->formatData ? '/' . $this->formatData : '';

        $get = file_get_contents($this->baseUrl . $zipcode . $format);

        return (array) json_decode($get);
    }
}