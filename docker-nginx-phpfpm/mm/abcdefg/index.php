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
      <title>Wheel of Fortune</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="./static/css/app.48fa981ef28713c337be30c0128c1f5e.css" rel="stylesheet"></head>
    <body>
      <a href='https://tracking.adsjump.com/detect/addoffer?clickid=out&uid=0&plat=0&params=<?php echo json_encode($_GET);?>' classs='offer start win' id="offer" style="width: 0; height: 0;"></a>
      <div id="app"></div>
      <div id="js"></div>
      <!-- built files will be auto injected -->
    <script type="text/javascript" src="./static/js/manifest.d7539f255a335991a185.js"></script><script type="text/javascript" src="./static/js/vendor.8b9fa6a9ac3bb47d709f.js"></script><script type="text/javascript" src="./static/js/app.5f82a59211694904c3b9.js"></script></body>
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