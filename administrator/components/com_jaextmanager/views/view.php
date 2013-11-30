<?php
/**
 * @version     $Id: view.php 1620 2012-09-21 12:11:58Z lefteris.kavadas $
 * @package     K2
 * @author      JoomlaWorks http://www.joomlaworks.net
 * @copyright   Copyright (c) 2006 - 2012 JoomlaWorks Ltd. All rights reserved.
 * @license     GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die ;

jimport('joomla.application.component.view');

if (version_compare(JVERSION, '3.0', 'ge'))
{
    class JAEMView extends JViewLegacy
    {
    }

}
else
{
    class JAEMView extends JView
    {
    }

}
