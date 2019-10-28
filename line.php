 <?php
  

function send_LINE($msg){
 $access_token = 'dl2YzpCCVb7onh4vOpxo/j+vT1M9w9qzcQDJMmbR5ozHmDnYxYxO7IpvtbxNh3DnhOPvCuu5F0/q7355Ryfulm98rN6jGgwTeULpLvZ9v/wvMMs3fDgyQbRt/fIgn7bS2uH2zP8IpZWevmOkp1rDZgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'Userid' => 'U279cdf04b6d64abfca928fd134d30000',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
