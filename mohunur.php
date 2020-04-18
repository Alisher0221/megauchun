<?php

/*
Kod @XABARCHILAR kanali orqali tarqatildi.
*/
$admin = '831477295';
$token = '1028270205:AAH8F-Hqwy77XM74SY9vudxLPXy_vWgtOR4';

function bot($method,$datas=[]){
global $token;
    $url = "https://api.telegram.org/bot".$token."/".$method;
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
//Ushbu kod XABARCHILAR kanali orqali tarqatildi

function kurs(){
       $response = "";
       $xml = file_get_contents("http://cbu.uz/uzc/arkhiv-kursov-valyut/xml/");
       $m = new SimpleXMLElement($xml);
       foreach ($m as $val) {
           if($val->Ccy == 'USD'){
               $response .= "1 USD💵 - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'EUR'){
               $response .= "1 EURO💶 - " . $val->Rate . " so'm\n";
           }
           if($val->Ccy == 'JPY'){
               $response .= "1 JPY💴 - " . $val->Rate . " so'm\n";
           }  if($val->Ccy == 'RUB'){
               $response .= "1 RUB💴 - " . $val->Rate . " so'm\n";
           }
       }
      return $response;
   }   

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$texts = json_decode(file_get_contents('msgs.json'),true);
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$cqid = $update->callback_query->id;


//qoshimcha
$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$id = $message->reply_to_message->from->id;   
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$mtext = $message->text;
$capt = $message->caption;
$fromid=$update->message->from->id;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$step=file_get_contents("data/$fadmin/name.txt");
//bu yerni o'zgartirishingiz mumkin.


$link = $message->chat->invite_link;
$description = $message->chat->description;

//manzil
 $location = $message->location;
$video_note = $message->video_note;

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

//qoshimcha
$namegroup = $update->message->chat->title;
$tc = $update->message->chat->type;
$gpname = $update->callback_query->message->chat->title;
$tedadmsg = $update->message->message_id;

$message_id = $message->message_id;


//konverter
 

$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$botim="mohunurbot";
$soat = date('H:i', strtotime('5 hour'));
$sana = date('d-M Y',strtotime('5 hour'));
$sana2 = date('z',strtotime('5 hour'));
$gmt = date('O',strtotime('5 hour'));
$oynomi = date('F',strtotime('5 hour'));
$buoy = date('t',strtotime('5 hour'));
$message = $update->message;
$description = $message->chat->description;
$rasm = $message->chat->photo;
$rasm = $message->photo;
$animation = $message->animation;
$music = $update->message->audio;
$contact = $message->contact;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$gif = $message->animation;
$doc = $message->document;
$title = $message->chat->title;
$description = $message->chat->description;
$fadmin = $message->from->id;
$from_id=$update->message->from->id;
$lang = $message->from->language_code;
$from = $message->from;
$message = $update->message;
$message_id = $update->callback_query->message->message_id;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$gif = $message->animation;
$photo = $message->photo;
$sticker = $message->sticker;
$video = $message->video;
$music = $message->audio;
$document = $message->document;
$forward = $message->forward;
$voice = $message->voice;
$from_user_first_name = $message->reply_to_message->from->first_name;
$ufname = $update->message->from->first_name;
$uname = $update->message->from->last_name;
$user_id = $update->message->from->id;

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

//Panel methodi
$gif = $message->animation;
$photo = $message->photo;
$sticker = $message->sticker;
$video = $message->video;
$music = $message->audio;
$document = $message->document;
$forward = $message->forward;
$voice = $message->voice;
$doc = $message->document;
$rasm = $message->photo;
$animation = $message->animation;
$music = $update->message->audio;
$contact = $message->contact;
 $location = $message->location;
$video_note = $message->video_note;

//info methodi
$namegroup = $update->message->chat->title;
$tc = $update->message->chat->type;
$gpname = $update->callback_query->message->chat->title;
$tedadmsg = $update->message->message_id;

//Yangi odam id si
$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
$step = file_get_contents("stat/$chat_id.step");
$gruppa = file_get_contents("stat/gruppa.list");
$lichka = file_get_contents("stat/lichka.list");
mkdir("warn");
mkdir("stat");
mkdir("sozlama");
mkdir("lang");
mkdir("text");

$update = json_decode(file_get_contents('php://input'));
$ufname = $efede['message']['from']['first_name'];
$uname = $efede['message']['from']['last_name'];


//Ushbu kod XABARCHILAR kanali orqali tarqatildi

$photo = $update->message->photo;
$gif = $update->message->animation;
$video = $update->message->video;
$music = $update->message->audio;
$voice = $update->message->voice;
$sticker = $update->message->sticker;
$document = $update->message->document;
$for = $message->forward_from;
$forc = $message->forward_from_chat;

mkdir("soni");
mkdir("soni/$cid");
$odam = file_get_contents("soni/$cid/$uid.txt");
$reply = $message->reply_to_message->text;

$tek = bot('getChatMember',[ 
'chat_id'=>$cid, 
'user_id'=>$uid,
]); 
$get = $tek->result->status; 

$us = bot('getChatMembersCount',[
'chat_id'=>$cid,
'user_id'=>$uid,
]);
$azo = $us->result;

$des = bot('getChat',[ 
'chat_id'=>$cid, 
'user_id'=>$uid,
]); 
$desc = $des->result->description; 


//Ushbu kod XABARCHILAR kanali orqali tarqatildi


if($left){
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid
  ]);
  bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"❗Diqqat! <a href='tg://user?id=$leftid'>$leftname</a>, <b>$gname</b> guruhidan chiqib ketdi!",
    'parse_mode'=>'html'
  ]);
  $lodam = file_get_contents("soni/$cid/$leftid.txt");
  unlink("soni/$cid/$leftid.txt");
}
if(isset($message->new_chat_member) or isset($message->left_chat_member)){
    bot('deleteMessage',[
        'chat_id'=>$message->chat->id,
        'message_id'=>$message->message_id,
    ]);
}
if (($new_chat_members != NUll)&&($is_bot!=false)) {
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
   $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "❗<b>Guruhga faqat adminlar bot qo'shi mumkin!</b>",
      'parse_mode' => 'html'
  ]);
}
}
//Ushbu kod XABARCHILAR kanali orqali tarqatildi

if($text1 == "/start" or $text1 == "/start@mohunurbot"){
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$st = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>Bot lichkasiga yozing!</b>",
'parse_mode' => 'html'
]);
  bot('deleteMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
    $stt = $st->result->message_id;
  bot('deleteMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$stt,
]);
}else{
$sta = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "*👋Assalomu alekum
😎Nazoratchi botimizga xush kelibsiz
📝Bot guruh infosiga soat, hafta kuni, sana va havo harorati qo'ya oladi
🕹Botdan to'liq foydalanish uchun guruhingizga admin qiling
🗑Bot guruhlarda kirdi chiqdilarni tozalab turadi
🛡Botimiz yana guruhingizni botlardan himoya qiladi* 
*🛎Botni* /panel *buyrug'i orqali guruhingizga sozlashingiz mumkin
♻️Funksiyalar qo'shilishda davom etadi*\n\n
🍁*Yangiliklar:* [@XABARCHILAR]
👥*Guruhimiz:* [@sevgi_tanishuvlar_olami]
🎓*Bot Admini:* [@DASTURCHI_YIGIT]",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
     [['text'=>'⚖Buyruqlar', 'callback_data' => "stat"]],[['text'=>'📊Statistika', 'callback_data' => "stat1"]],
       [['text'=>'🇺🇿Telegram tili🇺🇸', 'callback_data' => "til"]],[['text'=>'💡Loyihalar', 'callback_data'=> "botlarimiz"]],
       [['text'=>'👮Creator','url'=>'https://telegram.me/DASTURCHI_YIGIT']],[['text'=>'🎮Foydali bolim','callback_data'=>"foydali"]],
          [['text'=>'➕Guruhga Qo‘shish','url'=>'telegram.me/mohunurbot?startgroup=new']]
]   
]),
]); 
}
}

if($text1 == "Lg"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$guruhlar,
    ]);
}


if($text1 == "Lu"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$userlar,
    ]);
}

if($data=="stat1"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "📊Siz Statistika bo'limidasiz",
      'show_alert'=>true
        ]);
$lich = substr_count($lichka,"\n");
$gr = substr_count($gruppa,"\n");
$obsh = $gr + $lich;
 $soat = date('H:i', strtotime('5 hour'));
$bugun = date('d-M Y',strtotime('5 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
       'text'=> "📊<b>Bot foydalanuvchilari:</b>
    
🌎 <b>Hammasi:</b> <b>$obsh</b>
├👤: <b>$lich</b>
└👥: <b>$gr</b>

👤 - <b>Foydalanuvchilar</b>
👥 - <b>Guruhlar</b>

<b>📆 $bugun ⌚ $soat</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>'♻Yangilash', 'callback_data' => "statistika"]],
  [['text'=>'🔙Orqaga', 'callback_data' => "back"]],
  [['text'=>'➕Guruhga qo‘shish','url'=>'telegram.me/mohunurbot?startgroup=new']]
]
]),
]);
}

if($data=="statistika"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "🌎 Hammasi: $obsh
├👤: $lich
└👥: $gr

👤 - Foydalanuvchilar
👥 - Guruhlar
📆 $bugun ⌚ $soat",
      'show_alert'=>true
        ]);
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

