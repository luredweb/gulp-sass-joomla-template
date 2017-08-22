<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<div class="category-module<?php echo $moduleclass_sfx; ?>">

	<?php foreach ($list as $item) : ?>
		<?php $images  = json_decode($item->images); ?>
		<div class="category-module-outer">
			<div class="category-module-inner">
				<?php if (isset($images->image_intro) && !empty($images->image_intro)) : ?>
				<img src="<?php echo htmlspecialchars($images->image_intro, ENT_COMPAT, 'UTF-8'); ?>" />
				<?php endif; ?>
				<div class="category-module-content">
					<?php if ($item->displayDate) : ?>
						<span class="mod-articles-category-date">
							<?php echo $item->displayDate; ?>
						</span>
					<?php endif; ?>

					<?php if ($params->get('link_titles') == 1) : ?>
						<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
					<?php else : ?>
						<?php echo $item->title; ?>
					<?php endif; ?>

					<?php if ($params->get('show_introtext')) : ?>
						<p class="mod-articles-category-introtext">
							<?php echo $item->displayIntrotext; ?>
						</p>
					<?php endif; ?>

					<?php if ($params->get('show_readmore')) : ?>
						<p class="mod-articles-category-readmore">
							<a class="<?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
								<?php echo JText::sprintf('MOD_ARTICLES_CATEGORY_READ_MORE_TITLE'); ?>
							</a>
						</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
