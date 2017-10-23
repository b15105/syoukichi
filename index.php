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
		
		//イベントコンテンツの取得
		$content = $bot->getMessageContent($event->getMessageId());
		//コンテンツヘッダーを取得
		$headers = $content->getHeaders();

		//フォルダ指定とファイル名の取得
		$dir_path = 'imgs';
		$filename = 'tmp';
		
		//コンテンツの種類を取得
		$extension = explode('/',$headers['Content-Type'])[1];

		//保存先フォルダに画像を保存
		file_put_contents($dir_path . '/' . $filename . '.' . $extension,$content->getRawBody());
		
		//URLの作成
		$filepath = 'https://' . $_SERVER['HTTP_HOST'] . '/' . $dir_path . '/' . $filename . '.' . $extension ;

		//replyImageMessage($bot, $event->getReplyToken(), $filepath,$filepath);
		$text = vision($filepath);
		replyTextMessage($bot, $event->getReplyToken(), $text);
		
	}

}

function  vision($imageNm){
	 // APIキー
	 $apiKey = "AIzaSyDCfQR3C1cKD4yfHUPJ5ybi5JFia8AOUro";
		 
	 error_log('呼び出し成功');
	 // リクエスト用json作成
	$json = json_encode(array(
		"requests" => array(
			array(
				"image" => array(
				"content" => base64_encode(file_get_contents($imageNm)),
			),
				"features" => array(
					array(
		 				"type" => "LABEL_DETECTION",
						"maxResults" => 3,
			 		),
				),
			),
		),
	));
	 
	// 各種オプションを設定
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "https://vision.googleapis.com/v1/images:annotate?key=" . $apiKey); // Google Cloud Vision APIのURLを設定
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // curl_execの結果を文字列で取得
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // サーバ証明書の検証を行わない
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST"); // POSTでリクエストする
	curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json")); // 送信するHTTPヘッダーの設定
	curl_setopt($curl, CURLOPT_TIMEOUT, 15); // タイムアウト時間の設定（秒）
	curl_setopt($curl, CURLOPT_POSTFIELDS, $json); // 送信するjsonデータを設定
	 
	// curl実行
	$res = curl_exec($curl);
	$data = json_decode($res, true);
	curl_close($curl);
	 
	// 出力
	//var_dump($data);
	// 結果を表示
	return $data["responses"][0]['labelAnnotations'][0]['description'];
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