if((stripos($mtext,"1001")!==false) and $fadmin==$admin){
      $lx=explode("\n",$mtext);
      $idsi = $lx[0];
  $lin  = bot('exportchatinvitelink',[
       'chat_id'=>"-$idsi",
       ]);
  $link = $lin->result;
   bot('sendMessage',[
       'chat_id'=>$admin,
       'text'=>"$link",
     ]);
}
     
if($data=="stat"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "🔷<b>Guruh adminlari ishlatishi mumkin bo‘lgan buyruqlar:</b>

<b>Ro</b> - Guruh a‘zosini “read only” rejimiga tushuradi;
<b>Unro</b> - Guruh a‘zosidan cheklovni oladi;
<b>Kick</b> - Guruh a‘zosini guruhdan chiqaradi;
<b>Warn</b> - Guruh a‘zosiga ogohlantirish beradi va ogohlantirishlar soni 3 taga yetganda jazo sifatida guruhdan chiqaradi;
<b>Unwarn</b> - Guruh a‘zosidagi  ogohlantirishlarni olib tashlaydi;
<b>Ban</b>  - Guruh a‘zosini  guruhdan chiqaradi,boshqa qaytib kira  olmaydi;
<b>Unban</b> - Bandan oladi;
<b>Pin</b> - Xabarni yuqoriga qistiradi;
<b>Addpm</b> - Guruh a‘zosini guruhga admin qiladi;
<b>Delpm</b> - Adminlikdan oladi.

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

             🏆News💣
<b>《/yangilik》</b> - <i>Kuning eng oxirgi yangiligini yuboradi.</i>
<b>《/kurs》</b> - <i>Valyuta kurslari haqida malumot yuboradi.</i>
<b>《/id_id raqami》 </> - Id raqam egasini aniqlab beradi
<b> /info    </b> - Gruppa haqida malumot <b>Gruppada ishlidi</b>


<b>Bot inline rejimida kanallarda ham ma'lumot beroladi,</b> <code>/inline</code> <b>buyrug'ini bering kerakli menyuni tanlang va kanalingizga yuboring!</b>

- Bot guruh yangi a‘zolari bilan salomlashadi.Guruh a‘zosi guruhga reklama <b>ssilkalarini</b> tashlasa yoki <b>haqoratli</b> so‘z yozsa,bot xabarni o‘chirib foydalanuvchiga cheklov beradi.\n\n<b>Yaratuvchi🛠:</b>  <a href='tg://user?id=831477295'>DASTURCHI_YIGIT</a>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['url' => 'https://telegram.me/mohunurbot?startgroup=new', 'text' => "➕Guruhga Qo‘shish"],],
  [['text'=>'🔙Orqaga', 'callback_data' => "back"]]
]
]),
]);
}

if($text1 == "/buyruqlar" or $text1 == "/buyruqlar@mohunurbot"){
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$bs = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>Bot lichkasiga yozing!</b>",
'parse_mode' => 'html'
]);
  bot('deleteMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
  $bss = $bs->result->message_id;
  bot('deleteMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$bss,
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "🔷<b>Guruh adminlari ishlatishi mumkin bo‘lgan buyruqlar:</b>

<b>Ro</b> - Guruh a‘zosini “read only” rejimiga tushuradi;
<b>Unro</b> - Guruh a‘zosidan cheklovni oladi;
<b>Kick</b> - Guruh a‘zosini guruhdan chiqaradi;
<b>Warn</b> - Guruh a‘zosiga ogohlantirish beradi va ogohlantirishlar soni 3 taga yetganda jazo sifatida guruhdan chiqaradi;
<b>Unwarn</b> - Guruh a‘zosidagi  ogohlantirishlarni olib tashlaydi;
<b>Ban</b>  - Guruh a‘zosini  guruhdan chiqaradi,boshqa qaytib kira  olmaydi;
<b>Unban</b> - Bandan oladi;
<b>Pin</b> - Xabarni yuqoriga qistiradi;
<b>Addpm</b> - Guruh a‘zosini guruhga admin qiladi;
<b>Delpm</b> - Adminlikdan oladi.

          🏆News💣
<b>《/yangilik》</b> - <i>Kuning eng oxirgi yangiligini yuboradi.</i>
<b>《/kurs》</b> - <i>Valyuta kurslari haqida malumot yuboradi.</i>
<b>《/id_id raqami》 </b> - Id raqam egasini aniqlab beradi
<b> /info    </b> - Gruppa haqida malumot <b>Gruppada ishlidi</b>


<b>Bot inline rejimida kanallarda ham ma'lumot beroladi,</b> <code>/inline</code> <b>buyrug'ini bering kerakli menyuni tanlang va kanalingizga yuboring!</b>

- Bot guruh yangi a‘zolari bilan salomlashadi.Guruh a‘zosi guruhga reklama <b>ssilkalarini</b> tashlasa yoki <b>haqoratli</b> so‘z yozsa,bot xabarni o‘chirib foydalanuvchiga cheklov beradi.\n\n<b>Yaratuvchi🛠:</b>  <a href='tg://user?id=831477295'>DASTURCHI_YIGIT</a>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['url' => 'https://telegram.me/mohunurbot?startgroup=new', 'text' => "➕Guruhga Qo‘shish"],],
]
]),
]);
}
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

if($data == "back"){
bot('editmessagetext',[
 'chat_id'=>$chat_id2,
  'message_id'=>$message_id2,
 'text'=>" *👋Assalomu alekum
😎Nazoratchi botimizga xush kelibsiz
📝Bot guruh infosiga soat, hafta kuni, sana va havo harorati qo'ya oladi
🕹Botdan to'liq foydalanish uchun guruhingizga admin qiling
🗑Bot guruhlarda kirdi chiqdilarni tozalab turadi
🛡Botimiz yana guruhingizni botlardan himoya qiladi* 
*🛎Botni* /panel *buyrug'i orqali guruhingizga sozlashingiz mumkin
♻️Funksiyalar qo'shilishda davom etadi*\n\n
🍁*Yangiliklar:* [@XABARCHILAR]
👥*Guruhimiz:* [@sevgi_tanishuvlar_olami]
🎓*Bot Adminu:* [@DASTURCHI_YIGIT]",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'⚖Buyruqlar', 'callback_data' => "stat"],['text'=>'📊Statistika', 'callback_data' => "stat1"]],
       [['text'=>'🇺🇿Telegram tili🇺🇸', 'callback_data' => "til"],['text'=>'💡Loyihalar', 'callback_data'=> "botlarimiz"]],
       [['text'=>'👮Creator','url'=>'https://telegram.me/DASTURCHI_YIGIT'],['text'=>'🎮Foydali bolim','callback_data'=>"foydali"]],
          [['text'=>'➕Guruhga Qo‘shish','url'=>'telegram.me/mohunurbot?startgroup=new']]
]   
]),
]); 
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

if($data=="til"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "Siz telegram tili bo'limidasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "🇺🇿 Bu bo'lim orqali telegramingiz tilini qulay oson o'zgartira olasiz!
⬇️ Shunchaki o'rnatmoqchi bo'lgan tilingizni tanlang:

[🇸🇱 Узбек](tg://setlanguage?lang=uzbekcyr)

[🇷🇺 Русский](tg://setlanguage?lang=ru)

[🇸🇱 O'zbek](tg://setlanguage?lang=uz-beta)

[🇵🇷 English](tg://setlanguage?lang=en)",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' =>[
[['text'=>'🔙Orqaga','callback_data'=>"back"]]
]
]),
]);
}
if($data=="botlarimiz"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "♻Siz botlarimiz bo'limidasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "*Salom, biz yaratgan botlarimiz bilan tanishib chiqing. Sizlarga ham botlar kerak bo‘lsa, bizga murojaat qiling!*\n*Creator:* [@DASTURCHI_YIGIT]",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'😚DIDISHA😍', 'url'=>'https://t.me/Guruhpluskanalbot'],], 
[['text'=>'😎BEPUL REKLAma','url'=>'https://t.me/REKLAMACHImanbot'],],
[['text'=>'🤘KANAL MEGA', 'url'=>'https://t.me/MEGAgegantBOT'],],  
    [['text'=>'👮Creator', 'callback_data'=> "a"],['text'=>'🔙 Back', 'callback_data'=> "back"]],
]
]),
]);
}
if($data=="foydali"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "🎮Siz foydali bo'limdasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
        'text'=> "🎓*Siz foydali bo'limdasiz
📃O'zingizga kerakli bo'limni tanlang:*👇",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' =>[
[['text'=>'⛅Obu Havo☁','callback_data'=>"obhavo"]],
[['text'=>'🌍Vaqt mintaqasi🌐','callback_data'=>"vaqt"]],
[['text'=>'🖼Logotip', 'callback_data' => "logo"]],
[['text'=>'🔙Orqaga ','callback_data'=>"back"],['text'=>'♻Tarqatish↗','url'=>'http://telegram.me/share/url?url=https://t.me/mohunurbot']]
]
]),
]);
}

