<?


namespace fw\libs;



class Newpagination {




    public static function getPagesCount(int $itemsPerPage): int
{
   
    $result = \R::query('SELECT COUNT(*) AS cnt FROM ' . static::getTableName() . ';');
    return ceil($result[0]->cnt / $itemsPerPage);
}


















}



























?>