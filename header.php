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
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/main.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/normalize.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="<?php $this->options->themeUrl('/js/jquery.min.js'); ?>"></script>
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="header">
            <img src="<?php $this->options->logoUrl() ?>" width="80" height="80" alt="<?php $this->options->title() ?>"/>
                <div class="site-description">
                    <h2><span><?php $this->options->yiyan(); ?></span></h2>
                    <nav class="nav social">
                        <ul class="flat">
                            <a href="https://qingshu.org" title="E-mail" target="_blank"><i class="ri-gitlab-line"></i></a>
                            <a href="/feed" title="rss" target="_blank"><i class="ri-rss-line"></i></a>
                        </ul>
                    </nav>
                </div>
