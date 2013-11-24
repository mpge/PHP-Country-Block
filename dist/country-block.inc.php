<?php

class countryBlock {

  // Store Country
  private $country = null;
  
  // Store IPInfoDB API Key
  private $api_key = null;
  
  function __construct($country, $api_key)
  {
  
    // Save Country to $country
    $this->country = $country;
    
    // Save IPInfoDB API Key to $api_key
    $this->api_key = $api_key;
    
  }

}
