<?PHP

	// This will prevent any errors that occur from potentially displaying your username/password
	error_reporting(0);

	// This should properly display device names that contain special characters
	header("Content-type: text/html; charset=utf-8");

	// Include the FindMyiPhone class
	include ("class.findmyiphone.php");
	
	// This is where we log in to iCloud
	try {
		$fmi = new FindMyiPhone("ICLOUD EMAIL","ICLOUD PASS");
	} catch (Exception $e) {
		print "Error: ".$e->getMessage();
		exit;
	}
	
	// This will print out all the devices on your account so you can grab the device IDs
	//$fmi->printDevices();
        //$fmi->playSound("cQJeTYA+0cL/CY2IF0ZgZdGBLFlc+C6FQnYZNc26q8R4k9S/5lVh5eHYVNSUzmWV","test");
	// Find a device that is reporting its location and attempt to get its current location


        $jasonphone="device ID";
        $ipadmini="another device ID";


        switch ($_GET["phone"])
		{
		case "jason":
		$fmi->playSound($jasonphone,"Find Me!!!");
		break;
		
		case "ipad";
		$fmi->playSound($ipadmini,"Find Me!!");
                break;
                }
 
?>
