<?php
/**
 * @package    portfolio
 *
 * @author     Daniel <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

/**
 * Portfolio helper.
 *
 * @package     A package name
 * @since       1.0
 */
class PortfolioHelper
{
	/**
	 * Render submenu.
	 *
	 * @param   string  $vName  The name of the current view.
	 *
	 * @return  void.
	 *
	 * @since   1.0
	 */
	public function addSubmenu($vName)
	{
		JHtmlSidebar::addEntry(JText::_('COM_PORTFOLIO'), 'index.php?option=com_portfolio&view=portfolio', $vName == 'portfolio');
	}
}
