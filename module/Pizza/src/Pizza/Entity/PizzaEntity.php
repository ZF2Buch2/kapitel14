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
namespace Pizza\Entity;

/**
 * Pizza entity
 * 
 * @package    Pizza
 */
class PizzaEntity
{
    protected $id;
    protected $name;
    protected $price;

    /**
     * Set id
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set name
     * 
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * Get name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set price
     * 
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
    /**
     * Get price
     * 
     * @return float $price
     */
    public function getPrice()
    {
        return round($this->price, 2);
    }
}
