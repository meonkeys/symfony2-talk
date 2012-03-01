<?php

namespace Loco\StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}/{article}")
     * @Template()
     */
    public function indexAction($name, $article)
    {
        return array('name' => $name, 'article' => $article);
    }

    /**
     * @Route("/stocks")
     * @Template()
     */
    public function stocksAction()
    {
        $list = $this->get('stock')->listStocks();
        return array('stocks' => $list);
    }
}
