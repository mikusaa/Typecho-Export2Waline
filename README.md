## Export2Waline
暴力修改原 [Export2Valine](https://github.com/lizheming/typecho-export-valine) 插件，使其导出的评论能间接地通过 Waline 后台导入。

## 如何使用

点击右侧的`Download ZIP`按钮，下载完成之后解压，将文件夹重命名为`Export2Waline`，上传到Typecho目录`usr/plugins`，然后在后台启用插件。

在后台界面，`控制台`菜单下会有一个`评论导出`菜单，点击进入导出界面，点击按钮后获得导出的 JSON 文件。

参考这篇文章：[真 · Typecho 评论迁移至 Waline_](https://wiki.himiku.com/archives/typecho-export-to-waline.html) 对导出的文件进行一定程度上的修改，即可正常使用。

插件导出的数据所有网页的格式都为 `/archives/{slug}.html` 格式，需要将你的网站的 URL 格式设置成对应的格式才能显示评论。

## LICENSE

[MIT LICENSE](https://github.com/mikusaa/Typecho-Export2Waline/blob/master/LICENSE)
