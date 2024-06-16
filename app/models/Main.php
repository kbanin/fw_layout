<?

namespace app\models;

use app\controllers\MainController;
use fw\core\base\Model;
use fw\libs\Pagination;
use fw\core\base\View;


class Main extends Model
{

    



    public function getArray()
    {

        $listCoins = ("Bitcoin, Ethereum, Ripple, Litecoin, Bitcoin Cash, Cardano, Solana,
    Polkadot, Dogecoin, Chainlink, Binance Coin, Tether, Avalanche, Terra, Uniswap,
    Algorand, Wrapped Bitcoin, Polygon, Stellar, Cosmos, Internet Computer, VeChain,
    Ethereum Classic, Filecoin, Theta Network, TRON, FTX Token, Dai, Tezos, EOS, Monero,
    Aave, The Graph, Klaytn, Neo, Kusama, IOTA, PancakeSwap, Maker, Crypto.com Coin,
    Bitcoin SV, BitTorrent, Shiba Inu, Alchemix, Axie Infinity, TerraUSD, Hedera,THORChain,Decentraland");


        // разделяем строку на массив с помощью функции explode()
        $cryptoArr = explode(',', $listCoins);

        // удаляем пробелы и переходы строк из элементов массива с помощью функции trim()
        $cryptoArr = array_map('trim', $cryptoArr);

        return $cryptoArr;
       
     
    }


    public function addNews($coin,$item,$linkCoin,$presentDayTime){

       
            $cryptoNews = \R::dispense('cryptonews');
            $cryptoNews->coin = $coin;
            $cryptoNews->rss_link = $linkCoin;
            $cryptoNews->title = $item->title;
            $cryptoNews->links = $item->link;
            $cryptoNews->pub_date = date_create_from_format('D, d M Y H:i:s e', $item->pubDate)->format('Y-m-d H:i:s');
            $cryptoNews->description = $item->description;
            $cryptoNews->guid = $item->guid;
            $cryptoNews->date_added = $presentDayTime->format('Y-m-d H:i:s');

            \R::store($cryptoNews);



    
}
}