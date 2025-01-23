<?php
echo "hello";
//init curl
$ch = curl_init();
//curl_setopt可以設定curl參數
//設定url
curl_setopt($ch , CURLOPT_URL , "https://opendata.cwa.gov.tw/api/v1/rest/datastore/F-C0032-001?Authorization=CWA-85853216-8020-480E-8E32-F5D054D589E5");
//設定AGENT
curl_setopt($ch, CURLOPT_USERAGENT, "Google Bot");
//執行，並將結果存回
$result = curl_exec($ch);
//關閉連線
curl_close($ch);

?>