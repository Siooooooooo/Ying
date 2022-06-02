<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, 'https://jihulab.com/uploads/-/system/user/avatar/8308/avatar.png?width=400', _t('头像'), _t('在这里填入一个头像 URL 地址'));
    $form->addInput($logoUrl);

    $yiyan = new Typecho_Widget_Helper_Form_Element_Textarea('yiyan', NULL, '道德当身，故不已物惑', _t('一言'), _t('在这里填入一段话，将会显示在头像底部'));
    $form->addInput($yiyan);
    
    $footerbeian = new Typecho_Widget_Helper_Form_Element_Text('footerbeian', NULL, NULL, _t('备案号'), _t('如果你的网站备案，请在这里填写备案号，否则请空着它。'));
    $form->addInput($footerbeian);
}