if($data=="logo"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "Siz Logotip yasash bo'limidasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "*✋Salom xurmatli bot a'zosi
bu bo'lim orqali ajoyib logotip yasashingiz mumkun
Logo yasash uchun Namuna📌
logo6 va sizga kerakli so'z

Logotip yasash Kommandalar📜

/pic va 1 dan 100 gacha bolgan raqam va so'z
🛑Eslatma🛑 /pic dan keyin joy qoldirmay raqam yozin

《/futbol ISM RAQAM》 - Aralash tartibda 5 futbol logotivlardan birini tanlab yuboriladi.*

/ogil *va soz √ Ogil bollar uchun ajoyib logo*
/qiz *va soz √ Qizlar uchun ajoyib logo
/bot va soz
/love va soz
logo va soz
logo1 va so'z
logo2 va soz
logo3 va soz
logo4 va soz
logo5 va soz
logo6 va soz
logo7 va soz
logo8 va soz

yangi kommandalar qoshishda davom etamamiz😊*

*Yaratuvchi*🛠: [@DASTURCHI_YIGIT]",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' =>[
[['text'=>'🔙Orqaga','callback_data'=>"back"]]
]
]),
]);
}   

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

//logo 
   if(mb_stripos($text,"logo1") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/dc775fad-cf82-42af-98dd-7a705c26f322/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"by @DASTURCHI_YIGIT",
]);
}
if(mb_stripos($text,"logo2") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/628c65a9-646c-435c-b953-8943e11a71ab/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"by @DASTURCHI_YIGIT",
]);
}
if(mb_stripos($text,"logo3") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/82711c18-4edc-42c6-a3ca-5b971ee79220/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"by @DASTURCHI_YIGIT",
]);
}
if(mb_stripos($text,"logo4") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>" https://bcassetcdn.com/asset/logo/b5e2f8bc-871a-42db-b16b-b27ae3beaf4a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"by @DASTURCHI_YIGIT",
]);
}
if(mb_stripos($text,"logo5") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/1b1869b4-e487-474b-b0e3-7f3bf8194194/logo?v=4&text=$ex[1] $ex[2] $ex[3] ",
'caption'=>"by @DASTURCHI_YIGIT",
]);
}
if(mb_stripos($text,"logo6") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/ef361ac4-e842-4624-a32b-b1c303f3ca4a/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"by @DASTURCHI_YIGIT",
]);
}
if(mb_stripos($text,"logo7") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"http://www.keepcalmstudio.com/-/p.php?t=%EE%BB%AA%0D%0A%0D%0A%0D%0A$ex[1]%0D%0A$ex[2]%0D%0A$ex[3]&bc=000000&tc=99FF00&cc=FF3300&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"by @DASTURCHI_YIGIT",
]);
}
if(mb_stripos($text,"logo8") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://bcassetcdn.com/asset/logo/76623182-5b19-489d-8fb7-b3e2fb712d4b/logo?v=4&text= $ex[1] $ex[2] $ex[3] ",
'caption'=>"by @DASTURCHI_YIGIT",
]);
}
if(mb_stripos($mtext,"/love") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"http://www.iloveheartstudio.com/-/p.php?t=%EE%BB%AE$Oy_Dark%EE%BB%AE%20%0A$ex[1]%0D%0A$ex[2]%0D%0A$ex[3]%EE%BB%AA%20%20Love%20%20%EE%BB%AA&bc=000000&tc=ffffff&hc=FF0000&f=n&uc=true&ts=true&ff=PNG&w=500&ps=s",
'caption'=>"by @DASTURCHI_YIGIT",
]);
} 
if(mb_stripos($mtext,"/bot") !== false){ 
$soz = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"http://www.keepcalmstudio.com/-/p.php?t=%EE%BB%AA%0D%0A$soz[1]%0D%0A$soz[2]%0D%0A$soz[3]%EE%BB%AE%20%20And%20%20%EE%BB%AE%0D%0A%0D%0A%EE%BB%AAKeep&bc=000000&tc=FFFFFF&cc=FF0000&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"by @DASTURCHI_YIGIT",
]);
}    



//Ushbu kod XABARCHILAR kanali orqali tarqatildi


if($data=="obhavo"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "𓻅Siz obhavo ma'lumoti bo'limidasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
        'text'=> "⛅*Ushbu bo'lim orqali obhavo haqida ma'lumot olasiz
😎O'zingizga kerakli shaharni tanlang:*👇",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard' =>[
 [['text'=>"⛅ Farg'ona",'callback_data'=>"far"],
 ['text'=>"⛅ Xiva",'callback_data'=>"xiv"]],
 [['text'=>"⛅ Andijon",'callback_data'=>"and"],
 ['text'=>"⛅ Namangan",'callback_data'=>"nam"]],
 [['text'=>"⛅ Buxoro",'callback_data'=>"bux"],
 ['text'=>"⛅ Guliston",'callback_data'=>"gul"]],
 [['text'=>"⛅ Jizzax",'callback_data'=>"jiz"],
 ['text'=>"⛅ Zarafshon",'callback_data'=>"zar"]],
 [['text'=>"⛅ Qarshi",'callback_data'=>"qar"],
 ['text'=>"⛅ Navoiy",'callback_data'=>"nav"]],
 [['text'=>"⛅ Nukus",'callback_data'=>"nuk"],['text'=>"⛅ Termiz",'callback_data'=>"ter"]],
 [['text'=>"⛅ Urganch",'callback_data'=>"urg"],
 ['text'=>"⛅ Toshkent",'callback_data'=>"tosh"]],
[['text'=>'⛅Samarqand☁','callback_data'=>"sam"],['text'=>'♻Xakkerlar','url'=>'https://t.me/sevgi_tanishuvlar_olami']],
[['text'=>'🔙Orqaga','callback_data'=>"foydali"],['text'=>'♻Tarqatish↗','url'=>'http://telegram.me/share/url?url=https://t.me/mohunurbot']]
]
]),
]);
}
////////////////======@sevgi_tanishuvlar_olami======////////////////

if($get == "administrator" or $get == "creator" or $get == "member"){
if($reply == $text and (mb_stripos($text,"/soni")!==false)){
	$rodam = file_get_contents("soni/$cid/$repid.txt");
  bot('sendmessage',[    
    'chat_id'=>$cid, 
    'user_id'=>$repid, 
    'reply_to_message_id'=>$mid,  
    'parse_mode'=>'html',   
    'text'=>"<b>$repname</b> bugungi kungacha guruhga <b>$rodam</b> ta odam qo'shgan!",
  ]);   
}elseif($text == "/soni" or $text == "/soni$botim"){
	$odam = file_get_contents("soni/$cid/$uid.txt");
  bot('sendmessage',[    
    'chat_id'=>$cid, 
    'user_id'=>$uid,  
    'reply_to_message_id'=>$mid,  
    'parse_mode'=>'html',   
    'text'=>"<b>$name</b> siz bugungi kungacha guruhga <b>$odam</b> ta odam qo'shdingiz!",
  ]);   
}
}

/////////////////================//////////////////
if(mb_stripos($text,"/ro")!==false){  
if($get == "administrator" or $get == "creator" or $uid==$admin){ 
  bot('restrictChatMember',[    
    'chat_id'=>$cid,    
    'user_id'=>$repid,    
    'until_date'=>strtotime("+ 180 minutes"), 
        'can_send_messages'=>false,
        'can_send_media_messages'=>false,
        'can_send_other_messages'=>false,
        'can_add_web_page_previews'=>false
  ]);    
  bot('sendmessage',[    
    'chat_id'=>$cid,    
    'parse_mode'=>'html',   
    'text'=>"<a href='tg://user?id=$repid'>$repname</a> 3 soatga <b>READ ONLY</b> rejimiga tushirildi!",
  ]);    
}  
} 
if(mb_stripos($text,"/unro")!==false){   
if($get == "administrator" or $get == "creator" or $uid==$admin){ 
  bot('restrictChatMember',[    
    'chat_id'=>$cid,    
    'user_id'=>$repid,    
        'can_send_messages'=>true,
        'can_send_media_messages'=>true,
        'can_send_other_messages'=>true,
        'can_add_web_page_previews'=>true
  ]);
  bot('sendmessage',[    
    'chat_id'=>$cid,    
    'parse_mode'=>'html',   
    'text'=>"<a href='tg://user?id=$repid'>$repname</a> 3 soatlik <b>READ ONLY</b> rejimidan ozod qilindi!",
  ]);    
}  
} 
if(mb_stripos($text,"/kick")!==false){  
if($get == "administrator" or $get == "creator" or $uid==$admin){ 
  bot('kickChatMember',[    
    'chat_id'=>$cid,    
    'user_id'=>$repid,
        'can_send_messages'=>true,
        'can_send_media_messages'=>true,
        'can_send_other_messages'=>true,
        'can_add_web_page_previews'=>true
  ]);    
bot('unbanChatMember',[
        'chat_id'=>$cid,
        'user_id'=>$repid,
    ]);
  bot('sendmessage',[    
    'chat_id'=>$cid,    
    'parse_mode'=>'html',   
    'text'=>"<a href='tg://user?id=$repid'>$repname</a> guruhdan <b>KICK</b> qilindi!",   
  ]);    
}  
} 
if(mb_stripos($text,"/ban")!==false){  
if($get == "administrator" or $get == "creator" or $uid==$admin){ 
  bot('kickChatMember',[    
    'chat_id'=>$cid,    
    'user_id'=>$repid,
        'can_send_messages'=>false,
        'can_send_media_messages'=>false,
        'can_send_other_messages'=>false,
        'can_add_web_page_previews'=>false
  ]);    
  bot('sendmessage',[    
    'chat_id'=>$cid,    
    'parse_mode'=>'html',   
    'text'=>"<a href='tg://user?id=$repid'>$repname</a> guruhdan <b>KICK</b> va <b>BAN</b> qilindi!",   
  ]);    
}  
} 
if(mb_stripos($text,"/unban")!==false){  
if($get == "administrator" or $get == "creator" or $uid==$admin){ 
  bot('unbanChatMember',[
        'chat_id'=>$cid,
        'user_id'=>$repid,
  ]);
  bot('sendmessage',[    
    'chat_id'=>$cid,    
    'parse_mode'=>'html',   
    'text'=>"<a href='tg://user?id=$repid'>$repname</a> guruhda <b>BAN</b> dan ozod qilindi!",   
  ]);    
}  
} 
if(mb_stripos($text,"/pin")!==false){  
if($get == "administrator" or $get == "creator" or $uid==$admin){ 
  bot('PinchatMessage',[
    'chat_id'=>$cid,
    'message_id'=>$repmid
  ]);
  bot('sendmessage',[    
    'chat_id'=>$cid,    
    'parse_mode'=>'html',   
    'text'=>"<a href='tg://user?id=$repid'>$repname</a> xabaringiz <b>PIN</b> ga qistirildi!",   
  ]);    
}  
} 
if(mb_stripos($text,"/unpin")!==false){  
if($get == "administrator" or $get == "creator" or $uid==$admin){ 
  bot('UnpinchatMessage',[
    'chat_id'=>$cid,
    'message_id'=>$repmid
  ]);
  bot('sendmessage',[    
    'chat_id'=>$cid,    
    'parse_mode'=>'html',   
    'text'=>"<a href='tg://user?id=$repid'>$repname</a> xabaringiz <b>PIN</b> dan olindi!",   
  ]);    
}  
} 
if($sticker){
if($get == "member"){
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid
]);
  bot('sendmessage',[    
    'chat_id'=>$cid,    
    'parse_mode'=>'html',   
    'text'=>"<a href='tg://user?id=$uid'>$name</a> guruhda <b>STICKER</b> yuborish taqiqlangan!",   
  ]);    
}
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

