<?php
/**
 * 
 * @package     Joomla frontend
 * @subpackage  mod_fc_articles
 * @author Fabien CANU <fabien.canu@gmail.com> 
 */
// no direct access
defined('_JEXEC') or die;

//var_dump($list);

?>
<div class="grid__item five-twelfths mozaic <?php echo $params->get('moduleclass_sfx'); ?>">
	
	<?php if($params->get('item_title') == 1) : ?>
		<h2 class="mozaic__title"><?php echo $module->title; ?>*</h2>
	<?php endif; ?>

  <ul class="mozaic__layout mozaic-pagination">

    <?php foreach ($list as $item) : ?>

	    <?php 
	  		$images = json_decode($item->images); 
	    ?>

	    <li class="mozaic__item">
	        <a href="<?php echo $item->link; ?>">
	        	<img class="mozaic__item-img" src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" />
	        	<div class="mozaic__item-desc"><span><?php echo $item->title; ?></span></div>
	        </a>
	    </li>

    <?php endforeach; ?>

  </ul>
</div>