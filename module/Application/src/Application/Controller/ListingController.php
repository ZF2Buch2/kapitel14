<?php
/**
 * ZF2 Buch Kapitel 14
 * 
 * Das Buch "Zend Framework 2 - Das Praxisbuch"
 * von Ralf Eggert ist im Galileo-Computing Verlag erschienen. 
 * ISBN 978-3-8362-2610-3
 * 
 * @package    Application
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.galileocomputing.de/3460
 */

/**
 * namespace definition and usage
 */
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Listing controller
 * 
 * Shows and executes the listings
 * 
 * @package    Application
 */
class ListingController extends AbstractActionController
{
    /**
     * Redirects to homepage
     */
    public function indexAction()
    {
        return $this->redirect()->toRoute('home');
    }
    
    /**
     * Show listing 14.01
     */
    public function listing1401Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 14.02
     */
    public function listing1402Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 14.03
     */
    public function listing1403Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 14.04
     */
    public function listing1404Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 14.05
     */
    public function listing1405Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 14.06
     */
    public function listing1406Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 14.07
     */
    public function listing1407Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 14.08
     */
    public function listing1408Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 14.09
     */
    public function listing1409Action()
    {
        return new ViewModel();
    }
    
    /**
     * Show listing 14.10
     */
    public function listing1410Action()
    {
        return new ViewModel();
    }
}
