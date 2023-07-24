# BlueDart PHP Integration API Guide/Code
Bluedart courier PHP API, can use in any PHP Framework/Core PHP, just copy and paste classes easy to use.

<b>Requirements:</b>
+ PHP version > 5.7
+ Soap Extention must be installed on the server.

<b>Installation:</b>
1. Download all files.
2. Get your bluedart license key file(requried 2 license file).
3. Get your Bluedart login id and password.
4. Open your required service file and past your credential in the profile array in the file.
5. That's it.

<b>Tracking API:</b>
+ https://api.bluedart.com/servlet/RoutingServlet?handler=tnt&action=custawbquery&loginid=BOM00001&awb=awb&numbers=15616373625&format=xml&lickey=4ecbd06dc0b9737d69120029cb05c9df&verno=1.3&scan=0
+ Just replace with your bluedart id/pass.
+ Follow up with the below code to get the current tracking id status<br>
  + $url = 'https://api.bluedart.com/servlet/RoutingServlet?handler=tnt&action=custawbquery&loginid='.BD_LOGIN_ID.'&awb=awb&numbers='.$id.'&format=xml&lickey='.BD_TRACK_API_KEY.'&verno=1.3&scan=0';
  + $xml = simplexml_load_file($url);  
