<?php

/**+++
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *      Traduit par Andre13 Support French: http://discuz-fr.fr
 *      $Id: lang_update.php by Valery Votintsev at sources.ru
 */

$lang = array(

//===========================
// Main Update Procedure
//---------------------------
//utility/update.php

	'del_update_lock'		=> 'Vous devez d\'abord vous connecter au serveur par ftp, supprimer manuellement les ./data/update.lock fichier, puis red&#233;marrez cette page.',//'请您先登录服务器ftp,手工删除 ./data/update.lock 文件,再次运行本文件进行升级.', // 'You must first log in to the server by ftp, manually delete the ./data/update.lock file and then restart this page.'
	'sql_file'			=> 'Fichier SQL ',//'SQL文件 ' // 'SQL file '
	'does_not_exist'		=> ' Inexistant',//' 不存在', // ' does not exist'
	'table_delete_completed'	=> 'Suppression de la table et les champs est termin&#233;',//'删除表和字段操作完成了', // 'Deleting the table and the fields is completed'
	'close_before_update'		=> 'Svp. fermer l\'acc&#232;s au site avant d\'effectuer cette Mise &#224; jour',//'请先关闭站点再执行此升级操作', // 'Please close access to the site before performing this upgrade'
	'ucenter160update'		=> 'Svp. mettre &#224; jour votre UCenter vers 1.6.0 ou ult&#233;rieure.<br>If you use the Discuz!X comes with UCenter, Svp. Mise &#224; jour en ex&#233;cutant la UCenter uc_server/upgrade/upgrade3.php',//'请先升级UCenter到1.6.0以上版本。<br>如果使用为Discuz! X自带UCenter，请先运行uc_server/upgrade/upgrade3.php进行升级', // 'Please upgrade your UCenter to 1.6.0 or later.<br>If you use the Discuz!X comes with UCenter, please upgrade UCenter by running the uc_server/upgrade/upgrade3.php'
	'db_will_upgrade'		=> '<b>Note:</b><br>&nbsp;&nbsp;&nbsp;Le programme de mise &#224; jour prendra en compte le dernier fichier SQL pour la synchronisation de Mise &#224; jour base de donn&#233;es.<br>',//'说明：<br>本升级程序会参照最新的SQL文件,对数据库进行同步升级.', // '<b>Note:</b><br>&nbsp;&nbsp;&nbsp;The update program will take into account the latest SQL file for synchronization of database upgrade.<br>'
	'check_latest_version'		=> 'Assurez-vous que l\'actuel ./data/install.sql fichier est destin&#233; &#224; la derni&#232;re version!',//'请确保当前目录下 ./data/install.sql 文件为最新版本.', // 'Make sure the current ./data/install.sql file is for the latest version!'
	'check_plugins'			=> 'Apr&#232;s la mise &#224; niveau est termin&#233;, &#233;teignez tous les plug-ins pour s\'assurer que le site est un travail correctement. Ce n\'est qu\'apr&#232;s cette plugins ouvrir un par un pour d&#233;tecter si chaque plug-in est compatible avec une nouvelle version.',//'升级完成后会关闭所有插件以确保正常运行，请站长逐个开启每一个插件检测是否兼容新版本。', // 'After the upgrade is completed, turn off all the plug-ins to ensure the site is work properly. Only after this open plugins one by one for detect if each plug-in is compatible with a new version.'
	'upgade_start'			=> 'Pr&#234;t, lancer la mise &#224; niveau',//'准备完毕,升级开始', // 'Ready, start the upgrade'
	'contacts'			=> ' Contacts: ',//' 联系方式:', // ' Contacts: '
	'ready_to_db_upgrade'		=> 'Pr&#234;t, la prochaine &#233;tape consiste &#224; moderniser la structure de la base de Donn&#233;es',//'准备完毕,进入下一步数据库结构升级', // 'Ready, the next step will upgrade the database structure'
	'sql_empty'			=> 'Fichier SQL est vide, veuillez vous en assurez',//'SQL文件内容为空,请确认', // 'SQL file is empty, make sure'
	'db_structure_upgraded'		=> 'La mise &#224; niveau est termin&#233; de la structure de la base de Donn&#233;es, Veuillez entrer et mettre &#224; jour les donn&#233;es suivantes',//'数据库结构升级完毕,进入下一步数据升级操作', // 'The database structure upgrade is completed, enter to update the next data'
	'add_table'			=> 'Ajouter Table ',//'添加表 ', // 'Add table '
	'sql_error'			=> ' Erreur. Svp. ex&#233;cuter manuellement l\'instruction SQL suivante, puis r&#233;-ex&#233;cuter le programme de modernisation',//' 出错,请手工执行以下SQL语句后,再重新运行本升级程序', // ' Error. Please manually execute the following SQL statement, and then re-run the upgrade program'
//	'sql_error'			=> ' Error. Please perform the following update statement by hand, then re-run the upgrade program',//'出错,请手工执行以下升级语句后,再重新运行本升级程序', // 
	'completed'			=> ' Compl&#233;t&#233;',//'完成', // ' completed'
	'upgrade_table'			=> 'Mise &#224; niveau Table ',//'升级表 ', // 'Upgrade table '
	'table_rename'			=> 'Renommez Table ',//'表改名 ', // 'Rename Table '
	'sql_statement'			=> 'Mise &#224; niveau instruction SQL',//'升级SQL语句', // 'Upgrading SQL statement'
	'check_table'			=> 'V&#233;rification Table ',//'检查表 ', // 'Check table '
	'skip_table'			=> ' termin&#233;, sans mettre &#224; niveau, ignor&#233;',//' 完成,不需升级,跳过', // ' completed, without upgrading, skipped'
	'real_names_updated'		=> 'Fonction Nom r&#233;el mis &#224; jour',//'实名功能升级完毕', // 'Real name feature upgraded'
	'real_name'			=> 'Nom R&#233;el',//'真实姓名', // 'Real name'
	'real_name_progress'		=> 'Les vrais noms mise &#224; niveau avancement:',//'实名功能升级中', // 'Real names upgrading progress:'
	'users_updated'			=> 'Mise &#224; jour Clients et utilisateurs sont finis',//'用户栏目升级完毕', //  'User section upgrade finished'
	'recommended_webmaster'		=> 'Recommand&#233; par Webmaster',//'站长推荐', // 'Recommended by webmaster'
	'article_tags'			=>  array (
					    1 => 'Original',//'原创', // 'Original'
					    2 => 'Hot',//'热点', // 'Hot'
					    3 => 'Photos',//'组图', // 'Photos'
					    4 => 'News bris&#233;es',//'爆料', // 'Broken News'
					    5 => 'Gros titre',//'头条', // 'Headline'
					    6 => 'Diaporama',//'幻灯', // 'Slideshow'
					    7 => 'D&#233;filement',//'滚动', // 'Scroll'
					    8 => 'Recommand&#233;',//'推荐', // 'Recommended'
					    ),
	'anonymous'			=> 'Anonymes',//'匿名', // 'Anonymous'
	'politics'			=> 'Politique',//'政治', // 'Politics'
	'advertising'			=> 'La publicit&#233;',//'广告', // 'Advertising'
	'userreasons'			=> 'Puissant!\r\nPratiques\r\nTr&#232;s agr&#233;able!\r\nLe Meilleur!\r\nInt&#233;ressant',//'很给力!\r\n神马都是浮云\r\n赞一个!\r\n山寨\r\n淡定' // 'Powerfull!\r\nUsefull\r\nVery nice!\r\nThe best!\r\nInteresting'
	'plugin_center'			=> 'Discuz! Plugin Centre',//'Discuz! 扩展中心', // 'Discuz! Plugin Center'
	'plugin_forum'			=> 'Discuz! Forum Plugin',//'Discuz! 扩展中心最新的论坛插件', // 'Discuz! Plugin Forum'
	'settings_updated'		=> 'Configuration, Mise &#224; jour r&#233;glages est termin&#233;',//'配置项升级完成', // 'Configuration, Settings upgrade is completed'
	'group_setting_updated'		=> 'Param&#232;tres du groupe Mise &#224; jour est termin&#233;',//'管理组设置升级完成', // 'Group Settings upgrade is completed'
	'clean_feeds'			=> 'Nettoyer Flux p&#233;rim&#233;s',//'清理过期动态', // 'Clean up expired feeds'
	'cron_completed'		=> 'T&#226;ches Cron mise &#224; jour termin&#233;e',//'计划任务升级完成', // 'Cron tasks update completed'
	'color_card'			=> 'Coloriser',//'变色卡', // 'Colorizer'
	'color_card_descr'		=> 'Vous pouvez mettre en &#233;vidence (changement de couleur) d\'un Titre des sujets ou blog',//'可以将帖子或日志的标题高亮，变更颜色', // 'You can highlight (change color) a thread or blog title'
	'visitor_card'			=> 'D&#233;couvrez la Carte',//'显身卡', // 'Discover card'
	'visitor_card_descr'		=> 'Vous pouvez voir une r&#233;elle identit&#233; d\'un utilisateur anonyme.',//'可以查看一次匿名用户的真实身份。', // 'You can see a real identity of an anonymous user.'
	'anonymous_card'		=> 'Carte Anonyme',//'匿名卡', // 'Anonymous card'
	'anonymous_card_descr'		=> 'Voir votre nom sous l\'identit&#233; Anonyme dans des zones d&#233;sign&#233;es.',//'在指定的地方，让自己的名字显示为匿名。', // 'Show your name as Anonymous in designated areas.'
	'apps_completed'		=> 'Statistiques Application Mise &#224; jour est termin&#233;',//'漫游应用统计升级完成', // 'Application Statistics upgrade is completed'
	'navigation_completed'		=> 'Navigation de donn&#233;es Mise &#224; jour est termin&#233;',//'导航数据升级完成', // 'Navigation data upgrade is completed''Navigation data upgrade is completed'
	'group_status_completed'	=> 'Mise &#224; jour statut du groupe est termin&#233;',//'版块状态升级完毕', //  'Group Status Upgrade is completed'
	'recommendations_completed'	=> 'Mise &#224; jour Recommandations est termin&#233; ',//'回帖推荐升级完毕', // 'Recommendations upgrade is completed'
	'users_completed'		=> 'Mise &#224; jour des utilisateurs est termin&#233;',//'用户升级完毕', // 'Users upgrade is completed'
	'daylogin'			=> 'Connexion Quotidienne',//'每天登录', // 'Daily login'
	'portalcomment'			=> 'Article Commentaire',//'文章评论', // 'Comment Article'
	'points_rules_completed'	=> 'Points R&#232;gles Mise &#224; jour est termin&#233;',//'积分规则升级完毕', //  'Points Rules upgrade is completed'
	'custom_bbcode_completed'	=> 'Autorisations Personnalisation BBCode Mise &#224; jour est termin&#233;',//'自定义代码权限升级完毕', // 'Custom BBCode permissions upgrade is completed'
	'edited_by'			=> 'Edit&#233;',//'编辑采用', // 'Edited'
	'stamps_completed'		=> 'Sujet Tampons Mise &#224; jour est termin&#233;',//'鉴定图章升级完毕', // 'Thread Stamps upgrade is completed'
	'perms_updated'			=> 'Permission ic&#244;nes mise &#224; jour est termin&#233;',//'模块缩略图权限升级完毕', // 'Permission icons update is completed'
	'block_permissions_completed'	=> 'Blocs autorisations Mise &#224; jour est termin&#233;',//'模块权限升级完毕', // 'Block Permissions upgrade is completed'
	'portal_completed'		=> 'Portail Autorisations pour les stations Channels Mise &#224; niveau termin&#233;e',//'门户频道权限升级完毕', // 'Portal channel permissions Upgrade Complete'
	'articles_updated'		=> 'Mise &#224; jour article termin&#233;e ',//'文章评论升级完毕', //  'Article upgrade completed'
	'article_comments_completed'	=> 'Commentaires des articles Mise &#224; jour termin&#233;e',//'文章封面图升级完毕', // 'Article comments upgrade completed'
	'blocks_completed'		=> 'Mod&#232;les de bloc Mise &#224; jour termin&#233;e',//'模块模板升级完毕', // 'Block templates upgrade completed'
	'scripts_completed'		=> 'Blocs des scripts Mis &#224; jour termin&#233;',//'模块脚本升级完毕', // 'Block scripts upgrade completed'
	'group_permissions_completed'	=> 'Groupe utilisateur permissions Mis &#224; jour est termin&#233;',//'用户组权限升级完毕', // 'User group permissions upgrade is completed'
	'group_home_completed'		=> 'Mise &#224; jour Accueil du Groupe est termin&#233;',//'群组首页升级完毕', //  'Group Home upgrade is completed'
	'domains_completed'		=> 'Param&#232;tres du domaine Mis &#224; jour est termin&#233;',//'域名设置升级完毕', // 'Domain Settings upgrade is completed'
	'new_pm_completed'		=> 'Nouvelle r&#233;initialisation du Statut court du Post termin&#233;',//'新短消息状态重置完毕', //'New short message status reset completed'
	'view_img_completed'		=> 'Les droits de l\'image Mise &#224; jour termin&#233;e',//'查看图片权限升级完毕', // 'View image rights upgrade completed'
	'realname_verify'		=> 'V&#233;rification du Nom R&#233;el',//'实名认证升级中', // 'Real name verification'
	'video_verify'			=> 'V&#233;rification Vid&#233;o',//'视频认证', // 'Video verification'
	'real_name_verification'	=> 'La v&#233;rification du nom r&#233;el',//'实名认证升级中', //  'Real name verification'
	'real_name_verification_completed'	=> 'La v&#233;rification du nom r&#233;el de donn&#233;es Mise &#224; jour est termin&#233;e',//'认证数据升级完毕', // 'Real name verification data upgrade is completed'
	'attachment_upgrade'		=> 'Table des pièces jointes Forum mise &#224; niveau ... ',//'论坛附件表升级中 ... ', // 'Forum attachment table upgrading ... '
	'attachment_upgraded'		=> 'Mise &#224; jour du Forum table des pièces jointes termin&#233;e.',//'论坛附件表升级完毕', // 'Forum attachment table upgrade completed.'
	'topic_image_skip'		=> 'Impossible de traiter la table images du sujet, ignor&#233;.',//'主题图片表无法处理，跳过', //  'Can not process the thread image table, skipped.'
	'topic_image_upgraded'		=> 'Sujet des images am&#233;lior&#233;es',//'主题图片表处理完毕', //  'Thread images upgraded'
	'topic_image_upgrade'		=> 'Sujet mise &#224; niveau des images ... ',//'主题图片表处理中 ... ', // 'Thread images upgrading ... '
	'verify_updated'		=> 'Les donn&#233;es de v&#233;rification de mise &#224; niveau termin&#233;.',//'审核数据升级完毕', //  'Verification data upgrade completed.'
	'founder_updated'		=> 'Fondateur de donn&#233;es mise &#224; niveau termin&#233;',//'创始人数据升级完毕', // 'Founder Data Upgrade completed'
	'plugins_updated'		=> 'Plugin pack de langue de donn&#233;es de mise &#224; niveau.',//'插件语言包数据升级完毕', // 'Plug-in language pack data upgraded.'
	'config_default_lost'		=> 'config_global_default.php n\'a pas &#233;t&#233; trouv&#233;, Svp. re-t&#233;l&#233;charger ce fichier.',//'config_global_default.php was lost, please reupload this file.',
	'data_processing_completed'	=> 'Traitement Donn&#233;es est termin&#233;',//'数据处理完成', // 'Data processing is completed'
	'config_not_writable'		=> '"config/config_global.php" fichier est mis &#224; jour, le "config/" r&#233;pertoire n\'est pas accessible en &#233;criture, nous avons enregistr&#233; le fichier mis &#224; jour au "data/" r&#233;pertoire, Svp. utilisez un logiciel FTP pour le transf&#233;rer au "config/" r&#233;pertoire d\'&#233;craser le fichier existant.',//'"config/config_global.php" 文件已更新,由于 "config/" 目录不可写入,我们已将更新的文件保存到 "data/" 目录下,请通过 FTP 软件将其转移到 "config/" 目录下覆盖源文件.', // '"config/config_global.php" file is updated, the "config/" directory is not writable, we have saved the updated file to the "data/" directory, please use FTP software to transfer it to the "config/" directory overwriting the existing file.' // 
	'config_continue'		=> 'Après achèvement de cette op&#233;ration, cliquez ici pour continuer',//'当您完成上述操作后点击这里继续', // 'After completion of this operation click here to continue'
	'data_delete_next'		=> 'Suppression des donn&#233;es termin&#233;e, passez &#224; l\'&#233;tape suivante',//'数据删除不处理,进入下一步', // 'Data Deletion completed, go to the next step'
	'tables_unused'			=> '<strong>Les tables de donn&#233;es suivantes</strong> sont inutilis&#233;s après comparaison avec la base de donn&#233;es standard:<br>d&#233;cider de le supprimer si n&#233;cessaire',//'以下 <strong>数据表</strong> 与标准数据库相比是多余的:<br>您可以根据需要自行决定是否删除', //  '<strong>The following data tables</strong> are unused after comparing with the standard database:<br>decide whether to delete it if required' // 
	'index'				=> 'Index',//'索引', // 'Index'
	'field'				=> 'Champ',//'字段', //  'Field'
	'fields_unused'			=> '<strong>Les champs suivants</strong> sont inutilis&#233;s après comparaison avec la base de donn&#233;es standard:<br>d&#233;cider de le supprimer si n&#233;cessaire',//'以下 <strong>字段</strong> 与标准数据库相比是多余的:<br>您可以根据需要自行决定是否删除', // '<strong>The following fields</strong> are unused after comparing with the standard database:<br>decide whether to delete it if required' 
	'tables_fields_no_unused'	=> 'Par rapport &#224; la base de donn&#233;es standard, il n\'y a pas de tables de donn&#233;es inutilis&#233;es et les champs doivent être supprim&#233;s',//'与标准数据库相比,没有需要删除的数据表和字段', //  'Compared with the standard database, there is no unused data tables and fields need to be deleted'
	'click_next_step'		=> 'Cliquez ici pour aller &#224; l\'&#233;tape suivante',//'请点击进入下一步', // 'Click for go to the next step' 
	'submit_delete'			=> 'Envoyer pour supprimer',//'提交删除', // 'Submit for delete' // 
	'ignore_unused'			=> 'Vous pouvez &#233;galement ignorer les tables suppl&#233;mentaires et les champs',//'您也可以忽略多余的表和字段', // 'You can also ignore the extra tables and fields'
	'next_step_directly'		=> 'Aller &#224; l\'&#233;tape suivante directement',//'直接进入下一步', // 'Go to the next step directly' 
	'default_style_restore_sure'	=> 'Svp. confirmer si vous souhaitez restaurer le style par d&#233;faut?',//'请确认是否要恢复默认风格？', // 'Please confirm whether you want to restore the default style?' 
	'yes'				=> 'Oui',//'是', // 'Yes'
	'no'				=> 'Non',//'否', // 'No'
	'default_style_restored'	=> 'Le style par d&#233;faut a &#233;t&#233; restaur&#233;, passez &#224; l\'&#233;tape suivante',//'默认风格已恢复,进入下一步', // 'The default style was restored, go to the next step'
	'cache_update'			=> 'Cache mise &#224; jour, Svp. attendre ...',//'缓存更新中，请稍候 ...', // 'Cache update, please wait ...'
	'database_updated'		=> 'F&#233;licitations! La structure de la base de Donn&#233;es mise &#224; niveau est termin&#233;e!<br>Pour la s&#233;curit&#233; des donn&#233;es, supprimez le fichier update.php !.',//'恭喜，数据库结构升级完成！为了数据安全，请删除本文件。', // 'Congratulations! The database structure upgrade is completed!<br>For data security, delete the file update.php !.' 
	'jump_to'			=> 'Sauter vers ...',//'跳转中...', // 'Jump to ...' // 
	'database_update'		=> 'Processus M-&#224;-j. Base de donn&#233;es',//'数据库升级程序', // 'Database upgrade process' 
	'database_update_tool'		=> 'Outil M-&#224;-j. Base de Donn&#233;es',//'数据库升级工具', // 'Database upgrade tool' 
	'update_start'			=> 'M-&#224;-j. Lancer',//'升级开始', // 'Update start' 
	'database_update_structure'	=> 'M-&#224;-j.Base de Donn&#233;es',//'数据库结构添加与更新', // 'Update the Database' 
	'data_update'			=> 'M-&#224;-j.des donn&#233;es',//'数据更新', // 'Update the Data' 
	'database_delete_structure'	=> 'Supprimer Donn&#233;es Inutilis&#233;es',//'数据库结构删除', // 'Delete unused data'  
	'update_completed'		=> 'M-&#224;-j. Termin&#233;e',//'升级完成', // 'Update Completed' 
	'reports_completed'		=> 'Rapports M-&#224;-j. est Compl&#233;t&#233;',//'举报升级完成', // 'Reports upgrade is completed' 
	'magics_updated'		=> 'M-&#224;-j. magie est termin&#233;e',//'道具升级完成', // 'Magics upgrade is completed' 
	'birthday'			=> 'Anniversaire',//'出生日期', // 'Birthday' 
);