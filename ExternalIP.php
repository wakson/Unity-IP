<html>
 <head>
  <title>Get External IP Address</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?>
 <?PHP $ip = $HTTP_SERVER_VARS["REMOTE_ADDR"]; ?>
 </body>
</html>
