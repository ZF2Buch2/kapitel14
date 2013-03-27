<?php
/**
 * ZF2 Buch Kapitel 14
 * 
 * Das Buch "Zend Framework 2 - Von den Grundlagen bis zur fertigen Anwendung"
 * von Ralf Eggert ist im Addison-Wesley Verlag erschienen. 
 * ISBN 978-3-8273-2994-3
 * 
 * @package    Pizza
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @copyright  Alle Listings sind urheberrechtlich geschützt!
 * @link       http://www.zendframeworkbuch.de/ und http://www.awl.de/2994
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