if($text=="/ob_havo" or $text=="/ob_havo@mohunurbot"){
  $text = "Bugungi <b>OB - HAVO</b> ma'lumoti bilan tanishish uchun o'zingiz yashab turgan manzilni tanlang!";
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>$text,
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 [['text'=>"⛅ Farg'ona",'callback_data'=>"far"],
 ['text'=>"⛅ Xiva",'callback_data'=>"xiv"]],
 [['text'=>"⛅ Andijon",'callback_data'=>"and"],
 ['text'=>"⛅ Namangan",'callback_data'=>"nam"]],
 [['text'=>"⛅ Buxoro",'callback_data'=>"bux"],
 ['text'=>"⛅ Guliston",'callback_data'=>"gul"]],
 [['text'=>"⛅ Jizzax",'callback_data'=>"jiz"],
 ['text'=>"⛅ Zarafshon",'callback_data'=>"zar"]],
 [['text'=>"⛅ Qarshi",'callback_data'=>"qar"],
 ['text'=>"⛅ Navoiy",'callback_data'=>"nav"]],
 [['text'=>"⛅ Nukus",'callback_data'=>"nuk"],
 ['text'=>"⛅ Samarqand",'callback_data'=>"sam"]],
 [['text'=>"⛅ Termiz",'callback_data'=>"ter"],
 ['text'=>"⛅ Urganch",'callback_data'=>"urg"]],
 [['text'=>"⛅ Toshkent",'callback_data'=>"tosh"]],
        ]
        ])
  ]);
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

