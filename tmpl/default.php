<?php

/**
 * 
 * @package     Joomla frontend
 * @subpackage  mod_fc_articles
 * @author Fabien CANU <fabien.canu@gmail.com> 
 */

// no direct access
defined('_JEXEC') or die;
?>
<div class="grid__item seven-twelfths home-content">
	<article class="article">
		<header class="article__header">
			<h1><?php echo $featured->title; ?></h1>
		</header>
		<?php echo JHtml::_('string.truncate', strip_tags($featured->introtext, '<span><br>'), 400); ?>
		<p class="article__readmore"><a href="<?php echo $featured->link; ?>"><?php echo $featured->linkText; ?></a></p>
	</article>
</div>