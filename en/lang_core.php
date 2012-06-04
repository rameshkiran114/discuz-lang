<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_core.php by Valery Votintsev at sources.ru
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'nextpage'		=> 'Next',//'下一页',
	'prevpage'		=> 'Prev',//'上一页',
	'pageunit'		=> 'Pages',//'页',
	'total'			=> 'Total',//'共',
	'10k'			=> '10K',//'万',
	'pagejumptip'		=> 'Enter the page number and press Enter for quick jump',//'输入页码，按回车快速跳转',
	'date'	=> array(
		'before'	=> ' ago',//'前',
		'day'		=> 'day(s)',//'天',
		'yday'		=> 'Yesterday',//'昨天',
		'byday'		=> 'The day before yesterday',//'前天',
		'hour'		=> 'hour(s)',//'小时',
		'half'		=> 'Half ',//'半',
		'min'		=> 'min.',//'分钟',
		'sec'		=> 's.',//'秒',
		'now'		=> 'Just now',//'刚刚',
	),
	'yes'			=> 'Yes',//'是',
	'no'			=> 'No',//'否',
	'weeks'	=> array(
		1 => 'Monday',//'周一',
		2 => 'Tuesday',//'周二',
		3 => 'Wednesday',//'周三',
		4 => 'Thursday',//'周四',
		5 => 'Friday',//'周五',
		6 => 'Saturday',//'周六',
		7 => 'Sunday',//'周日',
	),
	'dot'		=> '. ',//'、',
	'archive'	=> 'Archive',//'存档',
	'portal'	=> 'Portal',//'门户',
	'end'		=> 'End',//'末尾',

	'seccode_image_tips'		=> 'Enter the characters from the picture below<br />',//'输入下图中的字符<br />',
	'seccode_image_ani_tips'	=> 'Enter the following characters from the animated picture in the largest<br />',//'请输入下面动画图片中的字符<br />',
	'seccode_sound_tips'		=> 'Enter the characters that you hear<br />',//'输入你听到的字符<br />',
	'secqaa_tips'			=> 'Enter the answer to the following question<br />',//'输入下面问题的答案<br />',

	'fullblankspace'		=> '&nbsp;',//'　',

	'title_goruptype'		=> 'Group type',//'类',
	'title_of'			=> '\'s ',//'的',
	'title_board_message'		=> 'Message',//'提示信息',
	'title_view_all'		=> 'View all',//'随便看看',
	'title_activity'		=> 'Events',//'活动',
	'title_friend_activity'		=> 'Friend Events',//'好友发起的活动',
	'title_my_activity'		=> 'My Events',//'我的活动',
	'title_newest_activity'		=> 'New Events',//'最新活动',
	'title_top_activity'		=> 'Top Events',//'热门活动',
	'title_album'			=> 'Albums',//'相册',
	'title_friend_album'		=> 'Friend Albums',//'好友的相册',
	'title_my_album'		=> 'My Albums',//'我的相册',
	'title_newest_update_album'	=> 'Last updated Albums',//'最新更新的相册',
	'title_hot_pic_recommend'	=> 'Recommended Images',//'热门图片推荐',
	'title_blog'			=> 'Blogs',//'日志',
	'title_friend_blog'		=> 'Friend Blogs',//'好友的日志',
	'title_my_blog'			=> 'My Blogs',//'我的日志',
	'title_post_new_blog'		=> 'Post New Blog',//'发表新日志',
	'title_newest_blog'		=> 'New Blogs',//'最新发表的日志',
	'title_recommend_blog'		=> 'Recommended Blogs',//'推荐阅读的日志',
	'title_debate'			=> 'Debates',//'辩论',
	'title_friend_debate'		=> 'Friend Debates',//'好友发起的辩论',
	'title_my_debate'		=> 'My Debates',//'我的辩论',
	'title_create_new_debate'	=> 'Create Debates',//'发起新辩论',
	'title_my_create_debate'	=> 'Created by me  Debates',//'我发起的辩论',
	'title_my_join_debate'		=> 'I joined Debates',//'我参与的辩论',
	'title_newest_debate'		=> 'New Debates',//'最新辩论',
	'title_top_debate'		=> 'Top Debates',//'热门辩论',
	'title_doing'			=> 'Doings',//'记录',
	'title_newest_doing'		=> 'New Doings',//'记录',
	'title_me_friend_doing'		=> 'Friend Doings',//'我和好友的记录',
	'title_doing_view_me'		=> 'My Doings',//'我的记录',
	'title_thread_favorite'		=> 'Favorite Threads',//'帖子收藏',
	'title_forum_favorite'		=> 'Favorite Forums',//'帖子收藏',
	'title_group_favorite'		=> 'Favorite Groups &quot;{gorup}&quot;',//'{gorup}收藏',
	'title_blog_favorite'		=> 'Favorite Blogs',//'日志收藏',
	'title_album_favorite'		=> 'Favorite Albums',//'相册收藏',
	'title_article_favorite'	=> 'Favorite Articles',//'文章收藏',
	'title_all_favorite'		=> 'All Favorites',//'全部收藏',
	'title_friend_list'		=> 'Friend List',//'好友列表',