if($data=="far"){
$anb8 = file_get_contents('http://obhavo.uz/ferghana'); $ex1=explode("\n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('&#039;','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('&#039;','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('&#039;','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Farg'ona
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

if($data=="tosh"){
$anb8 = file_get_contents('http://obhavo.uz/tashkent'); $ex1=explode("\n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('&#039;','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('&#039;','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('&#039;','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Toshkent
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

if($data=="and"){
$anb8 = file_get_contents('http://obhavo.uz/andijan'); $ex1=explode("\n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('&#039;','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('&#039;','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('&#039;','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Andijon
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

if($data=="nam"){
$anb8 = file_get_contents('http://obhavo.uz/namangan'); $ex1=explode("\n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('&#039;','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('&#039;','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('&#039;','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Namangan
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="bux"){
$anb8 = file_get_contents('http://obhavo.uz/bukhara'); $ex1=explode("\n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]);
$havo1 = str_replace('&#039;','‘',$havo1);
  $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('&#039;','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('&#039;','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Buxoro
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="gul"){
$anb8 = file_get_contents('http://obhavo.uz/gulistan'); $ex1=explode("\n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('&#039;','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('&#039;','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('&#039;','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Guliston
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="jiz"){
$anb8 = file_get_contents('http://obhavo.uz/jizzakh'); $ex1=explode("\n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('&#039;','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('&#039;','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('&#039;','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Jizzah
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="zar"){
$anb8 = file_get_contents('http://obhavo.uz/zarafshan'); $ex1=explode("\n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('&#039;','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]); 
 $sha = str_replace('&#039;','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('&#039;','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Zarafshon
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="qar"){
$anb8 = file_get_contents('http://obhavo.uz/karshi'); $ex1=explode("\n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('&#039;','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('&#039;','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('&#039;','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Qarshi
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="nav"){
$anb8 = file_get_contents('http://obhavo.uz/navoi'); $ex1=explode("\n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('&#039;','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]); 
 $sha = str_replace('&#039;','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('&#039;','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Navoiy
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="nuk"){
$anb8 = file_get_contents('http://obhavo.uz/nukus'); $ex1=explode("\n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('&#039;','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('&#039;','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('&#039;','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Nukus
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

if($data=="ter"){
$anb8 = file_get_contents('http://obhavo.uz/termez'); $ex1=explode("\n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('&#039;','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('&#039;','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('&#039;','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Termiz
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="urg"){
$anb8 = file_get_contents('http://obhavo.uz/urgench'); $ex1=explode("\n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('&#039;','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('&#039;','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('&#039;','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Urganch
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="xiv"){
$anb8 = file_get_contents('http://obhavo.uz/khiva'); $ex1=explode("\n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('&#039;','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('&#039;','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('&#039;','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Xiva
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($data=="sam"){
$anb8 = file_get_contents('http://obhavo.uz/samarkand'); $ex1=explode("\n",$anb8);
$gr1=str_replace('<span><strong>',' ',$ex1[73]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[74]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[77]); 
$havo1 = str_replace('&#039;','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[99]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[104]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[109]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[67]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[87]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[88]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$sha=str_replace('<p>',' ',$ex1[82]);  
$sha = str_replace('&#039;','‘',$sha);
$sha=str_replace('</p>',' ',$sha); 
$sha= trim($sha); 
$bosim=str_replace('<p>',' ',$ex1[83]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[86]);  
$oy = str_replace('&#039;','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[81]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'chat_id'=>$ccid,
'text'=>"📆 $bugun
🌏 Samarqand
⛅ Harorat: $gr1 ... $gr2
☁ Ob-havo: $havo1
🌄 Tong: $tongr
🌅 Kun: $kungr
🌃 Oqshom: $oqgr
💧 $nam
🌝 $qch
🌚 $qb",
'show_alert'=>true,
'parse_mode'=>'html',
]);
}
if($text=="/yangilik" or $text=="/yangilik@mohunurbot"){
  $text = "Bugungi eng so'ngi yangilik bilan tanishing, <b>🆕 YANGILIKLAR 🆕</b> tugmasini bosing!";
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>$text,
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"🆕 YANGILIKLAR 🆕",'callback_data'=>"yangilik"]],
        ]
        ])
  ]);
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

  $url = 'https://daryo.uz/feed/';
  $rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item){
  $line = $item->title;
  break;
}  
if($data=="yangilik"){
  $soat = date('H:i:s', strtotime('5 hour'));
  bot('answerCallbackQuery',[
    'callback_query_id'=>$cqid,
    'chat_id'=>$ccid, 
    'text'=>"📰 $line

⌚ Soat: $soat",
   'show_alert'=>true,
   'parse_mode'=>'html',
  ]);
}
if($text=="/kurs" or $text=="/kurs@mohunurbot"){
  $text = "Bugungi valyuta kursini bilish uchun <b>💱 VALYUTA KURSI 💱</b> tugmasini bosing!";
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>$text,
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"💱 VALYUTA KURSI 💱",'callback_data'=>"kurs"]],
        ]
        ])
  ]);
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

if($data == 'kurs'){
  $soat = date('H:i', strtotime('5 hour'));
  bot('answerCallbackQuery',[
    'callback_query_id'=>$cqid,
    'chat_id'=>$ccid,
    'text'=>kurs()."
⌚ Soat: $soat",
    'show_alert'=>true,
    'parse_mode'=>'html',
]);
}
if($text=="/inline" or $text=="/inline@mohunurbot"){
  $text = "Bot inline rejimda <b>Ob-havo , Valyuta kursi, Eng so'ngi yangilik</b>lar bilan sizni kanal yoki guruhlarda tanishtira oladi! Pastdagi tugmalardan kerakligini tanlang 👇";
  bot('sendmessage',[
    'chat_id'=>$cid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>$text,
    'parse_mode'=>'html',
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"⛅ OB-HAVO ⛅",'switch_inline_query'=>"obhavo"]],
[['text'=>"💱 VALYUTA KURSI 💱",'switch_inline_query'=>"kurs"]],
[['text'=>"🆕 YANGILIKLAR 🆕",'switch_inline_query'=>"yangilik"]],
        ]
        ])
  ]);
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

//inline

$iuid = $update->inline_query->from->id;
$iid = $update->inline_query->id;
$icid = $update->inline_query->chat->id;
$imid = $update->inline_query->message->id;
$bot = '@'.bot('getme',['bot'])->result->username;
$query = $update->inline_query->query;

if(mb_stripos($query,"obhavo")!==false){
  bot('answerInlineQuery',[
    'inline_query_id'=>$iid,
    'cache_time'=>1,
    'results'=>json_encode([[
    'type'=>'article',
    'thumb_url'=>"https://izzatbek8252.000webhostapp.com/polo/obhavo.jpg",
    'id'=>base64_encode(1),
    'title'=>"⛅ OB-HAVO ma'lumoti ⛅",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'html',
    'message_text'=>"Bugungi <b>OB - HAVO</b> ma'lumoti bilan tanishish uchun o'zingiz yashab turgan manzilni tanlang!",
  ],
    'reply_markup'=>[
            'inline_keyboard'=>[
 [['text'=>"⛅ Farg'ona",'callback_data'=>"far"],
 ['text'=>"⛅ Xiva",'callback_data'=>"xiv"]],
 [['text'=>"⛅ Andijon",'callback_data'=>"and"],
 ['text'=>"⛅ Namangan",'callback_data'=>"nam"]],
 [['text'=>"⛅ Buxoro",'callback_data'=>"bux"],
 ['text'=>"⛅ Guliston",'callback_data'=>"gul"]],
 [['text'=>"⛅ Jizzax",'callback_data'=>"jiz"],
 ['text'=>"⛅ Zarafshon",'callback_data'=>"zar"]],
 [['text'=>"⛅ Qarshi",'callback_data'=>"qar"],
 ['text'=>"⛅ Navoiy",'callback_data'=>"nav"]],
 [['text'=>"⛅ Nukus",'callback_data'=>"nuk"],
 ['text'=>"⛅ Samarqand",'callback_data'=>"sam"]],
 [['text'=>"⛅ Termiz",'callback_data'=>"ter"],
 ['text'=>"⛅ Urganch",'callback_data'=>"urg"]],  
[['text'=>"⛅ Toshkent",'callback_data'=>"tosh"]],
        ]],
        ]
        ])
]);
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

if(mb_stripos($query,"kurs")!==false){
  bot('answerInlineQuery',[
    'inline_query_id'=>$iid,
    'cache_time'=>1,
    'results'=>json_encode([[
    'type'=>'article',
    'thumb_url'=>"https://izzatbek8252.000webhostapp.com/polo/kurs.jpg",
    'id'=>base64_encode(1),
    'title'=>"💱 VALYUTA KURSI 💱",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'html',
    'message_text'=>"Bugungi valyuta kursini bilish uchun <b>💱 VALYUTA KURSI 💱</b> tugmasini bosing!",
  ],
    'reply_markup'=>[
            'inline_keyboard'=>[
 [['text'=>"💱 VALYUTA KURSI 💱",'callback_data'=>"kurs"]],
        ]],
        ]
        ])
]);
}
if(mb_stripos($query,"yangilik")!==false){
  bot('answerInlineQuery',[
    'inline_query_id'=>$iid,
    'cache_time'=>1,
    'results'=>json_encode([[
    'type'=>'article',
    'thumb_url'=>"https://izzatbek8252.000webhostapp.com/polo/yangilik.jpg",
    'id'=>base64_encode(1),
    'title'=>"🆕 YANGILIKLAR 🆕",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'html',
    'message_text'=>"Bugungi eng so'ngi yangilik bilan tanishing, <b>🆕 YANGILIKLAR 🆕</b> tugmasini bosing!",
  ],
    'reply_markup'=>[
            'inline_keyboard'=>[
 [['text'=>"🆕 YANGILIKLAR 🆕",'callback_data'=>"yangilik"]],
        ]],
        ]
        ])
]);
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $us->result;

$anb8 = file_get_contents('http://obhavo.uz/'); $ex1=explode("\n",$anb8);
$obh = file_get_contents('https://fa.weather.town/uz/forecast/uzbekistan/samarqand-viloyati/samarqand/');
$ex = explode('title="Havo harorati"',$obh);
$exi = explode('right-container',$ex[1]);
$ubk = str_replace($exi[1],' ',$ex[1]);
$ubk1 = str_replace('dir="ltr">',' ',$ubk);
$ubk2 = str_replace('<div class="informer-main-page__container fleft right-container',' ',$ubk1);
$ubk3 = str_replace('&deg;C</div>',' ',$ubk2);
$ubk4 = str_replace('</div>',' ',$ubk3);
$obhavo = trim("$ubk4");
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[78]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr);
 $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr);
 $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr);

$sana = date('d-M Y',strtotime('5 hour'));
$soat = date('H:i:s', strtotime('5 hour'));
$kun3 = date('N',strtotime('2 hour')); 
$hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
$ex=explode("$kun3",$hafta); 
$hafta1="$ex[1]"; 
$kun1 = date('z ',strtotime('2 hour')); 
$a = 153;
$c2 = $a-$kun1;
$d = date('L ',strtotime('2 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('2 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('2 hour')); 
$a3 = 59;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('2 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;

if(true){
bot('setChatDescription',[
'chat_id'=>$chat_id,
'description'=>"👋 Guruhimizga xush kelibsiz!
😊Kuningiz xayrli va Barokatli o'tsin!
🗓Bugun: $sana-yil
⌚️Soat: $soat
🔵Hafta kuni: $hafta1
⛅Havo harorati: $obhavo °C
👥Guruh a'zolari: $count
📡Bosh homiy: @sevgi_tanishuvlar_olami
⌚Soat qoydi: @mohunurbot
",
]);
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

if(mb_stripos($text,"/pic") !== false){
 $ex=explode(" ",$text);
if(!empty($ex[1])){
$rm = str_replace("/pic","",$ex[0]);
if($rm >= "1" and "100" >= $rm){
$tx = str_replace("$ex[0]","",$text);
$txt = trim($tx);
$text = str_replace(" ","%20",$txt);
$text = str_replace("\n","%0A",$text);
    bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⏳Tayyorlanmoqda...*",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$mid,
]);sleep("0.25");

bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
■□□□□□□□□□ 10% 😊',
'parse_mode' => 'html',
]);sleep("1");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
●●○○○○○○○○ 20% 😄',
'parse_mode' => 'html',
]);sleep("1");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
■■■□□□□□□□ 30% 😉',
'parse_mode' => 'html',
]);sleep("1");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
●●●●○○○○○○ 40% 😋',
'parse_mode' => 'html',
]);sleep("1");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
■■■■■□□□□□ 50% 😁',
'parse_mode' => 'html',
]);sleep("1");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
●●●●●●○○○○ 60% 😅',
'parse_mode' => 'html',
]);sleep("1");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
■■■■■■■□□□ 70% 😎',
'parse_mode' => 'html',
]);sleep("1");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
●●●●●●●●○○ 80% 😆',
'parse_mode' => 'html',
]);sleep("1");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
■■■■■■■■■□ 90% 😜',
'parse_mode' => 'html',
]);sleep("1");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
●●●●●●●●●● 100% 🤗',
'parse_mode' => 'html',
]);sleep("0.25");
$i = ["100","101","102","103","104","105","106","107","108","109","110","111","112","116","117","122","126","127","139","140","143","144","146","147","153","154","155","156","157","158","159","160","161","162","164","165","168","171","172","173","174","175","176","178","179","180","181","183","184","186","187","188","194","199","200","204","206","208","210","212","213","215","218","221","222","226","229","231","233","234","238","240","241","242","243","245","248","251","254","258","259","271","272","273","274","275","276","277","278","279","281","282","283","285","286","288","289","291","292","294","295","297","300"];
$url = "http://away-dev.000webhostapp.com/api/api.php?type={$i[$rm]}&text1=$text&text2=$text";
sleep("0.25");
file_put_contents("$chat_id.png",file_get_contents($url));
  bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>new CURLFile("$chat_id.png"),
'caption' => "<b>🔥LogoMaker by</b> @DASTURCHI_YIGIT

🔢<b>Logotiv raqami:</b> <i>$rm</i>

☄<b>Text:</b> <i>$txt</i>", 
'parse_mode' => 'html',
]);sleep("0.25");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '✅<b>Logotiv TAYYOR😎</b>',
'parse_mode' => 'html',
]);
unlink("$chat_id.png");
   }
}
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

