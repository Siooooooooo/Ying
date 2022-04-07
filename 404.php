<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<nav class="nav">
<ul class="flat">
<li class="active"><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
    <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li class="active"><a href="{permalink}">{title}</a></li>'); ?></ul>
                </nav>
            </div>
        <h1 class="post-title" itemprop="name headline">
            <?php $this->title() ?>
        </h1>
        <h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
        <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
        <form method="post">
            <p><input type="text" name="s" class="text" autofocus/></p>
            <p>
                <button type="submit" class="submit"><?php _e('搜索'); ?></button>
            </p>
        </form>
    </div>

</div><!-- end #content-->
<?php $this->need('footer.php'); ?>
