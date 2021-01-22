<?php
$API_KEY="1267777641:AAHK93prdCzgO3uHFmRC79c14yg9UmAkYsg";
define('API_KEY',$API_KEY);
@function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $res = curl_exec($ch);
    curl_close($ch);
    return json_decode($res);
}
@function getupdates($up_id){
  $get = bot('getupdates',[
    'offset'=>$up_id
  ]);
  return end($get->result);
  
}
@function run($update){
$modz = "r00t94";
$ayh = "@r00t94";
$sudo = "1399282735";
$Dev = array("1399282735","",""); //ID ADMIN NUMBER 1 HE CHAT
//****************//
@$usernamebot = "r00t94bot"; //UserName Bot
@$channel = "Damascus"; // UserName Channel don't @
@$token = API_KEY;
$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$text = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
/*===== dev ~ @OO1OOO =====*/
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
@$text = $update->inline_qurey->qurey;
/*===== dev ~ @OO1OOO =====*/
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
$re = $message->reply_to_message;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
$chatid3=$update->message->chat->id;
$fromid3=$update->message->from->id;
$text=$update->message->text;
$mid=$update->message->message_id;
/*===== dev ~ @OO1OOO =====*/
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
$title =$message->chat->title;
$rep = $message->reply_to_message;
/*===== dev ~ @OO1OOO =====*/
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];
if($text == "الأبراج" or $text == "الابراج"){
bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
اهلا وسهلا بك يرجى اختيار برجك الان
      ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الحمل",'callback_data'=>"الحمل#$from_id"],['text'=>"الثور",'callback_data'=>"الثور#$from_id"],['text'=>"الجوزاء",'callback_data'=>"الجوزاء#$from_id"]],
[['text'=>"السرطان",'callback_data'=>"السرطان#$from_id"],['text'=>"الاسد",'callback_data'=>"الاسد#$from_id"],['text'=>"العذراء",'callback_data'=>"العذراء#$from_id"]],
[['text'=>"الميزان",'callback_data'=>"الميزان#$from_id"],['text'=>"العقرب",'callback_data'=>"العقرب#$from_id"],['text'=>"القوس",'callback_data'=>"القوس#$from_id"]],
[['text'=>"الجدي",'callback_data'=>"الجدي#$from_id"],['text'=>"الدلو",'callback_data'=>"الدلو#$from_id"],['text'=>"الحوت",'callback_data'=>"الحوت#$from_id"]],
]])
]);
}
$ex = explode("#",$data);
$array = array("الحمل","الثور","الجوزاء","السرطان","الاسد","العذراء","الميزان","العقرب","القوس","الجدي","الدلو","الحوت");
if(in_array($ex[0],$array)){
$get = file_get_contents("https://dev-yhya.tk/api/abrag/index.php?Text=$ex[0]");
if($ex[1] == $from_id){
bot('EditMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
*$get*
        ",'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"الحمل",'callback_data'=>"الحمل#$from_id"],['text'=>"الثور",'callback_data'=>"الثور#$from_id"],['text'=>"الجوزاء",'callback_data'=>"الجوزاء#$from_id"]],
[['text'=>"السرطان",'callback_data'=>"السرطان#$from_id"],['text'=>"الاسد",'callback_data'=>"الاسد#$from_id"],['text'=>"العذراء",'callback_data'=>"العذراء#$from_id"]],
[['text'=>"الميزان",'callback_data'=>"الميزان#$from_id"],['text'=>"العقرب",'callback_data'=>"العقرب#$from_id"],['text'=>"القوس",'callback_data'=>"القوس#$from_id"]],
[['text'=>"الجدي",'callback_data'=>"الجدي#$from_id"],['text'=>"الدلو",'callback_data'=>"الدلو#$from_id"],['text'=>"الحوت",'callback_data'=>"الحوت#$from_id"]],
]]),'parse_mode'=>"MarkDown",
]);
}
$array = array("الحمل","الثور","الجوزاء","السرطان","الاسد","العذراء","الميزان","العقرب","القوس","الجدي","الدلو","الحوت");
if(in_array($text,$array)){
$get = file_get_contents("https://dev-yhya.tk/api/abrag/index.php?Text=$text");
bot('sendmessage',[
      'chat_id'=>$chat_id,
      "text"=>"
*$get*
      ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"الحمل",'callback_data'=>"الحمل#$from_id"],['text'=>"الثور",'callback_data'=>"الثور#$from_id"],['text'=>"الجوزاء",'callback_data'=>"الجوزاء#$from_id"]],
[['text'=>"السرطان",'callback_data'=>"السرطان#$from_id"],['text'=>"الاسد",'callback_data'=>"الاسد#$from_id"],['text'=>"العذراء",'callback_data'=>"العذراء#$from_id"]],
[['text'=>"الميزان",'callback_data'=>"الميزان#$from_id"],['text'=>"العقرب",'callback_data'=>"العقرب#$from_id"],['text'=>"القوس",'callback_data'=>"القوس#$from_id"]],
[['text'=>"الجدي",'callback_data'=>"الجدي#$from_id"],['text'=>"الدلو",'callback_data'=>"الدلو#$from_id"],['text'=>"الحوت",'callback_data'=>"الحوت#$from_id"]],
]]),'parse_mode'=>"MarkDown",
]);
}
}
$user = $message->from->username;
$ftag = file_get_contents("$chat_id.txt");
$tags = explode("\n",$ftag);
$chtag = $chat_id ."a";
if ( $text  and !in_array($id,$tags)){
file_put_contents("$chat_id.txt","\n$id",FILE_APPEND);
file_put_contents("$chtag.txt","\n𓆩 @$user 𓆪",FILE_APPEND);
}
$tagss = file_get_contents("$chtag.txt");
if ( $text == "تاك الكل" ){
bot ('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📋¦قائمه الاعضاء :
 $tagss",
]);
}
$USAIED = json_decode(file_get_contents('php://input'));
$SAIEDM = $USAIED->message;
$SAIEDT = $SAIEDM->text;
$SAIEDC = $SAIEDM->chat->id;
$DSAIED= $USAIED->callback_query;
$DSAIEDD = $DSAIED->data;
$SAIEDNEW = $SAIEDM->new_chat_member;
$SAIEDN = $SAIEDNEW->first_name;
$SAIEDI = $SAIEDNEW->id;
$DSAIEDN = $DSAIED->from->first_name;
$DSAIEDI = $DSAIED->from->id;
$DSAIEDC = $DSAIED->message->chat->id;
mkdir("SAIED");
$SAIEDRO = file_get_contents("SAIED/RO$SAIEDC.txt");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if($SAIEDT == "تفعيل التحقق"  and $SAIEDRO != "ON"){
bot('sendmessage',[
'chat_id'=>$SAIEDC,
'text'=>"• تم تفعيل التحقق من الروبوتات 👨‍✈️.
• سيتم تقييد اي شخص ينضم الى المجموعة ولن يستطيع ارسال الرسائل حتى يضغط على زر انا لست روبوت 📛.",
'reply_to_message_id'=>$SAIEDM->message_id,
]);
file_put_contents("SAIED/RO$SAIEDC.txt","ON");
}
if($SAIEDT == "تفعيل التحقق"  and $SAIEDRO == "ON"){
bot('sendmessage',[
'chat_id'=>$SAIEDC,
'text'=>"• تم تفعيل التحقق من الروبوتات بالتأكيد 👨‍✈️.",
'reply_to_message_id'=>$SAIEDM->message_id,
]);
}
if($SAIEDT == "تعطيل التحقق"  and $SAIEDRO == "ON"){
bot('sendmessage',[
'chat_id'=>$SAIEDC,
'text'=>"• تم تعطيل التحقق من الروبوتات 🛑.
• الان يستطيع اي شخص ينضم الى المجموعة ارسال الرسائل فيها 📝.",
'reply_to_message_id'=>$SAIEDM->message_id,
]);
unlink("SAIED/RO$SAIEDC.txt");
}
if($SAIEDT == "تعطيل التحقق"  and $SAIEDRO != "ON"){
bot('sendmessage',[
'chat_id'=>$SAIEDC,
'text'=>"• تم تعطيل التحقق من الروبوتات بالتأكيد 🛑.",
'reply_to_message_id'=>$SAIEDM->message_id,
]);
}
if($SAIEDNEW and $SAIEDRO == "ON"){
bot('restrictChatMember',[
'chat_id'=>$SAIEDC,
'user_id'=>$SAIEDI,
]);
 bot('sendMessage',[
'chat_id'=>$SAIEDC,
'text'=>"• اهلا بك يا [$SAIEDN](tg://user?id=$SAIEDI) ❤️.
• المعذرة تم تقييدك من ارسال الرسائل ⚠️.
• يرجى الضغط على أنا لست روبوت الموجودة في الأسفل حتى يتم فك التقييد عنك 🛑.",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"• انا لست ربوت 📛","callback_data"=>"RoBot-$SAIEDI"]],
]])
]);
}
$ROSAIED = explode('-', $DSAIEDD);
if($DSAIEDD == "RoBot-$ROSAIED[1]" and $DSAIEDI == $ROSAIED[1]){
bot('promoteChatMember',[
'chat_id'=>$DSAIEDC,
'user_id'=>$DSAIEDI,
]);
bot('EditMessageText',[
'chat_id'=>$DSAIEDC,
'message_id'=>$DSAIED->message->message_id,
'text'=>"• أهلا بك يا [$DSAIEDN](tg://user?id=$DSAIEDI) ❤️.
• تم الغاء التقييد عنك بنجاح يمكنك ارسال الرسائل الآن 📝.",
'parse_mode'=>"MarkDown",
]);
}
}
$reuser = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$user_id = $message->reply_to_message->from->id;
$ti = explode("وضع لقب",$text);
if($ti[1] && $reply){
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$user_id,
'can_change_info'=>false,
'can_restrict_members'=>false,
'can_pin_messages'=>false,
'can_delete_messages'=>false,
'can_invite_users'=>true,
'can_promote_members'=>false,
]);
bot('setChatAdministratorCustomTitle',[
'chat_id'=>$chat_id,
'user_id'=>$user_id,
'custom_title'=>$ti[1],
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- العضو @$reuser .
- تم وضع ($ti[1]) كلقب له .",
'reply_to_message_id'=>$message->message_id,
]);
}

