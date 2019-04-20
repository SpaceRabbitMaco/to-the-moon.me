<?php 
echo 'Hello World!';

require '../../vendor/autoload.php';
use Telegram\Bot\Api;

// INIT __START__
$my_chat_id = '172157142';
$my_msg = 'testing msg';


// INIT __END__

if (isset($_GET['send_cc_upd'])) {
    $telegram = new Api($API_KEY);
    $telegram->sendMessage([ 'chat_id' => $my_chat_id, 'parse_mode'=> 'HTML', 'text' => $my_msg ]);
}
else {   
    $telegram = new Api('481150088:AAEkvgPCtIRUZRubXpW2JMl9hgXHUuylNvI');
    $updates = $telegram -> getWebhookUpdates();

    $text = $updates->getMessage()->getText();
    $chat_id = $updates->getMessage()->getChat()->getId();

    if($text){
        $reply = $text;
        $telegram->sendMessage([ 'chat_id' => $chat_id, 'parse_mode'=> 'HTML', 'text' => $reply ]);
        $telegram->sendMessage([ 'chat_id' => $chat_id, 'parse_mode'=> 'HTML', 'text' => $chat_id ]);
    }
    
}






?>