//vot	'title_of'			=> 'of',//'的',
	'title_all_poll'		=> 'All Polls',//'随便看看投票',
	'title_we_poll'			=> 'Friend Polls',//'好友发起的投票',
	'title_me_poll'			=> 'My Polls',//'我的投票',
	'title_hot_poll'		=> 'Hot Polls',//'热门投票',
	'title_dateline_poll'		=> 'Latest Polls',//'最新投票',
	'title_all_reward'		=> 'All Rewards',//'随便看看悬赏',
	'title_we_reward'		=> 'Friend Rewards',//'好友发起的悬赏',
	'title_me_reward'		=> 'My Rewards',//'我的悬赏',
	'title_hot_reward'		=> 'Hot Rewards',//'热门悬赏',
	'title_dateline_reward'		=> 'Latest Rewards',//'最新悬赏',
	'title_share_all'		=> 'All',//'全部',
	'title_share_link'		=> 'Links',//'网址',
	'title_share_video'		=> 'Video',//'视频',
	'title_share_music'		=> 'Music',//'音乐',
	'title_share_flash'		=> 'Flash',
	'title_share_poll'		=> 'Polls',//'投票',
	'title_share_pic'		=> 'Images',//'图片',
	'title_share_album'		=> 'Albums',//'相册',
	'title_share_blog'		=> 'Blogs',//'日志',
	'title_share_space'		=> 'Users',//'用户',
	'title_share_thread'		=> 'Threads',//'帖子',
	'title_share_article'		=> 'Articles',//'文章',
	'title_share_tag'		=> 'Tags',//'TAG',
	'title_share'			=> 'Shares',//'分享',
	'title_thread'			=> 'Threads',//'帖子',
	'title_all_thread'		=> 'All Threads',//'随便看看帖子',
	'title_we_thread'		=> 'Friend Threads',//'好友发起的帖子',
	'title_me_thread'		=> 'My Threads',//'我的帖子',
	'title_hot_thread'		=> 'Hot Threads',//'热门帖子',
	'title_dateline_thread'		=> 'Latest Threads',//'最新帖子',
	'title_trade'			=> 'Products',//'商品',
	'title_all_trade'		=> 'All Products',//'随便看看商品',
	'title_we_trade'		=> 'Friend Products',//'好友出售的商品',
	'title_me_trade'		=> 'My Products',//'我的商品',
	'title_hot_trade'		=> 'Hot Products',//'热门商品',
	'title_dateline_trade'		=> 'Latest Products',//'最新商品',
	'title_tradelog_trade'		=> 'Product Transactions',//'交易记录',
	'title_eccredit_trade'		=> 'Points Transactions',//'信用评价',
	'title_credit'			=> 'Points',//'积分',
	'title_friend_add'		=> 'Add friends',//'添加好友',
	'title_people_might_know'	=> 'May be known',//'可能认识的人',
	'title_friend_request'		=> 'Friend Request',//'好友请求',
	'title_search_friend'		=> 'Search Friends',//'查找好友',
	'title_invite_friend'		=> 'Invite Friends',//'邀请好友',
	'title_password_security'	=> 'Password Security',//'密码安全',
	'title_flash_upload'		=> 'Batch Upload',//'批量上传',
	'title_cam_upload'		=> 'Upload from Camera',//'大头贴',
	'title_normal_upload'		=> 'General Upload',//'普通上传',
	'title_newthread_post'		=> 'Add New Thread',//'发表帖子',
	'title_reply_post'		=> 'Reply the Thread',//'参与/回复主题',
	'title_edit_post'		=> 'Edit Post',//'编辑帖子',
	'title_newtrade_post'		=> 'Add Product',//'发布商品',
	'title_magics_shop'		=> 'Magic Shop',//'道具商店',
	'title_magics_hot'		=> 'Hot Magics',//'热销道具',
	'title_magics_user'		=> 'My Magics',//'我的道具',
	'title_magics_log'		=> 'Magics Log',//'道具记录',
	'title_medals_list'		=> 'Medal List',//'勋章',
	'title_setup'			=> 'Settings',//'设置',
	'title_memcp_blog'		=> 'Publish Blog',//'发表日志',
	'title_memcp_upload'		=> 'Upload',//'上传',
	'title_memcp_share'		=> 'Add Share',//'添加分享',
	'title_memcp_sendmail'		=> 'Mail Alert',//'邮件提醒',
	'title_memcp_privacy'		=> 'Privacy',//'隐私筛选',
	'title_memcp_avatar'		=> 'Modify Avatar',//'修改头像',
	'title_memcp_profile'		=> 'Personal Data',//'个人资料',
