<?php
/**
 * 
 * @package     Joomla frontend
 * @subpackage  mod_fc_articles
 * @author Fabien CANU <fabien.canu@gmail.com> 
 */
// no direct access
defined('_JEXEC') or die;

    

/** Génère des liens cryptés en javascript */
function fc_encode($string) {
    $base16 = '0A12B34C56D78E9F';

    $retour = '';
    for ($i = 0; $i < strlen($string); $i++) {
        $cc = ord($string[$i]);
        $ch = $cc>>4;
        $cl = $cc - ($ch * 16);
        $retour .= $base16[$ch] . $base16[$cl];
    }
    return $retour;
}

?>

<section id="latest-news">
    <header>
        <h1><span><?php echo $module->title; ?></span></h1>
        <?php if (count($list) > 2) : ?>
        <ul id="news-pagination">
            <li id="p" class="prev"><a href="#">prev</a></li>
            <li id="n" class="next"><a href="#">next</a></li>
        </ul>
        <?php endif; ?>
    </header>

    <div id="<?php echo $params->get('id-slider') ?>">
        <ul>
            <?php foreach ($list as $key => $item) : ?>

                <?php $title = JHtml::_('string.truncate', $item->title, 100); ?>

                <?php if ($key % 2 == 0) : ?>

                    <li class="article">

                <?php endif; ?>

                    <header class="title-aside animate-in">
                        <h2>
                            <abbr title="<?php echo JHtml::_('date', $item->publish_up, JText::_('DATE_FORMAT_LC2')); ?>"><?php echo JHtml::_('date', $item->publish_up, "d"); ?><br /> <span><?php echo JHtml::_('date', $item->publish_up, "F"); ?></span></abbr>

                            <a href="<?php echo $item->link; ?>">
                                <?php echo $title; ?>
                            </a>
                            
                        </h2>
                    </header>
                    <div class="content-aside animate-in">
                        <?php
                        if (!$params->get('intro_only')) :
                            echo $item->afterDisplayTitle;
                        endif;
                        ?>

                        <?php echo $item->beforeDisplayContent; ?>

                        <p>
                            <?php echo JHtml::_('string.truncate', strip_tags($item->introtext, '<span><br>'), (strstr($item->introtext, '<a')) ? $params->get('truncate')+70: $params->get('truncate')); ?>

                            <?php
                            if ($params->get('readmore')) :
                                echo '<span class="fc '.fc_encode($item->link).' savoir-plus-white"> '.JText::_('COM_CONTENT_READ_MORE').'</span>';
                            endif;
                            ?>
                        </p>
                    </div>

                <?php if ($key % 2 == 1) : ?>

                    </li>

                <?php endif; ?>

            <?php endforeach; ?>
        </ul>
    </div>
</section>