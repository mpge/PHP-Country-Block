PHP-Country-Block
=================

Uses the [ipinfodb.com IP Location API](http://ipinfodb.com/ip_location_api.php) to block certain countries of your choosing.

User must have an API Key from [ipinfodb.com](http://ipinfodb.com/register.php)

Utilizes the [PHP wrapper IP-User-Location](http://github.com/beingtomgreen/IP-User-Location) for ipinfodb.com interactions.

##Links
[License for IP-User-Location](http://beingtomgreen.mit-license.org/)<br>
[License for PHP-Country-Block](http://mattgross.mit-license.org/)

##Usage

In order to utilize this class. Simply create an array of [2-letter country codes](http://www.iso.org/iso/country_codes/iso_3166_code_lists/country_names_and_code_elements.htm), and pass the array to the class with your IPInfoDB API Key and a path to the IPInfoDB Library (Optional: Only if changed!)

<b>Example:</b>

```php
<?php

require_once "country-block.inc.php";

// Block Canada, United States, and Congo
$countries = array("CA","US","CG");

// Api Key
$api_key = "INSERT-API-KEY-HERE";

// path optional
// $path = "/extras/inc/";
// pass to class as third paramater if required.

// return true if someone has been blocked. false if not
$countryBlock = new countryBlock($countries, $api_key);

if($countryBlock) { // returned true
  // do whatever
  // you can redirect them to a "You are blocked" page, or simply provide a access denied page.
}
else {
  // do whatever
  // the user is free to use your website...
}

?>

```

You could essentially put that code into a sort-of-like check.php page, make it the directory index, and then sent all unblocked requests to the index page. It's completely up to you.