if($text=="/gif" and $re){
if(isset($update->message->text)){
$neman = json_decode(file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=blue-fire&text=$re->text&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141"));
$neman2 = $neman->src;
bot('senddocument',[
'chat_id'=>$update->message->chat->id,
'document'=>$neman2,
]);
bot('sendmessage',[
'chat_id'=>$update->message->chat->id,
'text'=>"تم الإنتهاء وهذه هي النتيجة 🔘💎",
'reply_to_message_id'=>$update->message->message_id+1,
'parse_mode'=>"HTML"
]);
}
}
if($text == "/HD" and $re){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://urlscan.io/liveshot/?width=1600&height=1200&url=$re->text",
'caption'=>"
🔘 HD shot done 
📮 @Wizard_System",
]);
}

if($text == "/screen" and $re){
$re = $message->reply_to_message;
$api = json_decode(file_get_contents("https://screenshotapi.net/api/v1/screenshot?token=92MHMJTUWFIHFA5R16QZKYZMPAHNUZE7&url=$re->text"),true);
$image = $api['screenshot'];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Okay please wait ...",
]);
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$image",
'caption'=>"
🔘 Screen Shot done 
📮 @Wizard_System",
]);
}


$ex = explode("/dec",$text);
$en= explode("/enc",$text);
if($en[1]){
$key="##@@..@@##";
$value="++..++";
$encrypt= openssl_encrypt($en[1],'AES-256-OFB',$key,0,$value);
file_put_contents("elia.json",$encrypt);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم تشفير الرسالة بنجاح 
============
$encrypt
============
للفك 
/dec + الكلمة المشفرة

ملاحظة : هذا التشفير خاص بنا فقط ..
"
]);
}
if($ex[1]){
$key="##@@..@@##";
$value="++..++";
$decrypt= openssl_decrypt($ex[1],'AES-256-OFB',$key,0,$value);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم الفك بنجاح 
============
$decrypt
============
"
]);
}


$re = $message->reply_to_message;
if($text=="/ip" and $re){
$ip = json_decode(file_get_contents("https://geo.ipify.org/api/v1?apiKey=at_B2fnaV3jgYYyYezb7QrqScl7zxwgr&ipAddress=".$re->text));
$country = $ip->location->country;
$city = $ip->location->region;
$isp = $ip->isp;
$cit = $ip->location->city;
$post = $ip->location->postalCode;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"Country : $country \n region : $city \n City : $cit \n isp : $isp \n postalcode : $post",
'reply_to_message_id'=>$message_id,
 ]);
 }
 
