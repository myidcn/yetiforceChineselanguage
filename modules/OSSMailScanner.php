<?php
/**
 * OSSMailScanner 简体中文语言包
 * @package www.idercn.com
 * @版权所有 www.idercn.com
 * @license YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @作者 www.idercn.com <idmaster@163.com>
 */
$languageStrings = [
	'OSSMailScanner' => '邮件扫描程序',
	'OSSMailScanner_manual' => '邮件扫描程序',
	'E-mail Accounts' => '电子邮件帐户',
	'Action' => '操作',
	'Desc' => '描述',
	'username' => '用户名',
	'mail_host' => '服务器',
	'language' => '语言',
	'nazwa' => '程序名称',
	'katalog' => '文件路径',
	'opis' => '描述',
	'CreatedEmail' => '创建电子邮件',
	'BindContacts' => '关联到联系人',
	'BindAccounts' => '关联到客户',
	'BindLeads' => '关联到潜在客户',
	'BindSSalesProcesses' => '关联到销售机会',
	'BindHelpDesk' => '关联到支持人员',
	'BindProject' => '关联到项目',
	'BindServiceContracts' => '关联到服务合同',
	'BindCompetition' => '关联到竞争对手',
	'BindOSSEmployees' => '关联到员工',
	'BindPartners' => '关联到合作伙伴',
	'BindVendors' => '关联到供应商',
	'BindCampaigns' => '关联到市场活动',
	'created_Accounts' => '创建帐户',
	'created_Contacts' => '创建联系人',
	'CreatedHelpDesk' => '创建服务支持',
	'update_HelpDesk' => '更新服务支持',
	'update_Accounts' => '更新客户',
	'update_Contacts' => '更新联系人',
	'desc_CreatedEmail' => '向CRM中添加电子邮件消息.',
	'desc_BindCompetition' => '创建“包含电子邮件地址的竞争记录”和“邮件消息”之间的关联.',
	'desc_BindOSSEmployees' => '创建电子邮件消息与包含电子邮件地址的员工之间的联系.',
	'desc_BindPartners' => '创建电子邮件消息与包含电子邮件地址的合作伙伴之间的联系.',
	'desc_BindVendors' => '创建电子邮件消息与包含电子邮件地址的供应商之间的联系.',
	'desc_BindContacts' => '创建电子邮件消息与包含电子邮件地址的联系人之间的联系.',
	'desc_BindAccounts' => '创建电子邮件消息与包含此电子邮件地址的客户之间的联系.',
	'desc_BindLeads' => '创建电子邮件消息与包含此电子邮件地址的潜在客户之间的联系.',
	'desc_BindSSalesProcesses' => '创建电子邮件消息与包含此电子邮件地址的潜在客户之间的联系.',
	'desc_BindHelpDesk' => '创建电子邮件与基于主题编号前缀的帮助台记录的关系。',
	'desc_BindProject' => '创建电子邮件与基于主体编号前缀的项目之间的关系。',
	'desc_BindServiceContracts' => '创建电子邮件与相关客户项目的关系。',
	'desc_BindCampaigns' => '创建电子邮件与基于主体编号前缀的市场活动的关系。',
	'desc_created_Accounts' => '创建帐户详情',
	'desc_created_Contacts' => '创建联系人详情',
	'desc_CreatedHelpDesk' => '创建服务支持详情.',
	'desc_update_HelpDesk' => '更新服务支持详情',
	'desc_update_Accounts' => '更新帐户详情',
	'desc_update_Contacts' => '更新联系人详情',
	'Folder configuration' => '文件夹设置',
	'Actions' => '操作',
	'MailView config' => '设置',
	'General Configuration' => '常规设置',
	'Search email configuration' => '搜索电子邮件设置',
	'LBL_TICKET_REOPEN' => '创建/新开服务单',
	'LBL_OPEN_TICKET' => '新开服务单并设置为‘等待回应’状态',
	'LBL_CREATE_TICKET' => '创建新服务单',
	'LBL_NO_ACTION' => '关联到现有服务单 (如果增加了关联操作)',
	'LBL_CONFTAB_CHANGE_TICKET_STATUS' => '当我们收到关于一封服务单已关闭的邮件时，扫描程序该怎么办？',
	'Alert_no_module_title' => '本模块未找到或处于关闭状态.',
	'Alert_no_module_desc' => '扫描模块要求您安装并激活OSSMail模块。 检查是否安装了该模块，如果没有，则需要安装。',
	'Alert_no_accounts_title' => '电子邮件帐户未找到',
	'Alert_no_accounts_desc' => '如果要启用电子邮件扫描程序，您首先需要录到 OSSMail 模块中的电子邮件帐户。',
	'Alert_info_tab_actions' => '带电子邮件操作的文件位于:modules/OSSMailScanner/scanneractions/',
	'Alert_no_email_acconts' => '电子邮件帐户未找到',
	'Alert_no_email_acconts_desc' => '要配置您需要首先登录到所选邮箱的文件夹。',
	'Alert_info_tab_email_search' => '选择将用于搜索电子邮件收件人的字段。',
	'Alert_info_tab_folder' => '选择下载电子邮件时，将被扫描的文件夹. ',
	'Alert_info_tab_accounts' => '选择何种行动应触发的个人电子邮件帐户.',
	'Alert_info_tab_record_numbering' => '前缀用于将电子邮件与crm中的其他数据相关联。 电子邮件的关系仅适用于配置了前缀的模块（不能是空的）。',
	'Alert_active_cron' => '计划中没有活动的任务。',
	'Alert_active_cron_desc' => '在模块扫描计划中找不到任务，或任务之一处于禁用状态。只有所有的扫描模块启用，电子邮件扫描程序才能正常工作。（MailScannerAction，MailScannerVerification）',
	'Alert_active_crontime' => '计划调用的频率不正确。',
	'Alert_active_crontime_desc' => '“MailScannerAction”任务的调用频率应该至少是“MailScannerVerification”任务频率的两倍',
	'All_folder' => '全部',
	'Received' => '收到',
	'Sent' => '已发送',
	'Spam' => '垃圾邮件',
	'Trash' => '垃圾箱',
	'Function_list' => '程序列表',
	'Folder_list' => '文件夹列表',
	'Record Numbering' => '前缀',
	'ConfigCustomRecordNumbering' => '编号的设置',
	'Module' => '模块',
	'Alert_scanner_not_work' => '没有前缀，邮件扫描不工作',
	'Roundcube config' => 'Roundcube设置',
	'LBL_SAVE' => '保存设置',
	'Spam' => '垃圾邮件',
	'JS_save_info' => '已保存的操作列表',
	'JS_saveuser_info' => '用户已保存',
	'LBL_SAVE_FOLDER_INFO' => '已保存的文件夹列表',
	'JS_save_fields_info' => '已保存的字段列表',
	'JS_save_config_info' => '设置已保存',
	'Cron' => '定时任务',
	'RunCron' => '开始手动扫描',
	'startTime' => '开始时间',
	'endTime' => '结束时间',
	'status' => '状态',
	'account' => '客户',
	'action' => '操作',
	'folder' => '文件夹',
	'count' => '已检查的电子邮件',
	'who' => '用户',
	'OK' => '好',
	'In progress' => '执行中',
	'Error' => '错误',
	'email_to_notify' => '通知邮件',
	'time_to_notify' => '通知的时间（分钟）',
	'StopCron' => '手动停止扫描',
	'Manually stopped' => '手动停止',
	'stop_user' => '停止扫描',
	'Email_Subject' => '通知:定时任务运行时间太长',
	'Email_Body' => '你好<br /><br />定时任务运行时间太长，请检查邮件系统是否工作正常。<br /><br />管理员敬致',
	'Email_FromName' => '邮件扫描程序',
	'JS_info_restart_ok' => '定时任务已解锁',
	'permissions_all' => '对所有可见',
	'permissions_vtiger' => '基于vtiger的权限',
	'permissions_user_email' => '基于用户地址',
	'Permissions' => '权限',
	'User' => '用户',
	'None' => '选择用户',
	'User list' => '用户列表',
	'identities_name' => '标识名称',
	'identities_adress' => '标识地址',
	'identities_del' => '删除标识',
	'show_identities' => '显示标识',
	'IMAP_ERROR' => '无法连接到电子邮件服务器',
	'ERROR_ACTIVE_CRON' => '无法打开扫描，因为当前的定时任务处于活动状态.',
	'Change ticket status' => '服务单状态更改',
	'Change_ticket_status' => '更新服务单状态',
	'Alert_info_conftab_change_ticket_status' => '此选项允许将服务单状态更改为"回复"，当邮件扫描器发现从服务单的客户发来一封电子邮件时.',
	'Action_DisabledModule' => '禁用模块',
	'Action_EnabledModule' => '启用模块',
	'Action_UpdateModule' => '更新模块',
	'Action_InstallModule' => '安装模块',
	'Action_Bind' => '标记为绑定',
	'Action_CronMailScanner' => '定时任务-电子邮件扫描',
	'Action_CronBind' => '定时任务-绑定',
	'Action_ChangeType' => '更改邮件类型',
	'AccontDeleteOK' => '已删除客户',
	'No' => '否',
	'LBL_MAIL_LOGS' => '邮件日志',
	'Group list' => '组列表',
	'LBL_ACTIVE_MAIL' => '启用',
	'LBL_INACTIVE_MAIL' => '禁用',
	'LBL_EXCEPTIONS' => '例外',
	'LBL_EXCEPTIONS_CREATING_EMAIL' => '在创建电子邮件时，省略地址',
	'LBL_EXCEPTIONS_CREATING_TICKET' => '在创建服务单时，省略地址',
	'LBL_WRITE_AND_ENTER' => '输入的地址并按Enter键',
	'ERR_NO_CONFIGURATION_FOLDERS' => '没有文件夹设置',
	'LBL_SHOW_ACCOUNT_DETAILS' => '显示客户详情',
	'LBL_EDIT_FOLDER_ACCOUNT' => '编辑文件夹',
	'LBL_ALERT_EDIT_FOLDER' => '选择文件夹，删除它们然后重新添加，将会重新启动他们的邮件扫描.',
	'LBL_DELETE_ACCOUNT' => '删除客户',
];
