<?php
/**
 * 简约而不简单
 * 
 * @package Ying
 * @author 颖宝
 * @version 1.1
 * @link https://github.com/OSGZ/Ying
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<nav class="nav">
<ul class="flat">
<li class="active"><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
    <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li class="active"><a href="{permalink}">{title}</a></li> '); ?></ul>
                </nav>
            </div>
            <article>              
            <div class="recent-posts section">
  <h2 class="section-header">随笔<i class="ri-quill-pen-line"></i></h2>
  <?php while ($this->next()): ?>
    <div class="posts"><div class="post">
    <div class="time"><?php $this->date('F j, Y'); ?></div>
    <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div><div class="post">
    <?php endwhile; ?>
</ul>
</article>
<ul class="pagination">
    <li class="page-item page-previous"><?php $this->pageLink('下一页','next'); ?><span aria-hidden="true"></span></a></li>     
    <li class="page-item page-next"><?php $this->pageLink('上一页'); ?><span aria-hidden="true"></span></a></li>
</ul>
<?php $this->need('footer.php'); ?>