if(mb_stripos($mtext,"/futbol") !== false){
 $ex=explode(" ",$mtext);
if(!empty($ex[1] and $ex[2])){
        bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*⏳Tayyorlanmoqda...*",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$mid,
]);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
■□□□□□□□□□ 10% 😊',
'parse_mode' => 'html',
]);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
●●○○○○○○○○ 20% 😄',
'parse_mode' => 'html',
]);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
■■■□□□□□□□ 30% 😉',
'parse_mode' => 'html',
]);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
●●●●○○○○○○ 40% 😋',
'parse_mode' => 'html',
]);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
■■■■■□□□□□ 50% 😁',
'parse_mode' => 'html',
]);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
●●●●●●○○○○ 60% 😅',
'parse_mode' => 'html',
]);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
■■■■■■■□□□ 70% 😎',
'parse_mode' => 'html',
]);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
●●●●●●●●○○ 80% 😆',
'parse_mode' => 'html',
]);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
■■■■■■■■■□ 90% 😜',
'parse_mode' => 'html',
]);
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '<b>⏳Tayyorlanmoqda...</b>
●●●●●●●●●● 100% 🤗',
'parse_mode' => 'html',
]);
$i = ["262","263","268","267"];
$f = array_rand($i);
$url = "http://away-dev.000webhostapp.com/api/api.php?type={$i[$f]}&text1=$ex[1]&text2=$ex[2]";
sleep("0.25");
file_put_contents("$chat_id.png",file_get_contents($url));
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>new CURLFile("$chat_id.png"),
'caption' => "<b>🔥Futbol Logo by</b> @DASTURCHI_YIGIT

👤<b>Ism:</b>  <b>$ex[1]</b>
🔢<b>Raqam:</b>  <b>$ex[2]</b>", 
'parse_mode' => 'html',
'reply_to_message_id'=>$mid,
]);sleep("0.25");
 bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id' => $mid+1,
'text' => '✅<b>Logotiv TAYYOR😎</b>',
'parse_mode' => 'html',
]);
unlink("$chat_id.png");
   }
}

if(mb_stripos($text,"/ogil") !== false){ 
$ex = explode(" ",$text);
$px = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://pobek96.000webhostapp.com/api/f.php/?type=309&text1=$ex[1] $ex[2] $ex[3]&text2=$px[1] $px[2] $px[3]",
'caption'=>"by @DASTURCHI_YIGIT",
]); 
}
if(mb_stripos($text,"/qiz") !== false){ 
$ex = explode(" ",$text);
$px = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://pobek96.000webhostapp.com/api/qiz.php/?type=289&text1=$ex[1] $ex[2] $ex[3]&text2=$px[1] $px[2] $px[3]",
'caption'=>"by @DASTURCHI_YIGIT",
]);
}
$replyik = $message->reply_to_message->text;
    $yubbi = "📨Yuboriladigan xabar matnini kiriting. Xabar turi markdown";

    if($text1 == "/sendu" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","user");
    }

    if($step == "user" and $chat_id == $admin){
      if($text1 == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$text1,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Userlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }
      elseif(isset($update->message-> left_chat_member )){
    $name = $message->from->first_name;
bot('sendMessage',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'text'=>"Gruppamizdan chiqib ketti $name ketsangiz ketaverin sizsiz ham kamayib qolmaymiz"
    ]);
}
       if($text1 == "/sendg" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","guruh");
    }

    if($step == "guruh" and $chat_id == $admin){
      if($text1 == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$guruhlar);
      foreach($idszs as $idlat){
    $guruu =  bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$text1,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($guruu){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Guruhlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }
      
 mkdir("sozlama");
$text1 = $message->text;
if(isset($text1)){
$get = file_get_contents("sozlama/$chat_id");
if($get){}else{
$baza = [
"stiker"=>"true",
"link"=>"true",
"audio"=>"true",
"video"=>"true",
"fayl"=>"true",
"rasm"=>"true",
"forward"=>"true",
"gif"=>"true",
"golos"=>"true",
"contact"=>" true",
"user"=>" true",
"hashtag"=>" true",
 "location"=>"true",
  "video_note"=>"true",
  
];
file_put_contents("sozlama/$chat_id",json_encode($baza));
}
}

$baza = json_decode(file_get_contents("sozlama/$chat_id"),true);
$Sstiker = $baza["stiker"];
$Slink = $baza["link"];
$Saudio = $baza["audio"];
$Svideo = $baza["video"];
$Sfayl = $baza["fayl"];
$Sforward = $baza["forward"];
$Sgif = $baza["gif"];
$Srasm = $baza["rasm"];
$Sgolos = $baza["golos"];
$Scontact = $baza["contact"];
$Suser = $baza["user"];
$Shashtag = $baza["hashtag"];
$Slocation = $baza["location"];
$Svideo_note = $baza["video_note"];

if($text1 == "/panel" or $text1 == "/panel@mohunurbot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$baza = json_decode(file_get_contents("sozlama/$chat_id"),true);
$stiker = $baza["stiker"];
if($stiker == "false"){
$stiker = "❎";
}else{
$stiker = "✅";
}
$link = $baza["link"];
if($link == "false"){
$link = "❎";
}else{
$link = "✅";
}
$audio = $baza["audio"];
if($audio == "false"){
$audio = "❎";
}else{
$audio = "✅";
}
$video = $baza["video"];
if($video == "false"){
$video  = "❎";
}else{
$video = "✅";
}
$fayl = $baza["fayl"];
if($fayl == "false"){
$fayl  = "❎";
}else{
$fayl = "✅";
}
$forward1 = $baza["forward"];
if($forward1 == "false"){
$forward1  = "❎";
}else{
$forward1 = "✅";
}
$gif = $baza["gif"];
if($gif == "false"){
$gif  = "❎";
}else{
$gif = "✅";
}
$rasm = $baza["rasm"];
if($rasm == "false"){
$rasm  = "❎";
}else{
$rasm = "✅";
}
$golos = $baza["golos"];
if($golos == "false"){
$golos  = "❎";
}else{
$golos = "✅";
}
$contact = $baza["contact"];
if($contact == "false"){
$contact = "❎";
}else{
$contact = "✅";
}
$user = $baza["user"];
if($user == "false"){
$user = "❎";
}else{
$user = "✅";
}
$hashtag = $baza["hashtag"];
if($hashtag == "false"){
$hashtag = "❎";
}else{
$hashtag = "✅";
}
 $location = $baza["location"];
if($location == "false"){
$location = "❎";
}else{
$location = "✅";
}
$video_note = $baza["video_note"];
if($video_note == "false"){
$video_note  = "❎";
}else{
$video_note = "✅";
}

file_put_contents("sozlama/$fadmin.lch","$chat_id");
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"<b>Lichkangizga yubordim!</b>",
'parse_mode'=>'html',
]);
bot('sendMessage', [
'chat_id'=>$fadmin,
'text'=>"$title <b>guruhi sozlamalari!</b>\n\n<b>✅Ruhsat etilgan fayllar</b>\n<b>❎Taqiqlangan fayllar</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"rasm","text"=>"📷Rasm"],["callback_data"=>"M()rasm","text"=>"$rasm"],],
[["callback_data"=>"link","text"=>"📡Link"],["callback_data"=>"M()link","text"=>"$link"],],
[["callback_data"=>"stiker","text"=>"🎭Stiker"],["callback_data"=>"M()stiker","text"=>"$stiker"],],
[["callback_data"=>"fayl","text"=>"📁Fayl"],["callback_data"=>"M()fayl","text"=>"$fayl"],],
[["callback_data"=>"video","text"=>"🎬 Video"],["callback_data"=>"M()video","text"=>"$video"],],
[["callback_data"=>"audio","text"=>"🎶 Musiqa"],["callback_data"=>"M()audio","text"=>"$audio"],],
[["callback_data"=>"forward","text"=>"➡ Forward"],["callback_data"=>"M()forward","text"=>"$forward1"],],
[["callback_data"=>"gif","text"=>"💾Gif"],["callback_data"=>"M()gif","text"=>"$gif"],],
[["callback_data"=>"golos","text"=>"🎤Golos"],["callback_data"=>"M()golos","text"=>"$golos"],],
[["callback_data"=>"contact","text"=>"👤Kontakt"],["callback_data"=>"M()contact","text"=>"$contact"],],
[["callback_data"=>"user","text"=>"📧Userlar"],["callback_data"=>"M()user","text"=>"$user"],],
[["callback_data"=>"hashtag","text"=>"#⃣HashTag"],["callback_data"=>"M()hashtag","text"=>"$hashtag"],],
[["callback_data"=>"location","text"=>"🏠Manzil"],["callback_data"=>"M()location","text"=>"$location"],],
[["callback_data"=>"video_note","text"=>"📹Yumoloq video"],["callback_data"=>"M()video_note","text"=>"$video_note"],],
]
]),
]);
}
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

