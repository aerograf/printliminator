<?php
/**
 * Printliminator module
 *
 * @copyright	The XOOPS Project https://github.com/XoopsModules25x
 * @license             http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package	Printliminator
 * @since		0.1.0
 * @author 	aerograf <https://www.shmel.org>
 * @version	$Id: blocks_mytype.php 2017-06-06 
**/

class printliminatorMenu
{
    public $_items = array();

    public function addItem($id, $name="", $link="", $icon=null) {
        if (isset($this->_items[$id])) {
            return false;
        }
        $value["link"] = $link;
        $value["name"] = $name;
        if ( !isset($icon) ) {
            $value["icon"] = $id . ".png";
        } else {
            $value["icon"] = $icon;
        }

        $this->_items[$id] = $value;
        return true;
    }

    public function setLink($id, $link) {
        if (isset($this->_items[$id])) {
            $this->_items[$id]["link"] = $link;
            return true;
        } else {
            return false;
        }
    }

    public function setIcon($id, $icon) {
        if (isset($this->_items[$id])){
            $this->_items[$id]["icon"] = $icon;
            return true;
        } else {
            return false;
        }
    }

    public function setName($id, $name) {
        if (isset($this->_items[$id])){
            $this->_items[$id]["name"] = $name;
            return true;
        } else {
            return false;
        }
    }
}
?>