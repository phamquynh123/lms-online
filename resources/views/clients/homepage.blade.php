
<!DOCTYPE html>
<html dir="ltr" lang="en" xml:lang="en">
<head>
	<title>HUST Blended Learning</title>
	<link rel="shortcut icon" href="//lms.hust.edu.vn/pluginfile.php/1/theme_mb2nl/favicon/1620106219/BVP-logo%20bk-rgb.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="moodle, HUST Blended Learning" />
	<link rel="stylesheet" type="text/css" href="https://lms.hust.edu.vn/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://lms.hust.edu.vn/theme/styles.php/mb2nl/1620106219_1/all" />
	<link rel="stylesheet" type="text/css" href="https://lms.hust.edu.vn/theme/mb2nl/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.min.css" />
	<link rel="stylesheet" type="text/css" href="https://lms.hust.edu.vn/theme/mb2nl/assets/bootstrap/css/glyphicons.min.css" />
	<link rel="stylesheet" type="text/css" href="https://lms.hust.edu.vn/theme/mb2nl/assets/OwlCarousel/assets/owl.carousel.min.css" />
	<script>
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/lms.hust.edu.vn","sesskey":"E0YIVbo9iV","sessiontimeout":"7200","themerev":"1620106219","slasharguments":1,"theme":"mb2nl","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1620106219","admin":"admin","svgicons":true,"usertimezone":"Asia\/Ho_Chi_Minh","contextid":2,"langrev":1620106219,"templaterev":"1620106219"};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/lms.hust.edu.vn\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/lms.hust.edu.vn\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/lms.hust.edu.vn\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/lms.hust.edu.vn\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/lms.hust.edu.vn\/theme\/yui_combo.php?m\/1620106219\/","combine":true,"comboBase":"https:\/\/lms.hust.edu.vn\/theme\/yui_combo.php?","ext":false,"root":"m\/1620106219\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-event":{"requires":["event-custom"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-report_overviewstats-charts":{"requires":["base","node","charts","charts-legend"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emojipicker-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_h5p-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_html-button":{"requires":["promise","moodle-editor_atto-plugin","moodle-atto_html-beautify","moodle-atto_html-codemirror","event-valuechange"]},"moodle-atto_html-beautify":{},"moodle-atto_html-codemirror":{"requires":["moodle-atto_html-codemirror-skin"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_teamsmeeting-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"https:\/\/lms.hust.edu.vn\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/lms.hust.edu.vn\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1620106219\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/lms.hust.edu.vn\/lib\/javascript.php\/1620106219\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/lms.hust.edu.vn\/lib\/javascript.php\/1620106219\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdn.jsdelivr.net\/npm\/mathjax@2.7.8\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145155348-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-145155348-1');
</script><meta name="description" content="HUST Blended Learning" />
<meta name="description" content="HUST Blended Learning" />
</head>
<body id="page-site-index" class="format-site course path-site chrome dir-ltr lang-en yui-skin-sam yui3-skin-sam lms-hust-edu-vn pagelayout-frontpage course-1 context-2 theme-lfw header-light loggedin roleshortname-student coursetheme- theme-hidden-region-mode course-layout-grid sidebar-case sidebar-one custom_id_a59e006be59d custom_id_5e37f615d176 custom_id_5b1649004a21 editing-fw">
	<div>
		<a class="sr-only sr-only-focusable" href="#maincontent">Skip to main content</a>
	</div><script src="https://lms.hust.edu.vn/lib/javascript.php/1620106219/lib/babel-polyfill/polyfill.min.js"></script>
	<script src="https://lms.hust.edu.vn/lib/javascript.php/1620106219/lib/mdn-polyfills/polyfill.js"></script>
	<script src="https://lms.hust.edu.vn/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script src="https://lms.hust.edu.vn/theme/jquery.php/core/jquery-3.4.1.min.js"></script>
	<script src="https://lms.hust.edu.vn/lib/javascript.php/1620106219/lib/javascript-static.js"></script>
	<script>
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>

<div class="sliding-panel dark1 closed">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 clearfix">
				<div class="theme-searchform"><form id="theme-search" action="https://lms.hust.edu.vn/course/search.php"><input id="theme-coursesearchbox" type="text" value="" placeholder="Search courses" name="search"><button type="submit"><i class="fa fa-search"></i></button></form></div> <div class="theme-loginform" style="display:none;"><div class="usermenu"><div class="action-menu moodle-actionmenu nowrap-items d-inline" id="action-menu-0" data-enhance="moodle-core-actionmenu">

					<div class="menubar d-flex " id="action-menu-0-menubar" role="menubar">



						<div class="action-menu-trigger">
							<div class="dropdown">
								<a href="#" tabindex="0" class=" dropdown-toggle icon-no-margin" id="action-menu-toggle-0" aria-label="User menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="action-menu-0-menu">
									<span class="userbutton"><span class="usertext mr-1">Phạm Thị Quỳnh 20168447</span><span class="avatars"><span class="avatar current"><img src="https://lms.hust.edu.vn/pluginfile.php/41085/user/icon/mb2nl/f2?rev=213217" class="userpicture" width="35" height="35" aria-hidden="true" /></span></span></span>
									<b class="caret"></b>
								</a>
								<div class="dropdown-menu dropdown-menu-right menu align-tr-br" id="action-menu-0-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-0" role="menu" data-align="tr-br">
									<a href="https://lms.hust.edu.vn/my/" class="dropdown-item menu-action" role="menuitem" data-title="mymoodle,admin" aria-labelledby="actionmenuaction-1">
										<i class="icon fa fa-tachometer fa-fw " aria-hidden="true" ></i>
										<span class="menu-action-text" id="actionmenuaction-1">Dashboard</span>
									</a>
									<div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
									<a href="https://lms.hust.edu.vn/user/profile.php?id=7379" class="dropdown-item menu-action" role="menuitem" data-title="profile,moodle" aria-labelledby="actionmenuaction-2">
										<i class="icon fa fa-user fa-fw " aria-hidden="true" ></i>
										<span class="menu-action-text" id="actionmenuaction-2">Profile</span>
									</a>
									<a href="https://lms.hust.edu.vn/grade/report/overview/index.php" class="dropdown-item menu-action" role="menuitem" data-title="grades,grades" aria-labelledby="actionmenuaction-3">
										<i class="icon fa fa-table fa-fw " aria-hidden="true" ></i>
										<span class="menu-action-text" id="actionmenuaction-3">Grades</span>
									</a>
									<a href="https://lms.hust.edu.vn/message/index.php" class="dropdown-item menu-action" role="menuitem" data-title="messages,message" aria-labelledby="actionmenuaction-4">
										<i class="icon fa fa-comment fa-fw " aria-hidden="true" ></i>
										<span class="menu-action-text" id="actionmenuaction-4">Messages</span>
									</a>
									<a href="https://lms.hust.edu.vn/user/preferences.php" class="dropdown-item menu-action" role="menuitem" data-title="preferences,moodle" aria-labelledby="actionmenuaction-5">
										<i class="icon fa fa-wrench fa-fw " aria-hidden="true" ></i>
										<span class="menu-action-text" id="actionmenuaction-5">Preferences</span>
									</a>
									<div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
									<a href="https://lms.hust.edu.vn/login/logout.php?sesskey=E0YIVbo9iV" class="dropdown-item menu-action" role="menuitem" data-title="logout,moodle" aria-labelledby="actionmenuaction-6">
										<i class="icon fa fa-sign-out fa-fw " aria-hidden="true" ></i>
										<span class="menu-action-text" id="actionmenuaction-6">Log out</span>
									</a>
								</div>
							</div>
						</div>

					</div>

				</div></div><a href="https://lms.hust.edu.vn/user/profile.php?id=7379"><img src="https://lms.hust.edu.vn/pluginfile.php/41085/user/icon/mb2nl/f1?rev=213217" class="welcome_userpicture" width="80" height="80" alt="Picture of Phạm Thị Quỳnh 20168447" title="Picture of Phạm Thị Quỳnh 20168447" /></a></div> <div class="header-tools type-icon"><div class="theme-plugins"><div class="popover-region collapsed popover-region-notifications"
					id="nav-notification-popover-container" data-userid="7379"
					data-region="popover-region">
					<div class="popover-region-toggle nav-link"
					data-region="popover-region-toggle"
					role="button"
					aria-controls="popover-region-container-60b80ad4dd7c160b80ad4d456a23"
					aria-haspopup="true"
					aria-label="Show notification window with no new notifications"
					tabindex="0">
					<i class="icon fa fa-bell fa-fw " title="Toggle notifications menu" aria-label="Toggle notifications menu"></i>
					<div class="count-container " data-region="count-container"
					aria-label="There are 3 unread notifications">3</div>

				</div>
				<div
				id="popover-region-container-60b80ad4dd7c160b80ad4d456a23"
				class="popover-region-container"
				data-region="popover-region-container"
				aria-expanded="false"
				aria-hidden="true"
				aria-label="Notification window"
				role="region">
				<div class="popover-region-header-container">
					<h3 class="popover-region-header-text" data-region="popover-region-header-text">Notifications</h3>
					<div class="popover-region-header-actions" data-region="popover-region-header-actions"> <a class="mark-all-read-button"
						href="#"
						title="Mark all as read"
						data-action="mark-all-read"
						role="button"
						aria-label="Mark all as read">
						<span class="normal-icon"><i class="icon fa fa-check fa-fw " aria-hidden="true" ></i></span>
						<span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
					</a>
					<a href="https://lms.hust.edu.vn/message/notificationpreferences.php?userid=7379"
					title="Notification preferences"
					aria-label="Notification preferences">
					<i class="icon fa fa-cog fa-fw " aria-hidden="true" ></i>
				</a>
			</div>
		</div>
		<div class="popover-region-content-container" data-region="popover-region-content-container">
			<div class="popover-region-content" data-region="popover-region-content">
				<div class="all-notifications"
				data-region="all-notifications"
				role="log"
				aria-busy="false"
				aria-atomic="false"
				aria-relevant="additions"></div>
				<div class="empty-message" tabindex="0" data-region="empty-message">You have no notifications</div>

			</div>
			<span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
		</div>
		<a class="see-all-link"
		href="https://lms.hust.edu.vn/message/output/popup/notifications.php">
		<div class="popover-region-footer-container">
			<div class="popover-region-seeall-text">See all</div>
		</div>
	</a>
</div>
</div><div class="popover-region collapsed" data-region="popover-region-messages">
	<a id="message-drawer-toggle-60b80ad4de35b60b80ad4d456a24" class="nav-link d-inline-block popover-region-toggle position-relative" href="#"
	role="button">
	<i class="icon fa fa-comment fa-fw " title="Toggle messaging drawer" aria-label="Toggle messaging drawer"></i>
	<div class="count-container hidden" data-region="count-container"
	aria-label="There are 0 unread conversations">0</div>
</a>
<span class="sr-only sr-only-focusable" data-region="jumpto" tabindex="-1"></span></div></div><a href="#" class="header-tools-link header-tools-jslink tool-search" title="Search courses"><i class="icon1 fa fa-search"></i></a><a href="#" class="header-tools-link header-tools-jslink tool-login" title="Phạm Thị Quỳnh"><i class="icon1 fa fa-user"></i></a></div> </div>
</div>
</div>
</div>
<div id="page-outer">
	<div id="page">
		<div id="page-a">
			<div id="main-header">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="main-logo" style="width:600px;">
								<a href="https://lms.hust.edu.vn" title="HUST Blended Learning">
									<img src="//lms.hust.edu.vn/pluginfile.php/1/theme_mb2nl/logo/1620106219/109616035_3369656416391680_5338641925813865077_n.png" alt="New Learning">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="main-navigation">
				<div class="main-navigation-inner">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="menu-bar"><a class="mobile-home" href="https://lms.hust.edu.vn" title="HUST Blended Learning"><i class="fa fa-home"></i></a><a class="show-menu" href="#"><i class="fa fa-bars"></i></a><div class="clearfix"></div></div><ul class="main-menu theme-ddmenu" data-animtype="2" data-animspeed="300"><li class="home-item"><a href="https://lms.hust.edu.vn" title="HUST Blended Learning"><i class="fa fa-home"></i></a></li><li class=""><a title="English" class="" href="https://lms.hust.edu.vn/?redirect=0">Home</a></li><li class="dropdown"><a href="#" class="" data-toggle="" title="English">Courses<span class="mobile-arrow"></span></a><ul class="dropdown-list"><li class=""><a title="English" class="" href="https://lms.hust.edu.vn/course/index.php">Semester Courses</a></li><li class=""><a title="English" class="" href="https://lms.hust.edu.vn/mod/page/view.php?id=21163">A-Z Courses</a></li></ul><li class="dropdown"><a href="#" class="" data-toggle="" title="English">Support<span class="mobile-arrow"></span></a><ul class="dropdown-list"><li class=""><a title="English" class="" href="https://lms.hust.edu.vn/blog/index.php?entryid=2">Support for Students</a></li><li class=""><a title="English" class="" href="https://lms.hust.edu.vn/blog/index.php?entryid=3">Support for Teachers</a></li></ul><li class=""><a title="English" class="" href="https://lms.hust.edu.vn/mod/forum/view.php?id=827">News</a></li><li class="lang-item dropdown"><a href="https://lms.hust.edu.vn/?lang=en" title="English ‎(en)‎"><span class="lang-flag" style="background-image:url('https://lms.hust.edu.vn/theme/image.php/mb2nl/theme/1620106219/flags/48x32/EN');"></span> <span class="lang-shortname">en</span><span class="lang-fullname">English ‎(en)‎</span><span class="mobile-arrow"></span></a><ul><li><a href="https://lms.hust.edu.vn/?lang=fr" title="Français ‎(fr)‎"><span class="lang-flag" style="background-image:url('https://lms.hust.edu.vn/theme/image.php/mb2nl/theme/1620106219/flags/48x32/FR');"></span> <span class="lang-shortname">fr</span><span class="lang-fullname">Français ‎(fr)‎</span></a></li><li><a href="https://lms.hust.edu.vn/?lang=vi" title="Vietnamese ‎(vi)‎"><span class="lang-flag" style="background-image:url('https://lms.hust.edu.vn/theme/image.php/mb2nl/theme/1620106219/flags/48x32/VI');"></span> <span class="lang-shortname">vi</span><span class="lang-fullname">Vietnamese ‎(vi)‎</span></a></li></ul></li></ul> </div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- //end #page-a -->
			<div id="page-b">
				<div id="main-slider" class="mb2slides mb2slides-mainslider mb2slides60b80ad4ded0a navdir1"><div class="mb2slides-inner"><ul class="mb2slides-slide-list" data-mode="slide" data-auto="1" data-aspeed="800" data-apause="7000" data-loop="1" data-pager="0" data-control="1" data-items="1" data-moveitems="1" data-margin="" data-aheight="1" data-kpress="1" data-modid="60b80ad4ded0a" data-slidescount="2"><li class="mb2slides-slide-item caption-custom"><div class="mb2slides-slide-item-inner"><div class="mb2slides-slide-media" style="background-image:url('https://lms.hust.edu.vn/pluginfile.php/1/local_mb2slides/attachment/1/slide1.jpg');"><img class="mb2slides-slide-img" src="https://lms.hust.edu.vn/pluginfile.php/1/local_mb2slides/attachment/1/slide1.jpg" alt=""/></div></div></li><li class="mb2slides-slide-item caption-custom"><div class="mb2slides-slide-item-inner"><div class="mb2slides-slide-media" style="background-image:url('https://lms.hust.edu.vn/pluginfile.php/1/local_mb2slides/attachment/2/slide2.jpg');"><img class="mb2slides-slide-img" src="https://lms.hust.edu.vn/pluginfile.php/1/local_mb2slides/attachment/2/slide2.jpg" alt=""/></div></div></li><li class="mb2slides-slide-item caption-custom"><div class="mb2slides-slide-item-inner"><div class="mb2slides-slide-media" style="background-image:url('https://lms.hust.edu.vn/pluginfile.php/1/local_mb2slides/attachment/4/slide1.jpg');"><img class="mb2slides-slide-img" src="https://lms.hust.edu.vn/pluginfile.php/1/local_mb2slides/attachment/4/slide1.jpg" alt=""/></div></div></li></ul></div></div><div id="main-content">
					<div class="container-fluid">
						<div class="row">
							<section id="region-main" class="content-col col-md-9 order-2">
								<div id="page-content">
									<span class="notifications" id="user-notifications"></span> <div role="main"><span id="maincontent"></span><a class="skip-block skip" href="#skipcategories">Skip course categories</a><div id="frontpage-category-names"><h2>Course categories</h2><div class="course_category_tree clearfix frontpage-category-names"><div class="collapsible-actions"><a class="collapseexpand collapse-all" href="#">Collapse all</a></div><div class="content"><div class="subcategories"><div class="category loaded with_children" data-categoryid="33" data-depth="1" data-showcourses="5" data-type="0"><div class="info"><h3 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=33">Học kì II năm học 2020-2021</a></h3></div><div class="content"><div class="subcategories"><div class="category notloaded" data-categoryid="34" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=34">Viện Ngoại ngữ</a><span title="Number of courses" class="numberofcourse"> (106)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="35" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=35">Viện Điện</a><span title="Number of courses" class="numberofcourse"> (7)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="36" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=36">Khoa Giáo dục Quốc phòng - An ninh</a><span title="Number of courses" class="numberofcourse"> (12)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="37" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=37">Khoa Lý luận chính trị</a><span title="Number of courses" class="numberofcourse"> (8)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="38" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=38">Viện Sư phạm Kỹ thuật</a><span title="Number of courses" class="numberofcourse"> (16)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="39" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=39">Viện Cơ khí</a><span title="Number of courses" class="numberofcourse"> (31)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="40" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=40">Viện Công nghệ thông tin và Truyền thông</a><span title="Number of courses" class="numberofcourse"> (11)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="41" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=41">Viện Điện tử - Viễn thông</a><span title="Number of courses" class="numberofcourse"> (4)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="42" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=42">Viện Kinh tế và Quản lý</a><span title="Number of courses" class="numberofcourse"> (24)</span></h4></div><div class="content"></div></div></div></div></div><div class="category loaded with_children" data-categoryid="7" data-depth="1" data-showcourses="5" data-type="0"><div class="info"><h3 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=7">Học kì I năm học 2020-2021</a></h3></div><div class="content"><div class="subcategories"><div class="category notloaded" data-categoryid="17" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=17">Viện Sư phạm Kỹ Thuật</a><span title="Number of courses" class="numberofcourse"> (13)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="18" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=18">Viện Cơ khí</a><span title="Number of courses" class="numberofcourse"> (59)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="22" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=22">Viện Công nghệ Thông tin và Truyền thông</a><span title="Number of courses" class="numberofcourse"> (41)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="23" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=23">Viện Điện</a><span title="Number of courses" class="numberofcourse"> (6)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="24" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=24">Viện Cơ khí Động lực</a><span title="Number of courses" class="numberofcourse"> (1)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="25" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=25">Viện Điện tử - Viễn thông</a><span title="Number of courses" class="numberofcourse"> (7)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="26" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=26">Viện Công nghệ Sinh học và Công nghệ Thực phẩm</a><span title="Number of courses" class="numberofcourse"> (1)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="27" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=27">Khoa Giáo dục Quốc phòng &amp; An ninh</a><span title="Number of courses" class="numberofcourse"> (8)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="29" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=29">Viện Kinh Tế và Quản Lý</a><span title="Number of courses" class="numberofcourse"> (23)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="30" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=30">Viện Ngoại ngữ </a><span title="Number of courses" class="numberofcourse"> (56)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="31" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=31">Viện Khoa học và Công nghệ Nhiệt lạnh</a><span title="Number of courses" class="numberofcourse"> (1)</span></h4></div><div class="content"></div></div><div class="category notloaded" data-categoryid="32" data-depth="2" data-showcourses="5" data-type="0"><div class="info"><h4 class="categoryname"><a href="https://lms.hust.edu.vn/course/index.php?categoryid=32">Viện Khoa học và Kỹ thuật vật liệu</a><span title="Number of courses" class="numberofcourse"> (2)</span></h4></div><div class="content"></div></div></div></div></div></div></div></div></div><span class="skip-block-to" id="skipcategories"></span><br /></div> </div>
								</section>
								<section class="sidebar-col col-md-3 order-1">
									<aside id="block-region-side-pre" class="side-pre style-default block-region" data-blockregion="side-pre" data-droptarget="1"><a href="#sb-1" class="sr-only sr-only-focusable">Skip Navigation</a>

										<section id="inst1191"
										class=" block_navigation block card mb-3"
										role="navigation"
										data-block="navigation"
										aria-labelledby="instance-1191-header"
										>

										<div class="card-body p-3">

											<h5 id="instance-1191-header" class="card-title d-inline">Navigation</h5>


											<div class="card-text content mt-3">
												<ul class="block_tree list" role="tree" data-ajax-loader="block_navigation/nav_loader"><li class="type_unknown depth_1 contains_branch" aria-labelledby="label_1_1"><p class="tree_item branch navigation_node" role="treeitem" aria-expanded="true" aria-owns="random60b80ad4d456a1_group" data-collapsible="false"><a tabindex="-1" id="label_1_1" href="https://lms.hust.edu.vn/my/">Dashboard</a></p><ul id="random60b80ad4d456a1_group" role="group"><li class="type_setting depth_2 item_with_icon current_branch" aria-labelledby="label_2_2"><p class="tree_item hasicon active_tree_node" role="treeitem"><a tabindex="-1" id="label_2_2" href="https://lms.hust.edu.vn/"><i class="icon fa fa-home fa-fw navicon" aria-hidden="true" ></i><span class="item-content-wrap">Site home</span></a></p></li><li class="type_course depth_2 contains_branch" aria-labelledby="label_2_3"><p class="tree_item branch" role="treeitem" aria-expanded="false" aria-owns="random60b80ad4d456a3_group"><span tabindex="-1" id="label_2_3" title="HUST Blended Learning">Site pages</span></p><ul id="random60b80ad4d456a3_group" role="group" aria-hidden="true"><li class="type_unknown depth_3 item_with_icon" aria-labelledby="label_3_5"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_5" href="https://lms.hust.edu.vn/blog/index.php"><i class="icon fa fa-fw fa-fw navicon" aria-hidden="true" ></i><span class="item-content-wrap">Site blogs</span></a></p></li><li class="type_custom depth_3 item_with_icon" aria-labelledby="label_3_6"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_6" href="https://lms.hust.edu.vn/badges/view.php?type=1"><i class="icon fa fa-fw fa-fw navicon" aria-hidden="true" ></i><span class="item-content-wrap">Site badges</span></a></p></li><li class="type_setting depth_3 item_with_icon" aria-labelledby="label_3_7"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_7" href="https://lms.hust.edu.vn/tag/search.php"><i class="icon fa fa-fw fa-fw navicon" aria-hidden="true" ></i><span class="item-content-wrap">Tags</span></a></p></li><li class="type_custom depth_3 item_with_icon" aria-labelledby="label_3_8"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_8" href="https://lms.hust.edu.vn/calendar/view.php?view=month"><i class="icon fa fa-calendar fa-fw navicon" aria-hidden="true" ></i><span class="item-content-wrap">Calendar</span></a></p></li><li class="type_activity depth_3 item_with_icon" aria-labelledby="label_3_10"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_10" title="Forum" href="https://lms.hust.edu.vn/mod/forum/view.php?id=827"><img class="icon navicon" alt="Forum" title="Forum" src="https://lms.hust.edu.vn/theme/image.php/mb2nl/forum/1620106219/icon" /><span class="item-content-wrap">Site announcements</span></a></p></li><li class="type_activity depth_3 item_with_icon" aria-labelledby="label_3_11"><p class="tree_item hasicon" role="treeitem"><a tabindex="-1" id="label_3_11" title="Page" href="https://lms.hust.edu.vn/mod/page/view.php?id=21163"><img class="icon navicon" alt="Page" title="Page" src="https://lms.hust.edu.vn/theme/image.php/mb2nl/page/1620106219/icon" /><span class="item-content-wrap">A-Z courses</span></a></p></li></ul></li><li class="type_system depth_2 contains_branch" aria-labelledby="label_2_12"><p class="tree_item branch canexpand" role="treeitem" aria-expanded="true" aria-owns="random60b80ad4d456a10_group"><span tabindex="-1" id="label_2_12">My courses</span></p><ul id="random60b80ad4d456a10_group" role="group"><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_13"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_282" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_282" data-node-key="282" data-node-type="20"><a tabindex="-1" id="label_3_13" title="Tương tác người máy IT4440Q_117869" href="https://lms.hust.edu.vn/course/view.php?id=282">IT4440Q_117869</a></p></li><li class="type_course depth_3 contains_branch" aria-labelledby="label_3_14"><p class="tree_item branch" role="treeitem" id="expandable_branch_20_271" aria-expanded="false" data-requires-ajax="true" data-loaded="false" data-node-id="expandable_branch_20_271" data-node-key="271" data-node-type="20"><a tabindex="-1" id="label_3_14" title="Phát triển phầm mềm phân tán IT4883Q_117889" href="https://lms.hust.edu.vn/course/view.php?id=271">IT4883Q_117889</a></p></li></ul></li></ul></li></ul>
												<div class="footer"></div>
											</div>

										</div>

									</section>

									<span id="sb-1"></span><a href="#sb-2" class="sr-only sr-only-focusable">Skip Administration</a>

									<section id="inst1192"
									class=" block_settings block card mb-3"
									role="navigation"
									data-block="settings"
									aria-labelledby="instance-1192-header"
									>

									<div class="card-body p-3">

										<h5 id="instance-1192-header" class="card-title d-inline">Administration</h5>


										<div class="card-text content mt-3">
											<div id="settingsnav" class="box py-3 block_tree_box"><ul class="block_tree list" role="tree" data-ajax-loader="block_navigation/site_admin_loader"><li class="type_setting depth_1 contains_branch" tabindex="-1" aria-labelledby="label_1_2"><p class="tree_item root_node tree_item branch" role="treeitem" aria-expanded="true" aria-owns="random60b80ad4d456a11_group"><span tabindex="0">Front page settings</span></p><ul id="random60b80ad4d456a11_group" role="group"><li class="type_setting depth_2 item_with_icon" tabindex="-1" aria-labelledby="label_2_1"><p class="tree_item hasicon tree_item leaf" role="treeitem"><a href="https://lms.hust.edu.vn/?setdefaulthome=1"><i class="icon fa fa-fw fa-fw navicon" aria-hidden="true" ></i>Make this my home page</a></p></li></ul></li></ul></div>
											<div class="footer"></div>
										</div>

									</div>

								</section>

								<span id="sb-2"></span><a href="#sb-3" class="sr-only sr-only-focusable">Skip Main menu</a>

								<section id="inst2240"
								class=" block_site_main_menu block list_block card mb-3"
								role="complementary"
								data-block="site_main_menu"
								aria-labelledby="instance-2240-header"
								>

								<div class="card-body p-3">

									<h5 id="instance-2240-header" class="card-title d-inline">Main menu</h5>


									<div class="card-text content mt-3">
										<ul class="unlist"><li class="r0"><div class="column c1"><div class="main-menu-content"><div class="activity"><a class="" onclick="" href="https://lms.hust.edu.vn/mod/forum/view.php?id=827"><img src="https://lms.hust.edu.vn/theme/image.php/mb2nl/forum/1620106219/icon" class="iconlarge activityicon" alt="" role="presentation" aria-hidden="true" /><span class="instancename">Site announcements<span class="accesshide " > Forum</span></span></a></div></div></div></li>
											<li class="r1"><div class="column c1"><div class="main-menu-content"><div class="activity"><a class="" onclick="" href="https://lms.hust.edu.vn/mod/page/view.php?id=21163"><img src="https://lms.hust.edu.vn/theme/image.php/mb2nl/page/1620106219/icon" class="iconlarge activityicon" alt="" role="presentation" aria-hidden="true" /><span class="instancename">A-Z courses<span class="accesshide " > Page</span></span></a></div></div></div></li></ul>
											<div class="footer"></div>
										</div>

									</div>

								</section>

								<span id="sb-3"></span><a href="#sb-4" class="sr-only sr-only-focusable">Skip Latest announcements</a>

								<section id="inst1172"
								class=" block_news_items block card mb-3"
								role="complementary"
								data-block="news_items"
								aria-labelledby="instance-1172-header"
								>

								<div class="card-body p-3">

									<h5 id="instance-1172-header" class="card-title d-inline">Latest announcements</h5>


									<div class="card-text content mt-3">
										<ul class='unlist'>
											<li class="post"><div class="head clearfix"><div class="date">25 Feb, 17:50</div><div class="name">Admin Elearning</div></div><div class="info"><a href="https://lms.hust.edu.vn/mod/forum/discuss.php?d=4544">Thông báo thời gian tạm dừng hệ thống để bảo trì định kỳ Tháng 2 - 2021</a></div></li>
										</ul>

										<div class="footer"><a href="https://lms.hust.edu.vn/mod/forum/view.php?f=178">Older topics</a> ...</div>
									</div>

								</div>

							</section>

							<span id="sb-4"></span></aside> </section>
						</div>
					</div>
				</div>
				<div class="mb2-pb-fpsection pre-bg0 light"><div class="section-inner" style="padding-top:0px;padding-bottom:0px;"><div class="mb2-pb-fprow pre-bg0 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:40px;padding-bottom:10px;"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-6 noempty"><div class="column-inner"><div class="theme-title title-left title-n style-1" style="margin:0 0 30px 0;"><h4 class="title"><span>Some Word About Us</span></h4></div><div class="theme-text text- text-n text-"><p class="MsoNormal" style="text-align:justify;"><span lang="fr" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="fr">Blended</span><span lang="vi" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="vi">-</span><span lang="fr" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="fr">learning
				system is </span><span lang="vi" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="vi">a Learning Management System (LMS) </span><span lang="fr" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="fr">to
				support teaching &amp; blended</span><span lang="vi" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="vi">-</span><span lang="fr" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="fr">learning</span><span lang="vi" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="vi">
				methods</span><span lang="fr" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="fr"> for </span><span lang="vi" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="vi">F</span><span lang="fr" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="fr">aculties</span><span lang="fr" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="fr"> </span><span lang="fr" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="fr">and
				Schools in</span><span lang="vi" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="vi"> Hanoi University of Science and Technology
				(HUST)</span><span lang="fr" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="fr">. The system takes full advantage of applied</span><span lang="vi" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="vi">
				ICT</span><span lang="fr" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="fr"> in teaching &amp; learning to improve training
				efficiency; saving the</span><span lang="vi" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="vi"> use of facilities</span><span lang="fr" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="fr">
				and face</span><span lang="vi" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="vi">-to-face class </span><span lang="fr" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="fr">times</span><span lang="fr" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="fr"> </span><span lang="fr" style="font-size:12pt;line-height:115%;font-family:'Segoe UI', sans-serif;color:#222222;" xml:lang="fr">for
					staff and students.</span></p></div><a href="#" target="" class="btn btn-primary btn-lg btn-icon-before" style="margin:20px 0 30px 0"><span class="btn-intext">Read more</span></a></div></div><div class="mb2-pb-fpcol col-md-6 noempty"><div class="column-inner"><div class="theme-boxes col-2 clearfix"><div class="theme-box"><a href="#" target=""><div class="theme-boximg useimg type-1"><div class="vtable-wrapp"><div class="vtable"><div class="vtable-cell"></div></div></div><img src="https://lms.hust.edu.vn/pluginfile.php/1/local_mb2builder/images/1231.jpg" alt=""><div class="theme-boximg-color" style="background-color:rgba(0, 0, 0, 0);"></div><div class="theme-boximg-img" style="background-image:url('https://lms.hust.edu.vn/pluginfile.php/1/local_mb2builder/images/1231.jpg');background-repeat:no-repeat;background-position:50% 50%;background-size:cover;"></div></div></a></div><div class="theme-box"><a href="#" target=""><div class="theme-boximg useimg type-1"><div class="vtable-wrapp"><div class="vtable"><div class="vtable-cell"></div></div></div><img src="https://lms.hust.edu.vn/pluginfile.php/1/local_mb2builder/images/12345678.png" alt=""><div class="theme-boximg-color" style="background-color:rgba(210, 143, 143, 0.06);"></div><div class="theme-boximg-img" style="background-image:url('https://lms.hust.edu.vn/pluginfile.php/1/local_mb2builder/images/12345678.png');background-repeat:no-repeat;background-position:50% 50%;background-size:cover;"></div></div></a></div></div></div></div></div></div></div></div><div class="mb2-pb-fprow pre-bg0 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:40px;padding-bottom:10px;background-color:rgb(244, 244, 244);"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-12 noempty"><div class="column-inner"><div class="theme-boxes col-4 clearfix"><div class="theme-box"><div class="theme-boxicon type-1 color-primary"><div class="theme-boxicon-icon"><i class="pe-7s-help2"></i></div><div class="theme-boxicon-content"><h4>Rich learning materials</h4>Our E-learning system includes several well-designed courses with rich multimedia contents from prestigious lecturers from University.</div></div></div><div class="theme-box"><div class="theme-boxicon type-1 color-primary"><div class="theme-boxicon-icon"><i class="pe-7s-coffee"></i></div><div class="theme-boxicon-content"><h4>Convenient and Flexible</h4>Our E-learning system uses Office 365 HUST accounts to make online learning easier, friendly design, flexiblity for use on many PC and mobile platforms.</div></div></div><div class="theme-box"><div class="theme-boxicon type-1 color-primary"><div class="theme-boxicon-icon"><i class="pe-7s-rocket"></i></div><div class="theme-boxicon-content"><h4>Proactive learning methods</h4>The E-learning system encourages students to learn actively and proactively, and easily share and interact with online teachers and other students.</div></div></div><div class="theme-box"><div class="theme-boxicon type-1 color-primary"><div class="theme-boxicon-icon"><i class="pe-7s-plugin"></i></div><div class="theme-boxicon-content"><h4>Time Flexiblity</h4>E-learning system supports teachers and students easily to work and study at home, or anywhere with an Internet connection, reducing class time, and provides a flexible study time.</div></div></div></div></div></div></div></div></div></div><div class="mb2-pb-fprow pre-bg0 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:40px;padding-bottom:40px;"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-6 noempty"><div class="column-inner"><video controls="true"><source src="https://lms.hust.edu.vn/pluginfile.php/1/local_mb2builder/images/hdsd_lms1.mp4">https://lms.hust.edu.vn/pluginfile.php/1/local_mb2builder/images/hdsd_lms1.mp4</video></div></div><div class="mb2-pb-fpcol col-md-6 noempty"><div class="column-inner"><div class="theme-tabs tabs top" style="min-height:200px;"><ul class="nav nav-tabs"><li class="nav-item"><a class="nav-link active" id="tab_1034991455_0_tab" href="#tab_1034991455_0" data-toggle="tab" role="tab" aria-controls="tab_1034991455_0" aria-selected="true">Quick tour for Students</a></li><li class="nav-item"><a class="nav-link" id="tab_1034991455_1_tab" href="#tab_1034991455_1" data-toggle="tab" role="tab" aria-controls="tab_1034991455_1" aria-selected="false">Quick tour for Lecturers</a></li></ul><div class="tab-content"><div class="tab-pane active" id="tab_1034991455_0" role="tabpanel" aria-labelledby="tab_1034991455_0"><h4 style="text-align: justify; margin-top: 0px;"><span lang="FR" style="font-size:12.0pt;line-height:
					115%;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:&quot;Times New Roman&quot;;
					color:#222222;mso-ansi-language:FR;mso-fareast-language:EN-US;mso-bidi-language:
					AR-SA">Welcome </span><span lang="VI" style="font-size:12.0pt;line-height:
					115%;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:&quot;Times New Roman&quot;;
					color:#222222;mso-ansi-language:VI;mso-fareast-language:EN-US;mso-bidi-language:
					AR-SA">Students</span><span lang="FR" style="font-size:12.0pt;line-height:115%;
					font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:&quot;Times New Roman&quot;;
					color:#222222;mso-ansi-language:FR;mso-fareast-language:EN-US;mso-bidi-language:
					AR-SA"> to the</span><span lang="VI" style="font-size:12.0pt;line-height:115%;
					font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:&quot;Times New Roman&quot;;
					color:#222222;mso-ansi-language:VI;mso-fareast-language:EN-US;mso-bidi-language:
					AR-SA"> Learning Management </span><span lang="FR" style="font-size:12.0pt;
					line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:
					&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;mso-fareast-language:EN-US;
					mso-bidi-language:AR-SA">System (LMS) of HUST. Before joining LMS, all</span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:VI;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> </span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA">Students&nbsp;need to be informed about Blended-learning(Blearning) classes on system, and will be advised, learnt on Blearning by teachers, used the LMS system, prepared necessary equipment.</span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA">&nbsp;All</span><span lang="VI" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:VI;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> students</span><span lang="VI" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> </span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA">should</span><span lang="VI" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:VI;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> use</span><span lang="VI" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> </span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA">HUST Office 365 account to
					log in</span><span lang="VI" style="font-size:12.0pt;line-height:115%;font-family:
					&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;
					mso-ansi-language:VI;mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> LMS</span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> system by selecting the
					button <b>HUST STAFF &amp; STUDENTS</b></span><span lang="VI" style="font-size:12.0pt;
					line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:
					&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:VI;mso-fareast-language:EN-US;
					mso-bidi-language:AR-SA"><b>.</b></span><br></h4><p><span lang="VI" style="font-size:12.0pt;
					line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:
					&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:VI;mso-fareast-language:EN-US;
					mso-bidi-language:AR-SA"><span style="color: rgb(76, 76, 76); font-family: Roboto, sans-serif; font-size: 15px;"><div class="mb2pb-gap gap clearfix" style="height:20px;"></div><a href="https://lms1.hust.edu.vn/blog/index.php?entryid=2" target="" class="btn btn-success btn-lg btn-icon-before" style="margin:0 10px 5px 0"><span class="btn-intext">Read more</span></a></span><b><br></b></span></p></div><div class="tab-pane" id="tab_1034991455_1" role="tabpanel" aria-labelledby="tab_1034991455_1"><h4 style="text-align: justify; margin-top: 0px;"><span lang="FR" style="font-size:12.0pt;line-height:
					115%;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:&quot;Times New Roman&quot;;
					color:#222222;mso-ansi-language:FR;mso-fareast-language:EN-US;mso-bidi-language:
					AR-SA">Welcome Teachers</span><span lang="FR" style="font-size:12.0pt;line-height:115%;
					font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:&quot;Times New Roman&quot;;
					color:#222222;mso-ansi-language:FR;mso-fareast-language:EN-US;mso-bidi-language:
					AR-SA">&nbsp;to the</span><span lang="VI" style="font-size:12.0pt;line-height:115%;
					font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:&quot;Times New Roman&quot;;
					color:#222222;mso-ansi-language:VI;mso-fareast-language:EN-US;mso-bidi-language:
					AR-SA"> Learning Management </span><span lang="FR" style="font-size:12.0pt;
					line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:
					&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;mso-fareast-language:EN-US;
					mso-bidi-language:AR-SA">System (LMS) of HUST. Before joining LMS, all</span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:VI;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> </span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA">teachers must</span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:VI;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> </span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA">register with Academic</span><span lang="VI" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:VI;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> Office</span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> and Information Network
					Center to open Blended-learning classes. All</span><span lang="VI" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:VI;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> t</span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA">eachers</span><span lang="VI" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:VI;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> and students</span><span lang="VI" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> </span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA">should read use</span><span lang="VI" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:VI;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA">r guide of</span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> LMS Moodle before</span><span lang="VI" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:VI;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> starting classes</span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA">. All</span><span lang="VI" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:VI;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> users</span><span lang="VI" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> </span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA">should</span><span lang="VI" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:VI;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> use</span><span lang="VI" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> </span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA">HUST Office 365 account to
					log in</span><span lang="VI" style="font-size:12.0pt;line-height:115%;font-family:
					&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;
					mso-ansi-language:VI;mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> LMS</span><span lang="FR" style="font-size:12.0pt;line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;
					mso-fareast-font-family:&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:FR;
					mso-fareast-language:EN-US;mso-bidi-language:AR-SA"> system by selecting the
					button <b>HUST STAFF &amp; STUDENTS</b></span><span lang="VI" style="font-size:12.0pt;
					line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:
					&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:VI;mso-fareast-language:EN-US;
					mso-bidi-language:AR-SA">.</span><br></h4><p><span lang="VI" style="font-size:12.0pt;
					line-height:115%;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:
					&quot;Times New Roman&quot;;color:#222222;mso-ansi-language:VI;mso-fareast-language:EN-US;
					mso-bidi-language:AR-SA"><span style="color: rgb(76, 76, 76); font-family: Roboto, sans-serif; font-size: 15px;"><div class="mb2pb-gap gap clearfix" style="height:20px;"></div><a href="https://lms1.hust.edu.vn/blog/index.php?entryid=2" target="" class="btn btn-success btn-lg btn-icon-before" style="margin:0 10px 5px 0"><span class="btn-intext">Read more</span></a></span><br></span></p></div></div></div></div></div></div></div></div></div><div class="mb2-pb-fprow pre-bgstrip2 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:40px;padding-bottom:40px;background-color:rgb(241, 242, 243);"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-12 noempty"><div class="column-inner"><div class="theme-title title-left title-s style-1" style="margin:0 0 30px 0;"><h4 class="title"><span>Available Courses</span></h4></div><div class="theme-slider-wrap"><div class="theme-slider owl-carousel nlearning carousel-mode" data-items="4" data-margin="30" data-loop="0" data-nav="1" data-dots="0" data-autoplay="1" data-pausetime="5000" data-animtime="450"><div class="theme-slider-item"><div class="theme-slider-item-inner"><a href="https://lms1.hust.edu.vn/course/index.php?categoryid=20"><div class="theme-slider-img"><img src="https://lms.hust.edu.vn/pluginfile.php/1/local_mb2builder/images/Webp.net-resizeimage_test.jpg" alt="Kỹ năng mềm"></div><div class="theme-slide-content1"><div class="theme-slide-content2"><div class="theme-slide-content3"><div class="theme-slide-content4"><h4 class="theme-slide-title">Kỹ năng mềm</h4></div></div></div></div></a></div></div><div class="theme-slider-item"><div class="theme-slider-item-inner"><a href="https://lms1.hust.edu.vn/course/index.php?categoryid=21"><div class="theme-slider-img"><img src="https://lms.hust.edu.vn/pluginfile.php/1/local_mb2builder/images/Webp.net-resizeimage_test1.jpg" alt="Cơ học kỹ thuật"></div><div class="theme-slide-content1" style="background-color:rgba(17, 157, 101, 0.6);"><div class="theme-slide-content2"><div class="theme-slide-content3"><div class="theme-slide-content4"><h4 class="theme-slide-title">Cơ học kỹ thuật</h4></div></div></div></div></a></div></div><div class="theme-slider-item"><div class="theme-slider-item-inner"><a href="https://lms1.hust.edu.vn/course/view.php?id=32"><div class="theme-slider-img"><img src="https://lms.hust.edu.vn/pluginfile.php/1/local_mb2builder/images/Webp.net-resizeimage3.png" alt="Hội nhập nghề nghiệp THCN"></div><div class="theme-slide-content1" style="background-color:rgba(3, 56, 96, 0.6);"><div class="theme-slide-content2"><div class="theme-slide-content3"><div class="theme-slide-content4"><h4 class="theme-slide-title">Hội nhập nghề nghiệp THCN</h4></div></div></div></div></a></div></div><div class="theme-slider-item"><div class="theme-slider-item-inner"><a href="https://lms1.hust.edu.vn/course/view.php?id=9"><div class="theme-slider-img"><img src="https://lms.hust.edu.vn/pluginfile.php/1/local_mb2builder/images/resizeimage.jpg" alt="Tiếng Pháp học thuật - Tin học"></div><div class="theme-slide-content1" style="background-color:rgba(251, 139, 36, 0.6);"><div class="theme-slide-content2"><div class="theme-slide-content3"><div class="theme-slide-content4"><h4 class="theme-slide-title">Tiếng Pháp học thuật - Tin học</h4></div></div></div></div></a></div></div></div></div></div></div></div></div></div></div></div></div><div
					id="drawer-60b80ad4e3e3f60b80ad4d456a25"
					class=" drawer bg-white hidden"
					aria-expanded="false"
					aria-hidden="true"
					data-region="right-hand-drawer"
					role="region"
					tabindex="0"
					>
					<div id="message-drawer-60b80ad4e3e3f60b80ad4d456a25" class="mb2-message-drawer message-app" data-region="message-drawer" role="region">
						<div class="drawer-top">
							<a id="message-drawer-close-60b80ad4e3e3f60b80ad4d456a25" class="" href="#">
								<i class="icon fa fa-window-close fa-fw " title="Toggle messaging drawer" aria-label="Toggle messaging drawer"></i>
							</a>
						</div>
						<div class="header-container position-relative" data-region="header-container">
							<div class="hidden border-bottom px-2 py-3" aria-hidden="true" data-region="view-contacts">
								<div class="d-flex align-items-center">
									<div class="align-self-stretch">
										<a class="h-100 d-flex align-items-center mr-2" href="#" data-route-back role="button">
											<div class="icon-back-in-drawer">
												<span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true" ></i></span>
												<span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true" ></i></span>
											</div>
											<div class="icon-back-in-app">
												<span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true" ></i></span>
											</div> </a>
										</div>
										<div>
											Contacts
										</div>
										<div class="ml-auto">
											<a href="#" data-route="view-search" role="button" aria-label="Search">
												<i class="icon fa fa-search fa-fw " aria-hidden="true" ></i>
											</a>
										</div>
									</div>
								</div>
								<div
								class="hidden bg-white position-relative border-bottom px-2 py-2"
								aria-hidden="true"
								data-region="view-conversation"
								>
								<div class="hidden" data-region="header-content"></div>
								<div class="hidden" data-region="header-edit-mode">
									<div class="d-flex p-2 align-items-center">
										Messages selected:
										<span class="ml-1" data-region="message-selected-court">1</span>
										<button type="button" class="ml-auto close" aria-label="Cancel message selection"
										data-action="cancel-edit-mode">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							</div>
							<div data-region="header-placeholder">
								<div class="d-flex">
									<div
									class="ml-2 rounded-circle bg-pulse-grey align-self-center"
									style="height: 38px; width: 38px"
									>
								</div>
								<div class="ml-2 " style="flex: 1">
									<div
									class="mt-1 bg-pulse-grey w-75"
									style="height: 16px;"
									>
								</div>
							</div>
							<div
							class="ml-2 bg-pulse-grey align-self-center"
							style="height: 16px; width: 20px"
							>
						</div>
					</div>
				</div>
				<div
				class="hidden position-absolute"
				data-region="confirm-dialogue-container"
				style="top: 0; bottom: -1px; right: 0; left: 0; background: rgba(0,0,0,0.3);"
				></div>
			</div> <div class="border-bottom px-2 py-3" aria-hidden="false" data-region="view-overview">
				<div class="d-flex align-items-center">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text pr-2 bg-white">
								<i class="icon fa fa-search fa-fw " aria-hidden="true" ></i>
							</span>
						</div>
						<input
						type="text"
						class="form-control border-left-0"
						placeholder="Search"
						aria-label="Search"
						data-region="view-overview-search-input"
						>
					</div>
					<div class="ml-2">
						<a
						href="#"
						data-route="view-settings"
						data-route-param="7379"
						aria-label="Settings"
						role="button"
						>
						<i class="icon fa fa-cog fa-fw " aria-hidden="true" ></i>
					</a>
				</div>
			</div>
			<div class="text-right mt-3">
				<a href="#" data-route="view-contacts" role="button">
					<i class="icon fa fa-user fa-fw " aria-hidden="true" ></i>
					Contacts
					<span class="badge badge-primary bg-primary ml-2 hidden"
					data-region="contact-request-count"
					aria-label="There are 0 pending contact requests">
					0
				</span>
			</a>
		</div>
	</div>
	<div class="hidden border-bottom px-2 py-3 view-search" aria-hidden="true" data-region="view-search">
		<div class="d-flex align-items-center">
			<a
			class="mr-2 align-self-stretch d-flex align-items-center"
			href="#"
			data-route-back
			data-action="cancel-search"
			role="button"
			>
			<div class="icon-back-in-drawer">
				<span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true" ></i></span>
				<span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true" ></i></span>
			</div>
			<div class="icon-back-in-app">
				<span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true" ></i></span>
			</div> </a>
			<div class="input-group">
				<input
				type="text"
				class="form-control"
				placeholder="Search"
				aria-label="Search"
				data-region="search-input"
				>
				<div class="input-group-append">
					<button
					class="btn btn-outline-secondary"
					type="button"
					data-action="search"
					aria-label="Search"
					>
					<span data-region="search-icon-container">
						<i class="icon fa fa-search fa-fw " aria-hidden="true" ></i>
					</span>
					<span class="hidden" data-region="loading-icon-container">
						<span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
					</span>
				</button>
			</div>
		</div>
	</div>
</div>
<div class="hidden border-bottom px-2 py-3" aria-hidden="true" data-region="view-settings">
	<div class="d-flex align-items-center">
		<div class="align-self-stretch" >
			<a class="h-100 d-flex mr-2 align-items-center" href="#" data-route-back role="button">
				<div class="icon-back-in-drawer">
					<span class="dir-rtl-hide"><i class="icon fa fa-chevron-left fa-fw " aria-hidden="true" ></i></span>
					<span class="dir-ltr-hide"><i class="icon fa fa-chevron-right fa-fw " aria-hidden="true" ></i></span>
				</div>
				<div class="icon-back-in-app">
					<span class="dir-rtl-hide"><i class="icon fa fa-times fa-fw " aria-hidden="true" ></i></span>
				</div> </a>
			</div>
			<div>
				Settings
			</div>
		</div>
	</div>
</div>
<div class="body-container position-relative" data-region="body-container">
	<div
	class="hidden"
	data-region="view-contact"
	aria-hidden="true"
	>
	<div class="p-2 pt-3" data-region="content-container"></div>
</div> <div class="hidden h-100" data-region="view-contacts" aria-hidden="true" data-user-id="7379">
	<div class="d-flex flex-column h-100">
		<div class="p-3 border-bottom">
			<ul class="nav nav-pills nav-fill" role="tablist">
				<li class="nav-item">
					<a
					id="contacts-tab-60b80ad4e3e3f60b80ad4d456a25"
					class="nav-link active"
					href="#contacts-tab-panel-60b80ad4e3e3f60b80ad4d456a25"
					data-toggle="tab"
					data-action="show-contacts-section"
					role="tab"
					aria-controls="contacts-tab-panel-60b80ad4e3e3f60b80ad4d456a25"
					aria-selected="true"
					>
					Contacts
				</a>
			</li>
			<li class="nav-item">
				<a
				id="requests-tab-60b80ad4e3e3f60b80ad4d456a25"
				class="nav-link"
				href="#requests-tab-panel-60b80ad4e3e3f60b80ad4d456a25"
				data-toggle="tab"
				data-action="show-requests-section"
				role="tab"
				aria-controls="requests-tab-panel-60b80ad4e3e3f60b80ad4d456a25"
				aria-selected="false"
				>
				Requests
				<span class="badge badge-primary bg-primary ml-2 hidden"
				data-region="contact-request-count"
				aria-label="There are 0 pending contact requests">
				0
			</span>
		</a>
	</li>
</ul>
</div>
<div class="tab-content d-flex flex-column h-100">
	<div
	class="tab-pane fade show active h-100 lazy-load-list"
	aria-live="polite"
	data-region="lazy-load-list"
	data-user-id="7379"
	id="contacts-tab-panel-60b80ad4e3e3f60b80ad4d456a25"
	data-section="contacts"
	role="tabpanel"
	aria-labelledby="contacts-tab-60b80ad4e3e3f60b80ad4d456a25"

	>
	<div class="hidden text-center p-2" data-region="empty-message-container">
		No contacts
	</div>
	<div class="hidden list-group" data-region="content-container">
	</div>
	<div class="list-group" data-region="placeholder-container">
	</div>
	<div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
		<span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
	</div>
</div>
<div
class="tab-pane fade h-100 lazy-load-list"
aria-live="polite"
data-region="lazy-load-list"
data-user-id="7379"
id="requests-tab-panel-60b80ad4e3e3f60b80ad4d456a25"
data-section="requests"
role="tabpanel"
aria-labelledby="requests-tab-60b80ad4e3e3f60b80ad4d456a25"

>
<div class="hidden text-center p-2" data-region="empty-message-container">
	No contact requests
</div>
<div class="hidden list-group" data-region="content-container">
</div>
<div class="list-group" data-region="placeholder-container">
</div>
<div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
	<span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</div>
</div>
</div>
</div>
</div>
<div
class="view-conversation hidden h-100"
aria-hidden="true"
data-region="view-conversation"
data-user-id="7379"
data-midnight="1622653200"
data-message-poll-min="10"
data-message-poll-max="120"
data-message-poll-after-max="300"
style="overflow-y: auto; overflow-x: hidden"
>
<div class="position-relative h-100" data-region="content-container" style="overflow-y: auto; overflow-x: hidden">
	<div class="content-message-container hidden h-100 px-2 pt-0" data-region="content-message-container" role="log" style="overflow-y: auto; overflow-x: hidden">
		<div class="py-3 sticky-top z-index-1 border-bottom text-center hidden" data-region="contact-request-sent-message-container">
			<p class="m-0">Contact request sent</p>
			<p class="font-italic font-weight-light" data-region="text"></p>
		</div>
		<div class="p-3 text-center hidden" data-region="self-conversation-message-container">
			<p class="m-0">Personal space</p>
			<p class="font-italic font-weight-light" data-region="text">Save draft messages, links, notes etc. to access later.</p>
		</div>
		<div class="hidden text-center p-3" data-region="more-messages-loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
		</div>
	</div>
	<div class="p-4 w-100 h-100 hidden position-absolute" data-region="confirm-dialogue-container" style="top: 0; background: rgba(0,0,0,0.3);">
		<div class="p-3 bg-white" data-region="confirm-dialogue" role="alert">
			<p class="text-muted" data-region="dialogue-text"></p>
			<div class="mb-2 custom-control custom-checkbox hidden" data-region="delete-messages-for-all-users-toggle-container">
				<input type="checkbox" class="custom-control-input" id="delete-messages-for-all-users" data-region="delete-messages-for-all-users-toggle">
				<label class="custom-control-label text-muted" for="delete-messages-for-all-users">
					Delete for me and for everyone else
				</label>
			</div>
			<button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-block">
				<span data-region="dialogue-button-text">Block</span>
				<span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
			</span>
		</button>
		<button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-unblock">
			<span data-region="dialogue-button-text">Unblock</span>
			<span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
		</span>
	</button>
	<button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-remove-contact">
		<span data-region="dialogue-button-text">Remove</span>
		<span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
	</span>
</button>
<button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-add-contact">
	<span data-region="dialogue-button-text">Add</span>
	<span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
</button>
<button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-selected-messages">
	<span data-region="dialogue-button-text">Delete</span>
	<span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
</button>
<button type="button" class="btn btn-primary btn-block hidden" data-action="confirm-delete-conversation">
	<span data-region="dialogue-button-text">Delete</span>
	<span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
</button>
<button type="button" class="btn btn-primary btn-block hidden" data-action="request-add-contact">
	<span data-region="dialogue-button-text">Send contact request</span>
	<span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
</button>
<button type="button" class="btn btn-primary btn-block hidden" data-action="accept-contact-request">
	<span data-region="dialogue-button-text">Accept and add to contacts</span>
	<span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
</button>
<button type="button" class="btn btn-secondary btn-block hidden" data-action="decline-contact-request">
	<span data-region="dialogue-button-text">Decline</span>
	<span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
</button>
<button type="button" class="btn btn-primary btn-block" data-action="okay-confirm">OK</button>
<button type="button" class="btn btn-secondary btn-block" data-action="cancel-confirm">Cancel</button>
</div>
</div>
<div class="px-2 pb-2 pt-0" data-region="content-placeholder">
	<div class="h-100 d-flex flex-column">
		<div
		class="px-2 pb-2 pt-0 bg-light h-100"
		style="overflow-y: auto"
		>
		<div class="mt-4">
			<div class="mb-4">
				<div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
			</div>
			<div class="d-flex flex-column p-2 bg-white rounded mb-2">
				<div class="d-flex align-items-center mb-2">
					<div class="mr-2">
						<div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
					</div>
					<div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
					<div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
				</div>
				<div class="bg-pulse-grey w-100" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
			</div>
			<div class="d-flex flex-column p-2 bg-white rounded mb-2">
				<div class="d-flex align-items-center mb-2">
					<div class="mr-2">
						<div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
					</div>
					<div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
					<div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
				</div>
				<div class="bg-pulse-grey w-100" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
			</div>
			<div class="d-flex flex-column p-2 bg-white rounded mb-2">
				<div class="d-flex align-items-center mb-2">
					<div class="mr-2">
						<div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
					</div>
					<div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
					<div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
				</div>
				<div class="bg-pulse-grey w-100" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
			</div>
		</div> <div class="mt-4">
			<div class="mb-4">
				<div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
			</div>
			<div class="d-flex flex-column p-2 bg-white rounded mb-2">
				<div class="d-flex align-items-center mb-2">
					<div class="mr-2">
						<div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
					</div>
					<div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
					<div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
				</div>
				<div class="bg-pulse-grey w-100" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
			</div>
			<div class="d-flex flex-column p-2 bg-white rounded mb-2">
				<div class="d-flex align-items-center mb-2">
					<div class="mr-2">
						<div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
					</div>
					<div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
					<div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
				</div>
				<div class="bg-pulse-grey w-100" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
			</div>
			<div class="d-flex flex-column p-2 bg-white rounded mb-2">
				<div class="d-flex align-items-center mb-2">
					<div class="mr-2">
						<div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
					</div>
					<div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
					<div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
				</div>
				<div class="bg-pulse-grey w-100" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
			</div>
		</div> <div class="mt-4">
			<div class="mb-4">
				<div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
			</div>
			<div class="d-flex flex-column p-2 bg-white rounded mb-2">
				<div class="d-flex align-items-center mb-2">
					<div class="mr-2">
						<div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
					</div>
					<div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
					<div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
				</div>
				<div class="bg-pulse-grey w-100" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
			</div>
			<div class="d-flex flex-column p-2 bg-white rounded mb-2">
				<div class="d-flex align-items-center mb-2">
					<div class="mr-2">
						<div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
					</div>
					<div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
					<div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
				</div>
				<div class="bg-pulse-grey w-100" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
			</div>
			<div class="d-flex flex-column p-2 bg-white rounded mb-2">
				<div class="d-flex align-items-center mb-2">
					<div class="mr-2">
						<div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
					</div>
					<div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
					<div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
				</div>
				<div class="bg-pulse-grey w-100" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
			</div>
		</div> <div class="mt-4">
			<div class="mb-4">
				<div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
			</div>
			<div class="d-flex flex-column p-2 bg-white rounded mb-2">
				<div class="d-flex align-items-center mb-2">
					<div class="mr-2">
						<div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
					</div>
					<div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
					<div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
				</div>
				<div class="bg-pulse-grey w-100" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
			</div>
			<div class="d-flex flex-column p-2 bg-white rounded mb-2">
				<div class="d-flex align-items-center mb-2">
					<div class="mr-2">
						<div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
					</div>
					<div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
					<div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
				</div>
				<div class="bg-pulse-grey w-100" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
			</div>
			<div class="d-flex flex-column p-2 bg-white rounded mb-2">
				<div class="d-flex align-items-center mb-2">
					<div class="mr-2">
						<div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
					</div>
					<div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
					<div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
				</div>
				<div class="bg-pulse-grey w-100" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
			</div>
		</div> <div class="mt-4">
			<div class="mb-4">
				<div class="mx-auto bg-white" style="height: 25px; width: 100px"></div>
			</div>
			<div class="d-flex flex-column p-2 bg-white rounded mb-2">
				<div class="d-flex align-items-center mb-2">
					<div class="mr-2">
						<div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
					</div>
					<div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
					<div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
				</div>
				<div class="bg-pulse-grey w-100" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
			</div>
			<div class="d-flex flex-column p-2 bg-white rounded mb-2">
				<div class="d-flex align-items-center mb-2">
					<div class="mr-2">
						<div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
					</div>
					<div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
					<div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
				</div>
				<div class="bg-pulse-grey w-100" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
			</div>
			<div class="d-flex flex-column p-2 bg-white rounded mb-2">
				<div class="d-flex align-items-center mb-2">
					<div class="mr-2">
						<div class="rounded-circle bg-pulse-grey" style="height: 35px; width: 35px"></div>
					</div>
					<div class="mr-4 w-75 bg-pulse-grey" style="height: 16px"></div>
					<div class="ml-auto bg-pulse-grey" style="width: 35px; height: 16px"></div>
				</div>
				<div class="bg-pulse-grey w-100" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-100 mt-2" style="height: 16px"></div>
				<div class="bg-pulse-grey w-75 mt-2" style="height: 16px"></div>
			</div>
		</div> </div>
	</div> </div>
</div>
</div>
<div
class="hidden"
aria-hidden="true"
data-region="view-group-info"
>
<div
class="pt-3 h-100 d-flex flex-column"
data-region="group-info-content-container"
style="overflow-y: auto"
></div>
</div> <div class="h-100 view-overview-body" aria-hidden="false" data-region="view-overview" data-user-id="7379">
	<div id="message-drawer-view-overview-container-60b80ad4e3e3f60b80ad4d456a25" class="d-flex flex-column h-100" style="overflow-y: auto">
		<div
		class="section border-0 card"
		data-region="view-overview-favourites"
		>
		<div id="view-overview-favourites-toggle" class="card-header p-0" data-region="toggle">
			<button
			class="btn btn-link w-100 text-left p-2 d-flex align-items-center overview-section-toggle collapsed"
			data-toggle="collapse"
			data-target="#view-overview-favourites-target-60b80ad4e3e3f60b80ad4d456a25"
			aria-expanded="false"
			aria-controls="view-overview-favourites-target-60b80ad4e3e3f60b80ad4d456a25"
			>
			<span class="collapsed-icon-container">
				<i class="icon fa fa-caret-right fa-fw " aria-hidden="true" ></i>
			</span>
			<span class="expanded-icon-container">
				<i class="icon fa fa-caret-down fa-fw " aria-hidden="true" ></i>
			</span>
			<span class="font-weight-bold">Starred</span>
			<small class="hidden ml-1" data-region="section-total-count-container"
			aria-label=" total conversations">
			(<span data-region="section-total-count"></span>)
		</small>
		<span class="hidden ml-2" data-region="loading-icon-container">
			<span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
		</span>
		<span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
		data-region="section-unread-count"
		>
	</span>
</button>
</div>
<div
class="collapse border-bottom lazy-load-list"
aria-live="polite"
data-region="lazy-load-list"
data-user-id="7379"
id="view-overview-favourites-target-60b80ad4e3e3f60b80ad4d456a25"
aria-labelledby="view-overview-favourites-toggle"
data-parent="#message-drawer-view-overview-container-60b80ad4e3e3f60b80ad4d456a25"

>
<div class="hidden text-center p-2" data-region="empty-message-container">
	<p class="text-muted mt-2">No starred conversations</p>

</div>
<div class="hidden list-group" data-region="content-container">
</div>
<div class="list-group" data-region="placeholder-container">
	<div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
	</div>

</div>
<div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
	<span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</div>
</div>
</div>
<div
class="section border-0 card"
data-region="view-overview-group-messages"
>
<div id="view-overview-group-messages-toggle" class="card-header p-0" data-region="toggle">
	<button
	class="btn btn-link w-100 text-left p-2 d-flex align-items-center overview-section-toggle collapsed"
	data-toggle="collapse"
	data-target="#view-overview-group-messages-target-60b80ad4e3e3f60b80ad4d456a25"
	aria-expanded="false"
	aria-controls="view-overview-group-messages-target-60b80ad4e3e3f60b80ad4d456a25"
	>
	<span class="collapsed-icon-container">
		<i class="icon fa fa-caret-right fa-fw " aria-hidden="true" ></i>
	</span>
	<span class="expanded-icon-container">
		<i class="icon fa fa-caret-down fa-fw " aria-hidden="true" ></i>
	</span>
	<span class="font-weight-bold">Group</span>
	<small class="hidden ml-1" data-region="section-total-count-container"
	aria-label=" total conversations">
	(<span data-region="section-total-count"></span>)
</small>
<span class="hidden ml-2" data-region="loading-icon-container">
	<span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
<span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
data-region="section-unread-count"
>
</span>
</button>
</div>
<div
class="collapse border-bottom lazy-load-list"
aria-live="polite"
data-region="lazy-load-list"
data-user-id="7379"
id="view-overview-group-messages-target-60b80ad4e3e3f60b80ad4d456a25"
aria-labelledby="view-overview-group-messages-toggle"
data-parent="#message-drawer-view-overview-container-60b80ad4e3e3f60b80ad4d456a25"

>
<div class="hidden text-center p-2" data-region="empty-message-container">
	<p class="text-muted mt-2">No group conversations</p>

</div>
<div class="hidden list-group" data-region="content-container">
</div>
<div class="list-group" data-region="placeholder-container">
	<div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
	</div>

</div>
<div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
	<span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</div>
</div>
</div>
<div
class="section border-0 card"
data-region="view-overview-messages"
>
<div id="view-overview-messages-toggle" class="card-header p-0" data-region="toggle">
	<button
	class="btn btn-link w-100 text-left p-2 d-flex align-items-center overview-section-toggle collapsed"
	data-toggle="collapse"
	data-target="#view-overview-messages-target-60b80ad4e3e3f60b80ad4d456a25"
	aria-expanded="false"
	aria-controls="view-overview-messages-target-60b80ad4e3e3f60b80ad4d456a25"
	>
	<span class="collapsed-icon-container">
		<i class="icon fa fa-caret-right fa-fw " aria-hidden="true" ></i>
	</span>
	<span class="expanded-icon-container">
		<i class="icon fa fa-caret-down fa-fw " aria-hidden="true" ></i>
	</span>
	<span class="font-weight-bold">Private</span>
	<small class="hidden ml-1" data-region="section-total-count-container"
	aria-label=" total conversations">
	(<span data-region="section-total-count"></span>)
</small>
<span class="hidden ml-2" data-region="loading-icon-container">
	<span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
<span class="hidden badge badge-pill badge-primary ml-auto bg-primary"
data-region="section-unread-count"
>
</span>
</button>
</div>
<div
class="collapse border-bottom lazy-load-list"
aria-live="polite"
data-region="lazy-load-list"
data-user-id="7379"
id="view-overview-messages-target-60b80ad4e3e3f60b80ad4d456a25"
aria-labelledby="view-overview-messages-toggle"
data-parent="#message-drawer-view-overview-container-60b80ad4e3e3f60b80ad4d456a25"

>
<div class="hidden text-center p-2" data-region="empty-message-container">
	<p class="text-muted mt-2">No private conversations</p>

</div>
<div class="hidden list-group" data-region="content-container">
</div>
<div class="list-group" data-region="placeholder-container">
	<div class="text-center py-2"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
	</div>

</div>
<div class="w-100 text-center p-3 hidden" data-region="loading-icon-container" >
	<span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</div>
</div>
</div>
</div>
</div>
<div
data-region="view-search"
aria-hidden="true"
class="h-100 hidden"
data-user-id="7379"
data-users-offset="0"
data-messages-offset="0"
style="overflow-y: auto"
>
<div class="hidden" data-region="search-results-container" style="overflow-y: auto">
	<div class="d-flex flex-column">
		<div class="mb-3 bg-white" data-region="all-contacts-container">
			<div data-region="contacts-container" class="pt-2">
				<h4 class="h6 px-2">Contacts</h4>
				<div class="list-group" data-region="list"></div>
			</div>
			<div data-region="non-contacts-container" class="pt-2 border-top">
				<h4 class="h6 px-2">Non-contacts</h4>
				<div class="list-group" data-region="list"></div>
			</div>
			<div class="text-right">
				<button class="btn btn-link text-primary" data-action="load-more-users">
					<span data-region="button-text">Load more</span>
					<span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
				</span>
			</button>
		</div>
	</div>
	<div class="bg-white" data-region="messages-container">
		<h4 class="h6 px-2 pt-2">Messages</h4>
		<div class="list-group" data-region="list"></div>
		<div class="text-right">
			<button class="btn btn-link text-primary" data-action="load-more-messages">
				<span data-region="button-text">Load more</span>
				<span data-region="loading-icon-container" class="hidden"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
			</span>
		</button>
	</div>
</div>
<p class="hidden p-3 text-center" data-region="no-results-container">No results</p>
</div> </div>
<div class="hidden" data-region="loading-placeholder">
	<div class="text-center pt-3 icon-size-4"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
	</div>
</div>
<div class="p-3 text-center" data-region="empty-message-container">
	<p>Search people and messages</p>
</div>
</div>
<div class="h-100 hidden bg-white" aria-hidden="true" data-region="view-settings">
	<div class="hidden" data-region="content-container">
		<div data-region="settings" class="p-3">
			<h3 class="h6 font-weight-bold">Privacy</h3>
			<p>You can restrict who can message you</p>
			<div data-preference="blocknoncontacts" class="mb-3">
				<fieldset>
					<legend class="sr-only">Accept messages from:</legend>
					<div class="custom-control custom-radio mb-2">
						<input
						type="radio"
						name="message_blocknoncontacts"
						class="custom-control-input"
						id="block-noncontacts-60b80ad4e3e3f60b80ad4d456a25-1"
						value="1"
						>
						<label class="custom-control-label ml-2" for="block-noncontacts-60b80ad4e3e3f60b80ad4d456a25-1">
							My contacts only
						</label>
					</div>
					<div class="custom-control custom-radio mb-2">
						<input
						type="radio"
						name="message_blocknoncontacts"
						class="custom-control-input"
						id="block-noncontacts-60b80ad4e3e3f60b80ad4d456a25-0"
						value="0"
						>
						<label class="custom-control-label ml-2" for="block-noncontacts-60b80ad4e3e3f60b80ad4d456a25-0">
							My contacts and anyone in my courses
						</label>
					</div>
					<div class="custom-control custom-radio mb-2">
						<input
						type="radio"
						name="message_blocknoncontacts"
						class="custom-control-input"
						id="block-noncontacts-60b80ad4e3e3f60b80ad4d456a25-2"
						value="2"
						>
						<label class="custom-control-label ml-2" for="block-noncontacts-60b80ad4e3e3f60b80ad4d456a25-2">
							Anyone on the site
						</label>
					</div>
				</fieldset>
			</div>
			<div class="hidden" data-region="notification-preference-container">
				<h3 class="mb-2 mt-4 h6 font-weight-bold">Notification preferences</h3>
			</div>
			<h3 class="mb-2 mt-4 h6 font-weight-bold">General</h3>
			<div data-preference="entertosend">
				<span class="switch">
					<input type="checkbox"
					id="enter-to-send-60b80ad4e3e3f60b80ad4d456a25"
					>
					<label for="enter-to-send-60b80ad4e3e3f60b80ad4d456a25">
						Use enter to send
					</label>
				</span>
			</div>
		</div>
	</div>
	<div data-region="placeholder-container">
		<div class="d-flex flex-column p-3">
			<div class="w-25 bg-pulse-grey h6" style="height: 18px"></div>
			<div class="w-75 bg-pulse-grey mb-4" style="height: 18px"></div>
			<div class="mb-3">
				<div class="w-100 d-flex mb-3">
					<div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
					<div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
				</div>
				<div class="w-100 d-flex mb-3">
					<div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
					<div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
				</div>
				<div class="w-100 d-flex mb-3">
					<div class="bg-pulse-grey rounded-circle" style="width: 18px; height: 18px"></div>
					<div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
				</div>
			</div>
			<div class="w-50 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
			<div class="mb-4">
				<div class="w-100 d-flex mb-2 align-items-center">
					<div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
					<div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
				</div>
				<div class="w-100 d-flex mb-2 align-items-center">
					<div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
					<div class="bg-pulse-grey w-25 ml-2" style="height: 18px"></div>
				</div>
			</div>
			<div class="w-25 bg-pulse-grey h6 mb-3 mt-2" style="height: 18px"></div>
			<div class="mb-3">
				<div class="w-100 d-flex mb-2 align-items-center">
					<div class="bg-pulse-grey w-25" style="width: 18px; height: 27px"></div>
					<div class="bg-pulse-grey w-50 ml-2" style="height: 18px"></div>
				</div>
			</div>
		</div> </div>
	</div> </div>
	<div class="footer-container position-relative" data-region="footer-container">
		<div
		class="hidden border-top bg-white position-relative"
		aria-hidden="true"
		data-region="view-conversation"
		data-enter-to-send="0"
		>
		<div class="hidden p-2" data-region="content-messages-footer-container">
			<div
			class="emoji-auto-complete-container w-100 hidden"
			data-region="emoji-auto-complete-container"
			aria-live="polite"
			aria-hidden="true"
			>
		</div>
		<div class="d-flex mt-1">
			<textarea
			dir="auto"
			data-region="send-message-txt"
			class="form-control bg-light"
			rows="3"
			data-auto-rows
			data-min-rows="3"
			data-max-rows="5"
			aria-label="Write a message..."
			placeholder="Write a message..."
			style="resize: none"
			></textarea>
			<div class="position-relative d-flex flex-column">
				<div
				data-region="emoji-picker-container"
				class="emoji-picker-container hidden"
				aria-hidden="true"
				>
				<div
				data-region="emoji-picker"
				class="card shadow emoji-picker"
				>
				<div class="card-header px-1 pt-1 pb-0 d-flex justify-content-between flex-shrink-0">
					<button
					class="btn btn-outline-secondary icon-no-margin category-button selected"
					data-action="show-category"
					data-category="Recent"
					title="Recent"
					>
					<i class="icon fa fa-clock-o fa-fw " aria-hidden="true" ></i>
				</button>
				<button
				class="btn btn-outline-secondary icon-no-margin category-button"
				data-action="show-category"
				data-category="Smileys & People"
				title="Smileys & people"
				>
				<i class="icon fa fa-smile-o fa-fw " aria-hidden="true" ></i>
			</button>
			<button
			class="btn btn-outline-secondary icon-no-margin category-button"
			data-action="show-category"
			data-category="Animals & Nature"
			title="Animals & nature"
			>
			<i class="icon fa fa-leaf fa-fw " aria-hidden="true" ></i>
		</button>
		<button
		class="btn btn-outline-secondary icon-no-margin category-button"
		data-action="show-category"
		data-category="Food & Drink"
		title="Food & drink"
		>
		<i class="icon fa fa-cutlery fa-fw " aria-hidden="true" ></i>
	</button>
	<button
	class="btn btn-outline-secondary icon-no-margin category-button"
	data-action="show-category"
	data-category="Travel & Places"
	title="Travel & places"
	>
	<i class="icon fa fa-plane fa-fw " aria-hidden="true" ></i>
</button>
<button
class="btn btn-outline-secondary icon-no-margin category-button"
data-action="show-category"
data-category="Activities"
title="Activities"
>
<i class="icon fa fa-futbol-o fa-fw " aria-hidden="true" ></i>
</button>
<button
class="btn btn-outline-secondary icon-no-margin category-button"
data-action="show-category"
data-category="Objects"
title="Objects"
>
<i class="icon fa fa-lightbulb-o fa-fw " aria-hidden="true" ></i>
</button>
<button
class="btn btn-outline-secondary icon-no-margin category-button"
data-action="show-category"
data-category="Symbols"
title="Symbols"
>
<i class="icon fa fa-heart fa-fw " aria-hidden="true" ></i>
</button>
<button
class="btn btn-outline-secondary icon-no-margin category-button"
data-action="show-category"
data-category="Flags"
title="Flags"
>
<i class="icon fa fa-flag fa-fw " aria-hidden="true" ></i>
</button>
</div>
<div class="card-body p-2 d-flex flex-column overflow-hidden">
	<div class="input-group mb-1 flex-shrink-0">
		<div class="input-group-prepend">
			<span class="input-group-text pr-0 bg-white text-muted">
				<i class="icon fa fa-search fa-fw " aria-hidden="true" ></i>
			</span>
		</div>
		<input
		type="text"
		class="form-control border-left-0"
		placeholder="Search"
		aria-label="Search"
		data-region="search-input"
		>
	</div>
	<div class="flex-grow-1 overflow-auto emojis-container h-100" data-region="emojis-container">
		<div class="position-relative" data-region="row-container"></div>
	</div>
	<div class="flex-grow-1 overflow-auto search-results-container h-100 hidden" data-region="search-results-container">
		<div class="position-relative" data-region="row-container"></div>
	</div>
</div>
<div
class="card-footer d-flex flex-shrink-0"
data-region="footer"
>
<div class="emoji-preview" data-region="emoji-preview"></div>
<div data-region="emoji-short-name" class="emoji-short-name text-muted text-wrap ml-2"></div>
</div>
</div>
</div>
<button
class="btn btn-link btn-icon icon-size-3 ml-1"
aria-label="Toggle emoji picker"
data-action="toggle-emoji-picker"
>
<i class="icon fa fa-smile-o fa-fw " aria-hidden="true" ></i>
</button>
<button
class="btn btn-link btn-icon icon-size-3 ml-1 mt-auto"
aria-label="Send message"
data-action="send-message"
>
<span data-region="send-icon-container"><i class="icon fa fa-paper-plane fa-fw " aria-hidden="true" ></i></span>
<span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
</span>
</button>
</div>
</div>
</div>
<div class="hidden p-2" data-region="content-messages-footer-edit-mode-container">
	<div class="d-flex p-3 justify-content-end">
		<button
		class="btn btn-link btn-icon my-1 icon-size-4"
		data-action="delete-selected-messages"
		data-toggle="tooltip"
		data-placement="top"
		title="Delete selected messages"
		>
		<span data-region="icon-container"><i class="icon fa fa-trash fa-fw " aria-hidden="true" ></i></span>
		<span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
	</span>
	<span class="sr-only">Delete selected messages</span>
</button>
</div> </div>
<div class="hidden bg-secondary p-3" data-region="content-messages-footer-require-contact-container">
	<div class="p-3 bg-white">
		<p data-region="title"></p>
		<p class="text-muted" data-region="text"></p>
		<button type="button" class="btn btn-primary btn-block" data-action="request-add-contact">
			<span data-region="dialogue-button-text">Send contact request</span>
			<span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
		</span>
	</button>
</div>
</div>
<div class="hidden bg-secondary p-3" data-region="content-messages-footer-require-unblock-container">
	<div class="p-3 bg-white">
		<p class="text-muted" data-region="text">You have blocked this user.</p>
		<button type="button" class="btn btn-primary btn-block" data-action="request-unblock">
			<span data-region="dialogue-button-text">Unblock user</span>
			<span class="hidden" data-region="loading-icon-container"><span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
		</span>
	</button>
</div>
</div>
<div class="hidden bg-secondary p-3" data-region="content-messages-footer-unable-to-message">
	<div class="p-3 bg-white">
		<p class="text-muted" data-region="text">You are unable to message this user</p>
	</div>
</div>
<div class="p-2" data-region="placeholder-container">
	<div class="d-flex">
		<div class="bg-pulse-grey w-100" style="height: 80px"></div>
		<div class="mx-2 mb-2 align-self-end bg-pulse-grey" style="height: 20px; width: 20px"></div>
	</div> </div>
	<div
	class="hidden position-absolute"
	data-region="confirm-dialogue-container"
	style="top: -1px; bottom: 0; right: 0; left: 0; background: rgba(0,0,0,0.3);"
	></div>
</div> <div data-region="view-overview" class="text-center">
	<a href="https://lms.hust.edu.vn/message/index.php">
		See all
	</a>
</div>
</div>
</div>

</div><div id="bottom" class="dark1">
</div>
<div id="bottom-abcd" class="dark1">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<aside id="block-region-bottom-b" class="bottom-b style-bottom block-region" data-blockregion="bottom-b" data-droptarget="1"><a href="#sb-5" class="sr-only sr-only-focusable">Skip Calendar</a>

					<section id="inst1227"
					class=" block_calendar_month block card mb-3"
					role="complementary"
					data-block="calendar_month"
					aria-labelledby="instance-1227-header"
					>

					<div class="card-body p-3">

						<h5 id="instance-1227-header" class="card-title d-inline">Calendar</h5>


						<div class="card-text content mt-3">
							<div id="calendar-month-2021-June-60b80ad4d94da60b80ad4d456a13" data-template="core_calendar/month_mini" data-includenavigation="true" data-mini="true">
								<div id="month-mini-2021-June-60b80ad4d94da60b80ad4d456a13" class="calendarwrapper" data-courseid="1" data-categoryid="0" data-month="6" data-year="2021" data-day="3" data-view="month">
									<span class="overlay-icon-container hidden" data-region="overlay-icon-container">
										<span class="loading-icon icon-no-margin"><i class="icon fa fa-circle-o-notch fa-spin fa-fw " title="Loading" aria-label="Loading"></i></span>
									</span>
									<table class="minicalendar calendartable">
										<caption class="calendar-controls">
											<a href="#" class="arrow_link previous" title="Previous month" data-year="2021" data-month="5">
												<span class="arrow">&#x25C4;</span>
											</a>
											<span class="hide"> | </span>
											<span class="current">
												<a href="https://lms.hust.edu.vn/calendar/view.php?view=month&time=1622674132" title="This month">June 2021</a>
											</span>
											<span class="hide"> | </span>
											<a href="#" class="arrow_link next" title="Next month" data-year="2021" data-month="7">
												<span class="arrow">&#x25BA;</span>
											</a>
										</caption>
										<thead>
											<tr>
												<th class="header text-xs-center">
													<span class="sr-only">Monday</span>
													<span aria-hidden="true">Mon</span>
												</th>
												<th class="header text-xs-center">
													<span class="sr-only">Tuesday</span>
													<span aria-hidden="true">Tue</span>
												</th>
												<th class="header text-xs-center">
													<span class="sr-only">Wednesday</span>
													<span aria-hidden="true">Wed</span>
												</th>
												<th class="header text-xs-center">
													<span class="sr-only">Thursday</span>
													<span aria-hidden="true">Thu</span>
												</th>
												<th class="header text-xs-center">
													<span class="sr-only">Friday</span>
													<span aria-hidden="true">Fri</span>
												</th>
												<th class="header text-xs-center">
													<span class="sr-only">Saturday</span>
													<span aria-hidden="true">Sat</span>
												</th>
												<th class="header text-xs-center">
													<span class="sr-only">Sunday</span>
													<span aria-hidden="true">Sun</span>
												</th>
											</tr>
										</thead>
										<tbody>
											<tr data-region="month-view-week">
												<td class="dayblank">&nbsp;</td>
												<td class="day text-center" data-day-timestamp="1622480400"><span class="sr-only">No events, Tuesday, 1 June</span>

													<span aria-hidden="true">1</span>
												</td>
												<td class="day text-center" data-day-timestamp="1622566800"><span class="sr-only">No events, Wednesday, 2 June</span>

													<span aria-hidden="true">2</span>
												</td>
												<td class="day text-center today" data-day-timestamp="1622653200"><span class="sr-only">No events, Thursday, 3 June</span>
													<a id="calendar-day-popover-link-1-2021-153-60b80ad4d94da60b80ad4d456a13" href="https://lms.hust.edu.vn/calendar/view.php?view=day&amp;time=1622653200" data-container="body" data-toggle="popover" data-html="true" data-region="mini-day-link" data-trigger="hover focus" data-placement="top" data-year="2021" data-month="6" data-courseid="1" data-categoryid="0" data-title="Today Thursday, 3 June" data-alternate="No events" aria-label="Today Thursday, 3 June">3</a>
													<div class="hidden">
													</div>
												</td>
												<td class="day text-center" data-day-timestamp="1622739600"><span class="sr-only">No events, Friday, 4 June</span>

													<span aria-hidden="true">4</span>
												</td>
												<td class="day text-center weekend" data-day-timestamp="1622826000"><span class="sr-only">No events, Saturday, 5 June</span>

													<span aria-hidden="true">5</span>
												</td>
												<td class="day text-center weekend" data-day-timestamp="1622912400"><span class="sr-only">No events, Sunday, 6 June</span>

													<span aria-hidden="true">6</span>
												</td>
											</tr>
											<tr data-region="month-view-week">
												<td class="day text-center" data-day-timestamp="1622998800"><span class="sr-only">No events, Monday, 7 June</span>

													<span aria-hidden="true">7</span>
												</td>
												<td class="day text-center" data-day-timestamp="1623085200"><span class="sr-only">No events, Tuesday, 8 June</span>

													<span aria-hidden="true">8</span>
												</td>
												<td class="day text-center" data-day-timestamp="1623171600"><span class="sr-only">No events, Wednesday, 9 June</span>

													<span aria-hidden="true">9</span>
												</td>
												<td class="day text-center" data-day-timestamp="1623258000"><span class="sr-only">No events, Thursday, 10 June</span>

													<span aria-hidden="true">10</span>
												</td>
												<td class="day text-center" data-day-timestamp="1623344400"><span class="sr-only">No events, Friday, 11 June</span>

													<span aria-hidden="true">11</span>
												</td>
												<td class="day text-center weekend" data-day-timestamp="1623430800"><span class="sr-only">No events, Saturday, 12 June</span>

													<span aria-hidden="true">12</span>
												</td>
												<td class="day text-center weekend" data-day-timestamp="1623517200"><span class="sr-only">No events, Sunday, 13 June</span>

													<span aria-hidden="true">13</span>
												</td>
											</tr>
											<tr data-region="month-view-week">
												<td class="day text-center" data-day-timestamp="1623603600"><span class="sr-only">No events, Monday, 14 June</span>

													<span aria-hidden="true">14</span>
												</td>
												<td class="day text-center" data-day-timestamp="1623690000"><span class="sr-only">No events, Tuesday, 15 June</span>

													<span aria-hidden="true">15</span>
												</td>
												<td class="day text-center" data-day-timestamp="1623776400"><span class="sr-only">No events, Wednesday, 16 June</span>

													<span aria-hidden="true">16</span>
												</td>
												<td class="day text-center" data-day-timestamp="1623862800"><span class="sr-only">No events, Thursday, 17 June</span>

													<span aria-hidden="true">17</span>
												</td>
												<td class="day text-center" data-day-timestamp="1623949200"><span class="sr-only">No events, Friday, 18 June</span>

													<span aria-hidden="true">18</span>
												</td>
												<td class="day text-center weekend" data-day-timestamp="1624035600"><span class="sr-only">No events, Saturday, 19 June</span>

													<span aria-hidden="true">19</span>
												</td>
												<td class="day text-center weekend" data-day-timestamp="1624122000"><span class="sr-only">No events, Sunday, 20 June</span>

													<span aria-hidden="true">20</span>
												</td>
											</tr>
											<tr data-region="month-view-week">
												<td class="day text-center" data-day-timestamp="1624208400"><span class="sr-only">No events, Monday, 21 June</span>

													<span aria-hidden="true">21</span>
												</td>
												<td class="day text-center" data-day-timestamp="1624294800"><span class="sr-only">No events, Tuesday, 22 June</span>

													<span aria-hidden="true">22</span>
												</td>
												<td class="day text-center" data-day-timestamp="1624381200"><span class="sr-only">No events, Wednesday, 23 June</span>

													<span aria-hidden="true">23</span>
												</td>
												<td class="day text-center" data-day-timestamp="1624467600"><span class="sr-only">No events, Thursday, 24 June</span>

													<span aria-hidden="true">24</span>
												</td>
												<td class="day text-center" data-day-timestamp="1624554000"><span class="sr-only">No events, Friday, 25 June</span>

													<span aria-hidden="true">25</span>
												</td>
												<td class="day text-center weekend" data-day-timestamp="1624640400"><span class="sr-only">No events, Saturday, 26 June</span>

													<span aria-hidden="true">26</span>
												</td>
												<td class="day text-center weekend" data-day-timestamp="1624726800"><span class="sr-only">No events, Sunday, 27 June</span>

													<span aria-hidden="true">27</span>
												</td>
											</tr>
											<tr data-region="month-view-week">
												<td class="day text-center" data-day-timestamp="1624813200"><span class="sr-only">No events, Monday, 28 June</span>

													<span aria-hidden="true">28</span>
												</td>
												<td class="day text-center" data-day-timestamp="1624899600"><span class="sr-only">No events, Tuesday, 29 June</span>

													<span aria-hidden="true">29</span>
												</td>
												<td class="day text-center" data-day-timestamp="1624986000"><span class="sr-only">No events, Wednesday, 30 June</span>

													<span aria-hidden="true">30</span>
												</td>
												<td class="dayblank">&nbsp;</td>
												<td class="dayblank">&nbsp;</td>
												<td class="dayblank">&nbsp;</td>
												<td class="dayblank">&nbsp;</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="footer"></div>
						</div>

					</div>

				</section>

				<span id="sb-5"></span></aside> </div>
				<div class="col-md-4">
					<aside id="block-region-bottom-c" class="bottom-c style-bottom block-region" data-blockregion="bottom-c" data-droptarget="1"><a href="#sb-6" class="sr-only sr-only-focusable">Skip Information</a>

						<section id="inst1224"
						class=" block_html block card mb-3"
						role="complementary"
						data-block="html"
						aria-labelledby="instance-1224-header"
						>

						<div class="card-body p-3">

							<h5 id="instance-1224-header" class="card-title d-inline">Information</h5>


							<div class="card-text content mt-3">
								<div class="no-overflow"><ul class="theme-list list1 list-left"><li><a href="https://www.hust.edu.vn/">Hanoi University of Science and Technology</a></li><li><a href="http://ctsv.hust.edu.vn/">Affaire étudiante</a></li><li><a href="https://ctt-daotao.hust.edu.vn/">Formation universitaire</a></li><li><a href="https://ctt-sis.hust.edu.vn/Account/Login.aspx">Student Information</a></li><li><a href="https://ts.hust.edu.vn/">Admissions</a></li></ul><p></p><br></div>
								<div class="footer"></div>
							</div>

						</div>

					</section>

					<span id="sb-6"></span></aside> </div>
					<div class="col-md-4">
						<aside id="block-region-bottom-d" class="bottom-d style-bottom block-region" data-blockregion="bottom-d" data-droptarget="1"><a href="#sb-7" class="sr-only sr-only-focusable">Skip Contact</a>

							<section id="inst1225"
							class=" block_html block card mb-3"
							role="complementary"
							data-block="html"
							aria-labelledby="instance-1225-header"
							>

							<div class="card-body p-3">

								<h5 id="instance-1225-header" class="card-title d-inline">Contact</h5>


								<div class="card-text content mt-3">
									<div class="no-overflow"><p>915 - Elearning Center - Ta Quang Buu Building - HUST</p><div class="border-hor light" style="border-bottom-style:solid;border-bottom-width:1px;margin:20px 0;height:1px;"></div><span class="tmpl-icon-wrap icon-size-default" style="display:block;margin:0 0 13px 0;"><i class="tmpl-icon fa fa-phone icon-size-default" style="color:#fff;"></i> <span class="tmpl-icon-content">&nbsp; +084 3 868 3188</span></span><span class="tmpl-icon-wrap icon-size-default" style="display:block;margin:0 0 13px 0;"><i class="tmpl-icon fa fa-envelope icon-size-default" style="color:#fff;"></i> <span class="tmpl-icon-content">&nbsp;&nbsp;<a href="mailto:techsupport.elearning@hust.edu.vn">techsupport.elearning@hust.edu.vn</a></span></span></div>
									<div class="footer"></div>
								</div>

							</div>

						</section>

						<span id="sb-7"></span></aside> </div>
					</div>
				</div>
			</div>
			<footer id="footer" class="dark1">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="footer-content clearfix">
								<p class="footer-text">Copyright © 2020 - Developed by <a href="https://lms.hust.edu.vn/">BKElearning - HUST</a></p>
								<ul class="social-list"><li class="li-facebook"><a href="https://facebook.com/" title="Facebook" target="_balnk"><i class="fa fa-facebook"></i></a></li><li class="li-pinterest"><a href="https://www.pinterest.com/" title="Pinterest" target="_balnk"><i class="fa fa-pinterest"></i></a></li><li class="li-skype"><a href="https://www.skype.com/en/" title="Skype" target="_balnk"><i class="fa fa-skype"></i></a></li><li class="li-google-plus"><a href="https://myaccount.google.com/intro/profile" title="Google Plus" target="_balnk"><i class="fa fa-google-plus"></i></a></li></ul> </div>
							</div>
						</div>
					</div>
				</footer>
			</div><!-- //end #page-b -->
		</div><!-- //end #page -->
	</div><!-- //end #page-outer -->
	<div class="fixed-bar">
		<a href="#" class="theme-hide-sidebar mode1 textbutton" data-showtext="Show sidebars" data-hidetext="Hide sidebars">Hide sidebars</a></div>
		<a class="theme-scrolltt" href="#"><i class="pe-7s-angle-up" data-scrollspeed="400"></i></a>
		<script>
			$(document).ready(function(){
				if ($('body').hasClass('pagelayout-login')) {
					$('form#login').closest('.row').prepend($('.potentialidplist'));
					$('form#login').closest('.row').prepend($('h6.mt-2'));
					$('.potentialidplist').after('<div class="w-100 text-center text-muted">or</div><button class="btn btn-secondary mt-2" id="btn-other-user">OTHER USER</button>');
					var form = $('#login');
					form.hide();
					var forgotPass = $('.forgetpass.mt-3');
					forgotPass.hide();
					$('#btn-other-user').click(function () {
						form.slideToggle("fast");
						forgotPass.slideToggle("fast");
					})
				}});
			</script><script>
//<![CDATA[
var require = {
	baseUrl : 'https://lms.hust.edu.vn/lib/requirejs.php/1620106219/',
// We only support AMD modules with an explicit define() statement.
enforceDefine: true,
skipDataMain: true,
waitSeconds : 0,

paths: {
	jquery: 'https://lms.hust.edu.vn/lib/javascript.php/1620106219/lib/jquery/jquery-3.4.1.min',
	jqueryui: 'https://lms.hust.edu.vn/lib/javascript.php/1620106219/lib/jquery/ui-1.12.1/jquery-ui.min',
	jqueryprivate: 'https://lms.hust.edu.vn/lib/javascript.php/1620106219/lib/requirejs/jquery-private'
},

// Custom jquery config map.
map: {
// '*' means all modules will get 'jqueryprivate'
// for their 'jquery' dependency.
'*': { jquery: 'jqueryprivate' },
// Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
'*': { process: 'core/first' },

// 'jquery-private' wants the real jQuery module
// though. If this line was not here, there would
// be an unresolvable cyclic dependency.
jqueryprivate: { jquery: 'jquery' }
}
};

//]]>
</script>
<script src="https://lms.hust.edu.vn/lib/javascript.php/1620106219/lib/requirejs/require.min.js"></script>
<script>
//<![CDATA[
M.util.js_pending("core/first");require(['core/first'], function() {
	;
	require(["media_videojs/loader"], function(loader) {
		loader.setUp(function(videojs) {
			videojs.options.flash.swf = "https://lms.hust.edu.vn/media/player/videojs/videojs/video-js.swf";
			videojs.addLanguage('en', {
				"Audio Player": "Audio Player",
				"Video Player": "Video Player",
				"Play": "Play",
				"Pause": "Pause",
				"Replay": "Replay",
				"Current Time": "Current Time",
				"Duration": "Duration",
				"Remaining Time": "Remaining Time",
				"Stream Type": "Stream Type",
				"LIVE": "LIVE",
				"Seek to live, currently behind live": "Seek to live, currently behind live",
				"Seek to live, currently playing live": "Seek to live, currently playing live",
				"Loaded": "Loaded",
				"Progress": "Progress",
				"Progress Bar": "Progress Bar",
				"progress bar timing: currentTime={1} duration={2}": "{1} of {2}",
				"Fullscreen": "Fullscreen",
				"Non-Fullscreen": "Non-Fullscreen",
				"Mute": "Mute",
				"Unmute": "Unmute",
				"Playback Rate": "Playback Rate",
				"Subtitles": "Subtitles",
				"subtitles off": "subtitles off",
				"Captions": "Captions",
				"captions off": "captions off",
				"Chapters": "Chapters",
				"Descriptions": "Descriptions",
				"descriptions off": "descriptions off",
				"Audio Track": "Audio Track",
				"Volume Level": "Volume Level",
				"You aborted the media playback": "You aborted the media playback",
				"A network error caused the media download to fail part-way.": "A network error caused the media download to fail part-way.",
				"The media could not be loaded, either because the server or network failed or because the format is not supported.": "The media could not be loaded, either because the server or network failed or because the format is not supported.",
				"The media playback was aborted due to a corruption problem or because the media used features your browser did not support.": "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.",
				"No compatible source was found for this media.": "No compatible source was found for this media.",
				"The media is encrypted and we do not have the keys to decrypt it.": "The media is encrypted and we do not have the keys to decrypt it.",
				"Play Video": "Play Video",
				"Close": "Close",
				"Close Modal Dialog": "Close Modal Dialog",
				"Modal Window": "Modal Window",
				"This is a modal window": "This is a modal window",
				"This modal can be closed by pressing the Escape key or activating the close button.": "This modal can be closed by pressing the Escape key or activating the close button.",
				", opens captions settings dialog": ", opens captions settings dialog",
				", opens subtitles settings dialog": ", opens subtitles settings dialog",
				", opens descriptions settings dialog": ", opens descriptions settings dialog",
				", selected": ", selected",
				"captions settings": "captions settings",
				"subtitles settings": "subititles settings",
				"descriptions settings": "descriptions settings",
				"Text": "Text",
				"White": "White",
				"Black": "Black",
				"Red": "Red",
				"Green": "Green",
				"Blue": "Blue",
				"Yellow": "Yellow",
				"Magenta": "Magenta",
				"Cyan": "Cyan",
				"Background": "Background",
				"Window": "Window",
				"Transparent": "Transparent",
				"Semi-Transparent": "Semi-Transparent",
				"Opaque": "Opaque",
				"Font Size": "Font Size",
				"Text Edge Style": "Text Edge Style",
				"None": "None",
				"Raised": "Raised",
				"Depressed": "Depressed",
				"Uniform": "Uniform",
				"Dropshadow": "Dropshadow",
				"Font Family": "Font Family",
				"Proportional Sans-Serif": "Proportional Sans-Serif",
				"Monospace Sans-Serif": "Monospace Sans-Serif",
				"Proportional Serif": "Proportional Serif",
				"Monospace Serif": "Monospace Serif",
				"Casual": "Casual",
				"Script": "Script",
				"Small Caps": "Small Caps",
				"Reset": "Reset",
				"restore all settings to the default values": "restore all settings to the default values",
				"Done": "Done",
				"Caption Settings Dialog": "Caption Settings Dialog",
				"Beginning of dialog window. Escape will cancel and close the window.": "Beginning of dialog window. Escape will cancel and close the window.",
				"End of dialog window.": "End of dialog window.",
				"{1} is loading.": "{1} is loading."
			});

});
});;
M.util.js_pending('block_navigation/navblock'); require(['block_navigation/navblock'], function(amd) {amd.init("1191"); M.util.js_complete('block_navigation/navblock');});;
M.util.js_pending('block_settings/settingsblock'); require(['block_settings/settingsblock'], function(amd) {amd.init("1192", null); M.util.js_complete('block_settings/settingsblock');});;
require(['theme_boost/loader']);require(['jquery','theme_boost/tooltip'], function($){$('[data-toggle="tooltip"]').tooltip()});;

require(['jquery'], function($) {
	require(['theme_boost/popover'], function() {
		var target = $("#calendar-day-popover-link-1-2021-153-60b80ad4d94da60b80ad4d456a13");
		target.popover({
			content: function() {
				var source = target.next().find("> *:not('.hidden')");
				var content = $('<div>');

				if (source.length) {
					content.html(source.clone(false));
				} else {
					content.html(target.data('alternate'));
				}

				return content.html();
			}
		});
	});
});
;

require([
	'jquery',
	'core_calendar/selectors',
	'core_calendar/events',
	], function(
		$,
		CalendarSelectors,
		CalendarEvents
		) {

		$('body').on(CalendarEvents.filterChanged, function(e, data) {
			M.util.js_pending("month-mini-60b80ad4d94da60b80ad4d456a13-filterChanged");
// A filter value has been changed.
// Find all matching cells in the popover data, and hide them.
$("#month-mini-2021-June-60b80ad4d94da60b80ad4d456a13")
.find(CalendarSelectors.popoverType[data.type])
.toggleClass('hidden', !!data.hidden);
M.util.js_complete("month-mini-60b80ad4d94da60b80ad4d456a13-filterChanged");
});
	});
;

require(['jquery', 'core_calendar/calendar_mini'], function($, CalendarMini) {
	CalendarMini.init($("#calendar-month-2021-June-60b80ad4d94da60b80ad4d456a13"), !0);
});
;

require(['jquery', 'message_popup/notification_popover_controller'], function($, controller) {
	var container = $('#nav-notification-popover-container');
	var controller = new controller(container);
	controller.registerEventListeners();
	controller.registerListNavigationEventListeners();
});
;

require(
	[
	'jquery',
	'core_message/message_popover'
	],
	function(
		$,
		Popover
		) {
		var toggle = $('#message-drawer-toggle-60b80ad4de35b60b80ad4d456a24');
		Popover.init(toggle);
	});
;

require([
	'jquery',
	'core_message/message_drawer',
	'core_message/message_popover'
	],

	function($, MessageDrawer, Popover)
	{

		var root = $('#message-drawer-60b80ad4e3e3f60b80ad4d456a25');
		MessageDrawer.init(root, '60b80ad4e3e3f60b80ad4d456a25', false);

		var toggle = $('#message-drawer-close-60b80ad4e3e3f60b80ad4d456a25');
		Popover.init(toggle);
	}
	);
;
M.util.js_pending('core/notification'); require(['core/notification'], function(amd) {amd.init(2, []); M.util.js_complete('core/notification');});;
M.util.js_pending('core/log'); require(['core/log'], function(amd) {amd.setConfig({"level":"warn"}); M.util.js_complete('core/log');});;
M.util.js_pending('core/page_global'); require(['core/page_global'], function(amd) {amd.init(); M.util.js_complete('core/page_global');});M.util.js_complete("core/first");
});
//]]>
</script>
<script src="https://lms.hust.edu.vn/lib/javascript.php/1620106219/theme/mb2nl/assets/superfish/superfish.custom.js"></script>
<script src="https://lms.hust.edu.vn/lib/javascript.php/1620106219/theme/mb2nl/assets/lightslider/lightslider.custom.min.js"></script>
<script src="https://lms.hust.edu.vn/lib/javascript.php/1620106219/theme/mb2nl/assets/OwlCarousel/owl.carousel.min.js"></script>
<script src="https://lms.hust.edu.vn/lib/javascript.php/1620106219/theme/mb2nl/assets/inview.js"></script>
<script src="https://lms.hust.edu.vn/lib/javascript.php/1620106219/theme/mb2nl/assets/animateNumber.js"></script>
<script src="https://lms.hust.edu.vn/lib/javascript.php/1620106219/theme/mb2nl/assets/js.cookie.js"></script>
<script src="https://lms.hust.edu.vn/lib/javascript.php/1620106219/theme/mb2nl/javascript/theme.js"></script>

</body>
</html>