$callback = $update->callback_query;
$dataa = $callback->data;
$dataa = explode("()",$dataa);
if($dataa[0] == "M"){
$cid = $callback->from->id;
$mid = $callback->message->message_id;
$imid = $callback->inline_message_id;
$idd = file_get_contents("sozlama/$cid.lch");
$gets = bot("getChat",[
"chat_id"=>"$idd",
]);
$title = $gets->result->title;
$baza = json_decode(file_get_contents("sozlama/$idd"),true);
if($baza["$dataa[1]"] == "true"){
$input = "false";
}else{
$input = "true";
}
$baza["$dataa[1]"] = $input;
file_put_contents("sozlama/$idd",json_encode($baza));
$baza = json_decode(file_get_contents("sozlama/$idd"),true);
$stiker = $baza["stiker"];
if($stiker == "false"){
$stiker = "❎";
}else{
$stiker = "✅";
}
$link = $baza["link"];
if($link == "false"){
$link = "❎";
}else{
$link = "✅";
}
$audio = $baza["audio"];
if($audio == "false"){
$audio = "❎";
}else{
$audio = "✅";
}
$video = $baza["video"];
if($video == "false"){
$video  = "❎";
}else{
$video = "✅";
}
$fayl = $baza["fayl"];
if($fayl == "false"){
$fayl  = "❎";
}else{
$fayl = "✅";
}
$forward1 = $baza["forward"];
if($forward1 == "false"){
$forward1  = "❎";
}else{
$forward1 = "✅";
}
$gif = $baza["gif"];
if($gif == "false"){
$gif  = "❎";
}else{
$gif = "✅";
}
$rasm = $baza["rasm"];
if($rasm == "false"){
$rasm  = "❎";
}else{
$rasm = "✅";
}
$golos = $baza["golos"];
if($golos == "false"){
$golos  = "❎";
}else{
$golos = "✅";
}
$contact = $baza["contact"];
if($contact == "false"){
$contact = "❎";
}else{
$contact = "✅";
}
$user = $baza["user"];
if($user == "false"){
$user = "❎";
}else{
$user = "✅";
}
$hashtag = $baza["hashtag"];
if($hashtag == "false"){
$hashtag = "❎";
}else{
$hashtag = "✅";
}
 $location = $baza["location"];
if($location == "false"){
$location = "❎";
}else{
$location = "✅";
}
$video_note = $baza["video_note"];
if($video_note == "false"){
$video_note  = "❎";
}else{
$video_note = "✅";
}
bot('editMessageText', [
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"$title <b>guruhi sozlamalari!</b>\n\n<b>✅Ruhsat etilgan fayllar</b>\n<b>❎Taqiqlangan fayllar</b>",
'parse_mode'=>'html',
'inline_message_id'=>$imid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"rasm","text"=>"📷Rasm"],["callback_data"=>"M()rasm","text"=>"$rasm"],],
[["callback_data"=>"link","text"=>"📡Link"],["callback_data"=>"M()link","text"=>"$link"],],
[["callback_data"=>"stiker","text"=>"🎭Stiker"],["callback_data"=>"M()stiker","text"=>"$stiker"],],
[["callback_data"=>"fayl","text"=>"📁Fayl"],["callback_data"=>"M()fayl","text"=>"$fayl"],],
[["callback_data"=>"video","text"=>"🎬 Video"],["callback_data"=>"M()video","text"=>"$video"],],
[["callback_data"=>"audio","text"=>"🎶 Musiqa"],["callback_data"=>"M()audio","text"=>"$audio"],],
[["callback_data"=>"forward","text"=>"➡ Forward"],["callback_data"=>"M()forward","text"=>"$forward1"],],
[["callback_data"=>"gif","text"=>"💾Gif"],["callback_data"=>"M()gif","text"=>"$gif"],],
[["callback_data"=>"golos","text"=>"🎤Golos"],["callback_data"=>"M()golos","text"=>"$golos"],],
[["callback_data"=>"contact","text"=>"👤Kontakt"],["callback_data"=>"M()contact","text"=>"$contact"],],
[["callback_data"=>"user","text"=>"📧Userlar"],["callback_data"=>"M()user","text"=>"$user"],],
[["callback_data"=>"hashtag","text"=>"#⃣HashTag"],["callback_data"=>"M()hashtag","text"=>"$hashtag"],],
[["callback_data"=>"location","text"=>"🏠Manzil"],["callback_data"=>"M()location","text"=>"$location"],],
[["callback_data"=>"video_note","text"=>"📹Yumoloq video"],["callback_data"=>"M()video_note","text"=>"$video_note"],],
]
]),
]);
}

