<?php
/*
This indextest.php file is used to test the various classes of the library .

*/

include("vendor/autoloader.php");


//replace Product in the below line with the class you want to test.

//use ResellerClub\Tests\ProductTest as RClubAPI;
//use ResellerClub\Tests\VPSLinuxPlansTest as RClubAPI;
//use ResellerClub\Tests\ESMMailingListTest as RClubAPI;
use ResellerClub\Tests\ESMDomainTest as RClubAPI;



//$apihost = "https://test.httpapi.com/api/";
//$authid = "78536";
//$apikey = "AbL5mxydZZih2AzMUsc80xEgfDmrdiRm"; // replace this with your token
//$password = "mypwd"; // If you want to use your password to authenticate

//Ajay's  Account API key details
$apihost = "https://test.httpapi.com/api/";
$authid = "501535";
$apikey = "LIlLJGvlqBhFdSO7nSNatdE0lGozb0oy";


$apicaller = new RClubAPI($apihost, $authid,$apikey);






///// EXAMPLES BELOW - Uncomment the section to run






//just call the function of the class you want to test.
//$apicaller->move() ;


//VPSLinux Plans=>

//$apicaller->add() ;
//$apicaller->renew() ;
//$apicaller->modify() ;
//$apicaller->addAddOn() ;
//$apicaller->deleteAddOn() ;
//$apicaller->suspend() ;
//$apicaller->unsuspend() ;
//$apicaller->delete() ;
//$apicaller->getDetails() ;
//$apicaller->getPlanDetails() ;
//$apicaller->getOrderId() ;
//$apicaller->searchOrders() ;
//$apicaller->modifyPrice() ;
//$apicaller->getCustomerPricing() ;
//$apicaller->getResellerPricing() ;


//ESMMailing Test=>

//$apicaller->addMailingList() ;
//$apicaller->modifyMailingList() ;
//$apicaller->getMailingListDomain() ;
//$apicaller->getDetails() ;
//$apicaller->addSubscribers() ;
//$apicaller->listSubscribers() ;
//$apicaller->deleteSubscribers() ;
//$apicaller->deleteMailingList() ;
//$apicaller->addModerators() ;
//$apicaller->deleteModerators() ;



//ESMDomain Test=>

//$apicaller->isOwnershipVerified() ;
//$apicaller->addDomainAlias() ;
//$apicaller->deleteDomainAlias() ;
//$apicaller->getNotificationEmail() ;
//$apicaller->modifyNotificationEmail() ;
//$apicaller->getCatchAllAcount() ;
//$apicaller->activateCatchAllAcount() ;
//$apicaller->deactivateCatchAllAcount() ;
//$apicaller->getDNSRecords() ;

?>