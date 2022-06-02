<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<a id="to_top" href="#" class="to_top" style="display: block;"><i class="ri-arrow-up-line"></i></a> 
            <div class="footer">
                 <nav class="nav">
                 © 2016 - <?php echo date('Y'); ?> Theme is <a href="https://github.com/osgz/Ying/" target="_blank">Ying</a></br>
                <a href="https://beian.miit.gov.cn/" target="_blank"><span><?php $this->options->footerbeian(); ?></span></a></br>
                <svg class="icon" aria-hidden="true">
                     <use xlink:href="#icon-cn"></use>
                    </svg>
                 </nav>
            </div>
        </div>
    </div>
    <script src="<?php $this->options->themeUrl('/js/iconfont.js'); ?>"></script>
</body>
</html>
