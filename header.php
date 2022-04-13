<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="https://cdn.tokcloud.com/file/1/ying/css/main.css">
    <link rel="stylesheet" href="https://cdn.tokcloud.com/x/1/ying/css/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="header">
            <img src="<?php $this->options->logoUrl() ?>" width="80" height="80" alt="<?php $this->options->title() ?>"/>
                <div class="site-description">
                    <h2>模板就先这样吧，累了，等我哪天有空在说</h2>
                    <nav class="nav social">
                        <ul class="flat">
                            <a href="https://tokcloud.com/" title="绿色" target="_blank"><i class="ri-seedling-line"></i></a>
                            <a href="mailto:x@tokcloud.com" title="E-mail" target="_blank"><i class="ri-mail-line"></i></a>
                        </ul>
                    </nav>
                </div>
