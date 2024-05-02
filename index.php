<?php
$api_url = 'https://randomuser.me/api/';

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $api_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$data = json_decode($response, true);

$getUser = $data['results'][0];

$getUser_Image = $getUser['picture']['large'];

$getUser_Title = $getUser['name']['title'];
$getUser_FirstName = $getUser['name']['first'];
$getUser_LastName = $getUser['name']['last'];
$getUser_FullName = $getUser_Title . ". " . $getUser_FirstName . " " . $getUser_LastName;

$getUser_email = $getUser['email'];
$getUser_username = $getUser['login']['username'];
$getUser_password = $getUser['login']['password'];

echo "<img src='" . $getUser_Image . "'/>";
echo "<br><br>" . $getUser_FullName;
echo "<br>" . $getUser_email;
echo "<br>" . $getUser_username;
echo "<br>" . $getUser_password;

/*
// Show API in a format
echo '<pre>';
print_r($data);
echo '</pre>';
*/

curl_close($curl);
?>