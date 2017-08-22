<?php
/**
 * @package     Redweb.Site
 * @subpackage  Templates.baldur
 *
 * @copyright   Copyright (C) 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('jquery.framework');

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<jdoc:include type="head" />

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/dist/js/dist.min.js"> </script>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/dist/css/dist.min.css" type="text/css" />
	</head>

	<body>
		<div class="container">
			<header>
				<div class="row">
					<div id="logo" class="col-md-4">
						<jdoc:include type="modules" name="logo" style="xhtml" />
					</div>

					<div id="top-menu" class="col-md-8">
						<jdoc:include type="modules" name="top-menu" style="xhtml" />
						<jdoc:include type="modules" name="login" style="xhtml" />

						<jdoc:include type="modules" name="main-menu" style="xhtml" />
					</div>
				</div>

			</header>
		</div>

		<?php if ($this->countModules('hero')) : ?>
		<section id="hero">
			<jdoc:include type="modules" name="hero" style="none" />
		</section>
		<?php endif; ?>

		<div id="main">
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>

		<?php if ($this->countModules('grid-top')) : ?>
		<div id="grid-top">
			<div class="container">
				<div class="row">
					<jdoc:include type="modules" name="grid-top" style="bt3" />
				</div>
			</div>
		</div>
		<?php endif; ?>

		<?php if ($this->countModules('support')) : ?>
		<section id="support">
			<jdoc:include type="modules" name="support" style="none" />
		</section>
		<?php endif; ?>

		<?php if ($this->countModules('grid-bottom')) : ?>
		<div id="grid-bottom">
			<div class="container">
				<div class="row">
					<jdoc:include type="modules" name="grid-bottom" style="bt3" />
				</div>
			</div>
		</div>
		<?php endif; ?>

		<footer>
			<?php if ($this->countModules('top-footer')) : ?>
			<div id="top-footer">
				<div class="container">
					<div class="row">
						<jdoc:include type="modules" name="top-footer" style="bt3" />
					</div>
				</div>
			</div>
			<?php endif; ?>

			<?php if ($this->countModules('footer')) : ?>
			<div id="footer">
				<div class="container">
					<div class="row">
						<jdoc:include type="modules" name="footer" style="xhtml" />
					</div>
				</div>
			</div>
			<?php endif; ?>
		</footer>
	</body>
</html>
