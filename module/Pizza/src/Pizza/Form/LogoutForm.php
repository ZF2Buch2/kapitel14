<?php
/**
 * ZF2 Buch Kapitel 14
 * 
 * Das Buch "Zend Framework 2 - Das Praxisbuch"
 * von Ralf Eggert ist im Galileo-Computing Verlag erschienen. 
 * ISBN 978-3-8362-2610-3
 * 
 * @package    Pizza
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.galileocomputing.de/3460
 */

/**
 * namespace definition and usage
 */
namespace Pizza\Form;

use Zend\Form\Element\Submit;
use Zend\Form\Form;

/**
 * Logout form
 * 
 * Handles the logout form
 * 
 * @package    Pizza
 */
class LogoutForm extends Form
{
    public function __construct()
    {
        parent::__construct('logout');
        
        $submitElement = new Submit('logout');
        $submitElement->setValue('Abmelden');
        $submitElement->setAttribute('class', 'btn');
        
        $this->add($submitElement);
    }
}
