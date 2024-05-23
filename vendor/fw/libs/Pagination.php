<?

namespace fw\libs;



class Pagination
{


    public $currentPage; //текущая сттраница
    public $perpage; //по сколько записей выводить на страницу
    public $total; //общее количество записей
    public $countPages; //общее количество страниц на которые нужно будет выводить новости!
    public $uri; // базовый адрес для страницы



    public function __construct($page, $perpage, $total)
    {
        $this->perpage = $perpage;
        $this->total = $total;
        $this->countPages = $this->getCountPages();
        $this->currentPage = $this->getCurrentPages($page);
        $this->uri = $this->getParams();
    }

    public function __toString()
    {
        return $this->getHtml();
    }

    public function getHtml()
    {


        $pages = '';
        for ($i = 1; $i <= $this->countPages; $i++) {
            $isActive = $i == $this->currentPage ? 'style="text-decoration: underline;"' : '';
            $pages .= "<li><a href='{$this->uri}page={$i}' {$isActive}>{$i}</a></li>&nbsp;&nbsp;";
        }
        return '<ul class="pagination">' . $pages . '</ul>';
    }

    public function getCountPages()
    {

        return ceil($this->total / $this->perpage) ?: 1; 
    }

    public function getCurrentPages($page)
    {
        if (!$page || $page < 1) $page = 1;
        if ($page > $this->countPages) $page = $this->countPages; //Проверяем текущую страницу, так как пользователь в адресной страце может прописать , что page = 0 или
        //отрицательное число или меньше 1. Также проверяем если страница оказываетсчя более общего количества страниц в нашем случае скажем 6 то проверкой 
        //page будет равно 5 т.е. пользоваетль никак не передёт дальше , код ему не позволит. 
        return $page;
    }

    public function getStart()
    {
        return ($this->currentPage - 1) * $this->perpage;
    }


    public function getParams()
    {

        $uri = $_SERVER['REQUEST_URI'];

        $uri = explode('/', $uri);
        $uri = $uri[0] . '?';
          
        if (isset($uri[1]) && $uri[1] != '') {
            $params = explode('&', $uri[1]);
            foreach ($params as $param) {
                if (!preg_match("#page=#", $param)) $uri .= "{$param}&amp;";
            }
        }
        return $uri;
    }
}
