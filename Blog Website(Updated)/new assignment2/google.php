<!DOCTYPE html>
<html>
<head>
	
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>

<?php require ("vendor/autoload.php");
session_start();
//Step 1: Enter you google account credentials

$g_client = new Google_Client();

$g_client->setClientId("811240798223-8mh5io50akiklln84gmautgkrat8bg84.apps.googleusercontent.com");
$g_client->setClientSecret("KnE_E_-HdEWK6pESm8YFrcsI");
$g_client->setRedirectUri("http://localhost/new%20assignment2/google.php");
$g_client->setScopes("email");
//Step 2 : Create the url
$auth_url = $g_client->createAuthUrl();
echo "<div class='omb_login'>";
echo "<div class='row omb_row-sm-offset-3 omb_socialButtons'>";
echo "<div class='col-xs-4 col-sm-2'>";
	echo "<a href='".$auth_url."' class='btn btn-lg btn-block omb_btn-google'>Sign-in through Google ></a>";
		echo "<i class='fa fa-google-plus visible-xs'></i>";
echo "</a>";
echo "</div>";	
echo "</div>";
echo "</div>";



//Step 3 : Get the authorization  code
$code = isset($_GET['code']) ? $_GET['code'] : NULL;

//Step 4: Get access token
if(isset($code)) {

    try {

        $token = $g_client->fetchAccessTokenWithAuthCode($code);
        $g_client->setAccessToken($token);

    }catch (Exception $e){
        echo $e->getMessage();
    }

    try {
        $pay_load = $g_client->verifyIdToken();


    }catch (Exception $e) {
        echo $e->getMessage();
    }

} else{
    $pay_load = null;
}

if(isset($pay_load)){
   $_SESSION['google'] = 1;
   header('location:/new assignment2/index.php/blog');
}
?>
</body>
</html>