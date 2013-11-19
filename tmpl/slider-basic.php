<?php
/**
 * 
 * @package     Joomla frontend
 * @subpackage  mod_lsa_articles
 * @author Fabien CANU <fabien.canu@gmail.com> 
 */
// no direct access
defined('_JEXEC') or die;

?>

<!--
<img class="prev" src="images/bt-prev.png" alt="Previous Frame" />
<img class="next" src="images/bt-next.png" alt="Next Frame" />
-->


<div id="sequence">
  <ul id="slider1" class="multiple captions <?php echo $params->get('moduleclass_sfx'); ?>">

      <?php foreach ($list as $item) : ?>

      	<?php 
      		$images = json_decode($item->images); 
      	?>

        <?php
          $urls = json_decode($item->urls);
          $link = $urls->urla ? $urls->urla : JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catid));
        ?>
        <li>
            <h2 class="title animate-in"><a href="<?php echo $link; ?>"><?php echo $item->title; ?></a></h2>
            <h3 class="subtitle animate-in"><?php echo strip_tags($item->introtext, '<img>'); ?></h3>
            <img class="model animate-in" src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" />
            <?php if($params->get('moduleclass_sfx') == 'rh') : ?>
              <img class="trans animate-in" src="/templates/unither-ressourceshumaines/images/px.png" />
            <?php endif; ?>
          
        </li>
          
      <?php endforeach; ?>


  </ul>
</div>  