if($text=="زخرف" and $re){
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($re->text); 
   $k = str_replace( ض ,  ضِـٰٚـِْ✮ِـٰٚـِْ , $re->text);
   $k = str_replace( ص ,  صِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ث ,  ثِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ق ,  قِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ف ,  فِ͒ـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( غ ,  غِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ع ,  عِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( خ ,  خِ̐ـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ح ,  حِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ج ,  جِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ش ,  شِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( س ,  سِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ي ,  يِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ب ,  بِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ل ,  لِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  تِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ن ,  نِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( م ,  مِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ك ,  ڪِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ط ,  طِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ذ ,  ذِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ظ ,  ظِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( ظ ,  ظِـٰٚـِْ✮ِـٰٚـِْ , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]);
  $k = $re->text;
   $k = str_replace( ض ,  ض͜ــ๋͜ـ , $k);
   $k = str_replace( ص ,  ص͜ــ๋͜ـ , $k);
   $k = str_replace( ث ,  ث͜ــ๋͜ـ͜ــ๋͜ـ , $k);
   $k = str_replace( ق ,  ق͜ــ๋͜ـ , $k);
   $k = str_replace( ف ,  ف͒͜ــ๋͜ـ , $k);
   $k = str_replace( غ ,  غ͜ــ๋͜ـ , $k);
   $k = str_replace( ع ,  ع͜ــ๋͜ـ , $k);
   $k = str_replace( خ ,  خ̐͜ــ๋͜ـ , $k);
   $k = str_replace( ح ,  ح͜ــ๋͜ـ , $k);
   $k = str_replace( ج ,  ج͜ــ๋͜ـ , $k);
   $k = str_replace( ش ,  ش͜ــ๋͜ـ , $k);
   $k = str_replace( س ,  س͜ــ๋͜ـ , $k);
   $k = str_replace( ي ,  ي͜ــ๋͜ـ , $k);
   $k = str_replace( ب ,  ب͜ــ๋͜ـ , $k);
   $k = str_replace( ل ,  ل͜ــ๋͜ـ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  ت͜ــ๋͜ـ , $k);
   $k = str_replace( ن ,  ن͜ــ๋͜ـ , $k);
   $k = str_replace( م ,  م͜ــ๋͜ـ , $k);
   $k = str_replace( ك ,  ڪ͜ــ๋͜ـ , $k);
   $k = str_replace( ط ,  ط͜ــ๋͜ـ , $k);
   $k = str_replace( ظ ,  ظ͜ــ๋͜ـ , $k);
   $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( ظ ,  ظــ๋͜ـ , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]);
  $k = $re->text;
   $k = str_replace( ض ,  ضِـೋـ , $k);
   $k = str_replace( ص ,  صِـೋـ , $k);
   $k = str_replace( ث ,  ثِـೋـ , $k);
   $k = str_replace( ق ,  قِـೋـ , $k);
   $k = str_replace( ف ,  فِ͒ـೋـ , $k);
   $k = str_replace( غ ,  غِـೋـ , $k);
   $k = str_replace( ع ,  عِـೋـ , $k);
   $k = str_replace( خ ,  خِ̐ـೋـ , $k);
   $k = str_replace( ح ,  حِـೋـ , $k);
   $k = str_replace( ج ,  جِـೋـ , $k);
   $k = str_replace( ش ,  شِـೋـ , $k);
   $k = str_replace( س ,  سِـೋـ , $k);
   $k = str_replace( ي ,  يِـೋـ , $k);
   $k = str_replace( ب ,  بِـೋـ , $k);
   $k = str_replace( ل ,  لِـೋـ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  تِـೋـ , $k);
   $k = str_replace( ن ,  نِـೋـ , $k);
   $k = str_replace( م ,  مِـೋـ , $k);
   $k = str_replace( ك ,  ڪِـೋـ , $k);
   $k = str_replace( ط ,  طِـೋـ , $k);
   $k = str_replace( ظ ,  ظِـೋـ , $k);
  $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]);
   $k = str_replace( ض ,  ضـ๋͜‏ـ , $re->text);
   $k = str_replace( ص ,  صـ๋͜‏ـ , $k);
   $k = str_replace( ث ,  ثـ๋͜‏ـ , $k);
   $k = str_replace( ق ,  قـ๋͜‏ـ , $k);
   $k = str_replace( ف ,  ف͒ـ๋͜‏ـ , $k);
   $k = str_replace( غ ,  غـ๋͜‏ـ , $k);
   $k = str_replace( ع ,  عـ๋͜‏ـ , $k);
   $k = str_replace( خ ,  خ̐ـ๋͜‏ـ , $k);
   $k = str_replace( ح ,  حـ๋͜‏ـ , $k);
   $k = str_replace( ج ,  جـ๋͜‏ـ , $k);
   $k = str_replace( ش ,  شـ๋͜‏ـ , $k);
   $k = str_replace( س ,  سـ๋͜‏ـ , $k);
   $k = str_replace( ي ,  يـ๋͜‏ـ , $k);
   $k = str_replace( ب ,  بـ๋͜‏ـ , $k);
   $k = str_replace( ل ,  لـ๋͜‏ـ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  تـ๋͜‏ـ , $k);
   $k = str_replace( ن ,  نـ๋͜‏ـ , $k);
   $k = str_replace( م ,  مـ๋͜‏ـ , $k);
   $k = str_replace( ك ,  ڪـ๋͜‏ـ , $k);
   $k = str_replace( ط ,  طـ๋͜‏ـ , $k);
   $k = str_replace( ظ ,  ظـ๋͜‏ـ , $k);
$k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]); 
  $k = $re->text;
   $k = str_replace( ض ,  ضِٰـِۢ , $k);
   $k = str_replace( ص ,  صِٰـِۢ , $k);
   $k = str_replace( ث ,  ثِٰـِۢ , $k);
   $k = str_replace( ق ,  قِٰـِۢ , $k);
   $k = str_replace( ف ,  فِٰ͒ـِۢ , $k);
   $k = str_replace( غ ,  غِٰـِۢ , $k);
   $k = str_replace( ع ,  عِٰـِۢ , $k);
   $k = str_replace( خ ,  خِٰ̐ـِۢ , $k);
   $k = str_replace( ح ,  حِٰـِۢ , $k);
   $k = str_replace( ج ,  جِٰـِۢ , $k);
   $k = str_replace( ش ,  شِٰـِۢ , $k);
   $k = str_replace( س ,  سِٰـِۢ , $k);
   $k = str_replace( ي ,  يِٰـِۢ , $k);
   $k = str_replace( ب ,  بِٰـِۢ , $k);
   $k = str_replace( ل ,  لِٰـِۢ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  تِٰـِۢ , $k);
   $k = str_replace( ن ,  نِٰـِۢ , $k);
   $k = str_replace( م ,  مِٰـِۢ , $k);
   $k = str_replace( ك ,  ڪِٰـِۢ , $k);
   $k = str_replace( ط ,  طِٰـِۢ , $k);
   $k = str_replace( ظ ,  ظِٰـِۢ , $k);
   $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]); 
  $k = $re->text;
   $k = str_replace( ض ,  ضَٰـُـٰٓ , $k);
   $k = str_replace( ص ,  صَٰـُـٰٓ , $k);
   $k = str_replace( ث ,  ثَٰـُـٰٓ , $k);
   $k = str_replace( ق ,  قَٰـُـٰٓ , $k);
   $k = str_replace( ف ,  فَٰ͒ـُـٰٓ , $k);
   $k = str_replace( غ ,  غَٰـُـٰٓ , $k);
   $k = str_replace( ع ,  عَٰـُـٰٓ , $k);
   $k = str_replace( خ ,  خَٰ̐ـُـٰٓ , $k);
   $k = str_replace( ح ,  حَٰـُـٰٓ , $k);
   $k = str_replace( ج ,  جَٰـُـٰٓ , $k);
   $k = str_replace( ش ,  شَٰـُـٰٓ , $k);
   $k = str_replace( س ,  سَٰـُـٰٓ , $k);
   $k = str_replace( ي ,  يَٰـُـٰٓ , $k);
   $k = str_replace( ب ,  بَٰـُـٰٓ , $k);
   $k = str_replace( ل ,  لَٰـُـٰٓ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  تَٰـُـٰٓ , $k);
   $k = str_replace( ن ,  نَٰـُـٰٓ , $k);
   $k = str_replace( م ,  مَٰـُـٰٓ , $k);
   $k = str_replace( ك ,  ڪَٰـُـٰٓ , $k);
   $k = str_replace( ط ,  طَٰـُـٰٓ , $k);
   $k = str_replace( ظ ,  ظَٰـُـٰٓ , $k);
  $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "ۿۿہ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]);
  $k = $re->text;
   $k = str_replace( ض ,  ضِٰـۛৣـ , $k);
   $k = str_replace( ص ,  صِٰـۛৣـ , $k);
   $k = str_replace( ث ,  ثِٰـۛৣـ , $k);
   $k = str_replace( ق ,  قِٰـۛৣـ , $k);
   $k = str_replace( ف ,  فِٰ͒ـۛৣـ , $k);
   $k = str_replace( غ ,  غِٰـۛৣـ , $k);
   $k = str_replace( ع ,  عِٰـۛৣـ , $k);
   $k = str_replace( خ ,  خِٰ̐ـۛৣـ , $k);
   $k = str_replace( ح ,  حِٰـۛৣـ , $k);
   $k = str_replace( ج ,  جِٰـۛৣـ , $k);
   $k = str_replace( ش ,  شِٰـۛৣـ , $k);
   $k = str_replace( س ,  سِٰـۛৣـ , $k);
   $k = str_replace( ي ,  يِٰـۛৣـ , $k);
   $k = str_replace( ب ,  بِٰـۛৣـ , $k);
   $k = str_replace( ل ,  لِٰـۛৣـ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  تِٰـۛৣـ , $k);
   $k = str_replace( ن ,  نِٰـۛৣـ , $k);
   $k = str_replace( م ,  مِٰـۛৣـ , $k);
   $k = str_replace( ك ,  ڪِٰـۛৣـ , $k);
   $k = str_replace( ط ,  طِٰـۛৣـ , $k);
   $k = str_replace( ظ ,  ظِٰـۛৣـ , $k);
  $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]); 
  $k = $re->text;
   $k = str_replace( ض ,  ض֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ص ,  ص֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ث ,  ث֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ق ,  ق֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ف ,  ف͒֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( غ ,  غ֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ع ,  ع֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( خ ,  خ̐֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ح ,  ح֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ج ,  ج֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ش ,  ش֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( س ,  س֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ي ,  ي֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ب ,  ب֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ل ,  ل֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  ت֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ن ,  ن֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( م ,  م֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ك ,  ڪ֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ط ,  ط֠ــۢ͜ـٰ̲ـ , $k);
   $k = str_replace( ظ ,  ظ֠ــۢ͜ـٰ̲ـ , $k);
  $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]); 
  $k = $re->text;
   $k = str_replace( ض ,  ض๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ص ,  ص๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ث ,  ث๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ق ,  ق๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ف ,  ف๋͒͜ـ❀๋͜ـ , $k);
   $k = str_replace( غ ,  غ๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ع ,  ع๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( خ ,  خ๋̐͜ـ❀๋͜ـ , $k);
   $k = str_replace( ح ,  ح๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ج ,  ج๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ش ,  ش๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( س ,  س๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ي ,  ي๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ب ,  ب๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ل ,  ل๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  ت๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ن ,  ن๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( م ,  م๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ك ,  ڪ๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ط ,  ط๋͜ـ❀๋͜ـ , $k);
   $k = str_replace( ظ ,  ظ๋͜ـ❀๋͜ـ , $k);
  $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]); 
  $k = $re->text;
   $k = str_replace( ض ,  ضـۘ❈ـۘ , $k);
   $k = str_replace( ص ,  صـۘ❈ـۘ , $k);
   $k = str_replace( ث ,  ثـۘ❈ـۘ , $k);
   $k = str_replace( ق ,  قـۘ❈ـۘ , $k);
   $k = str_replace( ف ,  ف͒ـۘ❈ـۘ , $k);
   $k = str_replace( غ ,  غـۘ❈ـۘ , $k);
   $k = str_replace( ع ,  عـۘ❈ـۘ , $k);
   $k = str_replace( خ ,  خ̐ـۘ❈ـۘ , $k);
   $k = str_replace( ح ,  حـۘ❈ـۘ , $k);
   $k = str_replace( ج ,  جـۘ❈ـۘ , $k);
   $k = str_replace( ش ,  شـۘ❈ـۘ , $k);
   $k = str_replace( س ,  سـۘ❈ـۘ , $k);
   $k = str_replace( ي ,  يـۘ❈ـۘ , $k);
   $k = str_replace( ب ,  بـۘ❈ـۘ , $k);
   $k = str_replace( ل ,  لـۘ❈ـۘ , $k);
   $k = str_replace( ا ,  آ , $k);
   $k = str_replace( ت ,  تـۘ❈ـۘ , $k);
   $k = str_replace( ن ,  نـۘ❈ـۘ , $k);
   $k = str_replace( م ,  م , $k);
   $k = str_replace( ك ,  ڪـۘ❈ـۘ , $k);
   $k = str_replace( ط ,  طـۘ❈ـۘ , $k);
   $k = str_replace( ظ ,  ظـۘ❈ـۘ , $k);
  $k = str_replace( ء ,  ء , $k);
   $k = str_replace( ؤ ,  ؤ , $k);
   $k = str_replace( ر ,  ر , $k);
   $k = str_replace( ى ,  ى , $k);
   $k = str_replace( ز ,  ز , $k);
   $k = str_replace( و ,  ﯛ̲୭ , $k);
   $k = str_replace("ه", "໋۠هہؚ", $k);
   bot( sendMessage ,[
         chat_id =>$chat_id,
         text =>$k." ".$smile
   ]);
}
$EN = explode("/z", $text);
   if($EN[1]){
   $EN = str_replace('q', '•🇶', $EN);
   $EN = str_replace('w', '•🇼', $EN);
   $EN = str_replace('e', '•🇪', $EN);
   $EN = str_replace('r', '•🇷', $EN);
   $EN = str_replace('t', '•🇹', $EN);
   $EN = str_replace('y', '•🇾', $EN);
   $EN = str_replace('u', '•🇻', $EN);
   $EN = str_replace('i', '•🇮', $EN);
   $EN = str_replace('o', '•🇴', $EN);
   $EN = str_replace('p', '•🇵', $EN);
   $EN = str_replace('a', '•🇦', $EN);
   $EN = str_replace('s', '•🇸', $EN);
   $EN = str_replace('d', '•🇩', $EN);
   $EN = str_replace('f', '•🇫', $EN);
   $EN = str_replace('g', '•🇬', $EN);
   $EN = str_replace('h', '•🇭', $EN);
   $EN = str_replace('j', '•🇯', $EN);
   $EN = str_replace('k', '•🇰', $EN);
   $EN = str_replace('l', '•🇱', $EN);
   $EN = str_replace('z', '•🇿', $EN);
   $EN = str_replace('x', '•🇽', $EN);
   $EN = str_replace('c', '•🇨', $EN);
   $EN = str_replace('v', '•🇺', $EN);
   $EN = str_replace('b', '•🇧', $EN);
   $EN = str_replace('n', '•🇳', $EN);
   $EN = str_replace('m', '•🇲', $EN);
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$EN[1],
    ]);
    }
    $EN0 = explode("/z", $text);
    if($EN0[1]){
	 $EN0 = str_replace('q', 'Ⴓ' , $EN0);
  	 $EN0 = str_replace('w', 'ᗯ' , $EN0);
	 $EN0 = str_replace('e', 'ᕮ' , $EN0);
  	 $EN0 = str_replace('r', 'ᖇ' , $EN0);
	 $EN0 = str_replace('t', 'ͳ' , $EN0);
  	 $EN0 = str_replace('y', 'ϒ' , $EN0);
	 $EN0 = str_replace('u', 'ᘮ' , $EN0);
  	 $EN0 = str_replace('i', 'ᓰ' , $EN0);
	 $EN0 = str_replace('o', '〇' , $EN0);
  	 $EN0 = str_replace('p', 'ᖘ' , $EN0);
	 $EN0 = str_replace('a', 'ᗩ' , $EN0);
  	 $EN0 = str_replace('s', 'ᔕ' , $EN0);
	 $EN0 = str_replace('d', 'ᗪ' , $EN0);
  	 $EN0 = str_replace('f', 'Բ' , $EN0);
	 $EN0 = str_replace('g', 'ᘐ' , $EN0);
  	 $EN0 = str_replace('h', 'ᕼ' , $EN0);
	 $EN0 = str_replace('j', 'ᒎ' , $EN0);
  	 $EN0 = str_replace('k', 'Ḱ' , $EN0);
	 $EN0 = str_replace('l', 'ᒪ' , $EN0);
  	 $EN0 = str_replace('z', 'Ꙁ' , $EN0);
	 $EN0 = str_replace('x', 'Ꮖ' , $EN0);
  	 $EN0 = str_replace('c', 'ᑕ' , $EN0);
	 $EN0 = str_replace('v', 'ᐯ' , $EN0);
  	 $EN0 = str_replace('b', 'ᙖ' , $EN0);
  	 $EN0 = str_replace('n', 'ᘉ' , $EN0);
	 $EN0 = str_replace('m', 'ᙢ' , $EN0);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$y[1],

    ]);
    }
    $EN1 = explode("/z", $text);
    if($EN1[1]){
	 $EN1 = str_replace('q', 'q' , $EN1);
  	 $EN1 = str_replace('w', 'ω' , $EN1);
	 $EN1 = str_replace('e', 'ε' , $EN1);
  	 $EN1 = str_replace('r', 'я' , $EN1);
	 $EN1 = str_replace('t', 'т' , $EN1);
  	 $EN1 = str_replace('y', 'ү' , $EN1);
	 $EN1 = str_replace('u', 'υ' , $EN1);
  	 $EN1 = str_replace('i', 'ι' , $EN1);
	 $EN1 = str_replace('o', 'σ' , $EN1);
  	 $EN1 = str_replace('p', 'ρ' , $EN1);
	 $EN1 = str_replace('a', 'α' , $EN1);
  	 $EN1 = str_replace('s', 's' , $EN1);
	 $EN1 = str_replace('d', '∂' , $EN1);
  	 $EN1 = str_replace('f', 'ғ' , $EN1);
	 $EN1 = str_replace('g', 'g' , $EN1);
  	 $EN1 = str_replace('h', 'н' , $EN1);
	 $EN1 = str_replace('j', 'נ' , $EN1);
  	 $EN1 = str_replace('k', 'к' , $EN1);
	 $EN1 = str_replace('l', 'ℓ' , $EN1);
  	 $EN1 = str_replace('z', 'z' , $EN1);
	 $EN1 = str_replace('x', 'x' , $EN1);
  	 $EN1 = str_replace('c', 'c' , $EN1);
	 $EN1 = str_replace('v', 'v' , $EN1);
  	 $EN1 = str_replace('b', 'в' , $EN1);
  	 $EN1 = str_replace('n', 'η' , $EN1);
	 $EN1 = str_replace('m', 'м' , $EN1);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN1[1],

    ]);
    }
    $EN2 = explode("/z", $text);
    if($EN2[1]){
	 $EN2 = str_replace('q', 'ᵠ' , $EN2);
  	 $EN2 = str_replace('w', 'ʷ' , $EN2);
	 $EN2 = str_replace('e', 'ᵉ' , $EN2);
  	 $EN2 = str_replace('r', 'ʳ' , $EN2);
	 $EN2 = str_replace('t', 'ᵗ' , $EN2);
  	 $EN2 = str_replace('y', 'ʸ' , $EN2);
	 $EN2 = str_replace('u', 'ᵘ' , $EN2);
  	 $EN2 = str_replace('i', 'ᶤ' , $EN2);
	 $EN2 = str_replace('o', 'ᵒ' , $EN2);
  	 $EN2 = str_replace('p', 'ᵖ' , $EN2);
	 $EN2 = str_replace('a', 'ᵃ' , $EN2);
  	 $EN2 = str_replace('s', 'ˢ' , $EN2);
	 $EN2 = str_replace('d', 'ᵈ' , $EN2);
  	 $EN2 = str_replace('f', 'ᶠ' , $EN2);
	 $EN2 = str_replace('g', 'ᵍ' , $EN2);
  	 $EN2 = str_replace('h', 'ʰ' , $EN2);
	 $EN2 = str_replace('j', 'ʲ' , $EN2);
  	 $EN2 = str_replace('k', 'ᵏ' , $EN2);
	 $EN2 = str_replace('l', 'ˡ' , $EN2);
  	 $EN2 = str_replace('z', 'ᶻ' , $EN2);
	 $EN2 = str_replace('x', 'ˣ' , $EN2);
  	 $EN2 = str_replace('c', 'ᶜ' , $EN2);
	 $EN2 = str_replace('v', 'ᵛ' , $EN2);
  	 $EN2 = str_replace('b', 'ᵇ' , $EN2);
  	 $EN2 = str_replace('n', 'ᶰ' , $EN2);
	 $EN2 = str_replace('m', 'ᵐ' , $EN2);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN2[1],

    ]);
    }