//vot	'title_memcp_sendmail'		=> 'Mail Alert',//'邮件提醒',
	'title_memcp_credit'		=> 'Points',//'积分',
	'title_memcp_friend'		=> 'Friends',//'好友',
	'title_memcp_usergroup'		=> 'User Groups',//'用户组',
	'title_memcp_album'		=> 'Albums',//'编辑相册',
	'title_memcp_poke'		=> 'Greetings',//'打招呼',
	'title_memcp_videophoto'	=> 'Video Authentication',//'视频认证',
	'title_memcp_comment'		=> 'Comments',//'评论',
	'title_memcp_eccredit'		=> 'Points Transactions',//'信用评价',
	'title_memcp_promotion'		=> 'Access Promotion',//'访问推广',
	'title_task'			=> 'Tasks',//'任务',
	'title_login'			=> 'Login',//'登录',
	'title_ranklist_picture'	=> 'Image Ranks',//'图片排行',
	'title_ranklist_member'		=> 'Member Ranks',//'用户排行',
	'title_ranklist_thread'		=> 'Thread Ranks',//'帖子排行',
	'title_ranklist_blog'		=> 'Blog Ranks',//'日志排行',
	'title_ranklist_poll'		=> 'Poll Ranks',//'投票排行',
	'title_ranklist_activity'	=> 'Evant Ranks',//'活动排行',
	'title_ranklist_forum'		=> 'Forum Ranks',//'版块排行',
	'title_ranklist_group'		=> 'Group Ranks',//'群组排行',
	'title_ranklist_app'		=> 'Application Ranking',//'应用排行',
	'title_ranklist_index'		=> 'All Ranks',//'全部排行',
	'title_ranklist_rankname'	=> 'Rank',//'排行榜',
	'title_search'			=> 'Search',//'搜索',
	'title_topic_management'	=> 'Topic Management',//'创建专题',
	'title_portal_management'	=> 'Portal Management',//'门户管理',
	'title_portalblock_management'	=> 'Portal Block Management',//'模块管理',
	'title_block_management'	=> 'Block Management',//'模块管理',
	'title_blockdata_management'	=> 'Block Data Management',//'推送审核',
	'title_index_management'	=> 'Channels Management',//'频道栏目',
	'title_article_management'	=> 'Article Management',//'发布文章',
	'title_category_management'	=> 'Category Management',//'管理文章',

	'title_stats'			=> 'Site Statistics',//'站点统计',
	'title_stats_basic'		=> 'Basic Statistics',//'基本概况',
	'title_stats_forumstat'		=> 'Forum Statistics',//'版块统计',
	'title_stats_team'		=> 'Team Statistics',//'管理团队',
	'title_stats_modworks'		=> 'Moderator Statistics',//'管理统计',
	'title_stats_memberlist'	=> 'Member List',//'会员列表',
	'title_stats_trend'		=> 'Statistics Trends',//'趋势统计',

	'title_memcp_pm'		=> 'Send Message',//'发送短消息',
	'title_memcp_domain'		=> 'My space domain',//'我的空间域名',
	'title_userapp'			=> 'Application',//'应用',
	'title_userapp_index_all'	=> 'All Applications',//'大家在玩什么',
	'title_userapp_index_we'	=> 'Friend Applications',//'好友在玩什么',
	'title_userapp_index_me'	=> 'My Applications',//'我在玩的',
	'title_userapp_manage'		=> 'Manage Application &quot;{userapp}&quot;',//'{userapp}管理',

	'title_collection'		=> 'Collection',//'淘帖',
	'title_collection_create'	=> 'Create collection',//'创建淘专辑',
	'title_collection_edit'		=> 'Edit collection',//'编辑淘专辑',
	'title_collection_comment_list'	=> 'Comment list',//'评论列表',
	'title_collection_followers_list'	=> 'Followers',//'订阅用户列表',

	'faq'				=> 'FAQ',//'帮助',
	'search'			=> 'Search',//'搜索',
	'page'				=> 'page {page}',//'第{page}页',

	'close'				=> 'Close',//'关闭',

//--------------------------------------------------------------------------
// Added by Valery Votintsev

//source/include/misc/misc_security.php
	'attackevasive_1_subject'	=> 'Refresh frequency limit',//'刷新频率限制',
	'attackevasive_1_message'	=> 'You visit the site too fast, less than two seconds! Please wait a little...',//'您访问网站的速度太快，不到两秒钟！请等一下...',
	'attackevasive_2_subject'	=> 'Access throug proxy servers is restricted',//'通过代理服务器的访问是受到限制',
	'attackevasive_2_message'	=> 'Access to the site through a proxy servers is restricted for mow. Please remove your proxy setting configuration, and access to the site directly.',//'通过代理服务器访问网站限制亩。请删除您的代理设置配置，并直接访问该网站。',
	'attackevasive_4_subject'	=> 'Open the page reload',//'打开页面重载',
	'attackevasive_4_message'	=> 'Welcome to the site, the page is re-loading, please wait ...',//'欢迎的网站，页面重新载入，请稍候...',

// Months Names
	'month_name'	=> array('Month','January','February','March','April','May','June','July','August','September','October','November','December'),//array('月','一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'),

);

