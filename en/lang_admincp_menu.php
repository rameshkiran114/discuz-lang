<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_admincp_menu.php by Valery Votintsev at sources.ru
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(


	'header_index'		=> 'Home',//'首页',
	'header_global'		=> 'Global',//'全局',
	'header_forum'		=> 'Forum',//'论坛',
	'header_user'		=> 'Users',//'用户',
	'header_topic'		=> 'Topics',//'内容',
	'header_extended'	=> 'Extensions',//'扩展',
	'header_plugin'		=> 'Plugins',//'插件',
	'header_style'		=> 'Styles',//'界面',
	'header_adv'		=> 'Ads',//'广告',
	'header_tools'		=> 'Tools',//'工具',
	'header_uc'		=> 'UCenter',//
	'header_welcome'	=> 'Welcome',//'您好',
	'header_logout'		=> 'Logout',//'退出',
	'header_bbs'		=> 'The&nbsp;Site',//'站点首页',
	'header_portal'		=> 'Portal',//'门户',
	'header_group'		=> 'Groups',//'群组',
	'header_founder'	=> 'Admins',//'站长',
	'header_cloudaddons'	=> 'Application Center',//'应用中心',


	'menu_home'			=> 'Admin Center',//'管理中心首页',
	'menu_home_clearhistorymenus'	=> 'Clean operation history',//'清空历史操作',

	'menu_setting_basic'		=> 'Base Settings',//'站点信息',
	'menu_setting_access'		=> 'Register/Access',//'注册与访问控制',
	'menu_setting_customnav'	=> 'Navigation',//'导航栏',
	'menu_setting_styles'		=> 'Styles',//'界面设置',
	'menu_setting_optimize'		=> 'Optimization',//'优化设置',
	'menu_setting_seo'		=> 'SEO',//'SEO设置',
	'menu_setting_functions'	=> 'Site modules',//'站点功能',
	'menu_setting_domain'		=> 'Domains',//'域名设置',
	'menu_setting_user'		=> 'User Permissions',//'用户权限',
	'menu_setting_credits'		=> 'Money',//'积分设置',
	'menu_setting_mail'		=> 'Mail',//'邮件设置',
	'menu_setting_sec'		=> 'Anti-spam',//'防灌水设置',
	'menu_setting_datetime'		=> 'Date/Time',//'时间设置',
	'menu_setting_attachments'	=> 'Attachments',//'上传设置',
	'menu_setting_imgwater'		=> 'Watermark',//'水印设置',
	'menu_setting_uc'		=> 'UCenter settings',//'UCenter 设置',
	'menu_setting_uchome'		=> 'UCHome settings',//'UCHome 设置',
	'menu_setting_follow'		=> 'Follows',//'广播设置',
	'menu_setting_home'		=> 'Space settings',//'空间设置',
	'menu_setting_search'		=> 'Search Settings',//'搜索设置',
	'menu_setting_district'		=> 'Regions',//'地区设置',
	'menu_setting_ranklist'		=> 'Rank List',//'排行榜设置',
	'menu_setting_mobile'		=> 'Mobile Access',//'手机访问设置',
	'menu_setting_tag'		=> 'Tags',//'标签管理',

	'menu_forums'			=> 'Forums',//'版块管理',
	'menu_forums_merge'		=> 'Forums merge',//'版块合并',
	'menu_forums_threadtypes'	=> 'Thread types',//'主题分类',
	'menu_forums_infotypes'		=> 'Forum types',//'分类信息',//vot: !!! May be 'Sort IDs',//'Category(ies)',/
	'menu_forums_infooption'	=> 'Options types',//'分类信息选项',

	'menu_members_add'		=> 'Add User',//'添加用户',
	'menu_members_edit'		=> 'Edit User',//'用户管理',
	'menu_members_newsletter'	=> 'Newsletters',//'发送通知',
	'menu_members_mobile'		=> 'Send phone notification',//'发送手机通知',
	'menu_usertag'			=> 'User Tags',//'用户标签',
	'menu_members_edit_ban_user'	=> 'Ban user',//'禁止用户',
	'menu_members_ipban'		=> 'Ban IP',//'禁止 IP',
	'menu_members_credits'		=> 'Award points',//'积分奖惩',
	'menu_members_profile'		=> 'User profile',//'用户栏目',
	'menu_members_profile_group'	=> 'User Groups',//'用户栏目分组',
	'menu_members_verify_setting'	=> 'Verification',//'认证设置',
	'menu_members_stat'		=> 'Statistics',//'资料统计',
	'menu_moderate_modmembers'	=> 'New Users',//'审核新用户',
	'menu_profilefields'		=> 'Profile fields',//'用户栏目定制',
	'menu_admingroups'		=> 'Admin Groups',//'管理组',
	'menu_usergroups'		=> 'User Groups',//'用户组',
	'menu_follow'			=> 'Follows',//'推荐关注',
	'menu_defaultuser'		=> 'Default users',//'推荐好友',

	'menu_moderate_posts'		=> 'Posts Moderation',//'内容审核',
	'menu_moderate_blogs'		=> 'Blogs',//'审核日志',
	'menu_moderate_doings'		=> 'Doings',//'审核记录',
	'menu_moderate_pictures'	=> 'Images',//'审核图片',
	'menu_moderate_shares'		=> 'Shares',//'审核分享',
	'menu_moderate_comments'	=> 'Comments',//'审核评论/留言',
	'menu_moderate_articles'	=> 'Articles',//'审核文章',
	'menu_moderate_articlecomments'	=> 'Article Comments',//'审核文章评论',
	'menu_maint_threads'		=> 'Threads Management',//'主题管理',
	'menu_maint_prune'		=> 'Bulk post delete',//'批量删帖',
	'menu_maint_attaches'		=> 'Attachment Management',//'附件管理',
	'menu_maint_threads_group'	=> 'Moderate Group Threads',//'群组主题管理',
	'menu_maint_prune_group'	=> 'Group Posts Batch Delete',//'群组批量删帖',
	'menu_maint_attaches_group'	=> 'Moderate Group Attachments',//'群组附件管理',
	'menu_setting_collection'	=> 'Collections',//'淘帖管理',
	'menu_posting_tags'		=> 'Tag Management',//'标签管理',
	'menu_posting_censors'		=> 'Bad Word Filter',//'词语过滤',
	'menu_maint_report'		=> 'User Reports',//'用户举报',
	'menu_threads_forumstick'	=> 'Multi Forum Stick',//'多版块置顶',
	'menu_post_position_index'	=> 'Posts Optimization',//'帖子优化',
	'menu_postcomment'		=> 'Post Comment Management',//'帖子点评管理',
	'menu_maint_doing'		=> 'Doings Management',//'记录管理',
	'menu_maint_blog'		=> 'Blogs Management',//'日志管理',
	'menu_maint_feed'		=> 'Feeds Management',//'动态管理',
	'menu_maint_album'		=> 'Albums Management',//'相册管理',
	'menu_maint_pic'		=> 'Images Management',//'图片管理',
	'menu_maint_comment'		=> 'Comments/Replies Management',//'评论/留言管理',
	'menu_maint_share'		=> 'Share Management',//'分享管理',

	'menu_posting_attachtypes'	=> 'Attachment size',//'附件类型尺寸',
	'menu_moderate_recyclebin'	=> 'Recycle Bin',//'主题回收站',
	'menu_moderate_recyclebinpost'	=> 'Posts Recycle Bin',//'回帖回收站',

	'menu_founder'			=> 'Admin Info',//'站点信息',
	'menu_founder_perm'		=> 'Admin Team',//'后台管理团队',
	'menu_founder_groupperm'	=> 'Edit Group permissions - {group}',//'编辑团队职务权限 - {group}',
	'menu_founder_permgrouplist'	=> 'Edit Permissions - {perm}',//'编辑权限 - {perm}',
	'menu_founder_memberperm'	=> 'Edit member permissions - {username}',//'编辑团队成员 - {username}',

	'menu_patch'			=> 'Security Center',//'安全中心',
	'menu_upgrade'			=> 'Online Upgrade',//'在线升级',

	'menu_addons'			=> 'Application Center',//'应用中心',
	'menu_plugins'			=> 'Plugins',//'插件',
	'menu_tasks'			=> 'Tasks',//'站点任务',
	'menu_magics'			=> 'Magics',//'道具中心',
	'menu_medals'			=> 'Medals',//'勋章中心',
	'menu_misc_help'		=> 'Site Help',//'站点帮助',
	'menu_google'			=> 'Google Search',//'Google 搜索',
	'menu_ec'			=> 'E-commerce',//'电子商务',
	'menu_card'			=> 'Recharge card close',//'充值卡密',

	'menu_styles'			=> 'Skins',//'风格管理',
	'menu_styles_templates'		=> 'Templates',//'模板管理',
	'menu_posting_smilies'		=> 'Smiles',//'表情管理',
	'menu_click'			=> 'Ratings',//'表态动作',
	'menu_thread_icon'		=> 'Thread icons',//'主题图标',
	'menu_thread_stamp'		=> 'Thread stamps',//'主题图章',
	'menu_posting_editor'		=> 'Editor Settings',//'编辑器设置',
	'menu_misc_onlinelist'		=> 'Online icons',//'在线列表图标',

	'menu_misc_link'		=> 'Links',//'友情链接',
	'menu_misc_relatedlink'		=> 'Related Links',//'关联链接',
	'memu_focus_topic'		=> 'Hot Topics',//'站长推荐',
	'menu_adv_custom'		=> 'Site Advertising',//'站点广告',

	'menu_misc_announce'		=> 'Site Announces',//'站点公告',
	'menu_tools_updatecaches'	=> 'Update cache',//'更新缓存',
	'menu_tools_postposition'	=> 'Optimize Post positioning',//'高楼贴优化',
	'menu_tools_updatecounters'	=> 'Update Statistics',//'更新统计',
	'menu_tools_javascript'		=> 'Javascript calls',//'数据调用',
	'menu_tools_relatedtag'		=> ' Tags related',//' 标签聚合',
	'menu_tools_creditwizard'	=> 'Points Wizard',//'积分策略向导',
	'menu_tools_fileperms'		=> 'File permissions',//'文件权限检查',
	'menu_tools_hookcheck'		=> 'Check Hooks',//'嵌入点校验',
	'menu_tools_filecheck'		=> 'File Checksum',//'文件校验',
	'menu_forum_scheme'		=> 'Site Program Scheme',//'站点方案管理',
	'menu_db'			=> 'Database',//'数据库',
	'menu_postsplit'		=> 'Split Posts',//'帖子分表',
	'menu_threadsplit'		=> 'Thread Tables',//'主题分表',
	'menu_membersplit'		=> 'User tables',//'用户表优化',
	'menu_logs'			=> 'Log Records',//'运行记录',
	'menu_custommenu_manage'	=> 'Custom Menu',//'常用操作管理',
	'menu_misc_cron'		=> 'Cron Scheduler',//'计划任务',

	'menu_article'			=> 'Article Management',//'文章管理',
	'menu_portalcategory'		=> 'Article Categories',//'文章分类',
	'menu_blogcategory'		=> 'Blog Categories',//'日志分类',
	'menu_albumcategory'		=> 'Album Categories',//'相册分类',
	'menu_block'			=> 'Blocks Management',//'模块管理',
	'menu_blockstyle'		=> 'Block Styles',//'模块样式',
	'menu_portalpermission'		=> 'Portal permissions',//'权限列表',
	'menu_blockxml'			=> 'Third-party blocks',//'第三方模块',
	'menu_topic'			=> 'Topic Management',//'专题管理',
	'menu_diytemplate'		=> 'Custom Styles Management',//'DIY页面管理',

	'menu_group_setting'		=> 'Group Settings',//'群组设置',
	'menu_group_type'		=> 'Group Categories',//'群组分类',
	'menu_group_manage'		=> 'Group Management',//'群组管理',
	'menu_group_userperm'		=> 'User group permissions',//'群主权限',
	'menu_group_level'		=> 'Group Levels',//'群组等级',
	'menu_group_mod'		=> 'Group moderation',//'审核群组',

	'menu_setting_manyou'		=> 'Manyou settings',//'Manyou 设置',
	'menu_setting_qqconnect'	=> 'QQ binding settings',//'QQ 绑定设置',

	'admincp_title'			=> $_G['setting']['bbname'].' Admin Center',//$_G['setting']['bbname'].' 管理中心',

// Added by Valery Votintsev
	'menu_setting_language'		=> 'Languages',
);

