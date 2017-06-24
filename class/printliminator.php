<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - MyStartup	 	                    				 //
//                       <http://www.TyphonSolutions.ca/>                    //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// Author: Benoit Duchaine                                          		 //
// URL: http://www.TyphonSolutions.ca										 //
// Project: TS-MyStartup	                                                 //
// ------------------------------------------------------------------------- //

if (!defined('XOOPS_ROOT_PATH')) {
    exit();
}

/**
 * {description}
 *
 * @package		kernel
 *
 * @author		Benoit Duchaine <benoit@typhonsolutions.ca>
 * @copyright	copyright (c) 2000-2003 The XOOPS Project (http://www.xoops.org)
 *
 */
class PrintliminatorPrintliminator extends XoopsObject
{

    /**
 * constructor
 **/
    function __construct()
    {
        $this->XoopsObject();
        $this->initVar('group_id', XOBJ_DTYPE_INT, null, false);
        $this->initVar('module_id', XOBJ_DTYPE_INT, null, false);
        $this->initVar('start_order', XOBJ_DTYPE_INT, null, false);
    }
    
	public function PrintliminatorPrintliminator()
    {
		$this->__construct();
	}

}

/**
 * XOOPS private message handler class.
 * 
 * This class is responsible for providing data access mechanisms to the data source
 * of XOOPS private message class objects.
 *
 * @package		kernel
 *
 * @author		Benoit Duchaine <benoit@typhonsolutions.ca>
 * @copyright	copyright (c) 2000-2003 The XOOPS Project (http://www.xoops.org)
 *
 */
class PrintliminatorPrintliminatorHandler extends XoopsPersistableObjectHandler
{
    function __construct($db) {
        $this->XoopsPersistableObjectHandler($db, 'printliminator_startup_page', 'PrintliminatorPrintliminator', 'group_id', false);
    }

    /**
     * delete all objects meeting the conditions
     * 
     * @param object $criteria {@link CriteriaElement} with conditions to meet
     * @return bool
     */

    function deleteAll(CriteriaElement $criteria = NULL, $force = true, $asObject = false)
    {
        if (isset($criteria) && is_subclass_of($criteria, 'criteriaelement')) {
            $sql = 'DELETE FROM '.$this->table;
            $sql .= ' '.$criteria->renderWhere();
            if (!$this->db->queryF($sql)) {
                return false;
            }
            $rows = $this->db->getAffectedRows();
            return $rows > 0 ? $rows : true;
        }
        return false;
    }
}

?>