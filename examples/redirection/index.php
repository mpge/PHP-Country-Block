<?php

require_once $_SERVER['DOCUMENT_ROOT']."/dist/country-block.inc.php";

// Block Canada, United States, and Congo
$countries = array("CA","US","CG");

// Api Key
$api_key = "INSERT-API-KEY-HERE";

// path optional
$path = $_SERVER['DOCUMENT_ROOT']."/dist/";
// pass to class as third paramater if required.

// return true if someone has been blocked. false if not
$countryBlock = new countryBlock($countries, $api_key);

if($countryBlock) { // returned true
  // Blocked!
  // Display your access denied content... or redirect...
  header('Location: /access-denied.php');
}
else {
  // Show them my awesome page!
  include "./awesome-page.php";
}

?>
