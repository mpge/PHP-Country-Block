<!DOCTYPE html>
<html>
  <head>
    <title>My Important Example Page</title>
  </head>
  <body>
    <?php
    // Require library
    require_once "country-block.inc.php";
    
    // Your Block List. This current list blocks  Canada, United States, and Congo.
    $countries = array("CA","US","CG");
    
    // API Key
    $api_key = "INSERT-API-KEY-HERE";
    
    // path optional... pass to class as third paramater if required.
    // $path = "./";
    
    // return true if someone has been blocked. false if not
    $countryBlock = new countryBlock($countries, $api_key);
    
    // Check if the user is allowed to be redirected or not.
    if($countryBlock->isBlocked) {
      // Blocked!
      // Display your access denied content...
      echo "<h2>Access Denied</h2><p>The country you are accessing this website through is not permitted on this website</p>";
    }
    else {
      // Show them my awesome page!
      include "awesome-page.php";
    }
  ?>
  </body>
</html>
