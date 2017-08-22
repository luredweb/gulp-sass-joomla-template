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


<div class="category-module-supports">

	<?php foreach ($list as $item) : ?>
	<?php $images  = json_decode($item->images); ?>
	<div class="category-module-outer" role="tablist">
		<div class="category-module-inner">
			<div role="presentation">
				<?php if (isset($images->image_intro) && !empty($images->image_intro)) : ?>
					<img src="<?php echo htmlspecialchars($images->image_intro, ENT_COMPAT, 'UTF-8'); ?>" />
				<?php endif; ?>
				<a href="#<?php echo $item->alias; ?>" aria-controls="<?php echo $item->alias; ?>" role="tab" data-toggle="tab">
					<?php echo $item->title; ?>
				</a>
			</div>
		</div>
	</div>
	<?php endforeach; ?>

	 <!-- Tab panes -->
	<div class="tab-content">
	<?php foreach ($list as $item) : ?>
		<?php $images  = json_decode($item->images); ?>
		<div role="tabpanel" class="tab-pane" id="<?php echo $item->alias; ?>">
			<div>
				<?php if (isset($images->image_intro) && !empty($images->image_intro)) : ?>
				<img src="<?php echo htmlspecialchars($images->image_intro, ENT_COMPAT, 'UTF-8'); ?>" />
				<?php endif; ?>
				<?php echo $item->title; ?>
			</div>
			<?php echo $item->displayIntrotext; ?>
		</div>
	<?php endforeach; ?>
	</div>
</div>