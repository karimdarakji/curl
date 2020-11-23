<!DOCTYPE html>
<html>
<body>
<?php
$ch = curl_init();

$url = "https://jsonplaceholder.typicode.com/posts";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($e = curl_error($ch)) {
    echo $e;
}

else {
    $decoded = json_decode($resp, true);
    
    //var_dump($decoded);
}

curl_close($ch);
?>
<table width="70%" border="1" cellpadding="5" cellspacing="5">
<thead>
<tr><td>id</td><td>title</td></tr>
<?php foreach($decoded as $data)
{ ?>
<tr>
<td><?php echo($data['id'])?></td>
<td><?php echo($data['title'])?></td></tr>
<?php } ?>

</table>

</body>
</html>