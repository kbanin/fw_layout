<?

namespace app\models;

use app\controllers\MainController;
use fw\core\base\Model;


class Main extends Model
{
    public $rssUrls = array(
        'https://coinspot.io/feed/',
        'https://ru.investing.com/rss/news_301.rss',
        'https://cryptocurrency.tech/feed/',
        'https://bits.media/rss2/',
        'https://cryptofeed.ru/feed/',
        'https://ru.beincrypto.com/feed/',
        'https://2bitcoins.ru/feed/',
        'https://forklog.com/feed',
        'https://www.coindesk.com/arc/outboundfeeds/rss/?_gl=1*1gmicje*_up*MQ..*_
        ga*MjEzOTc3NjMwMC4xNzE2Mjk1MjYx*_ga_VM3STRYVN8*MTcxNjI5NTI2MS4xLjAuMTcxNjI5NTI2MS4wLjAuMTIyODIwMDQxMQ..',
        
    );

    

    public function getCryptoArray()
    {

        $initialData = "Bitcoin, Ethereum, Ripple, Litecoin, Bitcoin Cash,Cardano,Solana, Polkadot, Dogecoin, Chainlink,Binance Coin, Tether, Avalanche,Terra, Uniswap,Algorand, Wrapped Bitcoin, Polygon, Stellar,Cosmos,Internet Computer, VeChain, Ethereum Classic,Filecoin, Theta Network,TRON, FTX Token, Dai, Tezos,EOS, Monero, Aave, The Graph, Klaytn,Neo, Kusama, IOTA,PancakeSwap, Maker, Crypto.com Coin, Bitcoin SV,BitTorrent,Shiba Inu, Alchemix, Axie Infinity, TerraUSD, Hedera, THORChain,Decentraland";


        // Разделение строки на слова
        $words = explode(',', $initialData);


        // Создание нового массива с обернутыми в одинарные кавычки словами
        $topCripto = array_map(function ($word) {
            return "'$word'";
        }, $words);
         return  $topCripto;

    }

// Добавление данных
    public function addDataToDatabase($titles, $links, $dates, $descriptions)
    {       
           foreach ($titles as $index=>$title){
            $news = \R::dispense('cryptonews');
            $news->title = $title;
            $news->description = $descriptions[$index];
            $news->dates = date('Y-m-d', strtotime($dates[$index]));
            $news->links = $links[$index];
            \R::store($news);

           }
           return $news;
}

//Обновление данных
public function updateDateToDatabase ($titles, $links, $dates, $descriptions){
    $news = \R::findAll('cryptonews');
    foreach ($news as $index => $item) {
        
        $item->title = $titles[$index-1];
        $item->description = $descriptions[$index-1];
        $item->dates = date('Y-m-d', strtotime($dates[$index-1]));
        $item->links = $links[$index-1];
        \R::store($item);
    }
    return $news;

}


}