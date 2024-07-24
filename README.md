# BlueDart PHP Integration API Guide/Code
The BlueDart courier PHP API can be used in any PHP framework or core PHP. Simply copy and paste the classes for easy use.

## Requirements:

1. PHP version > 5.7
2. SOAP extension must be installed on the server.

## Installation:
1. Download all files.
2. Obtain your BlueDart license key file (2 license files required).
3. Obtain your BlueDart login ID and password.
4. Open the required service file and paste your credentials into the profile array in the file.
5. That's it.

## Tracking API
To use the tracking API:

1. Use the following URL (replace with your BlueDart ID and password):
```
https://api.bluedart.com/servlet/RoutingServlet?handler=tnt&action=custawbquery&loginid=BOM00001&awb=awb&numbers=15616373625&format=xml&lickey=4ecbd06dc0b9737d69120029cb05c9df&verno=1.3&scan=0
```

2. Use the following code to get the current tracking ID status:
```
$url = 'https://api.bluedart.com/servlet/RoutingServlet?handler=tnt&action=custawbquery&loginid='.BD_LOGIN_ID.'&awb=awb&numbers='.$id.'&format=xml&lickey='.BD_TRACK_API_KEY.'&verno=1.3&scan=0';
$xml = simplexml_load_file($url);
```
