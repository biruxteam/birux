<?php
require_once $_SERVER['DOCUMENT_ROOT']."/app/Services/Router.php";
require_once $_SERVER['DOCUMENT_ROOT']."/app/Services/DB.php";
include($_SERVER['DOCUMENT_ROOT'] . '/app/Services/Server.php');

/* Web3 */
get('/wallet', 'views/pages/Wallet.php');


/* User Pages */
get('/', 'views/pages/Index.php');
get('/reg', 'views/pages/Register.php');
get('/login', 'views/pages/Login.php');
get('/feed', 'views/pages/Feed.php');
post('/feed', 'views/pages/Feed.php');
get('/settings', 'views/pages/Settings.php');


//Settings Pages
get('/g/settings', 'views/pages/GroupSettings.php');
get('/settings/account', 'views/pages/Settings/Account.php');
get('/settings/about', 'views/pages/Settings/About.php');
get('/settings/personalization', 'views/pages/Settings/Personalization.php');
get('/settings/image', 'views/pages/Settings/Image.php');
get('/settings/profile', 'views/pages/Settings/Profile.php');
get('/settings/accountsettings', 'views/pages/Settings/AccountSettings.php');
get('/settings/accountsettings/password', 'views/pages/Settings/AccountSettings/Password.php');
get('/settings/accountsettings/2fa', 'views/pages/Settings/AccountSettings/2fa.php');
post('/settings/image', 'views/pages/Settings/Image.php');

//OOBE
get('/welcome', 'views/pages/Welcome.php');

//Create Content
get('/create/post', 'views/pages/Create/Post.php');
get('/create/group', 'views/pages/Create/Group.php');
get('/create/video', 'views/pages/Create/Video.php');
post('/create/video', 'views/pages/Create/Video.php');
get('/neon/main', 'views/pages/Web3/CreateNeon.php');

//Explore
get('/explore/users', 'views/pages/Explore/Users.php');
get('/explore/video', 'views/pages/Explore/Video.php');
get('/explore/groups', 'views/pages/Explore/Groups.php');

//Messages
get('/msg', 'views/pages/Messages/Chat.php');

/* API */
post('/exapi/birux.login', 'views/pages/Api/External/Login.php');
post('/exapi/birux.register', 'views/pages/Api/External/Register.php');
get('/exapi/birux.subscribe', 'views/pages/Api/External/Subscribe.php');
post('/exapi/birux.subscribe', 'views/pages/Api/External/Subscribe.php');
post('/exapi/birux.groupCreate', 'views/pages/Api/External/Groups/Create.php');
post('/exapi/birux.postsCreate', 'views/pages/Api/External/Posts/Create.php');
post('/exapi/birux.aboutChange', 'views/pages/Api/External/About.php');
post('/exapi/birux.postsLike', 'views/pages/Api/External/Posts/Like.php');
post('/exapi/birux.videoLike', 'views/pages/Api/External/Video/Reaction.php');
post('/exapi/birux.themeChange', 'views/pages/Api/External/Personalization.php');
get('/exapi/birux.postsLike', 'views/pages/Api/External/Posts/Like.php');
post('/api/posts.Get', 'views/pages/Api/Public/Posts/Get.php');
get('/api/posts.Get', 'views/pages/Api/Public/Posts/Get.php');

/* Service Pages */
get('/servicepages/~/vkui', 'views/pages/Dev/Service/VKUI.php');
get('/servicepages/~/feed', 'views/pages/Dev/Service/VKUI.php');

get('/t', 'views/components/Sidebar.php');

/* Other */
get('/rt', 'views/pages/Dev/Service/RoutingTests.php');
post('/rt', 'views/pages/Dev/Service/RoutingTests.php');
get('/r1', 'views/pages/Dev/Service/Route1.php');
get('/r2', 'views/pages/Dev/Service/Route2.php');
get('/notifications', 'views/pages/Notifications.php');
get('/about!brx', 'views/pages/InstanceAbout.php');
get('/g', 'views/pages/t.php');
post('/g', 'views/pages/t.php');
get('/status', 'views/pages/Dev/StatusPage.php');
get('/error', 'views/pages/Errors/ExternalError.php');
get('/servicepages', 'views/pages/Dev/ServicePages.php');
get('/logout', 'app/Services/Logout.php');
get('/post/$id', 'views/pages/Post.php');
post('/post/$id', 'views/pages/Post.php');
get('/video/$id', 'views/pages/Video.php');
get('/g/$namegroup', 'views/pages/Group.php');
get('/video/$id', 'views/pages/Video.php');
get('/act', 'views/handlers/Main.php');
get('/g/$namegroup/settings', 'views/pages/Settings/Groups/Index.php');
get('/$username', 'views/pages/Profile.php');
any('/404', 'views/pages/Errors/404.php');
get('/badjs', 'views/pages/Errors/JavascriptNotEnabled.php');