if(isset($update) and $Sgif == "false"){
if(isset($message->animation)!==false){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[Foydalanuvchi](tg://user?id=$user_id)  😡*Kechirasiz bu guruhda Gif tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Scontact == "false"){
if(isset($message->contact)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[Foydalanuvchi](tg://user?id=$user_id)  😡*Kechirasiz bu guruhda 👤 Kontakt tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Srasm == "false"){
if(isset($message->photo)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[Foydalanuvchi](tg://user?id=$user_id)😡*Kechirasiz bu guruhda 🌅 Rasm tashlash mumkin emas!*",
'parse_mode'=>"markdown"
]);
}
}

if(isset($update) and $Sstiker == "false"){
if(isset($message->sticker)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[Foydalanuvchi](tg://user?id=$user_id)😡*Kechirasiz bu guruhda 🗿Sticker tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

if(isset($update) and $Svideo == "false"){
if(isset($message->video)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[Foydalanuvchi](tg://user?id=$user_id)  😡*Kechirasiz bu guruhda 📽 Video tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Saudio == "false"){
if(isset($message->audio)!==false){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[Foydalanuvchi](tg://user?id=$user_id)  😡*Kechirasiz bu guruhda 🎵 Musiqa tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Sfayl == "false"){
if(isset($message->document)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[Foydalanuvchi](tg://user?id=$user_id)  😡*Kechirasiz bu guruhda 💾 Document tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

if(isset($update) and $Sforward == "false"){
if(isset($message->forward)!==false){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[Foydalanuvchi](tg://user?id=$user_id)  😡*Kechirasiz bu guruhga ⏬ Forward tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Sgolos == "false"){
if(isset($message->voice)!==false){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[Foydalanuvchi](tg://user?id=$id)  😡*Kechirasiz bu guruhda 🎙 Ovozli xabar tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and$Slink == "false"){
if((mb_stripos($mtext,"http") !==false) or (stripos($capt,"http://")!==false) or (stripos($capt,"bot?start=")!==false) or (stripos($mtext,"bot?start=")!==false) or (stripos($mtext,"https://")!==false)){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[Foydalanuvchi](tg://user?id=$user_id)  😡*Kechirasiz bu guruhda ❌ Reklama tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}
if(isset($update) and$Suser == "false"){
if((mb_stripos($mtext,"@") !==false) or (stripos($capt,"@")!==false) or (stripos($capt,"@")!==false) or (stripos($mtext,"@")!==false)){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[Foydalanuvchi](tg://user?id=$user_id)  😡*Kechirasiz bu guruhda 📧User yuborish mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}
if(isset($update) and$Shashtag == "false"){
if((mb_stripos($mtext,"#") !==false) or (stripos($capt,"#")!==false) or (stripos($capt,"#")!==false) or (stripos($mtext,"#")!==false)){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[Foydalanuvchi](tg://user?id=$user_id)  😡*Kechirasiz bu guruhda #⃣ HashTag tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}
if(isset($update) and $Slocation == "false"){
if(isset($message->location)!==false){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[Foydalanuvchi](tg://user?id=$user_id)  😡kechirasiz bu guruhda 🏠Manzil yuborish mumkin emas!",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Svideo_note == "false"){
if(isset($message->video_note)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[Foydalanuvchi](tg://user?id=$user_id)😡*Kechirasiz bu guruhda 📹Yumoloq video tashlash mumkin emas!*",
'parse_mode'=>"markdown"
]);
}
}

//Ushbu kod XABARCHILAR kanali orqali tarqatildi

if((stripos($capt,"https://")!==false)  or (stripos($capt,"http://")!==false) or (stripos($capt,"@")!==false) or (stripos($capt,"bot?start=")!==false)  or (stripos($mtext,"bot?start=")!==false)  or  (stripos($mtext,"http://") !==false) or  (stripos($mtext,"https://")!==false)){
  if((stripos($capt,"☣")!==false) or (stripos($mtext,"☣")!==false)){
bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mesid,
      ]);
bot('restrictChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$id,
        'until_date'=>strtotime("+ 10 minutes "),
      ]);
   bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[Foydalanuvchi](tg://user?id=$user_id) *10 minutga MUTE Qilindi😡\nSababi:* Reklama tashadi",
      'parse_mode'=>"markdown", 
      ]);
  }
if((stripos($mtext,"dalbayop")!==false)  or (stripos($mtext,"oneni")!==false)  or (stripos($mtext,"skaman")!==false) or (stripos($mtext,"sikaman")!==false) or (stripos($mtext,"jalab")!==false) or (stripos($mtext,"chumo")!==false)  or  (stripos($mtext,"dalbayob")!==false) or  (stripos($mtext,"skay")!==false) or (stripos($mtext,"seks")!==false) or (stripos($mtext,"dalban")!==false) or (stripos($mtext,"yiban")!==false) or (stripos($mtext,"pashol")!==false) or (stripos($mtext,"скаман")!==false) or (stripos($mtext,"qanjiq")!==false) or (stripos($mtext,"чумо")!==false)  or  (stripos($mtext,"далбаёб")!==false) or  (stripos($mtext,"скай")!==false) or (stripos($mtext,"секс")!==false) or (stripos($mtext,"далбан")!==false) or (stripos($mtext,"йибан")!==false) or (stripos($mtext,"pawol")!==false) or (stripos($mtext,"жалаб")!==false) or (stripos($mtext,"кутинга")!==false) or (stripos($mtext,"kotinga")!==false) or  (stripos($mtext,"куток")!==false)  or  (stripos($mtext,"qotoq")!==false) or  (stripos($mtext,"naxuy")!==false) or (stripos($mtext,"хуй")!==false) or (stripos($mtext,"сучка")!==false) or (stripos($mtext,"suchka")!==false) or (stripos($mtext,"омини")!==false) or (stripos($mtext,"омнга")!==false) or  (stripos($mtext,"сикаман")!==false)  or  (stripos($mtext,"гандон")!==false) or  (stripos($mtext,"сука")!==false) or (stripos($mtext,"жопа")!==false) or (stripos($mtext,"omingni")!==false) or (stripos($mtext,"ominga")!==false) or (stripos($mtext,"gandon")!==false) and $fadmin !== $admin){
bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mesid,
      ]);
bot('restrictChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$id,
        'until_date'=>strtotime("+ 10800 minutes "),
      ]);
   bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[Foydalanuvchi](tg://user?id=$user_id) *3 kunga MUTE Qilindi😡\nSababi:* Haqorat qildi",
      'parse_mode'=>"markdown", 
      ]);
  }
//vaqt mintaqasi
if($data == "vaqt"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "📆Bugun: $sana-yil
⌚Soat: $soat
💮Oy nomi: $oynomi
🔯Yilning: $sana2-kuni
🔱Vaqt mintaqasi: $gmt
🌠Bu oy $buoy kundan iborat",
       'show_alert'=>true
        ]);
    }
//id top
if(mb_stripos($mtext,"/id") !== false){ 
$ex=explode("_",$mtext);
$text = $ex[1];
   bot('sendmessage',[
    'chat_id'=>$chat_id,
    'user_id'=>$user_id,
    'reply_to_message_id'=>$mid,
'text' => "<b>Siz bergan 🆔️ raqam bilan quyidagi odam aniqlandi</b>👇\n<a href='tg://user?id=$text'>👤👤👤👤👤👤👤</a>",
    'parse_mode' => 'html',
    ]);
   }

if($text == "♻️" and $chat_ID == "831477295"){
    unlink("$chat_id.text");
}

//yangilik va kurs
$url = 'https://daryo.uz/feed/';
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
    $line = $item->title;
 $link = $item->link;
    break;
}  

if($text1 == '/yangilik'){
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'user_id'=>$user_id,
'reply_to_message_id'=>$mid,
     'text' => "
🆕️[$line]($link)",
     'parse_mode' => 'markdown',
    ]);
   }
if($text1 == 'kurs' or $text1 == 'Kurs' or $text1 == '/kurs'){
     $response = "";
       $xml = file_get_contents("http://cbu.uz/uzc/arkhiv-kursov-valyut/xml/");
       $m = new SimpleXMLElement($xml);
       foreach ($m as $val) {
           if($val->Ccy == 'USD'){
               $response .= "1 USD💵 - " . $val->Rate . " So'm\n";
           }
           if($val->Ccy == 'EUR'){
               $response .= "1 EURO💶 - " . $val->Rate . " So'm\n";
           }
           if($val->Ccy == 'JPY'){
               $response .= "1 JPY💴 - " . $val->Rate . " So'm\n";
           }  if($val->Ccy == 'RUB'){
               $response .= "1 RUB💴 - " . $val->Rate . " So'm\n";
           }
       }
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'user_id'=>$user_id,
'reply_to_message_id'=>$mid,
     'text' =>"* $response *",
     'parse_mode' => 'markdown',
    ]);
   }
   
   //info
   if($text1 =="/info" && $from_id == "$fadmin"){
if ($cty == 'group' | $cty == 'supergroup'){
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"🆔Guruh ID raqami: *$chat_id*\n📄Guruh nomi: *$namegroup*\n💌Xabarlar soni: *$tedadmsg*\n💠Guruh turi: *$tc*",
  'parse_mode'=>'MarkDown',
  ]);
  }
 }

//============={Odam Qoshgan}=========//
if($get == "administrator" or $get == "creator" or $get == "member"){
if($reply == $text and (mb_stripos($text,"/soni")!==false)){
 $rodam = file_get_contents("soni/$cid/$repid.txt");
  bot('sendmessage',[    
    'chat_id'=>$cid, 
    'user_id'=>$repid, 
    'reply_to_message_id'=>$mid,  
    'parse_mode'=>'html',   
    'text'=>"<b>$repname</b> bugungi kungacha guruhga <b>$rodam</b> ta odam qo'shgan!",
  ]);   
}elseif($text == "/soni" or $text == "/soni@mohunurbot"){
 $odam = file_get_contents("soni/$cid/$uid.txt");
  bot('sendmessage',[    
    'chat_id'=>$cid, 
    'user_id'=>$uid,  
    'reply_to_message_id'=>$mid,  
    'parse_mode'=>'html',   
    'text'=>"<b>$name</b> siz bugungi kungacha guruhga <b>$odam</b> ta odam qo'shdingiz!",
  ]);   
}
}
//============{Xakkerlar_Group}==========//
/*
if(mb_stripos($mtext,"/nomoz") !== false){ 
$nv = file_get_contents("http://islom.uz/");
$ex = explode("\n",$nv);
$a = trim($ex[391]);
$tong = str_replace("<div id='tc1' class='p_clock '><b>","",$a);
$tong = str_replace("<div id='tc1' class='p_clock c_active'><b>","",$tong);
$b = trim($ex[413]);
$asr = str_replace("<div id='tc4' class='p_clock '><b>","",$b);
$asr = str_replace("<div id='tc4' class='p_clock c_active'><b>","",$asr);
$d = trim($ex[420]);
$shom = str_replace("<div id='tc5' class='p_clock '><b>","",$d);
$shom = str_replace("<div id='tc5' class='p_clock c_active'><b>","",$shom);
$e = trim($ex[427]);
$xufton = str_replace("<div id='tc6' class='p_clock c_active'><b>","",$e);
$xufton = str_replace("<div id='tc6' class='p_clock '><b>","",$xufton);
$f = trim($ex[399]);
$quyosh = str_replace("<div id='tc2' class='p_clock '><b>","",$f);
$quyosh = str_replace("<div id='tc2' class='p_clock c_active'><b>","",$quyosh);
$g = trim($ex[406]);
$peshin = str_replace("<div id='tc3' class='p_clock '><b>","",$g);
$peshin = str_replace("<div id='tc3' class='p_clock c_active'><b>","",$peshin);
$tong = str_replace("</b></div>","",$tong);
$quyosh = str_replace("</b></div>","",$quyosh);
$asr = str_replace("</b></div>","",$asr);
$peshin = str_replace("</b></div>","",$peshin);
$shom = str_replace("</b></div>","",$shom);
$xufton = str_replace("</b></div>","",$xufton);
 $MadelineProto->messages->sendMessage([
     'peer' => $chatID,
'message' => "🤖
 🕌 <b>Namoz vaqtlari:

Tong:</b> <code>$tong</code>
<b>Quyosh:</b> <code>$quyosh</code>
<b>Peshin:</b> <code>$peshin</code>
<b>Asr:</b> <code>$asr</code>
<b>Shom:</b> <code>$shom</code>
<b>Xufton:</b> <code>$xufton</code>",
'reply_to_msg_id'=>$update['update']['message']['id'],
     'parse_mode' => 'html'
    ]);
   }
*/
   if(mb_stripos($text,"/nomoz") !== false){ 
$nv = file_get_contents("http://islom.uz/");
$exx = explode("\n",$nv);
$a = trim($exx[393]);
$tong = str_replace("<div id='tc1' class='p_clock '><b>","",$a);
$tong = str_replace("<div id='tc1' class='p_clock c_active'><b>","",$tong);
$b = trim($exx[415]);
$asr = str_replace("<div id='tc4' class='p_clock '><b>","",$b);
$asr = str_replace("<div id='tc4' class='p_clock c_active'><b>","",$asr);
$d = trim($exx[422]);
$shom = str_replace("<div id='tc5' class='p_clock '><b>","",$d);
$shom = str_replace("<div id='tc5' class='p_clock c_active'><b>","",$shom);
$e = trim($exx[429]);
$xufton = str_replace("<div id='tc6' class='p_clock c_active'><b>","",$e);
$xufton = str_replace("<div id='tc6' class='p_clock '><b>","",$xufton);
$f = trim($exx[401]);
$quyosh = str_replace("<div id='tc2' class='p_clock '><b>","",$f);
$quyosh = str_replace("<div id='tc2' class='p_clock c_active'><b>","",$quyosh);
$g = trim($exx[408]);
$peshin = str_replace("<div id='tc3' class='p_clock '><b>","",$g);
$peshin = str_replace("<div id='tc3' class='p_clock c_active'><b>","",$peshin);
$tong = str_replace("</b></div>","",$tong);
$quyosh = str_replace("</b></div>","",$quyosh);
$asr = str_replace("</b></div>","",$asr);
$peshin = str_replace("</b></div>","",$peshin);
$shom = str_replace("</b></div>","",$shom);
$xufton = str_replace("</b></div>","",$xufton);
bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"🤖
 🕌 <b>Namoz vaqtlari:

Tong:</b> <code>$tong</code>
<b>Quyosh:</b> <code>$quyosh</code>
<b>Peshin:</b> <code>$peshin</code>
<b>Asr:</b> <code>$asr</code>
<b>Shom:</b> <code>$shom</code>
<b>Xufton:</b> <code>$xufton</code>",
  'parse_mode'=>'html',
  ]);
  }
 }
//Ushbu kod XABARCHILAR kanali orqali @NetBloGGeR tomonidan tarqatildi
