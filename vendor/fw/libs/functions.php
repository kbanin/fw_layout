<?
function debug ($arr,$die = false){

echo '<pre>'.print_r($arr,true) .'</pre>';
if($die) die;

}


function redirect ($http =false){

if($http){

    $redirect = $http;
}else{

    $redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']: '/';
}

header("Location: $redirect");
exit;

}

function h ($str){

  return htmlspecialchars($str,ENT_QUOTES);
}

function cronScript ($crypto){
  
  foreach ($crypto->rssUrls as $rssUrl) {

  $rss = simplexml_load_file($rssUrl);


  foreach ($rss->channel->item as $item) {

     (string)$title = $item->title;
     (string)$link = $item->link;
     (string)$date = $item->pubDate;
     (string)$description = $item->description;

     $titles[] = $title;
     $links[] = $link;
     $dates[] = $date;
     $descriptions[] = $description;
  }
}

//Сохранение данных новостей в БД таблицу cryptonews в случае добавление новой ссылки в массив rssUrls

$expectedCount = count($crypto->rssUrls);
$file = ROOT . '/count.txt';
$currentCount = file_exists($file) ? (int)file_get_contents($file) : 0; // начальное значение

if ($expectedCount > $currentCount) {
  \R::wipe('cryptonews');

  $crypto->addDataToDatabase($titles, $links, $dates, $descriptions);
  $currentCount = $expectedCount; // обновляем текущее значение
  // Сохраняем текущее значение в файл
  file_put_contents($file, $currentCount);
} else { //Обновление данных (скрипт запускается каждый 6 часов с использованием cron)

  $crypto->updateDateToDatabase($titles, $links, $dates, $descriptions);
}


}
?>