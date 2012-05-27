<?php

/**---
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_email.php by Valery Votintsev at sources.ru
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}


$lang = array
(
	'hello'				=> 'Привет',
	'moderate_member_invalidate'	=> 'Отклонить',
	'moderate_member_delete'	=> 'Удалить',
	'moderate_member_validate'	=> 'Принять',


	'get_passwd_subject'	=> 'Инструкция по смене пароля',
	'get_passwd_message'	=> '
<p>{username},
данное письмо было отправлено Вам с сайта {bbname}</p>

<p>Вы получили это сообщение, так как данный адрес электронной почты зарегистрирован в качестве почтового ящика пользователя.
Это сообщение было отправлено по запросу на восстановление пароля.</p>
<p>
----------------------------------------------------------------------<br />
<strong>Важно!</strong><br />
----------------------------------------------------------------------</p>

<p>Если Вы не делали запроса на сброс пароля, или не являетесь зарегистрированным пользователем нашего сайта,
просим Вас просто проигнорировать и удалить данное сообщение.
Если Вы действительно хотите сбросить пароль,
настоятельно советуем прочитать информацию ниже:</p>
<p>
----------------------------------------------------------------------<br />
<strong>Инструкция по смене пароля</strong><br />
----------------------------------------------------------------------</p>
</p>
Для сброса пароля Вам необходимо перейти по нижеуказанной ссылке.
Ссылка действительна в течении 3 дней:<br />

<a href="{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}" target="_blank">{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}</a>
<br />
(Если ссылка не открывается в браузере, скопируйте ее вручную и вставьте в адресную строку Вашего браузера)</p>

<p>В открывшейся странице введите Ваш новый пароль.
Позднее Вы можете изменить свой пароль в своем профиле в любое время.</p>

<p>Запрос сделан с IP-адреса: {clientip}</p>


<p>
С уважением,<br />
</p>
<p> команда сайта {bbname}.
{siteurl}</p>',


	'email_verify_subject'	=> 'Активация Email адреса',
	'email_verify_message'	=> '
<p>{username},
данное письмо было отправлено Вам с сайта {bbname}</p>
<p>Вы получили данное письмо потому что только что зарегистрировались на нашем сайте
или отправили запрос на изменение Email.
Если Вы не подавали заявки на изменение EMAIL,
или Вы не являетесь зарегистрированным пользователем нашего сайта,
просто проигнорируйте и удалите данное сообщение.
Вам не нужно предпринимать никаких мер по отписке или других действий.</p>
<br />
----------------------------------------------------------------------<br />
<strong>Инструкция по активации Email</strong><br />
----------------------------------------------------------------------<br />
<br/>
<p>Данная проверка Email необходима для подтверждения,
что введённый Email верный и актуальный.</p>

<p>Для активации Вашего Email перейдите по указанной ниже ссылке:<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(Если ссылка не открывается в браузере, скопируйте ее вручную и вставьте в адресную строку Вашего браузера)</p>

<p>Спасибо за Ваш визит, и всего Вам наилучшего!</p>


<p>
С уважением,<br />

команда сайта {bbname}.
{siteurl}</p>',

	'email_register_subject' =>	'论坛注册地址',
	'email_register_message' =>	'<br />
<p>这封信是由 {bbname} 发送的。</p>

<p>您收到这封邮件，是由于在 {bbname} 获取了新用户注册地址使用
了这个邮箱地址。如果您并没有访问过 {bbname}，或没有进行上述操作，请忽
略这封邮件。您不需要退订或进行其他进一步的操作。</p>
<br />
----------------------------------------------------------------------<br />
<strong>新用户注册说明</strong><br />
----------------------------------------------------------------------<br />
<br />
<p>如果您是 {bbname} 的新用户，或在修改您的注册 Email 时使用了本地址，我们需
要对您的地址有效性进行验证以避免垃圾邮件或地址被滥用。</p>

<p>您只需点击下面的链接即可进行用户注册，以下链接有效期为3天。过期可以重新请求发送一封新的邮件验证：<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(如果上面不是链接形式，请将该地址手工粘贴到浏览器地址栏再访问)</p>

<p>感谢您的访问，祝您使用愉快！</p>


<p>
此致<br />

{bbname} 管理团队.<br />
{siteurl}</p>',


	'add_member_subject'	=> 'Регистрация на сайте {bbname}',
	'add_member_message'	=> '
{newusername},
данное письмо автоматически отправлено Вам с сайта {bbname}.<br />
<br />
Администратор {adminusername} сайта {bbname} информирует Вам о том,<br />
что Вы получили это письмо в связи с регистрацией на нашем сайте<br />
данного Email в качестве почтового ящика пользователя.<br />
<br />
----------------------------------------------------------------------<br />
Важно!<br />
----------------------------------------------------------------------<br />
<br />
Если Вы не регистрировались на нашем сайте,<br />
или не заинтересованы быть участником сайта,<br />
просто проигнорируйте и удалите это сообщение.<br />
<br />
----------------------------------------------------------------------<br />
Информация о регистрации:<br />
----------------------------------------------------------------------<br />
<br />
Сайт: {bbname}<br />
Адрес: {siteurl}<br />
<br />
Пользователь: {newusername}<br />
Пароль: {newpassword}<br />
<br />
Начиная с этого момента, Вы являетесь полноправным участником сайта<br />
и можете использовать вашу учетную запись для входа.<br />
Желаем Вам приятного времяпрепровождения на нашем сайте!<br />
<br />
<br />
<br />
С уважением,<br />
<br />
команда сайта {bbname}.<br />
{siteurl}',


	'birthday_subject'	=> 'Поздравляем с Днём рождения!',
	'birthday_message'	=> '<br />
{username},<br />
данное письмо автоматически отправлено Вам с сайта {bbname}.<br />
<br />
Вы получили это письмо, поскольку зарегистрировали данный Email в качестве почтового ящика пользователя.<br />
Судя по информации, указанной Вами в Вашем профиле, у Вас сегодня День Рождения.<br />
<br />
Примите искренние поздравления от команды {bbname}!<br />
Мы поздравляем Вас с Днем рождения и желаем Вам счастья, здоровья и всего самого наилучшего!<br />
<br />
P.S.<br />
Если это ошибка, и Ваш день рождения не сегодня,<br />
то, просим Вас проверить и уточнить дату рождения в Вашем профиле.<br />
Данное сообщение не будет отправлено повторно, и Вы можете его проигнорировать.<br />
<br />
С уважением,<br />
команда сайта {bbname}.<br />
{siteurl}',

	'email_to_friend_subject'	=> 'Пользователь {$_G[member][username]} рекомендует Вам посетить: $thread[subject]',
	'email_to_friend_message'	=> '<br />
Данное сообщение отправлено Вам пользователем {$_G[member][username]} с сайта {$_G[setting][bbname]}.<br />
<br />
Вы получили это сообщение, так как пользователь {$_G[member][username]} с сайта {$_G[setting][bbname]}<br />
отправил Вам рекомендацию просмотреть тему, которая может быть Вам интересна.<br />
Вам не нужно предпринимать никаких мер по отписке или других действий.<br />
<br />
----------------------------------------------------------------------<br />
Текст сообщения<br />
----------------------------------------------------------------------<br />
<br />
$message<br />
<br />
----------------------------------------------------------------------<br />
Конец текста сообщения<br />
----------------------------------------------------------------------<br />
<br />
Обратите внимание, что данное письмо инициировано пользователем по ссылке "Сообщить другу"!<br />
Наша команда не отвечает за такие сообщения. Однако мы готовы принять необходимые меры, если Вы считаете это письмо спамом.<br />

<br />
Добро пожаловать на наш сайт {$_G[setting][bbname]}<br />
$_G[siteurl]!',

	'email_to_invite_subject'	=> 'Приглашение на сайт {$_G[setting][bbname]} от пользователя {$_G[member][username]}',
	'email_to_invite_message'	=> '<br />
$sendtoname,<br />
Данное письмо отправлено Вам пользователем {$_G[member][username]} с сайта {$_G[setting][bbname]}.<br />
<br />
Вы получили данное письмо, так как пользователь {$_G[member][username]}<br />
отправил Вам "Код приглашения", который позволяет Вам зарегистрироваться на нашем сайте.<br />
<br />
!!! Если Вы не заинтересованы в этом, пожалуйста, проигнорируйте это сообщение.<br />
Вам не нужно предпринимать никаких мер по отписке или других действий.<br />
<br />
----------------------------------------------------------------------<br />
Текст сообщения<br />
----------------------------------------------------------------------<br />
<br />
$message<br />
<br />
----------------------------------------------------------------------<br />
Конец текста сообщения<br />
----------------------------------------------------------------------<br />
<br />
Обратите внимание, что данное письмо инициировано пользователем по ссылке "Сообщить другу"!<br />
Наша команда не отвечает за такие сообщения. Однако мы готовы принять необходимые меры, если Вы считаете это письмо спамом.<br />
<br />
Добро пожаловать на наш сайт {$_G[setting][bbname]}<br />
$_G[siteurl]!',


	'moderate_member_subject'	=> 'Сообщение о проверке пользователя',
	'moderate_member_message'	=> '<br />
<p>{username},
данное письмо было отправлено Вам с сайта {bbname}.</p>
<p>Вы получили это письмо в связи с тем, что при регистрациии на нашем сайте
требуется ручная проверка Email администратором.
После проверки Вам будет отправлено уведомление о результате проверки.</p>
<br />
----------------------------------------------------------------------<br />
<strong>Информация о регистрациии и результаты проверки</strong><br />
----------------------------------------------------------------------<br />
<br />
Имя пользователя: {username}<br />
Дата регистрации: {regdate}<br />
Дата подачи заявки: {submitdate}<br />
Количество заявок: {submittimes}<br />
Причина регистрации: {message}<br />
<br />
Результат проверки: {modresult}<br />
Дата проверки: {moddate}<br />
Проверил: {adminusername}<br />
Примечание: {remark}<br />
<br />
----------------------------------------------------------------------<br />
<strong>Примечания к результатам проверки</strong><br />
----------------------------------------------------------------------<br />

<p>Ваша регистрация одобрена, Вы стали официальным участником нашего сайта.</p>

<p>Отклонено:
Ваша персональная информация является неполной или не соответствует нашим требованиям.
Вы можете <a href="home.php?mod=spacecp&ac=profile" target="_blank">завершить оформление Ваших персональных данных</a>,
и затем снова подать заявку на регистрацию.</p>

<p>Удалено:
Предоставленная Вами информация не соответствует нашим требованиям,
или достигнут лимит наших возможностей по регистрации новых аккаунтов.
Ваша заявка была отклонено, а Ваша учетная запись удалена из базы данных.
Ваши учетная запись не может быть использована для входа на сайт
или повторной отправки заявки на регистрацию.</p>
<p>Приносим наши извинения за доставленные неудобства.</p>
<br />
<br />
С уважением,<br />
<br />
команда сайта {bbname}.<br />
{siteurl}',

	'adv_expiration_subject'	=> 'Срок размещения рекламы истекает через {day} дн.!',
	'adv_expiration_message'	=> 'Период размещения Ваших рекламных объявлений заканчивается через {day} дн.<br /><br />{advs}',
	'invite_payment_email_message'	=> '
Спасибо за посещение сайта {bbname} ({siteurl})!<br />
Ваш заказ {orderid} на код приглашения оплачен, заказ проверен и одобрен.<br />
<br />----------------------------------------------------------------------<br />
Ваш код приглашения
<br />----------------------------------------------------------------------<br />

{codetext}

<br />----------------------------------------------------------------------<br />
Важно!
<br />----------------------------------------------------------------------<br />',
);

