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
<div class="newsflash<?php echo $moduleclass_sfx; ?>">
    
<?php foreach ($list as $item) :?>
	<?php
	 require JModuleHelper::getLayoutPath('mod_fc_articles', '_item');?>
<?php endforeach; ?>
</div>
