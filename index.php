<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://cloud.nucleuslogic.com/admin/index.php?page=action_login");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            array('username'=>'william', 'password'=>'william', 'submit_login'=>'   Login   '));
$server_output = curl_exec ($ch);
curl_close ($ch); die;
// echo $server_output;
?>