$EN3 = explode("/z", $text);
    if($EN3[1]){
	 $EN3 = str_replace('q', 'Θ' , $EN3);
  	 $EN3 = str_replace('w', 'ẁ' , $EN3);
	 $EN3 = str_replace('e', 'ë' , $EN3);
  	 $EN3 = str_replace('r', 'я' , $EN3);
	 $EN3 = str_replace('t', 'ť' , $EN3);
  	 $EN3 = str_replace('y', 'y' , $EN3);
	 $EN3 = str_replace('u', 'ע' , $EN3);
  	 $EN3 = str_replace('i', 'į' , $EN3);
	 $EN3 = str_replace('o', 'ð' , $EN3);
  	 $EN3 = str_replace('p', 'ρ' , $EN3);
	 $EN3 = str_replace('a', 'à' , $EN3);
  	 $EN3 = str_replace('s', 'ś' , $EN3);
	 $EN3 = str_replace('d', 'ď' , $EN3);
  	 $EN3 = str_replace('f', '∫' , $EN3);
	 $EN3 = str_replace('g', 'ĝ' , $EN3);
  	 $EN3 = str_replace('h', 'ŋ' , $EN3);
	 $EN3 = str_replace('j', 'Ј' , $EN3);
  	 $EN3 = str_replace('k', 'қ' , $EN3);
	 $EN3 = str_replace('l', 'Ŀ' , $EN3);
  	 $EN3 = str_replace('z', 'ź' , $EN3);
	 $EN3 = str_replace('x', 'א' , $EN3);
  	 $EN3 = str_replace('c', 'ć' , $EN3);
	 $EN3 = str_replace('v', 'V' , $EN3);
  	 $EN3 = str_replace('b', 'Ђ' , $EN3);
  	 $EN3 = str_replace('n', 'ŋ' , $EN3);
	 $EN3 = str_replace('m', 'm' , $EN3);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN3[1],

    ]);
    }
