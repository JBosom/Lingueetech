<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Search for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Search\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class SearchController extends AbstractActionController
{
    public function indexAction()
    {
        $sentences = array();
        $sentences[] = "Je m'apelle Jambon";
        $sentences[] = "Le jambon c'est bon";
        $sentences[] = "hjkhfjkehf";
        $sentences[] = "jgldgdmg";
        $sentences[] = "ksngklsgseg";
        $sentences[] = "jhfjshfe";
        $sentences[] = "lksglkn";
        $sentences[] = "ksefkgsg";
        $sentences[] = "kjzeklfzef";
        $sentences[] = "kjdkfjlskf";
        return array('sentences' => $sentences);
    }

    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /search/search/foo
        return array();
    }
}
