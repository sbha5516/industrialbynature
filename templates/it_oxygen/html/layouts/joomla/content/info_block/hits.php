<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

?>
<dd class="hits">
	<meta itemprop="interactionCount" content="UserPageVisits:<?php echo $displayData['item']->hits; ?>" />
	<span data-uk-tooltip title="<?php echo JText::sprintf('COM_CONTENT_ARTICLE_HITS', ''); ?>"><i class="fa fa-eye"></i><?php echo JText::sprintf($displayData['item']->hits); ?></span>
</dd>