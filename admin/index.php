<?php

if ($_SERVER['PHP_AUTH_USER'] != "admin"  

    or $_SERVER['PHP_AUTH_PW'] != "password@123"):  

  // Bad or no username/password.  

  // Send HTTP 401 error to make the  

  // browser prompt the user.  

  header('WWW-Authenticate: Basic realm="Authorization Required"');
    header('HTTP/1.0 401 Unauthorized');

  // Display message if user cancels dialog  

  ?>  

  <HTML>  

  <HEAD><TITLE>Authorization Failed</TITLE></HEAD>  

  <BODY>  

  <H1>Authorization Failed</H1>  

  <P>Without a valid username and password,  

     access to this page cannot be granted.  

     Please click 'reload' and enter a  

     username and password when prompted.  

  </P>  

  </BODY>  

  </HTML>  

<?php else: ?>  



<?php endif; ?>