$EN3 = explode("/z", $text);
    if($EN3[1]){
	 $EN3 = str_replace('q', 'Ҩ' , $EN3);
  	 $EN3 = str_replace('w', 'Щ' , $EN3);
	 $EN3 = str_replace('e', 'Є' , $EN3);
  	 $EN3 = str_replace('r', 'R' , $EN3);
	 $EN3 = str_replace('t', 'ƚ' , $EN3);
  	 $EN3 = str_replace('y', '￥' , $EN3);
	 $EN3 = str_replace('u', 'Ц' , $EN3);
  	 $EN3 = str_replace('i', 'Ī' , $EN3);
	 $EN3 = str_replace('o', 'Ø' , $EN3);
  	 $EN3 = str_replace('p', 'P' , $EN3);
	 $EN3 = str_replace('a', 'Â' , $EN3);
  	 $EN3 = str_replace('s', '$' , $EN3);
	 $EN3 = str_replace('d', 'Ð' , $EN3);
  	 $EN3 = str_replace('f', 'Ŧ' , $EN3);
	 $EN3 = str_replace('g', 'Ǥ' , $EN3);
  	 $EN3 = str_replace('h', 'Ħ' , $EN3);
	 $EN3 = str_replace('j', 'ʖ' , $EN3);
  	 $EN3 = str_replace('k', 'Қ' , $EN3);
	 $EN3 = str_replace('l', 'Ŀ' , $EN3);
  	 $EN3 = str_replace('z', 'Ẕ' , $EN3);
	 $EN3 = str_replace('x', 'X' , $EN3);
  	 $EN3 = str_replace('c', 'Ĉ' , $EN3);
	 $EN3 = str_replace('v', 'V' , $EN3);
  	 $EN3 = str_replace('b', 'ß' , $EN3);
  	 $EN3 = str_replace('n', 'И' , $EN3);
	 $EN3 = str_replace('m', 'ⴅ' , $EN3);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN3[1],

    ]);
    }
 $EN5 = explode("/z", $text);
    if($EN5[1]){
	 $EN5 = str_replace('q', 'Ҩ' , $EN5);
  	 $EN5 = str_replace('w', 'Ɯ' , $EN5);
	 $EN5 = str_replace('e', 'Ɛ' , $EN5);
  	 $EN5 = str_replace('r', '尺' , $EN5);
	 $EN5 = str_replace('t', 'Ť' , $EN5);
  	 $EN5 = str_replace('y', 'Ϥ' , $EN5);
	 $EN5 = str_replace('u', 'Ц' , $EN5);
  	 $EN5 = str_replace('i', 'ɪ' , $EN5);
	 $EN5 = str_replace('o', 'Ø' , $EN5);
  	 $EN5 = str_replace('p', 'þ' , $EN5);
	 $EN5 = str_replace('a', 'Λ' , $EN5);
  	 $EN5 = str_replace('s', 'ら' , $EN5);
	 $EN5 = str_replace('d', 'Ð' , $EN5);
  	 $EN5 = str_replace('f', 'F' , $EN5);
	 $EN5 = str_replace('g', 'Ɠ' , $EN5);
  	 $EN5 = str_replace('h', 'н' , $EN5);
	 $EN5 = str_replace('j', 'ﾌ' , $EN5);
  	 $EN5 = str_replace('k', 'Қ' , $EN5);
	 $EN5 = str_replace('l', 'Ł' , $EN5);
  	 $EN5 = str_replace('z', 'Ẕ' , $EN5);
	 $EN5 = str_replace('x', 'χ' , $EN5);
  	 $EN5 = str_replace('c', 'ㄈ' , $EN5);
	 $EN5 = str_replace('v', 'Ɣ' , $EN5);
  	 $EN5 = str_replace('b', 'Ϧ' , $EN5);
  	 $EN5 = str_replace('n', 'Л' , $EN5);
	 $EN5 = str_replace('m', '௱' , $EN5);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN5[1],

    ]);
    }
   $EN6 = explode("/z", $text);
    if($EN6[1]){
	 $EN6 = str_replace('q', 'G ҉ ' , $EN6);
  	 $EN6 = str_replace('w', 'W ҉ ' , $EN6);
	 $EN6 = str_replace('e', 'E ҉ ' , $EN6);
  	 $EN6 = str_replace('r', 'R ҉ ' , $EN6);
	 $EN6 = str_replace('t', 'T ҉ ' , $EN6);
  	 $EN6 = str_replace('y', 'Y ҉ ' , $EN6);
	 $EN6 = str_replace('u', 'U ҉ ' , $EN6);
  	 $EN6 = str_replace('i', 'I ҉ ' , $EN6);
	 $EN6 = str_replace('o', 'O ҉ ' , $EN6);
  	 $EN6 = str_replace('p', 'P ҉ ' , $EN6);
	 $EN6 = str_replace('a', 'A ҉ ' , $EN6);
  	 $EN6 = str_replace('s', 'S ҉ ' , $EN6);
	 $EN6 = str_replace('d', 'D ҉ ' , $EN6);
  	 $EN6 = str_replace('f', 'F ҉ ' , $EN6);
	 $EN6 = str_replace('g', 'G ҉ ' , $EN6);
  	 $EN6 = str_replace('h', 'H ҉ ' , $EN6);
	 $EN6 = str_replace('j', 'J ҉ ' , $EN6);
  	 $EN6 = str_replace('k', 'K ҉ ' , $EN6);
	 $EN6 = str_replace('l', 'L ҉ ' , $EN6);
  	 $EN6 = str_replace('z', 'Z ҉ ' , $EN6);
	 $EN6 = str_replace('x', 'X ҉ ' , $EN6);
  	 $EN6 = str_replace('c', 'C ҉ ' , $EN6);
	 $EN6 = str_replace('v', 'V ҉ ' , $EN6);
  	 $EN6 = str_replace('b', 'B ҉ ' , $EN6);
  	 $EN6 = str_replace('n', 'N ҉ ' , $EN6);
	 $EN6 = str_replace('m', 'M ҉ ' , $EN6);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN6[1],

    ]);
    }
