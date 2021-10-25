<?php
header('Access-Control-Allow-Origin: *');
$results = '';
// get or generate your key at https://www.dynadot.com/account/domain/setting/api.html
$key = 'your-api-key';
foreach (explode(",", $_GET['domains']) as $domain) {
    foreach (explode(",", $_GET['domainexts']) as $ext) {
        $results .= file_get_contents("https://api.dynadot.com/api3.xml?key={$key}&command=search&domain0={$domain}.{$ext}");
    }
}
echo $results;

?>
