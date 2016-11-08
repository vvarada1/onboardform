<?php
echo "<pre>";
require 'vendor/medoo.php';

$database = new medoo([
	'database_type' => 'pgsql',
	'database_name' => 'dfukpgv609vivf',
	'server' => 'ec2-54-235-208-3.compute-1.amazonaws.com',
	'username' => 'fmlyiaxjnqktvd',
	'password' => 'T4MRGogtVOCXHTS9UpEXUHuPrR',
	'charset' => 'utf8',
	]);

	
$status = $database->query("insert into salesforce.onboardformmodel__c (advertiser_company_name__c, advertiser_contact_first_name__c, advertiser_contact_last_name__c, advertiser_contact_phone__c, advertiser_web_address__c, advertiser_email_address__c, business_description__c, location_name__c, address_1__c, city__c, postal_code__c, phone__c) values('".$_POST['advCompName']."','".$_POST['advFname']."','".$_POST['advLname']."','".$_POST['advContactPhone']."','".$_POST['advWebAddr']."','".$_POST['advEmailAddr']."','".$_POST['businessDesc']."','".$_POST['locationName']."','".$_POST['addr1']."','".$_POST['city']."','".$_POST['postalCode']."','".$_POST['phone']."')");

if($database->error()[2]) {
	echo $database->error()[2];
} else {
	echo "Success!!";
}