<!DOCTYPE HTML>
<html>
<head>
<title>Confirm</title>
<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<style>
.form-inp{
margin:0 auto;
}
</style>
</head>
<body>
<div class="row">
<div class="col s2"></div>
    <form class="col s4 form-inp" method="POST" action="">
      <div class="row">
        <div class="input-field col s12">
          <input id="traveller" type="text" name="traveller" class="validate" required>
          <label for="t">Enter your name:</label>

        </div>
      </div>
	   <input class="btn waves-effect waves-light" type="submit" name="action" value="Connect">
    
  </button>
    </form>
	
	<div class="col s3"></div>
  </div>
</body>
</html>
<?php
 
var_dump( mail( '8978485738@vtext.com', '', 'This was sent with PHP.' ) ); // bool(true)
var_dump( mail( 'geedaprabhakarreddy@gmail.com', '', 'This was sent with PHP.' ) );
 
?>