<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_search
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<dl class="search-results<?php echo $this->pageclass_sfx; ?>">
<?php foreach ($this->results as $result) : ?>
	<div class="result-item">
		<dt class="result-title">
			<div class="item-number"><?php echo $this->pagination->limitstart + $result->count . '';?></div>
			<?php if ($result->href) :?>
				<h4><a href="<?php echo JRoute::_($result->href); ?>"<?php if ($result->browsernav == 1) :?> target="_blank"<?php endif;?>>
					<?php echo $this->escape($result->title);?>
				</a></h4>
			<?php else:?>
				<?php echo $this->escape($result->title);?>
			<?php endif; ?>
		</dt>
		<dd class="result-text">
			<?php echo $result->text; ?>
		</dd>
		<?php if ($this->params->get('show_date') || ($result->section)) : ?>
			<div class="search-item-info">
				<?php if ($this->params->get('show_date')) : ?>
					<dd class="result-created<?php echo $this->pageclass_sfx; ?>">
						<i class="fa fa-clock-o"></i><?php echo JText::sprintf($result->created); ?>
					</dd>
				<?php endif; ?>
				<?php if ($result->section) : ?>
					<dd class="result-category">
						<span class="small<?php echo $this->pageclass_sfx; ?>">
							<i class="fa fa-folder-open-o"></i><?php echo $this->escape($result->section); ?>
						</span>
					</dd>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
<?php endforeach; ?>
</dl>

<div class="pagination">
	<?php echo $this->pagination->getPagesLinks(); ?>
</div>
