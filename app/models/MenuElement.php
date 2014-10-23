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
	private $isExpand;
	private $isActive;

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

    public function __construct($name="", $url="#", $current_url="", $subMenu=NULL) {
        $this->name = $name;
        $this->url = $url;
        $this->subMenu = $subMenu;
        $this->hasSubMenu = false;
        if ($this->subMenu != NULL) $this->hasSubMenu = true;
	    $this->isActive = false;
	    $this->isExpand = false;
	    if (strlen(strstr($current_url, URL::route($url)))>0) {
		    $this->setIsExpand(true);
	    }
	    if (URL::route($url) == $current_url) {
		    $this->setIsActive(true);
	    }
    }

	/**
	 * @return boolean
	 */
	public function getIsActive()
	{
		return $this->isActive;
	}

	/**
	 * @param boolean $isActive
	 */
	public function setIsActive($isActive)
	{
		$this->isActive = $isActive;
		$this->isExpand = !$isActive;
	}

	/**
	 * @return boolean
	 */
	public function getIsExpand()
	{
		return $this->isExpand;
	}

	/**
	 * @param boolean $isExpand
	 */
	public function setIsExpand($isExpand)
	{
		$this->isExpand = $isExpand;
		$this->isActive = !$isExpand;
	}


} 