<?php
// Information The Bot 
$Sudo = "";
$Token = "1410036089:AAGmJcybkNwjJ9H69nXpJN8HxBV-dzx84Ec";
define('TeamSyria','*• By : @TeamSyria*');
// Start Function 
function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}
define('API_KEY',$Token);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function YouTube($id){
	parse_str(file_get_contents("http://youtube.com/get_video_info?video_id=".$id) , $info); //decode the data
$json = json_decode($info['player_response'],true);
$count = $json['videoDetails']['viewCount'];
$title = substr($json['videoDetails']['title'],0,25).'...';
$chname = $json['videoDetails']['author'];
$view1 = round($count / 1000000,0);
if(!preg_match('/([.])/', $view1) and $view1 != 0){
	$view1 = round($count / 1000000,2);
	$view = $view1.'M';
	}else{
		$view2 = round($count / 1000,0);
		if(!preg_match('/([.])/', $view2) and $view2 != 0){
			$view2 = round($count / 1000,2);
	$view = $view2.'K';
	}else{
		$view = $count;
		}
		}
		$photo = $json['videoDetails']['thumbnail']['thumbnails'][0]['url'];
if($chname == null or !$id){
$print = ['ok'=>false];
}else{
$print = ['ok'=>true,'title'=>$title,'view'=>$view,'name'=>$chname,'photo'=>$photo];
}
return json_encode($print,64|128|256);
	}
// Updates
$update = json_decode(file_get_contents('php://input'));
if(isset($update->message)){
$message = $update->message;
$message_id = $update->message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
$tc = $message->chat->type;
}
if(isset($update->callback_query)){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $chat_id;
$tc = $update->callback_query->message->chat->type;
}
$save = json_decode(file_get_contents("id.json"),1);
function save($array){
	file_put_contents('id.json', json_encode($array));
	}
	function yhya($action = null){
		if($action == null){
			$action = 'typing';
			}
	bot('sendchataction',[
	'chat_id'=>$GLOBALS['chat_id'],
	'action'=>$action
	]);
	}
// Start Comands
if($text == "/start"){
	yhya();
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
أخلا بك عزيزي في بوت تحميل من مواقع التواصل 
استخدم الأزرار التالية للمساعدة :
",'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"تابعنا 🍃❤️","url"=>"https://t.me/TeamSyria"]],
    ]])
    ]);
}
if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $text, $match)) {
	yhya('upload_photo');
    $id = $match[1]; 
    $json = json_decode(YouTube($id));
    $title = $json->title;
    $view = $json->view;
    bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>$text,
    'caption'=>"
*". str_replace('*','',$title)." 🍃❤️
$view 👁️*
",
    'reply_to_message_id'=>$message_id,
    'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"صوت","callback_data"=>"mp3#".$id],['text'=>"فيديو",'callback_data'=>"mp4#".$id]],
    ]])
    ]);
    }
    $ex = explode('#',$data);
    if($ex[0] == "mp3" or $ex[0] == "mp4"){
    	if($save['band']['all'][$ex[1]] == 'false'){
    	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*عذرا لا يمكنني تحميل الأغاني و المقاطع فوق ال 50mg 😥*
",'parse_mode'=>"MarkDown"]);
exit;
    }
    }
    if($ex[0] == "mp4" and $save['band']['video'][$ex[1]] == 'false'){
    	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*عذرا لا يمكنني تحميل المقاطع فوق ال 50mg 😥*
",'parse_mode'=>"MarkDown"]);
exit;
    }
    function curl_get($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.85 Safari/537.36');
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);       
    $ch_data = curl_exec($ch);
    curl_close($ch);
    return $ch_data;
}
    if($ex[0] == "mp3"){
    	if(!$save['audio'][$ex[1]]){
    	yhya('record_voice');
    
    $get = json_decode(file_get_contents("https://makiq.herokuapp.com/video_info.php?url=http://www.youtube.com/watch?v=$ex[1]"))->audio;
        file_put_contents($from_id.'.m4a',curl_get("$get"));
    yhya('record_voice');
    $json = json_decode(YouTube($ex[1]));
    $performer = $json->name;
    $title = $json->title;
    $thumb = $json->photo;
    $id = bot('sendaudio',[
    'chat_id'=>$chat_id,
    'audio'=>new CURLFile($from_id.'.m4a'),
    'caption'=>TeamSyria,
    'parse_mode'=>"MarkDown",
    'performer'=>$performer,
    'title'=>$title,
    'thumb'=>$thumb,
    ])->result->audio->file_id;
    if(!id){
    	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
*عذرا لا يمكنني تحميل الأغاني فوق ال 50mg 😥*
",'parse_mode'=>"MarkDown"]);
$save['band']['all'][$ex[1]] = 'false';
save($save);
    }else{
    	$save['audio'][$ex[1]] = $id;
    save($save);
    }
    unlink($from_id.'.m4a');
    }else{
    	yhya('record_voice');
    	bot('sendaudio',[
    'chat_id'=>$chat_id,
    'audio'=>$save['audio'][$ex[1]],
    'caption'=>TeamSyria,
    'parse_mode'=>"MarkDown",
    ]);
    }
   
    }
    if($ex[0] == "mp4"){
    $get = json_decode(file_get_contents("https://makiq.herokuapp.com/video_info.php?url=http://www.youtube.com/watch?v=$ex[1]"))->video;
    	bot('sendvideo',[
  'chat_id'=>$chat_id,
   'video'=>$get,
   'caption'=>"تم تنزيل الفيديو بنجاح ، 📥؛",
   'parse_mode'=>"MarkDown",
    'performer'=>$performer,
    'thumb'=>$thumb,
    ])->result->video->file_id;
}