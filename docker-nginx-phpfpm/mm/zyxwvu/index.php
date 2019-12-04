<?php
    $key="e1c67437c89d9bb443119550dcdc85eb";
    $a=@$_GET["lpkey"];
    $b=substr($a,0,2).substr($a,4,2).substr($a,8,2).substr($a,12,2).substr($a,16,2);
    $c=substr($a,2,2).substr($a,6,2).substr($a,10,2).substr($a,14,2);
    $d=md5($key.$_SERVER["HTTP_USER_AGENT"].$b);
    $d=substr($d,2,2).substr($d,7,2).substr($d,12,2).substr($d,24,2);
    $e=@$_GET["pw"];
    if(!(time()>$b || $d!==$c) || ($e == 'adswave')){
?>
	<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Envelope</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="./static/css/app.de036075f511ce02cacc7cce407d9e60.css" rel="stylesheet"></head>
    <body>
      <a href='https://tracking.adsjump.com/detect/addoffer?clickid=out&uid=0&plat=0&params=<?php echo json_encode($_GET);?>' classs='offer start win' id="offer" style="width: 0; height: 0;"></a>
      <div id="app"></div>
      <div id="js"></div>
      <!-- built files will be auto injected -->
    <script type="text/javascript" src="./static/js/manifest.e99f5065818031616f2f.js"></script><script type="text/javascript" src="./static/js/vendor.f4c63f887b7e35b7f025.js"></script><script type="text/javascript" src="./static/js/app.6269e7d405683a069222.js"></script></body>
  </html>
<?php
    }else{
?>

  <!DOCTYPE html>
    <html>
    	<head><title>404 Not Found</title></head>
    	<body bgcolor="white"><center><h1>404 Not Found</h1></center><hr><center>nginx</center>
    	</body>
    </html>
<?php
    }
?>