<?

namespace app\models;

use app\controllers\MainController;
use fw\core\base\Model;


class Main extends Model
{




    public function getCryptoArray()
    {

        $initialData = "Bitcoin, Ethereum, Ripple, Litecoin, Bitcoin Cash,Cardano,Solana, Polkadot, Dogecoin, Chainlink,Binance Coin, Tether, Avalanche,Terra, Uniswap,Algorand, Wrapped Bitcoin, Polygon, Stellar,Cosmos,Internet Computer, VeChain, Ethereum Classic,Filecoin, Theta Network,TRON, FTX Token, Dai, Tezos,EOS, Monero, Aave, The Graph, Klaytn,Neo, Kusama, IOTA,PancakeSwap, Maker, Crypto.com Coin, Bitcoin SV,BitTorrent,Shiba Inu, Alchemix, Axie Infinity, TerraUSD, Hedera, THORChain,Decentraland";


        // Разделение строки на слова
        $words = explode(',', $initialData);


        // Создание нового массива с обернутыми в одинарные кавычки словами
        $topCrupto = array_map(function ($word) {
            return "'$word'";
        }, $words);
         return  $topCrupto;

    }
}
