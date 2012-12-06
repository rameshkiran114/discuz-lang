/*
	[Discuz!] (C)2001-2009 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	Javascript Language variables

	$Id: lang_js.js by Valery Votintsev, codersclub.org

*/

//--------------------------------
//static/js/register.js

// Suggested email domains for registering:
var emaildomains = [
		'wp.pl',
		'onet.pl',
		'interia.pl',
		'o2.pl',
		'gmail.com',
		'yahoo.com'
		];

//--------------------------------
//static/js/common.js

var colortexts = {
	'Black'			: 'Black',//'黑色',
	'Sienna'		: 'Sienna',//'赭色',
	'DarkOliveGreen'	: 'Dark Olive Green',//'暗橄榄绿色',
	'DarkGreen'		: 'Dark Green',//'暗绿色',
	'DarkSlateBlue'		: 'Dark Gray Blue',//'暗灰蓝色',
	'Navy'			: 'Navy',//'海军色',
	'Indigo'		: 'Indigo',//'靛青色',
	'DarkSlateGray'		: 'Dark Green',//'墨绿色',
	'DarkRed'		: 'Dark Red',//'暗红色',
	'DarkOrange'		: 'Dark Orange',//'暗桔黄色',
	'Olive'			: 'Olive',//'橄榄色',
	'Green'			: 'Green',//'绿色',
	'Teal'			: 'Teal',//'水鸭色',
	'Blue'			: 'Blue',//'蓝色',
	'SlateGray'		: 'Limestone',//'灰石色',
	'DimGray'		: 'Dark Gray',//'暗灰色',
	'Red'			: 'Red',//'红色',
	'SandyBrown'		: 'Brown Sand',//'沙褐色',
	'YellowGreen'		: 'Yellow Green',//'黄绿色',
	'SeaGreen'		: 'Sea Green',//'海绿色',
	'MediumTurquoise'	: 'Green emerald',//'间绿宝石',
	'RoyalBlue'		: 'Royal Blue',//'皇家蓝',
	'Purple'		: 'Purple',//'紫色',
	'Gray'			: 'Gray',//'灰色',
	'Magenta'		: 'Red Purple',//'红紫色',
	'Orange'		: 'Orange',//'橙色',
	'Yellow'		: 'Yellow',//'黄色',
	'Lime'			: 'Acid Orange',//'酸橙色',
	'Cyan'			: 'Blue Green',//'青色',
	'DeepSkyBlue'		: 'Deep Sky Blue',//'深天蓝色',
	'DarkOrchid'		: 'Dark Purple',//'暗紫色',
	'Silver'		: 'Silver',//'银色',
	'Pink'			: 'Pink',//'粉色',
	'Wheat'			: 'Light Yellow',//'浅黄色',
	'LemonChiffon'		: 'Lemon Silk',//'柠檬绸色',
	'PaleGreen'		: 'Cang Green',//'苍绿色',
	'PaleTurquoise'		: 'Cang gem Green',//'苍宝石绿',
	'LightBlue'		: 'Bright blue',//'亮蓝色',
	'Plum'			: 'Plum color',//'洋李色',
	'White'			: 'White' //'白色'
};

/*
',',	//'，',
'.',	//'。',
':',	//'点',
'!',	//'！'
'&laquo;',//'《',
'&raquo;',//'》',
*/


//--------------------------------

