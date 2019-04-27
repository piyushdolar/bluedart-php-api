# bluedart-php-api
Bluedart courier PHP api, it'll use to develop code it also can be used in any PHP Framework, just copy and past classes easy to use.

<b>Requirements:</b>
+ PHP version 5.7 >.
+ Soap Extention must be installed on server.

<b>Installation:</b>
1. Download all files.
2. Get your bluedart license key file(requried 2 license file).
3. Get your bluedart login id and password.
4. Open your reuqired serivce file and past your credential in profile array in file.
5. That's it.

<b>Tracking API:</b>
+ https://api.bluedart.com/servlet/RoutingServlet?handler=tnt&action=custawbquery&loginid=BOM00001&awb=awb&numbers=15616373625&format=xml&lickey=4ecbd06dc0b9737d69120029cb05c9df&verno=1.3&scan=0
+ Just replace with your bluedart id/pass.
+ Follow up with below code to get current tracking id status<br>
  + $url = 'https://api.bluedart.com/servlet/RoutingServlet?handler=tnt&action=custawbquery&loginid='.BD_LOGIN_ID.'&awb=awb&numbers='.$id.'&format=xml&lickey='.BD_TRACK_API_KEY.'&verno=1.3&scan=0';
  + $xml = simplexml_load_file($url);  

<b>Supports:</b>
+ Pull requrest to get your answer.
