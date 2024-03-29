<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_portalcp.php by Valery Votintsev at sources.ru
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(
	'block_diy_nopreview'		=> '<p>This block contain js, you cannot preview it, please save to view.</p>',//'<p>此模块内容包含js代码，不能立即预览，请点击保存后查看</p>',
	'block_diy_summary_html_tag'	=> 'Custom content errors, HTML tags:',//'自定义内容错误，HTML标签：',
	'block_diy_summary_not_closed'	=> ' does not match',//' 不匹配',
	'block_all_category'		=> 'All Categories',//'全部分类',
	'block_first_category'		=> 'Top Categories',//'顶级分类',
	'block_all_forum'		=> 'All Forums',//'全部版块',
	'block_all_group'		=> 'All User Groups',//'全部用户组',
	'block_all_type'		=> 'Wszystko',//'全部分类',
	'file_size_limit'		=> 'File exceed the limit {size} kb, please return.',//'文件不能大于 {size} kb，请返回．',
	'set_to_conver'			=> 'Set as the cover',//'设为封面',
	'small_image'			=> 'Small image',//'小图',
	'insert_small_image'		=> 'Insert small image',//'插入小图',
	'insert_large_image'		=> 'Insert large image',//'插入大图',
	'insert_file'			=> 'Insert file',//'插入文件',
	'delete'			=> 'Usuń',//'删除',
	'upload_error'			=> 'Upload failed',//'上传失败',
	'upload_remote_failed'		=> 'Remote upload failed',//'远程上传失败',
	'article_noexist'		=> 'Specified arcticle does not exists',//'指定的文章不存在，请检查',
	'article_noallowed'		=> 'You have no permissions to operate this article',//'你没有权限对指定的文章进行操作',
	'article_publish_noallowed'	=> 'You have no permissions to publish article',//'你没有权限进行文章发布操作',
	'article_category_empty'	=> 'Sorry, the category can not be empty',//'抱歉，栏目不能为空',
	'article_edit_nopermission'	=> 'Sorry, you do not have permission to edit current article',//'抱歉，您没有权限进行当前文章操作',
	'article_publish'		=> 'Dodaj artykuł',//'发布文章',
	'article_manage'		=> 'Zarządzaj artykułami',//'管理文章',
	'article_tag'			=> 'Tagi',//'标签',
	'select_category'		=> 'Select Category',//'选择分类',
	'blockstyle_diy'		=> 'Custom Template',//'自定义模板',

	'article_pushplus_info'		=> '<p><center><i><a href="{url}" class="xg1 xs1">This article provided by the {author}</a></i><center></p>',

	'diytemplate_name_null'		=> '[not completed]',//'[未填写]',
	'portal_view_name'		=> ' Article view page',//' 文章查看页',
	'forum_viewthread_name'		=> ' Posts View Page',//' 帖子查看页',
	'portal/index'			=> 'Articles Home',//'文章首页',
	'portal/list'			=> 'Articles List Page (public)',//'文章列表页(公共)',
	'portal/view'			=> 'Article, see Page (public)',//'文章查看页(公共)',
	'portal/comment'		=> 'Article comment page',//'文章评论页',
	'forum/discuz'			=> 'Forum Home',//'论坛首页',
	'forum/viewthread'		=> 'Thread View page (public)',//'帖子查看页(公共)',
	'forum/forumdisplay'		=> 'Forum list of pages (public)',//'版块列表页(公共)',
	'group/index'			=> 'Group Home',//$_G['setting']['navs'][3]['navname'].'首页',
	'group/group_my'		=> 'My Group Home',//'我的'.$_G['setting']['navs'][3]['navname'].'首页',
	'group/group'			=> 'Groups Home',//$_G['setting']['navs'][3]['navname'].'内容页',
	'home/space_home'		=> 'Strona główna',//'空间首页',
	'home/space_trade'		=> 'Space products page',//'空间商品页',
	'home/space_top'		=> 'Top space list',//'空间排行榜',
	'home/space_thread'		=> 'Space thread page',//'空间帖子页',
	'home/space_reward'		=> 'Space offering a reward page',//'空间悬赏页',
	'home/space_share_list'		=> 'Space share list page',//'空间分享列表页',
	'home/space_share_view'		=> 'Space share View Page',//'空间分享查看页',
	'space_share_view'		=> 'Space share View Page',//'空间分享查看页',
	'home/space_poll'		=> 'Space polls page',//'空间投票页',
	'home/space_pm'			=> 'Space short messages page',//'空间短消息页',
	'home/space_notice'		=> 'Space reminder Page',//'空间提醒页',
	'home/space_group'		=> 'Space groups page',//'空间'.$_G['setting']['navs'][3]['navname'].'页',
	'home/space_friend'		=> 'Space friends page',//'空间好友页',
	'home/space_favorite'		=> 'Space favorites page',//'空间收藏页',
	'home/space_doing'		=> 'Space Twits page',//'空间记录页',
	'home/space_debate'		=> 'Space debates page',//'空间辩论页',
	'home/space_blog_view'		=> 'Space blog view page',//'空间日志查看页',
	'home/space_blog_list'		=> 'Space blog list page',//'空间日志列表页',
	'home/space_album_view'		=> 'Space album images list page',//'空间相册查看页',
	'home/space_album_pic'		=> 'Space album image page',//'空间图片查看页',
	'home/space_album_list'		=> 'Space album list page',//'空间相册列表页',
	'home/space_activity'		=> 'Space Events Page',//'空间活动页',
	'ranklist/ranklist'		=> 'All Ranks',//'全部排行榜页',
	'ranklist/blog'			=> 'Top Blogs',//'日志排行榜页',
	'ranklist/poll'			=> 'Top Polls',//'投票排行榜页',
	'ranklist/activity'		=> 'Top Events',//'活动排行榜页',
	'ranklist/forum'		=> 'Top Forums',//'版块排行榜页',
	'ranklist/picture'		=> 'Top Images',//'图片排行榜页',
	'ranklist/group'		=> 'Top Groups',//'群组排行榜页',
	'ranklist/thread'		=> 'Top Threads',//'帖子排行榜页',
	'ranklist/member'		=> 'Top Members',//'用户排行榜页',
	'other_page'			=> 'non-DIY modules',//'非DIY模块',
	'upload'			=> 'Upload',//'上传',
	'remote'			=> 'Remote',//'远程',
	'portal_index'			=> 'Portal',//'门户首页',
	'portal_topic_blue'		=> 'Blue theme',//'蓝色调专题',
	'portal_topic_green'		=> 'Green theme',//'绿色调专题',
	'portal_topic_grey'		=> 'Grey theme',//'灰色调专题',
	'portal_topic_red'		=> 'Red theme',//'红色调专题',

	'itemtypename0'			=> 'Auto',//'自动',
	'itemtypename1'			=> '<span style="color: #FF0000">Fixed</span>',//'<span style="color: #FF0000">固定</span>',
	'itemtypename2'			=> '<span style="color: #00BFFF">Edit</span>',//'<span style="color: #00BFFF">编辑</span>',
	'itemtypename3'			=> '<span style="color: #0000FF">Push</span>',//'<span style="color: #0000FF">推送</span>',

);