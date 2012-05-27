<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_threadlist.php by Valery Votintsev at sources.ru
 *      Translated to Spanish by jhoxi, discuzhispano.com
 */

$lang = array
(
	'threadlist_fids'			=> 'Foros',//'所在版块',
	'threadlist_fids_comment'		=> 'Establecer los foros puede ser llamado, puede utilizar CTRL para seleccionar los foros',//'设置允许参与新帖调用的版块，可以按住 CTRL 多选，全选或全不选均为不做限制',
	'threadlist_uids'			=> 'Autor UID',//'楼主UID',
	'threadlist_uids_comment'		=> 'Establecer que el usuario desea mostrar, use "," para separar UIDs',//'设置要楼主UID，多个UID请用半角逗号“,”隔开。',
	'threadlist_startrow'			=> 'Primera fila',//'起始数据行数',
	'threadlist_startrow_comment'		=> 'Si usted necesita para establecer la fila de inicio, por favor, introduzca un número, 0 es la primera fila',//'如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'threadlist_items'			=> 'Filas',//'显示数据条数',
	'threadlist_items_comment'		=> 'Establecer el número de filas que desea mostrar, debe entero y mayor que 0',//'设置一次显示的主题条目数，请设置为大于 0 的整数',
	'threadlist_titlelength'		=> 'Longitud del título',//'标题最大字节数',
	'threadlist_titlelength_comment'	=> 'Establecer la longitud máxima del título, cuando el título es más largo que este valor, será cortado de forma automática, 0 es desactivar',//'设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'threadlist_fnamelength'		=> 'Foro longitud del título',//'标题最大字节数包含版块名称',
	'threadlist_fnamelength_comment'	=> 'Establecer la longitud máxima del título como el nombre del foro',//'设置标题长度是否将所在版块名称的长度一同计算在内',
	'threadlist_summarylength'		=> 'Resumen de longitud',//'主题简短内容文字数',
	'threadlist_summarylength_comment'	=> 'Establecer la longitud del resumen, 0 igual al valor por defecto (255)',//'设置主题简短内容的文字数，0 为使用默认值 255',
	'threadlist_tids'			=> 'Temas especificados',//'指定主题',
	'threadlist_tids_comment'		=> 'Establecer los temas se especifica lo que desea mostrar, use "," para separar tids',//'设置要指定显示的主题 tid ，多个 tid 请用半角逗号“,”隔开。注意: 留空为不进行任何过滤',
	'threadlist_keyword'			=> 'Palabras clave',//'标题关键字',
	'threadlist_keyword_comment'		=> 'Establecer las palabras clave usadas.<br />Puede utilizar comodines "*" en las palabras clave.<br />Si usted desea utilizar algunas palabras clave al mismo tiempo, se puede utilizar "AND". Ejemplo: win32 AND unix.<br />Si desea utilizar sólo una de las palabras clave, puede utilizar "|" o "OR". Ejemplo: win32 OR unix',//'设置标题包含的关键字。注意: 留空为不进行任何过滤<br />关键字中可使用通配符 "*"<br />匹配多个关键字全部，可用空格或 "AND" 连接。如 win32 AND unix<br />匹配多个关键字其中部分，可用 "|" 或 "OR" 连接。如 win32 OR unix',
	'threadlist_tagkeyword'			=> 'Etiquetas',
	'threadlist_tagkeyword_comment' 	=> 'Elegir etiquetas (palabras clave). Nota: Dejar en blanco para la filtración; palabras clave se pueden usar comodines *; Para coincidir con una o más palabras clave utilizar | o "OR" separador, i.e. "win32 OR unix"',
	'threadlist_typeids'			=> 'Tipos de temas',//'主题分类',
	'threadlist_typeids_comment'		=> 'Seleccione el tipo de tema específico. Nota: Seleccionar todo o Borrar todo para desactivar ningún tipo de filtrado.',//'设置特定分类的主题。注意: 全选或全不选均为不进行任何过滤',
	'threadlist_typeids_all'		=> 'Todos los tipos de tema',//'全部的主题分类',
	'threadlist_sortids'			=> 'Tipo IDs(Categorías?)',//'分类信息',
	'threadlist_sortids_comment'		=> 'Establecer la clasificación de tema. Nota: Todos o Ninguno para desactivar el filtrado',//'设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'threadlist_sortids_all'		=> 'Todas las categorías',//'全部的分类信息',
	'threadlist_digest'			=> 'Digerir filtro',//'精华主题过滤',
	'threadlist_digest_comment'		=> 'Seleccione el rango de tema específico. Nota: Todos o Ninguno para desactivar el filtrado',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'threadlist_digest_0'			=> 'Tema general',//'普通主题',
	'threadlist_digest_1'			=> 'Digerir I',//'精华 I',
	'threadlist_digest_2'			=> 'Digerir II',//'精华 II',
	'threadlist_digest_3'			=> 'Digerir III',//'精华 III',
	'threadlist_stick'			=> 'Pegar filtro',//'置顶主题过滤',
	'threadlist_stick_comment'		=> 'Seleccione el rango de tema específico. Nota: Todos o Ninguno para desactivar el filtrado',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'threadlist_stick_0'			=> 'Tema general',//'普通主题',
	'threadlist_stick_1'			=> 'Pegar I',//'置顶 I',
	'threadlist_stick_2'			=> 'Pegar II',//'置顶 II',
	'threadlist_stick_3'			=> 'Pegar III',//'置顶 III',
	'threadlist_special'			=> 'Filtro de tema especial',//'特殊主题过滤',
	'threadlist_special_comment'		=> 'Seleccione el rango de tema específico. Nota: Todos o Ninguno para desactivar el filtrado',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'threadlist_special_1'			=> 'Tema de Encuesta',//'投票主题',
	'threadlist_special_2'			=> 'Tema de Mercado',//'商品主题',
	'threadlist_special_3'			=> 'Tema de Premio',//'悬赏主题',
	'threadlist_special_4'			=> 'Tema de Evento',//'活动主题',
	'threadlist_special_5'			=> 'Tema de Debate',//'辩论主题',
	'threadlist_special_0'			=> 'Tema general',//'普通主题',
	'threadlist_special_reward'		=> 'Filtro de recompensa',//'悬赏主题过滤',
	'threadlist_special_reward_comment'	=> 'Seleccione los tipos específicos de recompensa',//'设置特定类型的悬赏主题',
	'threadlist_special_reward_0'		=> 'Todos',//'全部',
	'threadlist_special_reward_1'		=> 'Terminado',//'已解决',
	'threadlist_special_reward_2'		=> 'Activo',//'未解决',
	'threadlist_recommend'			=> 'Tema de filtro recomendado',//'推荐主题过滤',
	'threadlist_viewmod'			=> 'Portal modo de visualización',//'门户模式查看',
	'threadlist_recommend_comment'		=> 'Mostrar sólo los temas recomendados',//'设置是否只显示推荐的主题',
	'threadlist_picrequired'		=> 'Archivo adjunto de imagen requerida',//'必须含图片附件',
	'threadlist_picrequired_comment'	=> 'Situado a sólo para ver subprocesos contienen archivos adjuntos de imagen',//'设置是否只显示含有图片附件的主题',
	'threadlist_orderby'			=> 'Ordenar por',//'主题排序方式',
	'threadlist_orderby_comment'		=> 'Establecer el orden de los temas',//'设置以哪一字段或方式对主题进行排序',
	'threadlist_orderby_lastpost'		=> 'Último post',//'按最后回复时间倒序排序',
	'threadlist_orderby_dateline'		=> 'Hora de inicio',//'按发布时间倒序排序',
	'threadlist_orderby_replies'		=> 'Respuestas',//'按回复数倒序排序',
	'threadlist_orderby_views'		=> 'Vistas',//'按浏览次数倒序排序',
	'threadlist_orderby_heats'		=> 'Nuevo',//'按热度倒序排序',
	'threadlist_orderby_recommends'		=> 'Recomendar',//'按主题评价倒序排序',
	'threadlist_orderby_hourviews'		=> 'Vistas dentro del tiempo especificado',//'按指定时间内浏览次数倒序排序',
	'threadlist_orderby_todayviews'		=> 'Visitas hoy',//'按当天浏览次数倒序排序',
	'threadlist_orderby_weekviews'		=> 'Vistas la semana pasada',//'按本周浏览次数倒序排序',
	'threadlist_orderby_monthviews'		=> 'Visitas el mes pasado',//'按当月浏览次数倒序排序',
	'threadlist_orderby_hours'		=> 'Seleccionar tiempo (horas)',//'指定时间(小时)',
	'threadlist_orderby_hours_comment'	=> 'Establecer el tiempo específico de vistas',//'指定时间内浏览次数倒序排序的时间值',
	'threadlist_orderby_todayhots'		=> 'Nuevos hoy',//'按当天累计售出数倒序排序',
	'threadlist_orderby_weekhots'		=> 'Nuevos la semana pasada',//'按本周累计售出数倒序排序',
	'threadlist_orderby_monthhots'		=> 'Nuevos el mes pasado',//'按当月累计售出数倒序排序',
	'threadlist_lastpost'			=> 'Último post',//'最后更新时间',
	'threadlist_postdateline'		=> 'Tiempo de la publicación',
	'threadlist_postdateline_nolimit'	=> 'Cualquier',
	'threadlist_postdateline_hour'		=> 'Última hora',
	'threadlist_postdateline_day'		=> 'Último día',
	'threadlist_postdateline_week'		=> 'Semana pasada',
	'threadlist_postdateline_month'		=> 'Mes pasado',
	'threadlist_lastpost_nolimit'		=> 'Sin límite',//'不限制',
	'threadlist_lastpost_hour'		=> 'Última hora',//'1小时内',
	'threadlist_lastpost_day'		=> 'Último día',//'24小时内',
	'threadlist_lastpost_week'		=> 'Semana pasada',//'7天内',
	'threadlist_lastpost_month'		=> 'Mes pasado',//'1个月内',
	'threadlist_price_add'			=> ' Adicional ',//' 附加 ',
	'threadlist_place'			=> 'Lugares',//'活动地点',
	'threadlist_class'			=> 'Tipo',//'活动类型',
	'threadlist_gender'			=> 'Género',//'性别要求',
	'threadlist_gender_0'			=> 'Cualquier',//'不限',
	'threadlist_gender_1'			=> 'Masculino',//'男',
	'threadlist_gender_2'			=> 'Femenino',//'女',
	'threadlist_orderby_weekstart'		=> 'Comenzó la semana pasada',//'按一周内活动开始时间排序',
	'threadlist_orderby_monthstart'		=> 'Comenzó el mes pasado',//'按一月内活动开始时间排序',
	'threadlist_orderby_weekexp'		=> 'Expiró la semana pasada',//'按一周内报名截止时间排序',
	'threadlist_orderby_monthexp'		=> 'Expiró el mes pasado',//'按一月内报名截止时间排序',
	'threadlist_highlight'			=> 'Resalta las palabras encontradas',
);

