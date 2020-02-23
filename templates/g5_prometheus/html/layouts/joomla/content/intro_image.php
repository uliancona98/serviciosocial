<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

// get images
$getImageSource = include JPATH_THEMES . '/g5_prometheus' . '/includes/getImageSource.php';
?>

	<?php $imgfloat = empty($images->float_intro) ? $params->get('float_intro') : $images->float_intro; ?>
	

<div class="pull-<?php echo htmlspecialchars($imgfloat, ENT_COMPAT, 'UTF-8'); ?> item-image">
	<?php if ($params->get('link_titles') && $params->get('access-view')) : ?>
		<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($displayData->slug, $displayData->catid, $displayData->language)); ?>"><img
		<?php if ($images->image_intro_caption) : ?>
			<?php echo 'class="caption"' . ' title="' . htmlspecialchars($images->image_intro_caption) . '"'; ?>
		<?php endif; ?>
			class="sz-intro-image" 
			src="<?php echo htmlspecialchars($imgsrc, ENT_COMPAT, 'UTF-8'); ?>" 
			alt="<?php echo htmlspecialchars($images->image_intro_alt, ENT_COMPAT, 'UTF-8'); ?>" 
			itemprop="thumbnailUrl"/>
		</a>


	<?php else : ?>
		<img
		<?php if ($images->image_intro_caption) : ?>
			<?php echo 'class="caption"' . ' title="' . htmlspecialchars($images->image_intro_caption, ENT_COMPAT, 'UTF-8') . '"'; ?>
		<?php endif; ?>
		class="sz-intro-image" 
		src="<?php echo htmlspecialchars($imgsrc, ENT_COMPAT, 'UTF-8'); ?>" 
		alt="<?php echo htmlspecialchars($images->image_intro_alt, ENT_COMPAT, 'UTF-8'); ?>" 
		itemprop="thumbnailUrl"/>
	<?php endif; ?> 
</div>
