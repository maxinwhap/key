 <?php
  

function send_LINE($msg){
 $access_token = 'EJJNqhq+j4JB4Fb1aWy65tR81Vum3Gyc+6y990wBatJnO3maFeVwgIFbqXmCf31ThOPvCuu5F0/q7355Ryfulm98rN6jGgwTeULpLvZ9v/yy8J/ic9SVbKuFbwLXDFD12hOKtiR+yAO2/d3/9Glx0QdB04t89/1O/w1cDnyilFU='; 

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