$EN7 = explode("/z", $text);
    if($EN7[1]){
	 $EN7 = str_replace('q', '🅠' , $EN7);
  	 $EN7 = str_replace('w', '🅦' , $EN7);
	 $EN7 = str_replace('e', '🅔' , $EN7);
  	 $EN7 = str_replace('r', '🅡' , $EN7);
	 $EN7 = str_replace('t', '🅣' , $EN7);
  	 $EN7 = str_replace('y', '🅨' , $EN7);
	 $EN7 = str_replace('u', '🅤' , $EN7);
  	 $EN7 = str_replace('i', '🅘' , $EN7);
	 $EN7 = str_replace('o', '🅞' , $EN7);
  	 $EN7 = str_replace('p', '🅟' , $EN7);
	 $EN7 = str_replace('a', '🅐' , $EN7);
  	 $EN7 = str_replace('s', '🅢' , $EN7);
	 $EN7 = str_replace('d', '🅓' , $EN7);
  	 $EN7 = str_replace('f', '🅕' , $EN7);
	 $EN7 = str_replace('g', '🅖' , $EN7);
  	 $EN7 = str_replace('h', '🅗' , $EN7);
	 $EN7 = str_replace('j', '🅙' , $EN7);
  	 $EN7 = str_replace('k', '🅚' , $EN7);
	 $EN7 = str_replace('l', '🅛' , $EN7);
  	 $EN7 = str_replace('z', '🅩' , $EN7);
	 $EN7 = str_replace('x', '🅧' , $EN7);
  	 $EN7 = str_replace('c', '🅒' , $EN7);
	 $EN7 = str_replace('v', '🅥' , $EN7);
  	 $EN7 = str_replace('b', '🅑' , $EN7);
  	 $EN7 = str_replace('n', '🅝' , $EN7);
	 $EN7 = str_replace('m', '🅜' , $EN7);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN7[1],

    ]);
    }
    $EN8 = explode("/z", $text);
    if($EN8[1]){
	 $EN8 = str_replace('q', 'q̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('w', 'w̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('e', 'e̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('r', 'r̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('t', ' t̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('y', 'y̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('u', 'u̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('i', 'i̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('o', 'o̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('p', '̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭p̶꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('a', 'a̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('s', 's̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('d', 'd̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('f', 'f̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('g', 'g̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('h', 'h̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('j', 'j̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('k', 'k̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('l', 'l̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('z', 'z꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('x', 'x̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('c', 'c̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('v', 'v̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('b', 'b̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
  	 $EN8 = str_replace('n', 'n̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 $EN8 = str_replace('m', 'm̶꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN8);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN8[1],

    ]);
    }
$EN9 = explode("/z", $text);
    if($EN9[1]){
	 $EN9 = str_replace('q', 'ᑫ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('w', 'ᗯ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('e', 'ᗴ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('r', 'ᖇ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('t', 'Ꭲ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('y', 'Ꭹ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('u', 'ᑌ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('i', 'Ꮖ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('o', 'ᝪ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('p', 'P ̵̨͈̝̠͓̻͈̪͈̺͓͆̈́' , $EN9);
	 $EN9 = str_replace('a', 'ᗩ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('s', 'ᔑ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('d', 'ᗞ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('f', 'ᖴ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('g', 'Ꮐ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('h', 'ᕼ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('j', '̣͙ᒍ ̵̨͈̝̠͓̻͈̪͆̈́' , $EN9);
  	 $EN9 = str_replace('k', 'Ꮶ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('l', 'Ꮮ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('z', 'Ꮓ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('x', '᙭ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('c', 'ᑕ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('v', 'ᐯ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('b', 'ᗷ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
  	 $EN9 = str_replace('n', 'ᑎ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 $EN9 = str_replace('m', 'ᗰ ̵̨͈̝̠͓̻͈̪͈͆̈́' , $EN9);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN9[1],

    ]);
    }
 $EN10 = explode("/z", $text);
    if($EN10[1]){
	 $EN10 = str_replace('q', 'Ꝙ' ,$EN10);
  	 $EN10 = str_replace('w', 'Ѡ' ,$EN10);
	 $EN10 = str_replace('e', 'Ɛ' ,$EN10);
  	 $EN10 = str_replace('r', 'Ɽ' ,$EN10);
	 $EN10 = str_replace('t', 'Ͳ' ,$EN10);
  	 $EN10 = str_replace('y', 'Ỿ' ,$EN10);
	 $EN10 = str_replace('u', 'Ʊ' ,$EN10);
  	 $EN10 = str_replace('i', 'ị' ,$EN10);
	 $EN10 = str_replace('o', 'Ỗ' ,$EN10);
  	 $EN10 = str_replace('p', 'Ꝓ' ,$EN10);
	 $EN10 = str_replace('a', 'Λ' ,$EN10);
  	 $EN10 = str_replace('s', 'Ṥ' ,$EN10);
	 $EN10 = str_replace('d', 'δ' ,$EN10);
  	 $EN10 = str_replace('f', 'Բ' ,$EN10);
	 $EN10 = str_replace('g', '₲' ,$EN10);
  	 $EN10 = str_replace('h', 'Ḩ' ,$EN10);
	 $EN10 = str_replace('j', 'Ĵ' ,$EN10);
  	 $EN10 = str_replace('k', 'Ҡ' ,$EN10);
	 $EN10 = str_replace('l', 'Ⱡ' ,$EN10);
  	 $EN10 = str_replace('z', 'Ꙃ' ,$EN10);
	 $EN10 = str_replace('x', 'Ӿ' ,$EN10);
  	 $EN10 = str_replace('c', 'Ƈ' ,$EN10);
	 $EN10 = str_replace('v', 'Ѵ' ,$EN10);
  	 $EN10 = str_replace('b', 'ß' ,$EN10);
  	 $EN10 = str_replace('n', 'ⴂ' ,$EN10);
	 $EN10 = str_replace('m', 'ⴅ' ,$EN10);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN10[1],

    ]);
    }
 $EN11 = explode("/z", $text);
    if($EN11[1]){
	 $EN11 = str_replace('q', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ǫ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('w', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴡ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('e', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴇ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('r', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ʀ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('t', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴛ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('y', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ʏ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('u', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴜ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('i', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ɪ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('o', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴏ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('p', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴘ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('a', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴀ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('s', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ѕ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('d', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴅ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('f', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ғ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('g', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ɢ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('h', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ʜ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('j', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴊ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('k', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴋ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('l', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ʟ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('z', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭z꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('x', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭х꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('c', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴄ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('v', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴠ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('b', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ʙ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
  	 $EN11 = str_replace('n', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ɴ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 $EN11 = str_replace('m', '꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭ᴍ꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭꯭' , $EN11);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN11[1],

    ]);
    }
 $EN12 = explode("/z", $text);
    if($EN12[1]){
	 $EN12 = str_replace('q', 'Ｑ' , $EN12);
  	 $EN12 = str_replace('w', 'Ｗ' , $EN12);
	 $EN12 = str_replace('e', 'Ｅ' , $EN12);
  	 $EN12 = str_replace('r', 'Ｒ' , $EN12);
	 $EN12 = str_replace('t', 'Ｔ' , $EN12);
  	 $EN12 = str_replace('y', 'Ｙ' , $EN12);
	 $EN12 = str_replace('u', 'Ｕ' , $EN12);
  	 $EN12 = str_replace('i', 'Ｉ' , $EN12);
	 $EN12 = str_replace('o', 'Ｏ' , $EN12);
  	 $EN12 = str_replace('p', 'Ｐ' , $EN12);
	 $EN12 = str_replace('a', 'Ａ' , $EN12);
  	 $EN12 = str_replace('s', 'Ｓ' , $EN12);
	 $EN12 = str_replace('d', 'Ｄ' , $EN12);
  	 $EN12 = str_replace('f', 'Բ' , $EN12);
	 $EN12 = str_replace('g', 'Ｇ' , $EN12);
  	 $EN12 = str_replace('h', 'Ｈ' , $EN12);
	 $EN12 = str_replace('j', 'Ｊ' , $EN12);
  	 $EN12 = str_replace('k', 'Ｋ' , $EN12);
	 $EN12 = str_replace('l', 'Ｌ' , $EN12);
  	 $EN12 = str_replace('z', 'Ｚ' , $EN12);
	 $EN12 = str_replace('x', 'Ｘ' , $EN12);
  	 $EN12 = str_replace('c', 'С' , $EN12);
	 $EN12 = str_replace('v', 'Ｖ' , $EN12);
  	 $EN12 = str_replace('b', 'Ｂ' , $EN12);
  	 $EN12 = str_replace('n', 'Ｎ' , $EN12);
	 $EN12 = str_replace('m', 'Ⅿ' , $EN12);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN12[1],
    ]);
    }
 $EN13 = explode("/z", $text);
    if($EN13[1]){
	 $EN13 = str_replace('q', 'Ǫ' , $EN13);
  	 $EN13 = str_replace('w', 'Ш' , $EN13);
	 $EN13 = str_replace('e', 'Ξ' , $EN13);
  	 $EN13 = str_replace('r', 'Я' , $EN13);
	 $EN13 = str_replace('t', '₮' , $EN13);
  	 $EN13 = str_replace('y', 'Џ' , $EN13);
	 $EN13 = str_replace('u', 'Ǚ' , $EN13);
  	 $EN13 = str_replace('i', 'ł' , $EN13);
	 $EN13 = str_replace('o', 'Ф' , $EN13);
  	 $EN13 = str_replace('p', 'ק' , $EN13);
	 $EN13 = str_replace('a', 'Λ' , $EN13);
  	 $EN13 = str_replace('s', 'Ŝ' , $EN13);
	 $EN13 = str_replace('d', 'Ð' , $EN13);
  	 $EN13 = str_replace('f', 'Ŧ' , $EN13);
	 $EN13 = str_replace('g', '₲' , $EN13);
  	 $EN13 = str_replace('h', 'Ḧ' , $EN13);
	 $EN13 = str_replace('j', 'J' , $EN13);
  	 $EN13 = str_replace('k', 'К' , $EN13);
	 $EN13 = str_replace('l', 'Ł' , $EN13);
  	 $EN13 = str_replace('z', 'Ꙃ' , $EN13);
	 $EN13 = str_replace('x', 'Ж' , $EN13);
  	 $EN13 = str_replace('c', 'Ͼ' , $EN13);
	 $EN13 = str_replace('v', 'Ṽ' , $EN13);
  	 $EN13 = str_replace('b', 'Б' , $EN13);
  	 $EN13 = str_replace('n', 'Л' , $EN13);
	 $EN13 = str_replace('m', 'Ɱ' , $EN13);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN13[1],
    ]);
	  }
$update   = json_decode(file_get_contents('php://input'));
$message  = $update->message;
$from_id  = $message->from->id;
$chat_id  = $message->chat->id;
$text     = $message->text;
$data     = $update->callback_query->data;
$inline   = $update->inline_query->query;
$id       = $update->inline_query->from->id;
$msg_id   = $update->inline_query->inline_message_id;
$username = $update->inline_query->from->username;
$cuser    = $update->callback_query->from->username;
$cid      = $update->callback_query->from->id;
if ($inline) {
    $ex = explode(" ", $inline);
    $user = trim($ex[0],"@");
    $wh = str_replace($ex[0], $wh, $inline);
    bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'article',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"هذه الهمسة خاص ب @$user",
             'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"هذه الهمسة خاص ب @$user"],
            'reply_markup'=>['inline_keyboard'=>[
                [
                ['text'=>' 📪 فتح الهمسة 📪','callback_data'=>$user."or".$username."or".$wh]
                ],
             ]]
          ]])
        ]);
}
if ($data) {
    $ex = explode("or", $data);
    if ($cuser == $ex[0] or $cuser == $ex[1] or $cid == $ex[0]) {
        bot('answerCallbackQuery',[
            'callback_query_id'=>$update->callback_query->id,
            'text'=>$ex[2],
            'show_alert'=>true
            ]);
    }
}
$re = $message->reply_to_message;
$txt_id = $message->from->id;
$trans = $update->callback_query->data;
$s = str_replace(' ','%20',$re->text);
$txt = explode("|",$data);
$dec = json_decode(file_get_contents("https://translate.yandex.net/api/v1/tr.json/translate?srv=android&uuid=6f4c351f-e58f-48d2-bda6-3cae1bddcbb4&id=e93642f1-1cd7-479e-9f93-08405027065b-9-0&lang=".$txt[0]."&text=".$txt[1]));
$tr = $dec->text;
if($text== "/tr" and $re){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"قم بأختيار اللغة التي تريد الترجمة اليها 
Choose the language to translate into",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'العربيه','callback_data' =>"ar|".$s],['text'=>'الانكليزية','callback_data' =>"en|".$s],['text'=>'الفارسية','callback_data' =>"fa|".$s]],
[['text'=>'الروسية','callback_data' =>"ru|".$s],['text'=>'اليابانية','callback_data' =>"ja|".$s],['text'=>'الايطالية','callback_data' =>"it|".$s]],
[['text'=>'الالمانية','callback_data' =>"de|".$s],['text'=>'الصينية','callback_data' =>"zh|".$s],['text'=>'الفرنسية','callback_data' =>"fr|".$s]],
[['text'=>'التركية','callback_data' =>"tr|".$s],['text'=>'الاسبانية','callback_data' =>"es|".$s],['text'=>'الهندية','callback_data' =>"hi|".$s]],
[['text'=>'الأوكرانية','callback_data' =>"uk|".$s]],
]])
]);
}
if($txt[0] == 'ar' or $txt[0] == 'en' or $txt[0] == 'ru' or $txt[0] == 'de' or $txt[0] == 'tr' or $txt[0] == 'uk' or $txt[0] == 'ja' or $txt[0] == 'zh' or $txt[0] == 'es' or $txt[0] == 'fa' or $txt[0] == 'it' or $txt[0] == 'fr' or $txt[0] == 'hi'){
bot('sendMessage',[
'chat_id'=>$update->callback_query->message->chat->id,
'text'=>$tr[0],
]);
}
date_default_timezone_set('Asia/Damascus');
$today = date("l");
$nmonth = date("m");
$times = date("h:i");
$year = date("Y");

switch ($today) 
{
case "Saturday":  
$today="السبت"; 
break; 
case "Sutoday":  
$today="الأحد"; 
break;  
case "Motoday":  
$today="الاثنين"; 
break; 
case "Tuesday":  
$today="الثلاثاء"; 
break; 
case "Wednesday": 
$today="الأربعاء"; 
break; 
case "Thursday":  
$today="الخميس"; 
break; 
case "Friday":  
$today="الجمعة"; 
break; 
}  
switch ($nmonth){
case 1: $nmonth="يناير/كانون الثاني";
break;
case 2: $nmonth="فبراير/شباط";
break;
case 3: $nmonth="مارس/آذار";
break;
case 4: $nmonth="أبريل/نيسان";
break;
case 5: $nmonth="مايو/آيار";
break;
case 6: $nmonth="يونيو/حزيران";
break;
case 7: $nmonth="يوليو/تموز";
break; 
case 8: $nmonth="أغسطس/آب";
break;
case 9: $nmonth="سبتمبر/أيلول";
break;
case 10: $nmonth="أكتوبر/تشرين الأول";
break;
case 11: $nmonth="نوفمبر/تشرين الثاني";
break;
case 12: $nmonth="ديسمبر/كانون الأول";
break;
} 
if($text == "الشهر" ){
bot('sendMessage',[
'chat_id'=>$chat_id,'text'=>"🗓 ¦ الشهر { $nmonth }\n📆 ¦ الأسبوع { $today }\n⏰ ¦ الوقت { $times }\n📅 ¦ السنة { $year }",'reply_to_message_id'=>$message->message_id
]);
}
@function GetAge($Date,$c){
$hours_in_day = 24;
$minutes_in_hour = 60;
$seconds_in_mins = 60;
$birth_date = new DateTime($Date);
$current_date = new DateTime();
date_default_timezone_set("Asia/Baghdad");
$date = date('n');
$dat = date('j');
$diff = $birth_date->diff($current_date);
$years = $diff->y;
$mn = $diff->m;
$doy = $diff->d;
$months = ($diff->y * 12);
$weeks = floor($diff->days/7); echo "\n";
$days = $diff->days;
$hours = $diff->h + ($diff->days * $hours_in_day);
$mins = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour);
$seconds = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour * $seconds_in_mins);
bot('Sendmessage',[
'chat_id'=>$c,
'text'=>" 💘| تم حساب عمرك بالتفصيل،
 
🌻|عمرك هوا الان : $years سـنةه، و $mn اشهر،

📕| مره عله ولادتك : $months. شهر،

📌| مره عله ولادتك : $weeks. اسبوع،

🔖| مره عله ولادتك : $days. يوم،

📮| مره عله ولادتك : $hours. ساعه،

📯| مره عله ولادتك : $mins. دقيقةه،

📆| مره عله ولادتك : $seconds. ثانيةه،
",
]);
}
if($text=="/age" and $re){
GetAge($re->text,$chat_id);
}
$re = $message->reply_to_message;
if($text=="/calc" and $re){
$rep1 = str_replace('×', '*' , $re->text);
$rep = str_replace('÷', '%' , $rep1);
$rep2 = str_replace('+', '%2B' , $rep);
$cal = json_decode(file_get_contents("http://api.mathjs.org/v4/?expr=".$rep2));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"الجواب : $cal",
'reply_to_message_id'=>$message_id,
 ]);
 }
 $re = $message->reply_to_message;
if($text=="/joke"){
$jak = json_decode(file_get_contents("http://api.icndb.com/jokes/random"));
$joke = $jak->value->joke;
$sd = str_replace(' ', '%20' , $joke);
$jar = json_decode(file_get_contents("https://translate.yandex.net/api/v1/tr.json/translate?srv=android&uuid=6f4c351f-e58f-48d2-bda6-3cae1bddcbb4&id=e93642f1-1cd7-479e-9f93-08405027060b-9-0&lang=ar&text=".$sd));
$jma = $jar->text;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$jma[0]",
'reply_to_message_id'=>$message_id,
 ]);
 }
$elias = file_get_contents("https://prayer-times.info/show_prayertimes_new.php?city_link=cairo");
$aa=explode("مواقيت الصلاة",$elias);
$bb= explode("هجرى:",$aa[1]);
$cc= filter_var($bb[0],FILTER_SANITIZE_STRING);
$ex= explode("هجرى:",$elias);
$exx= explode("الصلاة القادمة",$ex[1]);
$el=explode("باقي:",$elias);
$ell=explode("@function",$el[1]);
$zrr= explode("\n",$exx[0]);
//date_hj_mi//
$a= filter_var($zrr[2],FILTER_SANITIZE_STRING);
$b= filter_var($zrr[0],FILTER_SANITIZE_STRING);
$c= filter_var($zrr[1],FILTER_SANITIZE_STRING);
//end_date//
if($text=="صلاة"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✅  | سررت بوجودك 🌸

•🎯 | توجد في البوت التاريخ/هجري||ميلادي
•⏰ | يقوم البوت بتما بدك بخدمة أوقات الصلاة .",
  'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"الوقت والتاريخ ⏰"], ['text'=>"أوقات الصلاة 🕌"]],
]])]);
}

if($text=="الوقت والتاريخ ⏰"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🗓 ¦ الشهر { $nmonth }\n📆 ¦ الأسبوع { $today }\n⏰ ¦ الوقت { $times }\n📅 ¦ السنة { $year }"
]);
}
if($text=="أوقات الصلاة 🕌"){
$sa= filter_var($ell[0],FILTER_SANITIZE_STRING);
$zrr=trim($sa);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"أهلا بك عزيزي..🍃🍃
🕌┇إليك أوقات الصلاة حسب التوقيت المحلي 
       لمدينة $cc
"."\n".$zrr
]);
} 
@function insta($txt){
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => "https://www.instaloadgram.com/api/get",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => 'url='.$txt,
CURLOPT_HTTPHEADER => array(
"Content-Type: application/x-www-form-urlencoded"
),
));
$response = curl_exec($curl);
curl_close($curl);
return json_decode($response)->items[0]->url;
}
if(preg_match('/.*instagram\.com.*/i',$text)){
 bot('sendmessage',[
  'chat_id'=>$chat_id,
    'text'=>"- يرجى الانتظار قليلا من فضلك ، 🔱
- جار التحميل ، قناة البوت ؛ @Wizard_System ،",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
    ]);
bot('sendphoto',[
 'chat_id'=>$chat_id,
  'photo'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
    ]);
 bot('sendvideo',[
  'chat_id'=>$chat_id,
   'video'=>insta($text)
    ]);
    }
    
if($text=="/profile" and $re){
$usr = str_replace('@', '' , $re->text);
$info = json_decode(file_get_contents("https://instalkr.com/api/getprofile/$usr"));
$bio = $info->biography;
$name = $info->full_name;
$pic = $info->userpic;
$fol = $info->followed_by_count;
$id = $info->id;
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$pic",
'caption'=>"
Name : *$name*
his id : `$id`
Bio : *$bio*
followed by : *$fol*
",
]);
}
if(preg_match('/.*facebook\.com.*/i',$text)){
$fcb = json_decode(file_get_contents("https://www.fbvideodownloader.org/data.php?v=".urlencode($text)));
$usr = $fcb->download_url;
bot('sendvideo',[
  'chat_id'=>$chat_id,
   'video'=>$usr,
    ]);
    }
$loca = $message->location; 
$lon = $loca->longitude; 
$lat = $loca->latitude; 
if($text=="/weather" and $re){
$url = "http://api.openweathermap.org/data/2.5/weather?q=$re->text&appid=de8f6f3e0b7f8a36a3e05f47418643bf";
$res = file_get_contents($url);
$weather = json_decode($res);
$city    = $weather->name; 
$country = $weather->sys->country; 
$desc    = $weather->weather->description; 
$min     = $weather->main->temp_min;
$max    = $weather->main->temp_max; 
$wtemp  = $weather->wind->deg; 
$wspeed  = $weather->wind->speed; 
$long = $weather->coord->lon;  
$latt = $weather->coord->lat; 
bot('sendMessage',[
'chat_id'=>$chat_id ,
'text'=>"_البلد ✈ :- _$country 
_ المدينه 🏠 _:- $city
_درجة الحرارة الصغرى ⛅ _ :- $min 
_ درجه الحرارة العظمى ☀ _ :- $max
_ درجه حراره الهواء 🌌 :-_ $wtemp
_سرعه الهواء ♨ _ $wspeed
_ خط الطول 🌐 :-_ $long
_ دوائر العرض 🌀 :- _ $latt
",
'parse_mode'=>"markdown"
]);
}
} //end @function

while(true){
  $last_up = $last_up??0;
  $get_up = getupdates($last_up+1);
  $last_up = $get_up->update_id;
  run($get_up);
  sleep(1);
}