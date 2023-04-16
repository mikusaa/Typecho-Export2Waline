<?php
/**
 * 评论数据导出到 Waline
 *
 * @package Export2Waline
 * @author mikusa
 * @version 0.0.1
 * @link https://github.com/mikusaa/Typecho-Export2Waline
 */
class Export2Waline_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     *
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Helper::addAction('export2Waline', 'Export2Waline_Action');
        Helper::addPanel(1, 'Export2Waline/panel.php', _t('评论导出'), _t('评论导出'), 'administrator');

        return _t('插件已经激活，请设置插件以正常使用！');
    }

    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     *
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate()
    {
        Helper::removeAction('export2Waline');
        Helper::removePanel(1, 'Export2Waline/panel.php');
    }

    /**
     * 获取插件配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form){}

    /**
     * 个人用户的配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
}
