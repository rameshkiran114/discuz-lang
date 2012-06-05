<?php

/**---
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_email.php by Valery Votintsev at sources.ru
 *	Translated to Korean by ionobgy
 */


$lang = array
(
	'hello'				=> '안녕하세요',
	'moderate_member_invalidate'	=> '거부',
	'moderate_member_delete'	=> '삭제',
	'moderate_member_validate'	=> '통과',


	'get_passwd_subject'	=> '비밀번호 찾기 도움말',
	'get_passwd_message'	=> '
<p>{username}님，
 {bbname}에서 보내는 비밀번호 재설정 메일입니다.</p>

<p>
----------------------------------------------------------------------<br />
<strong>중요！</strong><br />
----------------------------------------------------------------------</p>
<p>본 메일을 이용하여 비밀번호를 재설정하지 않을 경우 당신의 {bbname}의 비밀번호를 다른 사람이 변경할 수 있으니 본  Email을 삭제하시기 바랍니다. </p>

<p>
----------------------------------------------------------------------<br />
<strong>비밀번호 재설정 지침</strong><br />
----------------------------------------------------------------------</p>
</p>
3일 이내에 아래의 링크를 클릭하여 비밀번호를 변경하시기 바랍니다. <br />

<a href="{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}" target="_blank">{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}</a>
<br />
(정상적으로 작동하지 않으면 위 링크를 주소창에 복사하여 실행하셔도 됩니다.)</p>

<p>3일 이내에 변경하지 않으면 본 비밀번호 재설정 기능은 무효화됩니다.</p>

<p>신청인의  IP  {clientip}</p>


<p>
감사합니다<br />
</p>
<p>{bbname} 관리자.
{siteurl}</p>',


	'email_verify_subject'	=> '이메일 주소 검증',
	'email_verify_message'	=> '
<p>{username}님,<br />
{bbname}에서 보내는 메일입니다。</p>

<p>{bbname}에  이메일로 사용자 등록을 해두지 않으면 스팸이나 잘못된 주소인지 관리자가 알기 어렵습니다。</p>
<br />
----------------------------------------------------------------------<br />
<strong>계정 활성화 지침</strong><br />
----------------------------------------------------------------------<br />

<p>활성화하려면 아래의 링크를 클릭하면 됩니다：<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(만일 정상 작동이 되지 않으면 주소창에 복사하여 실행하셔도 됩니다.)</p>


<p>
감사합니다.<br />

{bbname} 관리자.<br />
{siteurl}</p>',

	'email_register_subject' =>	'Forum registration',//'论坛注册地址',
'email_register_message' =>	'<br />
<p>This letter is sent from {bbname}.</p>

<p>You have received this message due to somebody (may be you) registered this E-Mail address at {bbname}.
If you do not want to access to {bbname}, or you did not registered at this site,
please ignore this message.

You do not need to unsubscribe or do any other further action.</p>
<br />
----------------------------------------------------------------------<br />
<strong>New user registration instructions</strong><br />
----------------------------------------------------------------------<br />
<br />
<p>If you are a {bbname} new user, or have modified your registered before Email address,
it is required to verify your mailbox address in order to avoid junk or malicious e-mail.</p>

<p>For register just click on the link below. The following link is valid for 3 days. After expired you can request to re-send the activation email to a new e-mail address:<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(If the above link is not working, copy the link URL and paste it into your browser address bar manually)</p>

<p>Thank you for your visit, we are glad to see you at our site!</p>


<p>
Sincerely yours,<br />

{bbname} management team.<br />
{siteurl}</p>',


	'add_member_subject'	=> '회원가입을 추가합니다',
	'add_member_message'	=> '
{newusername},
This letter was sent from the {bbname}.<br />
<br />
I am {adminusername}, one of the managers at {bbname}.<br />
You have received this message because you are just has been added as a member<br />
at our forum, which is our current Email address you have registered.<br />
<br />
----------------------------------------------------------------------<br />
Important!<br />
----------------------------------------------------------------------<br />
<br />
If you are not interested in our Forum or do not intend to become a member, please ignore this message.<br />
<br />
----------------------------------------------------------------------<br />
Your Account Information<br />
----------------------------------------------------------------------<br />
<br />
Forum Name: {bbname}<br />
Forum URL: {siteurl}<br />
<br />
User Name: {newusername}<br />
Password: {newpassword}<br />
<br />
From now, you can use your account to log in to our forum, I wish you a pleasant to use!<br />
<br />
<br />
<br />
Sincerely yours,<br />
<br />
{bbname} management team.<br />
{siteurl}',


	'birthday_subject'	=> '축 생일',
	'birthday_message'	=> '<br />
{username},<br />
This letter was sent from the {bbname}.<br />
<br />
You have received this message, because of this email address is registered in our forum {bbname}.<br />
In accordance with the information in your profile, today is your Birthday.<br />
Forum management team have pleased to congratulate you with your Birthday,
and sincerely wish you a happy birthday!<br />
<br />
If you are not a member of our forum, or have no birthday today, may be a mistake occure.<br />
Check for your email address and birthday in your profile.<br />
This message will not be sent to this e-mail address, please ignore this  message.<br />
<br />
<br />
Sincerely yours,
<br />
{bbname} management team.<br />
{siteurl}',

	'email_to_friend_subject'	=> '{$_G[member][username]} recommends you to visit: $thread[subject]',//'{$_G[member][username]} 推荐给您: $thread[subject]',
	'email_to_friend_message'	=> '<br />
This letter was sent to you by {$_G[member][username]} from the site {$_G[setting][bbname]}.<br />
<br />
You have received this message because of {$_G[member][username]}<br />
from the site {$_G[setting][bbname]} clicked the "Email to Friend" link<br />
for recommend to you the following.<br />
If you are not interested in this, please ignore this message.<br />
You do not need to unsubscribe or other further action.<br />
<br />
----------------------------------------------------------------------<br />
Start of original message<br />
----------------------------------------------------------------------<br />
<br />
$message<br />
<br />
----------------------------------------------------------------------<br />
End of the original message<br />
----------------------------------------------------------------------<br />
<br />
Please note that this letter was initiated by the forum user by "Email to a Friend" link!<br />
Forum management team is not responsible for such messages.<br />
<br />
<br />
Welcome to {$_G[setting][bbname]}<br />
$_G[siteurl]',

	'email_to_invite_subject'	=> 'Your friend {$_G[member][username]} invites you to register at {$_G[setting][bbname]}',//'您的朋友 {$_G[member][username]} 发送 {$_G[setting][bbname]} 论坛注册邀请码给您',
	'email_to_invite_message'	=> '<br />
$sendtoname,<br />
This letter was sent to you by {$_G[member][username]} from {$_G[setting][bbname]}.<br />
<br />
You have received this message because the user {$_G[member][username]} from {bbname}<br />
sent you an invitation code, that enable you to register at our form,<br />
and said additionally the following.<br />
<br />
!!! If you are not interested in this, please ignore this message.<br />
You do not need to unsubscribe or other further action.<br />
<br />
----------------------------------------------------------------------<br />
Start of original message<br />
----------------------------------------------------------------------<br />
<br />
$message<br />
<br />
----------------------------------------------------------------------<br />
End of the original message<br />
----------------------------------------------------------------------<br />
<br />
Please note that this letter was initiated by the user.<br />
Forum management team is not responsible for such messages.<br />
<br />
Welcome to {$_G[setting][bbname]}
$_G[siteurl]',


	'moderate_member_subject'	=> 'Audit results to inform the user',//'用户审核结果通知',
	'moderate_member_message'	=> '<br />
<p>{username},
This letter was sent from the {bbname}.</p>

<p>You have received this message, because of every new user registration
at our forum require to verify registered email address by site administrator.
After the manual verification you will be notified about the audition results.</p>
<br />
----------------------------------------------------------------------<br />
<strong>Registration info and audit results</strong><br />
----------------------------------------------------------------------<br />
<br />
User Name: {username}<br />
Registration time: {regdate}<br />
Submission time: {submitdate}<br />
Submit number: {submittimes}<br />
Registration reason: {message}<br />
<br />
Audit Results: {modresult}<br />
Audit time: {moddate}<br />
Audit Manager: {adminusername}<br />
Administrator Message: {remark}<br />
<br />
----------------------------------------------------------------------<br />
<strong>Audit results explanation</strong><br />
----------------------------------------------------------------------<br />

<p>Approved: Your registration has been approved, you have become an official user of {bbname}.</p>

<p>Rejected: Your registration information is incomplete, or does not meet some our requirements.
You can send a message to administrator, <a href="home.php?mod=spacecp&ac=profile" target="_blank">complete your registration information</a>, and then submit again.</p>

<p>Deleted: Your request for registration does not meet our requirements,
or number of new registrations exceed our possibilities.
Your request is completely rejected, your account removed from the database.
It can not be used for log in or submitted for re-examine, please understand.</p>
<br />
<br />
Sincerely yours,<br />
<br />
{bbname} management team.<br />
{siteurl}',

	'adv_expiration_subject' => 'Your site ad will be {day} days after the due, Please timely processing',//'您站点的广告将于 {day} 天后到期，请及时处理',
	'adv_expiration_message' => 'The following ads on your site will be expired {day} days, please deal with:<br /><br />{advs}',//'您站点的以下广告将于 {day} 天后到期，请及时处理：<br /><br />{advs}',
	'invite_payment_email_message'	=> '
Thank you for using the {bbname}, ({siteurl}), Your order {orderid} has been paid completed, Order has been validated.<br />
<br />----------------------------------------------------------------------<br />
Here is what you get the invitation code
<br />----------------------------------------------------------------------<br />

{codetext}

<br />----------------------------------------------------------------------<br />
Important!
<br />----------------------------------------------------------------------<br />',
);

