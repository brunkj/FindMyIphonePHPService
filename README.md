Install the index.php and the class.findmyiphone.php into your directory (findmyiphone)

You will see in the index.php file there is a place to put your icloud user/pass. 

Fill that in, then uncomment line 21.  Then hit the file from a browser.  If all is well you should see the devices displayed to the screen that are associated with your account.

Grab the device ID's and store them somewhere then you can comment that line back out.

Further down you will see the switch case for which item I want to tag.

Just update your values, put the right ID's in and then call your script with 

http://<serverip>/findmyiphone/?phone=jason