var lng = {

//---------------------------
//static/image/editor/editor_base.js
// USED in /source/module/home/home_editor.php
// MOVE TO:
//static/js/editor_base.js
	'restore_last_saved'	: 'Are you sure you want to restore to last saved?',//'您确定要恢复上次保存?',
	'cut_manually'		: 'Your browser security settings does not permit the editor to automatically execute the Cutting operation. Use the keyboard shortcut (Ctrl X) to complete this operation.',//'您的浏览器安全设置不允许编辑器自动执行剪切操作,请使用键盘快捷键(Ctrl+X)来完成',
	'copy_manually'		: 'Your browser security settings does not permit the editor to automatically execute the Copy operation. Use the keyboard shortcut (Ctrl C) to complete this operation.',//'您的浏览器安全设置不允许编辑器自动执行拷贝操作,请使用键盘快捷键(Ctrl+C)来完成',
	'paste_manually'	: 'Your browser security settings does not permit the editor to automatically execute the Paste operation. Use the keyboard shortcut (Ctrl V) to complete this operation.',//'您的浏览器安全设置不允许编辑器自动执行粘贴操作,请使用键盘快捷键(Ctrl+V)来完成',
	'graffiti_no_init'	: 'Can not find the Graffiti initialization data',//'找不到涂鸦板初始化数据',
	'ie5_only'		: 'Supported only in IE 5.01 or later',//'只支持IE 5.01以上版本',
	'edit_raw'		: 'Edit Raw Text',//'编辑源码',
	'plain_text_warn'	: 'Converting to the plain text will lose some formatting!\nAre you sure you want to continue?',//'转换为纯文本时将会遗失某些格式。\n您确定要继续吗？',
	'browser_update'	: 'Your browser does not support this feature, please upgrade your browser version',//'你的浏览器不支持此功能，请升级浏览器版本',
	'tips'			: 'Tips',//'小提示',

//---------------------------
//static/image/editor/editor_function.js
// USED in: /source/admincp/admincp_feed.php
// USED in: /template/default/home/cpacecp_blog.htm
// USED in: /template/default/portal/portalcp_article.htm
// MOVED TO:
//static/js/editor_function.js
	'wysiwyg_only'		: 'This operation is effective only for WYSIWYG mode',//'本操作只在多媒体编辑模式下才有效',

//---------------------------
//static/image/admincp/cloud/cloud.js
	'int_cloud_test'	: 'Testing other cloud platform interface',//'云平台其他接口测试',
	'int_roaming_test'	: 'Testing other Roaming interface',//'漫游其他接口测试',
	'int_qq_test'		: 'Testing QQ Internet interface',//'QQ互联接口测试',
	'server_busy'		: 'The server is busy, please try again later',//'服务器繁忙，请稍后再试',
	'tested_ok'		: 'The test is successful, time used: ',//'测试成功，耗时 ',
	'seconds'		: ' sec.',//' 秒',

//---------------------------
//static/image/admincp/cloud/qqgroup.js
	'select_topic_to_push'	: 'Select at least one topic for push to Articles',//'请至少推送一条头条主题和一条列表主题',
	'select_item_to_push'	: 'Select at least one item for push to Articles',//'请至少推送一条信息到列表区域',
	'loading'		: 'Wczytywanie...',//'加载中...',
	'push5reached'		: 'Push Post number has reached five, in the right to cancel a number and try again.',//'推送帖子已达到5条，请在右侧取消一些再重试。',
	'click_left'		: 'Click on the left',//'点击左侧',
	'push_to_list'		: 'Will push the information to the list',//'将信息推送到列表',
	'wait_image_upload'	: 'Upload image, please wait...',//'图片上传中，请稍后...',





//---------------------------
//upload/static/js/at.js
//	'enter_username'	: 'Please enter the user name',//'请输用户名',

//---------------------------
//upload/static/js/common_extra.js
//	'wait_please'		: 'Wczytywanie ...',//'请稍候...',

//--------------------------------
//static/js/calendar.js
//static/js/forum_calendar.js
//static/js/home_calendar.js

	'prev_month'	: 'Poprzedni miesiąc',//'上一月',
	'next_month'	: 'Następny miesiąc',//'下一月',
	'select_year'	: 'Wybierz rok',//'点击选择年份',
	'select_month'	: 'Wybierz miesiąc',//'点击选择月份',
	'wday0'		: 'Ni',//'日',
	'wday1'		: 'Po',//'一',
	'wday2'		: 'Wt',//'二',
	'wday3'		: 'Śr',//'三',
	'wday4'		: 'Czw',//'四',
	'wday5'		: 'Pt',//'五',
	'wday6'		: 'So',//'六',
	'month'		: 'Miesiąc',//'月',
	'today'		: 'Dziś',//'今天',
	'hours'		: 'Godzin',//'点',
	'minutes'	: 'Minut',//'分',
	'halfhour'	: 'Pół godziny',//'半小时',
	'ok'		: 'Ok',//'OK',

//--------------------------------
//static/js/common.js

	'open_new_win'		: 'Otwórz w nowym oknie',//'在新窗口打开',
	'actual_size'		: 'Aktualny rozmiar',//'实际大小',
	'close'			: 'Zamknij',//'关闭',
	'wheel_zoom'		: 'Użyj kółka myszki, aby powiększyć/zmniejszyć obrazek',//'鼠标滚轮缩放图片',
	'reminder'		: 'Powiadomienie',//'提示信息',
	'submit'		: 'Wyślij',//'确定',
	'cancel'		: 'Anuluj',//'取消',
	'wait_please'		: 'Wczytywanie ...',//'请稍候...',
	'int_error'		: 'Napotkano problemy. Nie można wyświetlić treści.',//'内部错误，无法显示此内容',
	'flash_required'	: 'Zawartość wymaga wtyczki Adobe Flash Player',//'此内容需要 Adobe Flash Player 9.0.124 或更高版本',
	'flash_download'	: 'Pobierz Flash Player',//'下载 Flash Player',
	'day1'			: '1 dzień',//'一天',
	'week1'			: '1 tydzień',//'一周',
	'days7'			: '7 dni',//'7 天',
	'days14'		: '14 dni',//'14 天',
	'month1'		: '1 miesiąc',//'一个月',
	'month3'		: '3 miesiące',//'三个月',
	'month6'		: '6 miesięcy',//'半年',
	'year1'			: '1 rok',//'一年',
	'custom'		: 'Zdefiniuj',//'自定义',
	'permanent'		: 'Permanent',//'永久',
	'show_all_expr'		: 'Wszystkie',//'显示所有表情',
	'page_prev'		: 'Następna strona',//'上页',
	'page_next'		: 'Poprzednia strona',//'下页',
	'copy2clipboard'	: 'Kliknij, aby skopiować do schowka',//'点此复制到剪贴板',
// ATTENTION!
// The next line must have the same value as in /template.php - 'enter_content' !!!
	'enter_search_string'	: 'Wprowadź szukane wyrażenia',//'请输入搜索内容',
	'refresh_q&a'		: 'Odśwież Q&A',//'刷新验证问答',
	'refresh_code'		: 'Odśwież kod',//'刷新验证码',
	'code_invalid'		: 'Wprowadzono błędny kod zabezpieczający. Spróbuj ponownie.',//'验证码错误，请重新填写',
	'q&a_invalid'		: 'Wprowadzono błędną odpowiedź. Spróbuj ponownie.',//'验证问答错误，请重新填写',
	'code_clipboard'	: 'Kod został skopiowany do schowka',//'代码已复制到剪贴板',
	'enter_link_url'	: 'Adres URL',//'请输入链接地址',
	'enter_link_text'	: 'Tekst maskujący',//'请输入链接文字',
	'enter_image_url'	: 'Adres URL obrazka',//'请输入图片地址',
	'width_optional'	: 'Szerokość (nieobowiązkowy)',//'宽(可选)',
	'height_optional'	: 'Wysokość (nieobowiązkowy)',//'高(可选)',
	'narrow_screen'		: 'Wąski ekran',//'切换到窄版',
	'wide_screen'		: 'Szeroki ekran',//'切换到宽版',
	'logging_wait'		: 'Loguję, momencik...',//'登录中，请稍后...',
	'notices_no'		: '[Brak]',//'【　　　】',
	'notices_yes'		: '[Nowe]',//'【新提醒】',
	'sec_after_win_closed'	: ' sek. do zamknięcia powiadomienia.',//' 秒后窗口关闭',
	'sec_after_page_jump'	: ' sek. do zamknięcia powiadomienia.',//' 秒后页面跳转',
	'jump_now'		: 'Skocz teraz',//'立即跳转',
	'error_message'		: 'Komunikat błędu',//'错误信息',
	'ctrl_d_favorites'	: 'Wciśnij Ctrl + D, aby dodać do ulubionych.',//'请按 Ctrl+D 键添加到收藏夹',
	'non_ie_manually'	: 'Dla przeglądarek innych niż IE, należy ustawić ręcznie.',//'非 IE 浏览器请手动将本站设为首页',
	'blind_enable'		: 'Enable blind experience',//'开启盲人体验',//tc:'開啟盲人體驗',
	'blind_disable'		: 'Disable blind experience',//'关闭盲人体验',//tc:'關閉盲人體驗',

//--------------------------------
//static/js/common_diy.js

	'edit'			: 'Edytuj',//'编辑',
	'warn_not_saved'	: 'You have modified the data. If you exit, all the changes will be lost.',//'您的数据已经修改,退出将无法保存您的修改。',
	'confirm_exit'		: 'All the changes will be lost if you exit. Are you sure you want to exit now?',//'退出将不会保存您刚才的设置。是否确认退出？',
	'select_image_upload'	: 'Proszę wybrać zdjęcie',//'请选择您要上传的图片',

//--------------------------------
//static/js/common_extra.js

	'copy_failed'		: 'Copy failed, please select "Allow access"',//'复制失败，请选择“允许访问”',
	'prev'			: 'Nast.',//'上一张',
	'next'			: 'Poprz.',//'下一张',

//--------------------------------
//static/js/editor.js

	'restore_size_edit'	: 'Przywróć rozmiar edytora',//'恢复编辑器大小',
	'full_screen_edit'	: 'Pełnoekranowy edytor',//'全屏方式编辑',
	'current_length'	: 'Aktualna długość',//'当前长度',
	'bajtów'			: 'bajtów',//'字节',
	'system_limit'		: 'Limit systemu',//'系统限制',
	'up_to'			: '~',//'到',
	'check_length'		: 'Length Count',//'字数检查',
	'data_restored'		: 'Treść została przywrócona',//'数据已恢复',
	'data_saved'		: 'Treść została zapisana',//'数据已保存',
	'clear_all_sure'	: 'Are you sure to clear all the contents?',//'您确认要清除所有内容吗？',
	'hide_content'		: 'Ukryta zawartość',//'请输入要隐藏的信息内容',
	'free_content'		: 'Treść zostanie zaprezentowana w specjalnym bloku, który pozwoli wyróżnić umieszczoną zawartość',//'如果您设置了帖子售价，请输入购买前免费可见的信息内容',
	'when_thread_replied'	: 'Pokaż zawartość, kiedy użytkownik odpowie w temacie.',//'只有当浏览者回复本帖时才显示',
	'when_points_more'	: 'Pokaż zawartość, kiedy użytkownik ma na koncie więcej niż',//'只有当浏览者积分高于',
	'when_show'		: 'punktów',//'时才显示',
	'table_rows'		: 'Wierszy',//'表格行数',
	'table_columns'		: 'Kolumn',//'表格列数',
	'table_width'		: 'Szerokość tabeli',//'表格宽度: ',
	'bg_color'		: 'Tło',//'背景颜色',
	'table_intro0'		: 'Krótki poradnik',//'快速书写表格提示',
	'table_intro1'		: '&quot;[tr=color]&quot; Ustala kolor wiersza<br />&quot;[td=Width]&quot; Ustala rozmiar komórki<br />&quot;[td=Column_Span,Row_Span,Width]&quot; Ustala rozmiary kolumny/wiersza<br /><br />Prosty przykład tabeli: ',//'“[tr=颜色]” 定义行背景<br />“[td=宽度]” 定义列宽<br />“[td=列跨度,行跨度,宽度]” 定义行列跨度<br /><br />快速书写表格范例：',
	'table_intro2'		: '[table]<br />Nazwa:|Discuz!<br />Wersja:|X2.5<br />[/table]',//'[table]<br />Name:|Discuz!<br />Version:|X1<br />[/table]',
	'table_intro3'		: 'Użyj &quot;|&quot;, aby oddzielić komórki. Jeśli znak &quot;|&quot; stanowi którąś z danych, zamień go na &quot;\\|&quot;, separate rows with &quot;\\n&quot;.',//'用“|”分隔每一列，表格中如有“|”用“\\|”代替，换行用“\\n”代替。',
	'audio_url'		: 'Wprowadź adres URL do pliku muzycznego',//'请输入音乐文件地址',
	'video_url'		: 'Wprowadź adres URL do pliku wideo',//'请输入视频地址',
	'auto_play'		: 'Autoplay?',//'是否自动播放',
	'flash_url'		: 'Wprowadź adres URL do pliku flash',//'请输入 Flash 文件地址',
	'enter_please'		: 'Please enter the',//'请输入第',
	'nth_parameter'		: '-th parameter',//' 个参数',
	'font'			: 'Czcionka',//'字体',
	'full_screen'		: 'Pełny ekran',//'全屏',
	'restore_size'		: 'Przywróć rozmiar',//'恢复',
	'general'		: 'Tryb ogólny',//'常用',
	'simple'		: 'Tryb rozszerzony',//'高级',
	'bad_browser'		: 'Twoja przeglądarka nie obsługuje tej funkcji',//'你的浏览器不支持此功能',
	'click_autosave_enable'	: 'Kliknij tutaj, aby włączyć autozapis postów',//'点击开启自动保存',
	'autosave_enable'	: 'Włącz autozapis',//'开启自动保存',
	'autosave_disable'	: 'Wyłącz autozapis',//'点击关闭自动保存',
	'autosave_enabled'	: 'Autozapis został wł.',//'数据自动保存已开启',
	'autosave_disabled'	: 'Autozapis został wył.',//'数据自动保存已关闭',
	'data_saved_at'		: 'Zapisano o',//'数据已于',
	'saved_time'		: '',//NOT REQUIRED IN ENGLISH!//'保存',
	'sec_before_saving'	: 'sek. do autozapisu.',//'秒后保存',
	'insert_quote'		: 'Wprowadź cytat',//'请输入要插入的引用',
	'insert_code'		: 'Wprowadź kod',//'请输入要插入的代码',
	'enter_item_list'	: 'Enter the item list.\r\nLeave blank, or click Cancel.',//'输入一个列表项目.\r\n留空或者点击取消完成此列表.',
	'width'			: 'Szerokość',//'宽',
	'height'		: 'Wysokość',//'高',
	'audio_support'		: 'Wspierane formaty: wma, mp3, ra, rm, i inne.<br />Przykład: http://server/audio.wma',//'支持 wma mp3 ra rm 等音乐格式<br />示例: http://server/audio.wma',
	'video_support'		: 'Wsparcie dla Youku, Potatoes, 56, 6, Cool video i innych serwisów.<br />Wspierane formaty: wmv avi rmvb mov swf flv.<br /> Przykład: http://server/movie.wmv',//'支持优酷、土豆、56、酷6等视频站的视频网址<br />支持 wmv avi rmvb mov swf flv 等视频格式<br />示例: http://server/movie.wmv',
	'flash_support'		: 'Wspierane formaty: swf flv <br /> Przykład: http://server/flash.swf',//'支持 swf flv 等 Flash 网址<br />示例: http://server/flash.swf',
	'paste_from_word'	: 'Wklej zawartość programu Word',//'从 Word 粘贴内容',
	'paste_word_tip'	: 'Użyj skrótu wklejania treści (Ctrl + V), aby móc uzupełnić powyższe pole.',//'请通过快捷键(Ctrl+V)把 Word 文件中的内容粘贴到上',
	'show_tips'		: 'Show Tips',//'友情提示',
	'expire_days'		: 'Valid for (days)',//'有效天数',
	'expire_days_invalid'	: 'Distance from the posting date is greater than the number of days when the label automatically expire',//'距离发帖日期大于这个天数时标签自动失效',
//--------------------------------
//static/js/forum.js

	'del_thread_sure'	: 'Are you sure you want to remove this thread from hot threads?',//'您确认要把此主题从热点主题中移除么？',
	'there_are'		: 'There are ',//'有',
	'new_reply_exists'	: 'The thread has new replies, click on View',//'有新回复的主题，点击查看',
//--------------------------------
//static/js/forum_google.js

	'search_net'	: 'Search in the Net',//'网页搜索',
	'search_site'	: 'Search in the site',//'站内搜索',
	'search'	: 'Search',//'搜索',

//--------------------------------
//static/js/forum_moderate.js

	'choose_tread'	: 'Choose the thread to moderate',//'请选择需要操作的帖子',

//--------------------------------
//static/js/forum_post.js

	'internal_error'	: 'Internal Server Error',//'内部服务器错误',
	'upload_ok'		: 'Uploaded Successfully',//'上传成功',
	'ext_not_supported'	: 'This file extension is not supported',//'不支持此类扩展名',
	'sorry_ext_not_supported'	: 'Sorry, such file extension does not supported.',//'对不起，不支持上传此类扩展名的附件。',
	'illegal_image_type'	: 'Illegal image type',//'图片附件不合法',
	'can_not_save_attach'	: 'Can not save Attachment file',//'附件文件无法保存',
	'invalid_file'		: 'No legitimate file was uploaded',//'没有合法的文件被上传',
	'illegal_operation'	: 'Illegal Operation',//'非法操作',
	'enter_content'		: 'Proszę uzupełnić pole tytuł lub treść',//'请完成标题或内容栏',
	'select_category'	: 'Proszę wybrać typ tematu.',//'请选择主题对应的分类',
	'select_category_info'	: 'Select a corresponding category for the thread information',//'请选择主题对应的分类信息',
	'title_long'		: 'Title length exceeds the limit of 255 characters',//'您的标题超过 80 个字符的限制',
	'content_long'		: 'Długość wypowiedzi nie spełnia określonych wymagań.\n\n',//'您的帖子长度不符合要求。\n\n',
	'ignore_pending_attach'	: 'There are pending attachments, are you sure to ignore it?',//'您有等待上传的附件，确认不上传这些附件吗？',
	'still_uploading'	: 'Some attachments are still uploading, please wait. The thread will be published automaticly after the files was uploaded...',//'您有正在上传的附件，请稍候，上传完成后帖子将会自动发表...',
	'no_data_recover'	: 'No data can be recoverd!',//'没有可以恢复的数据！',
	'content_overwrite'	: 'Warning:\nCurrent content will be overwritten with the saved data!\nAre you sure to restore the data?',//'此操作将覆盖当前帖子内容，确定要恢复数据吗？',
	'upload_finished'	: 'Uploading is finished!',//'附件上传完成！',
	'successfull'		: 'Successfull:',//'成功',
	'failed'		: 'Failed:',//'失败',
	'ones'			: 'ones',//'个',
	'uploading'		: 'Uploading...',//'上传中...',
	'select_image_files'	: 'Select image files',//'请选择图片文件',
	'delete'		: 'Usuń',//'删除',
	'contains'		: 'Contains ',//'包含',
	'img_attached_num'	: 'images attached',//'个图片附件',
	'files attached_num'	: 'files attached',//'个附件',
	'images'		: 'Images',//'图片',
	'attachments'		: 'attachments',//'附件',
	'upload_failed'		: 'Upload Failed',//'上传失败',

	'attach_big'		: 'Attachment size exceeds the allowed limit',//'服务器限制无法上传那么大的附件',
	'attach_group_big'	: 'You user group total attachment size exceeds allowed limit',//'用户组限制无法上传那么大的附件',
	'attach_type_big'	: 'This file type total attachment size exceeds allowed limit',//'文件类型限制无法上传那么大的附件',
	'attach_daily_big'	: 'Daily total attachment size exceeds allowed limit',//'本日已无法上传更多的附件',
	'validating_q&a'	: 'Validating the Q & A, please wait',//'验证问答校验中，请稍后',
	'validating_code'	: 'Validating the code, please wait',//'验证码校验中，请稍后',
	'attach_type_disabled'	: 'This attachment type is disabled',//'附件类型被禁止',
	'attach_max'		: 'Not larger than',//'不能超过',
	'vote_max_reached'	: 'Reached the maximum number of votes: ',//'已达到最大投票数',
	'no_remote_attach'	: 'Sorry, no remote attachment',//'抱歉，暂无远程附件',
	'delete_post_sure'	: 'Czy na pewno chcesz usunąć ten post?',//'确定要删除该帖子吗？',
	'feed_add_confirm'	: 'Because of you have set read permission or sell the post, do you confirm also the broadcast to your listeners to see?',//'由于您设置了阅读权限或出售帖，您确认还转播给您的听众看吗？',
//--------------------------------
//static/js/forum_viewthread.js

	'best_answer_sure'	: 'Czy na pewno chcesz oznaczyć ten post jako "najlepsza odpowiedź"?',//'您确认要把该回复选为“最佳答案”吗？',
	'premoderated'		: 'Replies to this category must be audited. Your post wll be displayed after the verification',//'本版回帖需要审核，您的帖子将在通过审核后显示',
	'credit_confirm1'	: 'Download costs ',//'下载需要消耗',
	'credit_confirm2'	: ' points, are you sure to download?',//'，您是否要下载？',
	'thread_to_clipboard'	: 'Thread address was copied to the clipboard',//'帖子地址已经复制到剪贴板',
	'click_to_enlarge'	: 'Click to enlarge',//'点击放大',
	'notify_on_reply'	: 'Subskrybuj temat',//'接收回复通知',
	'notify_on_reply_cancel'	: 'Usuń subskrypcję',//'取消回复通知',
	'share_connection_failed'	: 'Connection to share failed, please try again later',//'分享服务连接失败，请稍后再试',
	'qq_bind'		: 'Please bind your QQ account',//'请先绑定QQ账号',
	'quote_by'		: 'Quote by .*? in .*? code',//'本帖最后由 .*? 于 .*? 编辑',
	'copy_code'		: 'Copy code',//'复制代码',

//--------------------------------
//static/js/handlers.js
	'file_selected_exceed'	: 'Wybrano zbyt wiele plików.',//'您选择的文件个数超过限制。',
	'upload_number_exceed'	: 'Nie możesz dodać więcej plików.',//'您已达到上传文件的上限了。',
	'can_choose_more'	: 'You may only add ',//'您还可以选择 ',
	'files'			: ' more files',//' 个文件',
	'file_is_large'		: 'Plik jest za duży.',//'文件太大.',
	'file_is_empty'		: 'You can not upload a zero byte file.',//'不能上传零字节文件.',
	'file_type_disabled'	: 'Upload of such type files is disabled.',//'禁止上传该类型的文件.',
	'unhandled_error'	: 'Unhandled Error',//'',
	'upload_progress'	: 'Dodane ',//'正在上传',
	'upload_cancelled'	: 'Anulowane',//'取消上传',
	'file_description'	: 'Opis pliku',//'图片描述',
	'image_upload_failed'	: 'Image upload failed',//'图片上传失败',
	'upload_failed'		: 'Upload failed',//'上传失败',
	'upload_completed'	: 'Upload completed.',//'上传完成.',
	'upload_error'		: 'Upload Error: ',//'',
	'config_error'		: 'Configuration Error',//'',
	'server_error'		: 'Server (IO) Error',//'',
	'security_error'	: 'Security Error',//'',
	'upload_limit_exceed'	: 'Upload limit exceeded.',//'',
	'file_not_found'	: 'File not found.',//'',
	'validation_failed'	: 'Failed Validation.  Upload skipped.',//'',
	'upload_stopped'	: 'Stopped',//'',

//--------------------------------
//static/js/home.js
	'day'			: 'Day',//'日',
	'category_empty'	: 'Category name can not be empty!',//'分类名不能为空！',

//--------------------------------
//static/js/home_ajax.js

//	'close'			: 'Close',//'关闭',
//	'wait_please'		: 'Loading ...',//'请稍候...',

//--------------------------------
//static/js/home_blog.js

	'title_length_invalid'	: 'Title length (should be 1~80 characters) does not meet the requirement',//'标题长度(1~80字符)不符合要求',

//--------------------------------
//static/js/home_common.js

	'show_orig_image'	: 'Show original image in a new window',//'点击图片，在新窗口显示原始尺寸',
	'continue_sure'		: 'Are you sure to proceed?',//'您确定要执行本操作吗？',
	'select_item'		: 'Please choose the item to operate with',//'请选择要操作的对象',
	'image_url_invalid'	: 'Incorrect image URL',//'图片地址不正确',
	'audio_url_invalid'	: 'Incorrect audio URL, can not be empty',//'音乐地址错误，不能为空',

//!!!!! MayBe wrap this names!!
	'collapse'		: 'Zwiń',//'收起',
	'expand'		: 'Expand',//'展开',

//--------------------------------
//static/js/home_friendselector.js

	'select_max'		: 'You can select up to',//'最多只允许选择',
	'users'			: 'users',//'个用户',
	'allready_exists'	: 'Already exists',//'已经存在',

//--------------------------------
//static/js/home_manage.js

	'you_friends_now'	: 'You are friends now, you can ',//'你们现在是好友了，接下来，您还可以：',
	'leave_message'		: 'Leave a message',//'给TA留言',
	'or'			: 'or',//'或者',
	'send_greeting'		: 'send greeting',//'打个招呼',
	'reply'			: 'Reply',//'回复',
	'comment'		: 'Comment',//'评论',
	'close_list'		: 'Close the List',//'收起列表',
	'more_feeds'		: 'More Feeds',//'更多动态',

//--------------------------------
//static/js/home_uploadpic.js

	'image_type_invalid'	: 'Sorry, image with such extension does not supported',//'对不起，不支持上传此类扩展名的图片',
	'insert_to_content'	: 'Click here to insert into the content at current cursor position',//'点击这里插入内容中当前光标的位置',
	'insert'		: 'Insert',//'插入',
	'image_description'	: 'Image Description',//'图片描述',
	'uploading_wait'	: 'Uploading, Please wait',//'上传中，请等待',
	'retry'			: 'Retry',//'重试',

//--------------------------------
//static/js/portal.js

	'delete_sure'		: 'Are you sure to delete this data?',//'您确定要删除该数据吗？',
	'ignore_sure'		: 'Are you sure to ignore this data?',//'您确定要屏蔽该数据吗？',
	'to'			: 'to',//'到',

	'choose_block'		: 'Choose block',//'选择模块',
	'blocks_found1'		: 'Found',//'找到',
	'blocks_found2'		: 'corresponding blocks',//'个相应的模块',
	'blocks_not_found'	: 'No corresponding blocks',//'没有相应的模块',
	'select_block'		: 'Please select a block!',//'请选择一个模块！',
	'show_settings'		: 'Show settings',//'展开设置项',
	'hide_settings'		: 'Hide settings',//'收起设置项',
	'block_name_empty'	: 'Block name can not be empty',//'模块标识不能为空',
	'block_convert_sure'	: 'Are you sure you want to convert the block from type',//'你确定要转换模块的类型从',
	'back'			: 'Back',//'返回',
	'settings_expand'	: 'Expand setting',//'展开设置项',
	'settings_hide'		: 'Hide setting',//'收起设置项',
	'custom_content_error'	: 'Custom content error! HTML code: ',//'自定义内容错误，',
	'html_error'		: 'HTML code: ',//'HTML代码：',
	'tags_not_match'	: ' - Tags does not match',//' 标签不匹配',
	'entered'		: 'Have entered ',//'已输入 ',
	'exceed'		: 'Exceed ',//'超出 ',
	'title_length_bad'	: 'The title is incorrect',//'标题长度不正确',
	'summary_length_bad'	: 'Summary length is incorrect',//'简介长度不正确',

//--------------------------------
//static/js/portal_diy.js

	'choose_style'		: 'Choose a Style',//'选择样式',
	'style'			: 'Style',//'样式',
	'style1'		: 'Style1',//'样式1',
	'style2'		: 'Style2',//'样式2',
	'style3'		: 'Style3',//'样式3',
	'style4'		: 'Style4',//'样式4',
	'style5'		: 'Style5',//'样式5',
	'style6'		: 'Style6',//'样式6',
	'style7'		: 'Style7',//'样式7',
	'no_border'		: 'No border frame',//'无边框框架',
	'no_border_no_margin'	: 'No border, no margin',//'无边框且无边距',

	'title'			: 'Title',//'标题',
	'attribute'		: 'Attribute',//'属性',
	'data'			: 'Data',//'数据',
	'update'		: 'Update',//'更新',
	'export'		: 'Eksport',//'导出',
	'repeat'		: 'Repeat',//'平铺',
	'no_repeat'		: 'No repeat',//'不平铺',
	'repeat_x'		: 'Repeat Horizontal',//'横向平铺',
	'repeat_y'		: 'Repeat Vertical',//'纵向平铺',
	'no_style'		: 'No style',//'无样式',
	'solid_line'		: 'Solid Line',//'实线',
	'dotted_line'		: 'Dotted Line',//'点线',
	'dashed_line'		: 'Dased Line',//'虚线',
	'link'			: 'Link',//'链接',
	'border'		: 'Border',//'边框',
	'size'			: 'Size',//'大小',
	'color'			: 'Color',//'颜色',
	'separate_config'	: 'Separate Config',//'分别设置',
	'right'			: 'Right',//'右',
	'bottom'		: 'Bottom',//'下',
	'top'			: 'Top',//'上',
	'left'			: 'Left',//'左',
	'margin'		: 'Margin',//'外边距',
	'padding'		: 'Padding',//'内边距',
	'bg_image'		: 'Background Image',//'背景图片',
	'class'			: 'Designated Class',//'指定class',
	'block'			: 'Block',//'模块',
	'frame'			: 'Frame',//'框架',
	'onclick'		: 'onClick',//'点击',
	'onmouseover'		: 'onMouseover',//'滑过',
	'switch_type'		: 'Switch Type',//'切换类型',
	'image'			: 'Image',//'图片',
	'position'		: 'Position',//'位置',
	'align_left'		: 'Left Align',//'居左',
	'align_right'		: 'Right Align',//'居右',
	'offset'		: 'Offset',//'偏移量',
//!!! mainly the same as 'color' !!!!!!
//	'colour'		: 'Colour',//'色',
	'add_new_title'		: 'Dodaj nowy tytuł',//'添加新标题',
	'delete_this_sure'	: 'Are you sure to delete it? It can not be restored if you delete it.',//'您确实要删除吗,删除以后将不可恢复',
	'loading_content'	: 'Wczytywanie zawartości...',//'正在加载内容...',
	'modified_import'	: 'You have made some modifications, please import it after you save it, otherwise the imported data won\'t include modification of this time.',//'您已经做过修改，请保存后再做导出，否则导出的数据将不包括您这次所做的修改。',
	'total'			: 'Łącznie ',//'共',
	'blocks'		: 'bloków',//'个模块',
	'updating_the'		: 'aktualizacja #',//'正在更新第',
	'done'			: 'postęp',//'已完成',
	'start_updating'	: 'Rozpoczęcie aktualizacji...',//'开始更新...',
	'update_block_data'	: 'Aktualizacja danych',//'更新模块数据',
	'clear_diy_sure'	: 'Are you sure to clear the current page DIY data? It can not be restored if you clear it.',//'您确实要清空页面上所在DIY数据吗,清空以后将不可恢复',
	'frame_not_found'	: 'Warning: Frame not found, please add frame.',//'提示：未找到框架，请先添加框架。',
	'apply_all_pages'	: 'Apply to all this type pages',//'应用于此类全部页面',
	'apply_current_page'	: 'Apply to current page',//'只应用于本页面',
	'save_temp_sure'	: 'Save temporary data?<br />Click submit to save the temporary data, click cancel to delete the temporary data.',//'是否保留暂存数据？<br />按确定按钮将保留暂存数据，按取消按钮将删除暂存数据。',
	'save_temp'		: 'Save the temporary data',//'保留暂存数据',
	'revert_last_saved'	: 'Are you sure you want to revert to previous version of saved results?',//'您确定要恢复到上一版本保存的结果吗？',
	'continue_temp_sure'	: 'Continue to DIY with temporary data?',//'是否继续暂存数据的DIY？',
	'update_completed'	: 'Updating is completed.',//'已更新完成。',
	'tab_label'		: 'Tab Label',//'tab标签',
	'temp_action'		: 'Click the "Continue" button to load the temporary data into current style,<br />Click the "Delete" button for delete temporary data.',//'按继续按钮将打开暂存数据并DIY，<br />按删除按钮将删除暂存数据。',
	'continue'		: 'Continue',//'继续',
	'block_no_rights'	: 'Sorry, you have no permission to add or edit block',//'抱歉，您没有权限添加或编辑模块',

//--------------------------------
//static/js/portal_diy_data.js
	'data_manage'		: 'Direct management of the block data',//'可直接管理模块数据',
	'quit'			: 'Quit',//'退出',
//--------------------------------
//static/js/qshare.js
	'from_tencent'		: 'I come from Tencent microblogging an open platform',//"\u6211\u6765\u81EA\u4E8E\u817E\u8BAF\u5FAE\u535A\u5F00\u653E\u5E73\u53F0",

//--------------------------------
//static/js/register.js

	'username_invalid'	: 'User name contains invalid characters',//'用户名包含敏感字符',
	'username_short'	: 'Min. 2 znaki',//'用户名小于 3 个字符',
	'username_long'		: 'Maks. 15 znaków',//'用户名超过 15 个字符',
	'passwords_not_equal'	: 'Podane hasła nie pasują do siebie',//'两次输入的密码不一致',
	'email_invalid'		: 'Pole Email zawiera niedozwolone znaki',//'Email 包含敏感字符',
	'invite_code_invalid'	: 'Przepisano błędny kod z obrazka',//'邀请码包含敏感字符',
	'password_fill'		: 'Proszę uzupełnić pole hasło',//'请填写密码',
	'password_again'	: 'Proszę uzupełnić pole potwierdzenie hasła',//'请再次输入密码',
	'email_fill'		: 'Proszę uzupełnić pole Email',//'请输入邮箱地址',
	'length_min'		: ', Minimum length',//', 最小长度为 '
	'chars'			: ' znaków',//' 个字符',
	'password_strength'	: 'Siła hasła: ',//'密码强度:',
	'pw_weak'		: 'Krótkie',//'弱',
	'pw_middle'		: 'W miarę',//'中',
	'pw_strong'		: 'Silne',//'强',
	'pass_short'		: 'Hasło jest za krótkie! Nie może zawierać mniej niż ',//'密码太短，不得少于 ',
	'digital'		: 'Digital',//'数字',
	'lowercase'		: 'Lowercase letters',//'小写字母',
	'capitals'		: 'Capital letters',//'大写字母',
	'specials'		: 'Special symbols',//'特殊符号',
	'pw_weak_info'		: 'Weak password, the password must contain ',//'密码太弱，密码中必须包含 ',

//--------------------------------
//static/js/seditor.js
	'enter_username'	: 'Wprowadź nazwę użytkownika',//'请输用户名',
	'at_friend'		: '@użytkownik zostanie poinformowany',//'@朋友账号，就能提醒他来看帖子',

//--------------------------------
//static/js/smilies.js

//--------------------------------
//static/js/space_diy.js

	'save_js'		: 'javascript saved',//'javascript脚本保存后显示',
	'settings'		: 'Ustawienia',//'设置',

//---------------------------
//static/js/swfupload.js

	'attach_file'		: 'Załącznik',

//---------------------------
//static/js/threadsort.js

	'select_please'		: 'Select please',//'请选择',
	'required_fill'		: 'Required fields not filled',//'必填项目没有填写',
	'select_next_level'	: 'Please select the next level',//'请选择下一级',
	'numeric_invalid'	: 'Numeric value is invalid',//'数字填写不正确',
	'email_invalid'		: 'E-mail address is invalid',//'邮件地址不正确',
	'text_too_long'		: 'Field value is too long',//'填写项目长度过长',
	'value_is_greater'	: 'Value is greater than the maximum',//'大于设置最大值',
	'value_is_less'		: 'Value is less than minimum',//'小于设置最小值',
	'enter_valid_url'	: 'Please enter correct URL address beginning with http://',//'请正确填写以http://开头的URL地址',

//--------------------------------
//static/js/upload.js

	'file_not_supported'	: 'Sorry, this file type is unsupported',//'对不起，不支持上传此类文件',

//-------------------------------------
//source/function/function_admincp.php
	'version_uptodate'	: 'You are currently using Up-to-date version of Discuz! program. Please refer to the following tips to make timely upgrades.',

//-------------------------------------
//api/manyou/cloud_iframe.js
	'add_operation'		: 'Add to common operations',//'&#28155;&#21152;&#21040;&#24120;&#29992;&#25805;&#20316;',

//--------------------------------------------
//static/js/googlemap.js + static/js/editor.js

	'map_title'		: 'Mapy Google',//'google图',
	'map_insert'		: 'Wprowadź lokalizację dzięki Google map',//'插入google地图',
	'map_insert_tips'	: 'Insert Google Maps by address searching (temporarily supported only single label!)',//'通过搜索插入google地图（暂只支持单点标注）！',
	'map_center_changed'	: 'The map center is changed!',//'地图中心已经改变！',
	'map_wrong_address'	: 'Błędny adres! Nie odnaleziono szukanej pozycji.',//' 地址错误，未找到当前地址',

//-------------------------------------
//	''	: '',//'',

'fiction'	: ''

};
