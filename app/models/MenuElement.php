<?php
/**
 * Created by PhpStorm.
 * User: lichris
 * Date: 14. 10. 23
 * Time: 오전 1:01
 */

class MenuElement {

    private $name;
    private $url;
    private $subMenu;
    private $hasSubMenu;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSubMenu()
    {
        return $this->subMenu;
    }

    /**
     * @param mixed $subMenu
     */
    public function setSubMenu($subMenu=NULL)
    {
        $this->subMenu = $subMenu;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return boolean
     */
    public function isHasSubMenu()
    {
        return $this->hasSubMenu;
    }

    /**
     * @param boolean $hasSubMenu
     */
    public function setHasSubMenu($hasSubMenu)
    {
        $this->hasSubMenu = $hasSubMenu;
    }

    public function __construct($user="", $url="", $subMenu=NULL) {
        $this->name = $user;
        $this->url = $url;
        $this->subMenu = $subMenu;
        $this->hasSubMenu = false;
        if ($this->subMenu != NULL) $this->hasSubMenu = true;
    }

} 