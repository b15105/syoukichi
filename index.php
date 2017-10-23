<?php

//オートローダの指定
require_once __DIR__ . '/vendor/autoload.php';

//CurlHTTPClientとLINEBotのインスタンス化
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient(getenv('CHANNEL_ACCESS_TOKEN'));
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => getenv('CHANNEL_SECRET')]);

//署名の検証作業
$signature = $_SERVER["HTTP_" . \LINE\LINEBot\Constant\HTTPHeader::LINE_SIGNATURE];
try {
  $events = $bot->parseEventRequest(file_get_contents('php://input'), $signature);
} catch(\LINE\LINEBot\Exception\InvalidSignatureException $e) {
  error_log("parseEventRequest failed. InvalidSignatureException => ".var_export($e, true));
} catch(\LINE\LINEBot\Exception\UnknownEventTypeException $e) {
  error_log("parseEventRequest failed. UnknownEventTypeException => ".var_export($e, true));
} catch(\LINE\LINEBot\Exception\UnknownMessageTypeException $e) {
  error_log("parseEventRequest failed. UnknownMessageTypeException => ".var_export($e, true));
} catch(\LINE\LINEBot\Exception\InvalidEventRequestException $e) {
  error_log("parseEventRequest failed. InvalidEventRequestException => ".var_export($e, true));
}

//メッセージ型のチェックとオウム返し
foreach ($events as $event) {


	if (!($event instanceof \LINE\LINEBot\Event\MessageEvent)) {
	  error_log('Non message event has come');
	  continue;
	}
	//if (!($event instanceof \LINE\LINEBot\Event\MessageEvent\TextMessage)) {
	//  error_log('Non text message has come');
	// continue;
	//}

	if($event instanceof \LINE\LINEBot\Event\MessageEvent\ImageMessage){

		$messageId = $event->getMessageId();

		//画像ファイルのバイナリ取得
		$ch = curl_init("https://api.line.me/v2/bot/message/".$messageId."/content");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
 			'Content-Type: application/json; charser=UTF-8',
 			'Authorization: Bearer ' . $accessToken
 		));
		$result = curl_exec($ch);
		curl_close($ch);

		//画像ファイルの作成  
		$fp = fopen("https://" . $_SERVER["HTTP_HOST"] . "/imgs/tmp.jpg", 'wb');

		if ($fp){
    	if (flock($fp, LOCK_EX)){
      	if (fwrite($fp,  $result ) === FALSE){
            error_log('ファイル書き込みに失敗しました<br>');
      	}else{
            error_log('をファイルに書き込みました<br>');
      	}

      	flock($fp, LOCK_UN);
    	}else{
        error_log('ファイルロックに失敗しました<br>');
    	}
		}

		fclose($fp);



		replyImageMessage($bot, $event->getReplyToken(), "https://" . $_SERVER["HTTP_HOST"] . "/imgs/tmp.jpg", "https://" . $_SERVER["HTTP_HOST"] . "/imgs/tmp.jpg");
		
	}

		
	$text = $event->getText();			
	if($text == "こぶし"){
		replyImageMessage($bot, $event->getReplyToken(), "https://" . $_SERVER["HTTP_HOST"] . "/imgs/test0.jpg", "https://" . $_SERVER["HTTP_HOST"] . "/imgs/test0.jpg");
	}


	


}

function replyTextMessage($bot, $replyToken, $text) {
  $response = $bot->replyMessage($replyToken, new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($text));
  if (!$response->isSucceeded()) {
    error_log('Failed!'. $response->getHTTPStatus . ' ' . $response->getRawBody());
  }
}

function replyImageMessage($bot, $replyToken, $originalImageUrl, $previewImageUrl) {
  $response = $bot->replyMessage($replyToken, new \LINE\LINEBot\MessageBuilder\ImageMessageBuilder($originalImageUrl, $previewImageUrl));
  if (!$response->isSucceeded()) {
    error_log('Failed!'. $response->getHTTPStatus . ' ' . $response->getRawBody());
  }
}


 ?>