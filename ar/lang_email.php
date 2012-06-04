<?php

/**---
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_email.php by Valery Votintsev at sources.ru
 *      Arabic by Khalid Nahhal, http://www.ar-discuz.com
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}


$lang = array
(
	'hello'				=> 'السلام عليكم',//'你好',
	'moderate_member_invalidate'	=> 'Decline',//'否决',
	'moderate_member_delete'	=> 'حذف',//'删除',
	'moderate_member_validate'	=> 'موافقة',//'通过',


	'get_passwd_subject'	=> 'استعادة كلمة المرور',//'取回密码说明',
	'get_passwd_message'	=> '
<p>{username},
هذه الرسالة تم إرسالها من {bbname}.</p>

<p>أنت استقبلت الرسالة , لان هذا البريد هو البريد الذي سجلت به في المنتدى,
وطلب إعادة تعيين كلمة المرور.</p>
<p>
----------------------------------------------------------------------<br />
<strong>هام!</strong><br />
----------------------------------------------------------------------</p>
<p>اذا لم تطلب ارجاع كلمة المرور أو التذكير بها أو انك غير مسجل بالمنتدى,
الرجاء تجاهل هذه الرسالة وحذفها.
اذا كنت طلب ارجاع كلمة المرور واعادة تعيينها,
يجب عليك قراءة المحتوى التالي.</p>
<p>
----------------------------------------------------------------------<br />
<strong>تعليمات استعادة كلمة المرور</strong><br />
----------------------------------------------------------------------</p>
</p>
يجب عليك الضغط على الرابط ادناه لاستعادة كلمة المرور :<br />

<a href="{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}" target="_blank">{siteurl}member.php?mod=getpasswd&amp;uid={uid}&amp;id={idstring}</a>
<br />
(اذا لم يعمل الرابط اعلاه, الرجاء نسخه ولصقه في شريط العناوين الخاص بالمتصفح .)</p>

<p>بعد فتح الرابط, اكتب كلمة المرور الجديدة , ثم يمكنك إستخدام كلمة المرور الجدية اثناء تسجيل الدخول.
يمكنك تغيير كلمة المرور من لوحة تحكم العضو بأي وقت من الاوقات.</p>

<p>طلب إسترجاع كلمة المرور جاء من الاي بي التالي: {clientip}</p>


<p>
مع خالص التقدير لك ,<br />
</p>
<p> إدارة  {bbname} .
{siteurl}</p>',


	'email_verify_subject'	=> 'تفعيل البريد الإلكتروني',//'Email 地址验证',
	'email_verify_message'	=> '
<p>{username},
تم إرسال لك الرسالة من  {bbname}.</p>
<p>أنت استقبلت هذه الرسالة, بسبب الأعضاء الجدد بالمنتدى,
أو عضو استخدم بريدك.
اذا لم تزر منتدانا, أو غير مهتم ,
الرجاء تجاهل هذه الرسالة.
يجب عليك قراء الارشادات حتى تطبق العملية.</p>
<br />
----------------------------------------------------------------------<br />
<strong>تعليمات تفعيل العضوية</strong><br />
----------------------------------------------------------------------<br />

<p>أنت عضو جديد في منتدانا, أو قد عدلت بريدك الإلكتروني,
نحن يجب علينا أن نتحقق من البريد الإلكتروني الخاص بك.</p>

<p>لتفعيل بريدك الإلكتروني الرجاء الضغط على الرابط ادناه:<br />

<a href="{url}" target="_blank">{url}</a>
<br />
(اذا لم يعمل الرابط اعلاه, الرجاء نسخه ولصقه في شريط العناوين الخاص بالمتصفح .)</p>

<p>شكراً لزيارتك وأتمنى أن تكون سعيدا! </p>


<p>
مع خالص التحية لك,<br />

ادراة  {bbname} .<br />
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


	'add_member_subject'	=> 'تم اضافك كعضو جديد في منتدانا',//'您被添加成为会员',
	'add_member_message'	=> '
{newusername},
هذه الرسالة تم إرسالها من  {bbname}.

أنا {adminusername}, اداري في منتدى  {bbname}. أنت استقبلت هذه ا لرسالة بسببإنضمامك عضو لدينا
في منتدانا , بهذا البريد .

----------------------------------------------------------------------
هام!
----------------------------------------------------------------------

إذا كنت لا ترغب في منتدانا أو لا تنوي أن تصبح عضوا، الرجاء تجاهل هذه الرسالة.


----------------------------------------------------------------------
معلومات عضويتك!
----------------------------------------------------------------------

إسم المنتدى: {bbname}
عنوان المنتدى:{siteurl}

إسم المستخدم: {newusername}
كلمة المرور: {newpassword}

من الان، يمكنك إستخدام الحساب لتسجيل الدخول إلى منتدانا، وأتمنى لكم طيب للاستخدام!



مع خالص التحية لك,

ادراة {bbname} .
{siteurl}',


	'birthday_subject'	=> 'عيد ميلاد سعيد!',//'祝您生日快乐',
	'birthday_message'	=> '
{username},
تم إرسال هذه الرسالة من  {bbname}.

أنت استقبلت هذه الرسالة, لان هذا البريد مسجل لدى سجلات منتدانا.
وفقا للمعلومات في ملف التعريف الخاص بك، اليوم هو عيد ميلادك.

ويسر فريق إدارة المنتدى أن يهنئكم بعيد ميلادك ،
 وأتمنى لك عيد ميلاد سعيد!


ملاحظة
اذا لم تكن عضوا في منتدانا, أو اليوم هو ليس عيد ميلادك,
ربما هناك خطأ.
الرجاء تفحص بريدك وتاريخ ميلادك.
هذه الرسالةسوف لا يتم إرسالها إلى هذا البريد,  الرجاء تجاهل هذه الرسالة .


مع خالص التحية لك,

إدارة {bbname} .
{siteurl}',

	'email_to_friend_subject'	=> '{$_G[member][username]} يدعوك لزيارة : $thread[subject]',//'{$_G[member][username]} 推荐给您: $thread[subject]',
	'email_to_friend_message'	=> '
This letter was sent to you by {$_G[member][username]} من  {$_G[setting][bbname]}.

أنت استقبلت هذه الرسالة بسبب  {$_G[member][username]} من  {$_G[setting][bbname]}
إضغط على "إرسال إلى صديق" لشيئ مستحسن لك .
اذا لم تستمتع بالرسالة , الرجاء تجاهلها.


----------------------------------------------------------------------
بداية الرسالة الاصلية
----------------------------------------------------------------------

$message

----------------------------------------------------------------------
نهاية الرسالة الاصلية
----------------------------------------------------------------------

هذه الرسالة تم ارسلها بواسطة صديق لك بمنتدانا  "رسالة إلى صديق" !
إدارة المنتدى ليس لها علاقه بهذه الرسالة.


مرحبا بك في {$_G[setting][bbname]}
$_G[siteurl]',

	'email_to_invite_subject'	=> 'صديقك {$_G[member][username]} يدعوك للتسجيل في  {$_G[setting][bbname]}',//'您的朋友 {$_G[member][username]} 发送 {$_G[setting][bbname]} 论坛注册邀请码给您',
	'email_to_invite_message'	=> '
$sendtoname,
تم إرسال هذه الرسالة بواسطة {$_G[member][username]} من  {$_G[setting][bbname]}.

أنت استقبلت هذه الرسالة بسبب العضو  {$_G[member][username]}
من منتدانا ارسل لك كود دعوة, للسماح لك بالتسجيل بمنتدانا .

!!!اذا لم تستمتع بالرسالة ولا تريد الالتحاق , الرجاء تجاهل هذه الرسالة.

----------------------------------------------------------------------
بداية الرسالة الاصلية
----------------------------------------------------------------------

$message

----------------------------------------------------------------------
نهاية الرسالة الاصلية
----------------------------------------------------------------------

هذه الرسالة هي من صديقك.
ولا علاقة إدارة المنتدى بهذه الرسالة.

مرحبا بك في  {$_G[setting][bbname]}
$_G[siteurl]',


	'moderate_member_subject'	=> 'مراجعة الحساب',//'مراجعة الحساب',
	'moderate_member_message'	=> '<p>{username},
تم إرسال هذه الرسالة من  {bbname}.</p>
<p>أنت استقبلت هذه الرسالة , بسبب كل تسجيل مستخدم جديد
 في منتدانا تتطلب التحقق من عنوان البريد الإلكتروني المسجل من قبل المسؤول عن الموقع.
وبعد التحقق اليدوي يتم إعلامك عن نتائج الاختبار.
</p>

----------------------------------------------------------------------<br />
<strong>معلومات التسجيل والنتائج</strong><br />
----------------------------------------------------------------------<br />

إسم المستخدم: {username}<br />
تاريخ التسجيل: {regdate}<br />
وقت تسجيل الدخول: {submitdate}<br />
رقم الموافقة: {submittimes}<br />
سبب التسجيل: {message}<br />
<br />
نتائج المراجعة: {modresult}<br />
وقت المراجعة: {moddate}<br />
مدير المراجعة: {adminusername}<br />
رسالة المدير: {remark}<br />
<br />

----------------------------------------------------------------------<br />
<strong>تفسير نتائج المراجعة</strong><br />
----------------------------------------------------------------------<br />

<p>تم القبول: لقد تمت الموافقة على التسجيل , اصبحت الآن عضوا رسميا في منتدانا.</p>

<p>مرفوض:
معلومات التسجيل الخاصة بك غير مكتملة ،
 أو لا يلبي بعض متطلباتنا.
 يمكنك إرسال رسالة إلى المدير،
 استكمال تسجيل المعلومات الخاصة بك،
 ثم قدم.
</p>

<p>تم الحذف:
طلبك للتسجيل لا يلبي احتياجاتنا،
أو المنتدى اكتفى بعدد الأعضاء.
طلبك مرفوض  تماما ، تم ازالة حسابك  من قاعدة البيانات.
ولا يمكن استخدامها لتسجيل الدخول أو التقديم لإعادة النظر،
يرجى الفهم.
</p>
<br />
<br />
مع خالص التحية لك,<br />
<br />
إدارة  {bbname}.<br />
{siteurl}',


	'adv_expiration_subject' => 'سوف تكون مدة الإعلان في موقعك  {day} يوم, يرجى الاتفاق',
	'adv_expiration_message' => 'الإعلان التالي على موقعك سينتهي خلال {day} يوم, الرجاء الاتفاق:<br /><br />{advs}',
	'invite_payment_email_message'	=> '
مرحبا بك في  {bbname} ({siteurl}), وقد تم دفع طلبك {orderid} وتم التحقق منه<br />
<br />----------------------------------------------------------------------<br />
هنا هو ما يمكنك الحصول على رمز الدعوة
<br />----------------------------------------------------------------------<br />

{codetext}

<br />----------------------------------------------------------------------<br />
Important!
<br />----------------------------------------------------------------------<br />',
);

