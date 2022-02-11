<?php
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'], '.env');
$dotenv->load();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<link rel="stylesheet" href="/static/css/iabout.css">
<link rel="stylesheet" href="/static/fonts/ttc/stylesheet.css">
<title>PHP 7.4.27 - phpinfo()</title><meta name="ROBOTS" content="NOINDEX,NOFOLLOW,NOARCHIVE" /></head>
<body><div class="center">
<table>
<tr class="h"><td>
<a href="http://www.php.net/"></a><h1 class="p">ClaraPHP Version <?=$_ENV['CLARAPHP']?></h1>
</td></tr>
</table>
<table>
<tr><td class="e">Project Name</td><td class="v"><?=$_ENV['PROJECT_NAME']?></td></tr>
<tr><td class="e">Build Date </td><td class="v">Dec 14 2021 19:45:44 </td></tr>
<tr><td class="e">Compiler </td><td class="v">Visual C++ 2017 </td></tr>
<tr><td class="e">Architecture </td><td class="v">x64 </td></tr>
<tr><td class="e">Configure Command </td><td class="v">cscript /nologo /e:jscript configure.js  &quot;--enable-snapshot-build&quot; &quot;--enable-debug-pack&quot; &quot;--with-pdo-oci=c:\php-snap-build\deps_aux\oracle\x64\instantclient_12_1\sdk,shared&quot; &quot;--with-oci8-12c=c:\php-snap-build\deps_aux\oracle\x64\instantclient_12_1\sdk,shared&quot; &quot;--enable-object-out-dir=../obj/&quot; &quot;--enable-com-dotnet=shared&quot; &quot;--without-analyzer&quot; &quot;--with-pgo&quot; </td></tr>
<tr><td class="e">Server API </td><td class="v">Apache 2.0 Handler </td></tr>
<tr><td class="e">Virtual Directory Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Configuration File (php.ini) Path </td><td class="v"><i>no value</i> </td></tr>
<tr><td class="e">Loaded Configuration File </td><td class="v">G:\OpenServer\modules\php\PHP_7.4\php.ini </td></tr>
<tr><td class="e">Scan this dir for additional .ini files </td><td class="v">(none) </td></tr>
<tr><td class="e">Additional .ini files parsed </td><td class="v">(none) </td></tr>
<tr><td class="e">PHP API </td><td class="v">20190902 </td></tr>
<tr><td class="e">PHP Extension </td><td class="v">20190902 </td></tr>
<tr><td class="e">Zend Extension </td><td class="v">320190902 </td></tr>
<tr><td class="e">Zend Extension Build </td><td class="v">API320190902,TS,VC15 </td></tr>
<tr><td class="e">PHP Extension Build </td><td class="v">API20190902,TS,VC15 </td></tr>
<tr><td class="e">Debug Build </td><td class="v">no </td></tr>
<tr><td class="e">Thread Safety </td><td class="v">enabled </td></tr>
<tr><td class="e">Thread API </td><td class="v">Windows Threads </td></tr>
<tr><td class="e">Zend Signal Handling </td><td class="v">disabled </td></tr>
<tr><td class="e">Zend Memory Manager </td><td class="v">enabled </td></tr>
<tr><td class="e">Zend Multibyte Support </td><td class="v">provided by mbstring </td></tr>
<tr><td class="e">IPv6 Support </td><td class="v">enabled </td></tr>
<tr><td class="e">DTrace Support </td><td class="v">disabled </td></tr>
<tr><td class="e">Registered PHP Streams</td><td class="v">php, file, glob, data, http, ftp, zip, compress.zlib, compress.bzip2, https, ftps, phar</td></tr>
<tr><td class="e">Registered Stream Socket Transports</td><td class="v">tcp, udp, ssl, tls, tlsv1.0, tlsv1.1, tlsv1.2, tlsv1.3</td></tr>
<tr><td class="e">Registered Stream Filters</td><td class="v">convert.iconv.*, string.rot13, string.toupper, string.tolower, string.strip_tags, convert.*, consumed, dechunk, zlib.*, bzip2.*</td></tr>
</table>
<table>
<tr class="v"><td>
<a href="http://www.zend.com/"><img border="0" src="data:image/png;base64,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" alt="Zend logo" /></a>
This program makes use of the Zend Scripting Language Engine:<br />Zend&nbsp;Engine&nbsp;v3.4.0,&nbsp;Copyright&nbsp;(c)&nbsp;Zend&nbsp;Technologies<br /></td></tr>
</table>
<hr />
<h1>Configuration</h1>
<h2><a name="module_apache2handler">apache2handler</a></h2>
<table>
<tr><td class="e">Apache Version </td><td class="v">Apache </td></tr>
<tr><td class="e">Apache API Version </td><td class="v">20120211 </td></tr>
<tr><td class="e">Server Administrator </td><td class="v">[no address given] </td></tr>
<tr><td class="e">Hostname:Port </td><td class="v">birux.loc:0 </td></tr>
<tr><td class="e">Max Requests </td><td class="v">Per Child: 0 - Keep Alive: on - Max Per Connection: 1000 </td></tr>
<tr><td class="e">Timeouts </td><td class="v">Connection: 60 - Keep-Alive: 120 </td></tr>
<tr><td class="e">Virtual Server </td><td class="v">Yes </td></tr>
<tr><td class="e">Server Root </td><td class="v">G:/OpenServer/modules/http/Apache_2.4-PHP_7.2-7.4 </td></tr>
<tr><td class="e">Loaded Modules </td><td class="v">core mod_win32 mpm_winnt http_core mod_so mod_access_compat mod_actions mod_alias mod_allowmethods mod_asis mod_auth_basic mod_auth_digest mod_authn_core mod_authn_file mod_authz_core mod_authz_groupfile mod_authz_host mod_authz_user mod_autoindex mod_cgi mod_dir mod_env mod_headers mod_include mod_isapi mod_log_config mod_mime mod_negotiation mod_reqtimeout mod_rewrite mod_setenvif mod_socache_shmcb mod_ssl mod_status mod_php7 </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">engine</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">last_modified</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">xbithack</td><td class="v">0</td><td class="v">0</td></tr>
</table>
<h2>Apache Environment</h2>
<table>
<tr class="h"><th>Variable</th><th>Value</th></tr>
<tr><td class="e">REDIRECT_HTTPS </td><td class="v">on </td></tr>
<tr><td class="e">REDIRECT_SSL_TLS_SNI </td><td class="v">birux.loc </td></tr>
<tr><td class="e">REDIRECT_STATUS </td><td class="v">200 </td></tr>
<tr><td class="e">HTTPS </td><td class="v">on </td></tr>
<tr><td class="e">SSL_TLS_SNI </td><td class="v">birux.loc </td></tr>
<tr><td class="e">SSL_SERVER_S_DN_CN </td><td class="v">localhost </td></tr>
<tr><td class="e">SSL_SERVER_I_DN_CN </td><td class="v">ospanel </td></tr>
<tr><td class="e">SSL_VERSION_INTERFACE </td><td class="v">mod_ssl/2.4.52 </td></tr>
<tr><td class="e">SSL_VERSION_LIBRARY </td><td class="v">OpenSSL/1.1.1m </td></tr>
<tr><td class="e">SSL_PROTOCOL </td><td class="v">TLSv1.3 </td></tr>
<tr><td class="e">SSL_SECURE_RENEG </td><td class="v">false </td></tr>
<tr><td class="e">SSL_COMPRESS_METHOD </td><td class="v">NULL </td></tr>
<tr><td class="e">SSL_CIPHER </td><td class="v">TLS_AES_256_GCM_SHA384 </td></tr>
<tr><td class="e">SSL_CIPHER_EXPORT </td><td class="v">false </td></tr>
<tr><td class="e">SSL_CIPHER_USEKEYSIZE </td><td class="v">256 </td></tr>
<tr><td class="e">SSL_CIPHER_ALGKEYSIZE </td><td class="v">256 </td></tr>
<tr><td class="e">SSL_CLIENT_VERIFY </td><td class="v">NONE </td></tr>
<tr><td class="e">SSL_SERVER_M_VERSION </td><td class="v">1 </td></tr>
<tr><td class="e">SSL_SERVER_M_SERIAL </td><td class="v">AF90673611D8DD9B </td></tr>
<tr><td class="e">SSL_SERVER_V_START </td><td class="v">Dec 23 10:54:34 2016 GMT </td></tr>
<tr><td class="e">SSL_SERVER_V_END </td><td class="v">Dec 20 10:54:34 2031 GMT </td></tr>
<tr><td class="e">SSL_SERVER_S_DN </td><td class="v">CN=localhost </td></tr>
<tr><td class="e">SSL_SERVER_I_DN </td><td class="v">CN=ospanel </td></tr>
<tr><td class="e">SSL_SERVER_A_KEY </td><td class="v">rsaEncryption </td></tr>
<tr><td class="e">SSL_SERVER_A_SIG </td><td class="v">sha256WithRSAEncryption </td></tr>
<tr><td class="e">SSL_SESSION_ID </td><td class="v">50708482e4c897a9340a87590a4808b4d15972d13d9e19fafb5e317e6ecc5018 </td></tr>
<tr><td class="e">SSL_SESSION_RESUMED </td><td class="v">Resumed </td></tr>
<tr><td class="e">HTTP_HOST </td><td class="v">birux.loc </td></tr>
<tr><td class="e">HTTP_CONNECTION </td><td class="v">keep-alive </td></tr>
<tr><td class="e">HTTP_SEC_CH_UA </td><td class="v">&quot; Not;A Brand&quot;;v=&quot;99&quot;, &quot;Google Chrome&quot;;v=&quot;97&quot;, &quot;Chromium&quot;;v=&quot;97&quot; </td></tr>
<tr><td class="e">HTTP_SEC_CH_UA_MOBILE </td><td class="v">?0 </td></tr>
<tr><td class="e">HTTP_SEC_CH_UA_PLATFORM </td><td class="v">&quot;Windows&quot; </td></tr>
<tr><td class="e">HTTP_UPGRADE_INSECURE_REQUESTS </td><td class="v">1 </td></tr>
<tr><td class="e">HTTP_USER_AGENT </td><td class="v">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36 </td></tr>
<tr><td class="e">HTTP_ACCEPT </td><td class="v">text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9 </td></tr>
<tr><td class="e">HTTP_SEC_FETCH_SITE </td><td class="v">none </td></tr>
<tr><td class="e">HTTP_SEC_FETCH_MODE </td><td class="v">navigate </td></tr>
<tr><td class="e">HTTP_SEC_FETCH_USER </td><td class="v">?1 </td></tr>
<tr><td class="e">HTTP_SEC_FETCH_DEST </td><td class="v">document </td></tr>
<tr><td class="e">HTTP_ACCEPT_ENCODING </td><td class="v">gzip, deflate, br </td></tr>
<tr><td class="e">HTTP_ACCEPT_LANGUAGE </td><td class="v">ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7 </td></tr>
<tr><td class="e">HTTP_COOKIE </td><td class="v">SNID_=1; SNID=e109931bd49b8a43f1e32c80b4f433354f53de43c2c2bdde20cfdbd8f0929471ce3890a583489bd46f82f9b87df83bb50c86603f12524ec105c981e183d6bf47; PHPSESSID=8kddh4mji73u310ldjs16d8vk359fsj7 </td></tr>
<tr><td class="e">PATH </td><td class="v">g:\openserver\modules\php\PHP_7.4\ext;g:\openserver\modules\php\PHP_7.4\pear;g:\openserver\modules\php\PHP_7.4\pear\bin;g:\openserver\modules\php\PHP_7.4;g:\openserver\modules\wget\bin;g:\openserver\modules\database\MySQL-5.7\bin;g:\openserver\modules\http\Apache_2.4-PHP_7.2-7.4\bin;g:\openserver\modules\http\Apache_2.4-PHP_7.2-7.4;C:\Windows\system32;C:\Windows;C:\Windows\system32\Wbem;C:\Windows\SysWOW64 </td></tr>
<tr><td class="e">SystemRoot </td><td class="v">C:\Windows </td></tr>
<tr><td class="e">COMSPEC </td><td class="v">C:\Windows\system32\cmd.exe </td></tr>
<tr><td class="e">PATHEXT </td><td class="v">.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC </td></tr>
<tr><td class="e">WINDIR </td><td class="v">C:\Windows </td></tr>
<tr><td class="e">SERVER_SIGNATURE </td><td class="v"><i>no value</i> </td></tr>
<tr><td class="e">SERVER_SOFTWARE </td><td class="v">Apache </td></tr>
<tr><td class="e">SERVER_NAME </td><td class="v">birux.loc </td></tr>
<tr><td class="e">SERVER_ADDR </td><td class="v">127.0.0.1 </td></tr>
<tr><td class="e">SERVER_PORT </td><td class="v">443 </td></tr>
<tr><td class="e">REMOTE_ADDR </td><td class="v">127.0.0.1 </td></tr>
<tr><td class="e">DOCUMENT_ROOT </td><td class="v">G:/Maksim/biruxv2 </td></tr>
<tr><td class="e">REQUEST_SCHEME </td><td class="v">https </td></tr>
<tr><td class="e">CONTEXT_PREFIX </td><td class="v"><i>no value</i> </td></tr>
<tr><td class="e">CONTEXT_DOCUMENT_ROOT </td><td class="v">G:/Maksim/biruxv2 </td></tr>
<tr><td class="e">SERVER_ADMIN </td><td class="v">[no address given] </td></tr>
<tr><td class="e">SCRIPT_FILENAME </td><td class="v">G:/Maksim/biruxv2/index.php </td></tr>
<tr><td class="e">REMOTE_PORT </td><td class="v">63862 </td></tr>
<tr><td class="e">REDIRECT_URL </td><td class="v">/about=brx </td></tr>
<tr><td class="e">REDIRECT_QUERY_STRING </td><td class="v">q=about=brx </td></tr>
<tr><td class="e">GATEWAY_INTERFACE </td><td class="v">CGI/1.1 </td></tr>
<tr><td class="e">SERVER_PROTOCOL </td><td class="v">HTTP/1.1 </td></tr>
<tr><td class="e">REQUEST_METHOD </td><td class="v">GET </td></tr>
<tr><td class="e">QUERY_STRING </td><td class="v">q=about=brx </td></tr>
<tr><td class="e">REQUEST_URI </td><td class="v">/about=brx </td></tr>
<tr><td class="e">SCRIPT_NAME </td><td class="v">/index.php </td></tr>
</table>
<h2>HTTP Headers Information</h2>
<table>
<tr class="h"><th colspan="2">HTTP Request Headers</th></tr>
<tr><td class="e">HTTP Request </td><td class="v">GET /about=brx HTTP/1.1 </td></tr>
<tr><td class="e">Host </td><td class="v">birux.loc </td></tr>
<tr><td class="e">Connection </td><td class="v">keep-alive </td></tr>
<tr><td class="e">sec-ch-ua </td><td class="v">&quot; Not;A Brand&quot;;v=&quot;99&quot;, &quot;Google Chrome&quot;;v=&quot;97&quot;, &quot;Chromium&quot;;v=&quot;97&quot; </td></tr>
<tr><td class="e">sec-ch-ua-mobile </td><td class="v">?0 </td></tr>
<tr><td class="e">sec-ch-ua-platform </td><td class="v">&quot;Windows&quot; </td></tr>
<tr><td class="e">Upgrade-Insecure-Requests </td><td class="v">1 </td></tr>
<tr><td class="e">User-Agent </td><td class="v">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36 </td></tr>
<tr><td class="e">Accept </td><td class="v">text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9 </td></tr>
<tr><td class="e">Sec-Fetch-Site </td><td class="v">none </td></tr>
<tr><td class="e">Sec-Fetch-Mode </td><td class="v">navigate </td></tr>
<tr><td class="e">Sec-Fetch-User </td><td class="v">?1 </td></tr>
<tr><td class="e">Sec-Fetch-Dest </td><td class="v">document </td></tr>
<tr><td class="e">Accept-Encoding </td><td class="v">gzip, deflate, br </td></tr>
<tr><td class="e">Accept-Language </td><td class="v">ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7 </td></tr>
<tr><td class="e">Cookie </td><td class="v">SNID_=1; SNID=e109931bd49b8a43f1e32c80b4f433354f53de43c2c2bdde20cfdbd8f0929471ce3890a583489bd46f82f9b87df83bb50c86603f12524ec105c981e183d6bf47; PHPSESSID=8kddh4mji73u310ldjs16d8vk359fsj7 </td></tr>
<tr class="h"><th colspan="2">HTTP Response Headers</th></tr>
<tr><td class="e">Expires </td><td class="v">Thu, 19 Nov 1981 08:52:00 GMT </td></tr>
<tr><td class="e">Cache-Control </td><td class="v">no-store, no-cache, must-revalidate </td></tr>
<tr><td class="e">Pragma </td><td class="v">no-cache </td></tr>
</table>
<h2><a name="module_bcmath">bcmath</a></h2>
<table>
<tr><td class="e">BCMath support </td><td class="v">enabled </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">bcmath.scale</td><td class="v">0</td><td class="v">0</td></tr>
</table>
<h2><a name="module_bz2">bz2</a></h2>
<table>
<tr><td class="e">BZip2 Support </td><td class="v">Enabled </td></tr>
<tr><td class="e">Stream Wrapper support </td><td class="v">compress.bzip2:// </td></tr>
<tr><td class="e">Stream Filter support </td><td class="v">bzip2.decompress, bzip2.compress </td></tr>
<tr><td class="e">BZip2 Version </td><td class="v">1.0.8, 13-Jul-2019 </td></tr>
</table>
<h2><a name="module_calendar">calendar</a></h2>
<table>
<tr><td class="e">Calendar support </td><td class="v">enabled </td></tr>
</table>
<h2><a name="module_core">Core</a></h2>
<table>
<tr><td class="e">PHP Version </td><td class="v">7.4.27 </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">allow_url_fopen</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">allow_url_include</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">arg_separator.input</td><td class="v">&amp;</td><td class="v">&amp;</td></tr>
<tr><td class="e">arg_separator.output</td><td class="v">&amp;</td><td class="v">&amp;</td></tr>
<tr><td class="e">auto_append_file</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">auto_globals_jit</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">auto_prepend_file</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">browscap</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">default_charset</td><td class="v">UTF-8</td><td class="v">UTF-8</td></tr>
<tr><td class="e">default_mimetype</td><td class="v">text/html</td><td class="v">text/html</td></tr>
<tr><td class="e">disable_classes</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">disable_functions</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">display_errors</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">display_startup_errors</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">doc_root</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">docref_ext</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">docref_root</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">enable_dl</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">enable_post_data_reading</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">error_append_string</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">error_log</td><td class="v">g:/openserver/userdata/logs/PHP_7.4_error.log</td><td class="v">g:/openserver/userdata/logs/PHP_7.4_error.log</td></tr>
<tr><td class="e">error_prepend_string</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">error_reporting</td><td class="v">32759</td><td class="v">32759</td></tr>
<tr><td class="e">expose_php</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">extension_dir</td><td class="v">g:/openserver/modules/php/PHP_7.4/ext</td><td class="v">g:/openserver/modules/php/PHP_7.4/ext</td></tr>
<tr><td class="e">file_uploads</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">hard_timeout</td><td class="v">2</td><td class="v">2</td></tr>
<tr><td class="e">highlight.comment</td><td class="v"><font style="color: #FF8000">#FF8000</font></td><td class="v"><font style="color: #FF8000">#FF8000</font></td></tr>
<tr><td class="e">highlight.default</td><td class="v"><font style="color: #0000BB">#0000BB</font></td><td class="v"><font style="color: #0000BB">#0000BB</font></td></tr>
<tr><td class="e">highlight.html</td><td class="v"><font style="color: #000000">#000000</font></td><td class="v"><font style="color: #000000">#000000</font></td></tr>
<tr><td class="e">highlight.keyword</td><td class="v"><font style="color: #007700">#007700</font></td><td class="v"><font style="color: #007700">#007700</font></td></tr>
<tr><td class="e">highlight.string</td><td class="v"><font style="color: #DD0000">#DD0000</font></td><td class="v"><font style="color: #DD0000">#DD0000</font></td></tr>
<tr><td class="e">html_errors</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">ignore_repeated_errors</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">ignore_repeated_source</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">ignore_user_abort</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">implicit_flush</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">include_path</td><td class="v">.</td><td class="v">.</td></tr>
<tr><td class="e">input_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">internal_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">log_errors</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">log_errors_max_len</td><td class="v">1024</td><td class="v">1024</td></tr>
<tr><td class="e">mail.add_x_header</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">mail.force_extra_parameters</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mail.log</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">max_execution_time</td><td class="v">60</td><td class="v">60</td></tr>
<tr><td class="e">max_file_uploads</td><td class="v">20</td><td class="v">20</td></tr>
<tr><td class="e">max_input_nesting_level</td><td class="v">64</td><td class="v">64</td></tr>
<tr><td class="e">max_input_time</td><td class="v">-1</td><td class="v">-1</td></tr>
<tr><td class="e">max_input_vars</td><td class="v">1000</td><td class="v">1000</td></tr>
<tr><td class="e">memory_limit</td><td class="v">1536M</td><td class="v">1536M</td></tr>
<tr><td class="e">open_basedir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">output_buffering</td><td class="v">4096</td><td class="v">4096</td></tr>
<tr><td class="e">output_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">output_handler</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">post_max_size</td><td class="v">50M</td><td class="v">50M</td></tr>
<tr><td class="e">precision</td><td class="v">14</td><td class="v">14</td></tr>
<tr><td class="e">realpath_cache_size</td><td class="v">4M</td><td class="v">4M</td></tr>
<tr><td class="e">realpath_cache_ttl</td><td class="v">120</td><td class="v">120</td></tr>
<tr><td class="e">register_argc_argv</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">report_memleaks</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">report_zend_debug</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">request_order</td><td class="v">GP</td><td class="v">GP</td></tr>
<tr><td class="e">sendmail_from</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">sendmail_path</td><td class="v">g:\openserver\modules\sendmail\sendmail.exe&nbsp;-local</td><td class="v">g:\openserver\modules\sendmail\sendmail.exe&nbsp;-local</td></tr>
<tr><td class="e">serialize_precision</td><td class="v">-1</td><td class="v">-1</td></tr>
<tr><td class="e">short_open_tag</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">SMTP</td><td class="v">localhost</td><td class="v">localhost</td></tr>
<tr><td class="e">smtp_port</td><td class="v">25</td><td class="v">25</td></tr>
<tr><td class="e">sys_temp_dir</td><td class="v">g:/openserver/userdata/temp</td><td class="v">g:/openserver/userdata/temp</td></tr>
<tr><td class="e">syslog.facility</td><td class="v">user</td><td class="v">user</td></tr>
<tr><td class="e">syslog.filter</td><td class="v">ascii</td><td class="v">ascii</td></tr>
<tr><td class="e">syslog.ident</td><td class="v">php</td><td class="v">php</td></tr>
<tr><td class="e">track_errors</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">unserialize_callback_func</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">upload_max_filesize</td><td class="v">50M</td><td class="v">50M</td></tr>
<tr><td class="e">upload_tmp_dir</td><td class="v">g:/openserver/userdata/temp/upload</td><td class="v">g:/openserver/userdata/temp/upload</td></tr>
<tr><td class="e">user_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">user_ini.cache_ttl</td><td class="v">300</td><td class="v">300</td></tr>
<tr><td class="e">user_ini.filename</td><td class="v">.user.ini</td><td class="v">.user.ini</td></tr>
<tr><td class="e">variables_order</td><td class="v">GPCS</td><td class="v">GPCS</td></tr>
<tr><td class="e">windows.show_crt_warning</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">xmlrpc_error_number</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">xmlrpc_errors</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">zend.assertions</td><td class="v">-1</td><td class="v">-1</td></tr>
<tr><td class="e">zend.detect_unicode</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">zend.enable_gc</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">zend.exception_ignore_args</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">zend.multibyte</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">zend.script_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</table>
<h2><a name="module_ctype">ctype</a></h2>
<table>
<tr><td class="e">ctype functions </td><td class="v">enabled </td></tr>
</table>
<h2><a name="module_curl">curl</a></h2>
<table>
<tr><td class="e">cURL support </td><td class="v">enabled </td></tr>
<tr><td class="e">cURL Information </td><td class="v">7.70.0 </td></tr>
<tr><td class="e">Age </td><td class="v">6 </td></tr>
<tr><td class="e">Features </td></tr>
<tr><td class="e">AsynchDNS </td><td class="v">Yes </td></tr>
<tr><td class="e">CharConv </td><td class="v">No </td></tr>
<tr><td class="e">Debug </td><td class="v">No </td></tr>
<tr><td class="e">GSS-Negotiate </td><td class="v">No </td></tr>
<tr><td class="e">IDN </td><td class="v">Yes </td></tr>
<tr><td class="e">IPv6 </td><td class="v">Yes </td></tr>
<tr><td class="e">krb4 </td><td class="v">No </td></tr>
<tr><td class="e">Largefile </td><td class="v">Yes </td></tr>
<tr><td class="e">libz </td><td class="v">Yes </td></tr>
<tr><td class="e">NTLM </td><td class="v">Yes </td></tr>
<tr><td class="e">NTLMWB </td><td class="v">No </td></tr>
<tr><td class="e">SPNEGO </td><td class="v">Yes </td></tr>
<tr><td class="e">SSL </td><td class="v">Yes </td></tr>
<tr><td class="e">SSPI </td><td class="v">Yes </td></tr>
<tr><td class="e">TLS-SRP </td><td class="v">No </td></tr>
<tr><td class="e">HTTP2 </td><td class="v">Yes </td></tr>
<tr><td class="e">GSSAPI </td><td class="v">No </td></tr>
<tr><td class="e">KERBEROS5 </td><td class="v">Yes </td></tr>
<tr><td class="e">UNIX_SOCKETS </td><td class="v">Yes </td></tr>
<tr><td class="e">PSL </td><td class="v">No </td></tr>
<tr><td class="e">HTTPS_PROXY </td><td class="v">Yes </td></tr>
<tr><td class="e">MULTI_SSL </td><td class="v">No </td></tr>
<tr><td class="e">BROTLI </td><td class="v">No </td></tr>
<tr><td class="e">Protocols </td><td class="v">dict, file, ftp, ftps, gopher, http, https, imap, imaps, ldap, ldaps, pop3, pop3s, rtsp, scp, sftp, smb, smbs, smtp, smtps, telnet, tftp </td></tr>
<tr><td class="e">Host </td><td class="v">x86_64-pc-win32 </td></tr>
<tr><td class="e">SSL Version </td><td class="v">OpenSSL/1.1.1m </td></tr>
<tr><td class="e">ZLib Version </td><td class="v">1.2.11 </td></tr>
<tr><td class="e">libSSH Version </td><td class="v">libssh2/1.9.0 </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">curl.cainfo</td><td class="v">g:/openserver/userdata/config/cacert.pem</td><td class="v">g:/openserver/userdata/config/cacert.pem</td></tr>
</table>
<h2><a name="module_date">date</a></h2>
<table>
<tr><td class="e">date/time support </td><td class="v">enabled </td></tr>
<tr><td class="e">timelib version </td><td class="v">2018.04 </td></tr>
<tr><td class="e">&quot;Olson&quot; Timezone Database Version </td><td class="v">2021.5 </td></tr>
<tr><td class="e">Timezone Database </td><td class="v">internal </td></tr>
<tr><td class="e">Default timezone </td><td class="v">Europe/Moscow </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">date.default_latitude</td><td class="v">31.7667</td><td class="v">31.7667</td></tr>
<tr><td class="e">date.default_longitude</td><td class="v">35.2333</td><td class="v">35.2333</td></tr>
<tr><td class="e">date.sunrise_zenith</td><td class="v">90.583333</td><td class="v">90.583333</td></tr>
<tr><td class="e">date.sunset_zenith</td><td class="v">90.583333</td><td class="v">90.583333</td></tr>
<tr><td class="e">date.timezone</td><td class="v">Europe/Moscow</td><td class="v">Europe/Moscow</td></tr>
</table>
<h2><a name="module_dom">dom</a></h2>
<table>
<tr><td class="e">DOM/XML </td><td class="v">enabled </td></tr>
<tr><td class="e">DOM/XML API Version </td><td class="v">20031129 </td></tr>
<tr><td class="e">libxml Version </td><td class="v">2.9.10 </td></tr>
<tr><td class="e">HTML Support </td><td class="v">enabled </td></tr>
<tr><td class="e">XPath Support </td><td class="v">enabled </td></tr>
<tr><td class="e">XPointer Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Schema Support </td><td class="v">enabled </td></tr>
<tr><td class="e">RelaxNG Support </td><td class="v">enabled </td></tr>
</table>
<h2><a name="module_enchant">enchant</a></h2>
<table>
<tr><td class="e">enchant support </td><td class="v">enabled </td></tr>
<tr><td class="e">Libenchant Version </td><td class="v">1.6.1 </td></tr>
</table>
<table>
<tr><td class="e">ispell </td><td class="v">Ispell Provider </td><td class="v">g:\openserver\modules\php\PHP_7.4\lib\enchant\libenchant_ispell.dll </td></tr>
<tr><td class="e">myspell </td><td class="v">Myspell Provider </td><td class="v">g:\openserver\modules\php\PHP_7.4\lib\enchant\libenchant_myspell.dll </td></tr>
</table>
<h2><a name="module_exif">exif</a></h2>
<table>
<tr><td class="e">EXIF Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Supported EXIF Version </td><td class="v">0220 </td></tr>
<tr><td class="e">Supported filetypes </td><td class="v">JPEG, TIFF </td></tr>
<tr><td class="e">Multibyte decoding support using mbstring </td><td class="v">enabled </td></tr>
<tr><td class="e">Extended EXIF tag formats </td><td class="v">Canon, Casio, Fujifilm, Nikon, Olympus, Samsung, Panasonic, DJI, Sony, Pentax, Minolta, Sigma, Foveon, Kyocera, Ricoh, AGFA, Epson </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">exif.decode_jis_intel</td><td class="v">JIS</td><td class="v">JIS</td></tr>
<tr><td class="e">exif.decode_jis_motorola</td><td class="v">JIS</td><td class="v">JIS</td></tr>
<tr><td class="e">exif.decode_unicode_intel</td><td class="v">UCS-2LE</td><td class="v">UCS-2LE</td></tr>
<tr><td class="e">exif.decode_unicode_motorola</td><td class="v">UCS-2BE</td><td class="v">UCS-2BE</td></tr>
<tr><td class="e">exif.encode_jis</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">exif.encode_unicode</td><td class="v">ISO-8859-15</td><td class="v">ISO-8859-15</td></tr>
</table>
<h2><a name="module_fileinfo">fileinfo</a></h2>
<table>
<tr><td class="e">fileinfo support </td><td class="v">enabled </td></tr>
<tr><td class="e">libmagic </td><td class="v">537 </td></tr>
</table>
<h2><a name="module_filter">filter</a></h2>
<table>
<tr><td class="e">Input Validation and Filtering </td><td class="v">enabled </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">filter.default</td><td class="v">unsafe_raw</td><td class="v">unsafe_raw</td></tr>
<tr><td class="e">filter.default_flags</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</table>
<h2><a name="module_ftp">ftp</a></h2>
<table>
<tr><td class="e">FTP support </td><td class="v">enabled </td></tr>
<tr><td class="e">FTPS support </td><td class="v">enabled </td></tr>
</table>
<h2><a name="module_gd">gd</a></h2>
<table>
<tr><td class="e">GD Support </td><td class="v">enabled </td></tr>
<tr><td class="e">GD Version </td><td class="v">bundled (2.1.0 compatible) </td></tr>
<tr><td class="e">FreeType Support </td><td class="v">enabled </td></tr>
<tr><td class="e">FreeType Linkage </td><td class="v">with freetype </td></tr>
<tr><td class="e">FreeType Version </td><td class="v">2.9.1 </td></tr>
<tr><td class="e">GIF Read Support </td><td class="v">enabled </td></tr>
<tr><td class="e">GIF Create Support </td><td class="v">enabled </td></tr>
<tr><td class="e">JPEG Support </td><td class="v">enabled </td></tr>
<tr><td class="e">libJPEG Version </td><td class="v">9 compatible </td></tr>
<tr><td class="e">PNG Support </td><td class="v">enabled </td></tr>
<tr><td class="e">libPNG Version </td><td class="v">1.6.34 </td></tr>
<tr><td class="e">WBMP Support </td><td class="v">enabled </td></tr>
<tr><td class="e">XPM Support </td><td class="v">enabled </td></tr>
<tr><td class="e">libXpm Version </td><td class="v">30512 </td></tr>
<tr><td class="e">XBM Support </td><td class="v">enabled </td></tr>
<tr><td class="e">WebP Support </td><td class="v">enabled </td></tr>
<tr><td class="e">BMP Support </td><td class="v">enabled </td></tr>
<tr><td class="e">TGA Read Support </td><td class="v">enabled </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">gd.jpeg_ignore_warning</td><td class="v">1</td><td class="v">1</td></tr>
</table>
<h2><a name="module_gettext">gettext</a></h2>
<table>
<tr><td class="e">GetText Support </td><td class="v">enabled </td></tr>
</table>
<h2><a name="module_hash">hash</a></h2>
<table>
<tr><td class="e">hash support </td><td class="v">enabled </td></tr>
<tr><td class="e">Hashing Engines </td><td class="v">md2 md4 md5 sha1 sha224 sha256 sha384 sha512/224 sha512/256 sha512 sha3-224 sha3-256 sha3-384 sha3-512 ripemd128 ripemd160 ripemd256 ripemd320 whirlpool tiger128,3 tiger160,3 tiger192,3 tiger128,4 tiger160,4 tiger192,4 snefru snefru256 gost gost-crypto adler32 crc32 crc32b crc32c fnv132 fnv1a32 fnv164 fnv1a64 joaat haval128,3 haval160,3 haval192,3 haval224,3 haval256,3 haval128,4 haval160,4 haval192,4 haval224,4 haval256,4 haval128,5 haval160,5 haval192,5 haval224,5 haval256,5  </td></tr>
</table>
<table>
<tr><td class="e">MHASH support </td><td class="v">Enabled </td></tr>
<tr><td class="e">MHASH API Version </td><td class="v">Emulated Support </td></tr>
</table>
<h2><a name="module_iconv">iconv</a></h2>
<table>
<tr><td class="e">iconv support </td><td class="v">enabled </td></tr>
<tr><td class="e">iconv implementation </td><td class="v">&quot;libiconv&quot; </td></tr>
<tr><td class="e">iconv library version </td><td class="v">1.16 </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">iconv.input_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">iconv.internal_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">iconv.output_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</table>
<h2><a name="module_imagick">imagick</a></h2>
<table>
<tr class="h"><th>imagick module</th><th>enabled</th></tr>
<tr><td class="e">imagick module version </td><td class="v">3.6.0 </td></tr>
<tr><td class="e">imagick classes </td><td class="v">Imagick, ImagickDraw, ImagickPixel, ImagickPixelIterator, ImagickKernel </td></tr>
<tr><td class="e">Imagick compiled with ImageMagick version </td><td class="v">ImageMagick 7.1.0-13 Q16 x64 2021-11-10 https://imagemagick.org </td></tr>
<tr><td class="e">Imagick using ImageMagick library version </td><td class="v">ImageMagick 7.1.0-13 Q16 x64 2021-11-10 https://imagemagick.org </td></tr>
<tr><td class="e">ImageMagick copyright </td><td class="v">(C) 1999-2021 ImageMagick Studio LLC </td></tr>
<tr><td class="e">ImageMagick release date </td><td class="v">2021-11-10 </td></tr>
<tr><td class="e">ImageMagick number of supported formats:  </td><td class="v">263 </td></tr>
<tr><td class="e">ImageMagick supported formats </td><td class="v">3FR, 3G2, 3GP, AAI, AI, APNG, ART, ARW, ASHLAR, AVI, AVIF, AVS, BGR, BGRA, BGRO, BIE, BMP, BMP2, BMP3, BRF, CAL, CALS, CANVAS, CAPTION, CIN, CIP, CLIP, CLIPBOARD, CMYK, CMYKA, CR2, CR3, CRW, CUBE, CUR, CUT, DATA, DCM, DCR, DCRAW, DCX, DDS, DFONT, DJVU, DNG, DOT, DPS, DPX, DXT1, DXT5, EMF, EPDF, EPI, EPS, EPS2, EPS3, EPSF, EPSI, EPT, EPT2, EPT3, ERF, EXR, FARBFELD, FAX, FF, FILE, FITS, FL32, FLIF, FLV, FPX, FRACTAL, FTP, FTS, G3, G4, GIF, GIF87, GRADIENT, GRAY, GRAYA, GROUP4, GV, HALD, HDR, HEIC, HEIF, HISTOGRAM, HRZ, HTM, HTML, HTTP, HTTPS, ICB, ICO, ICON, IIQ, INFO, INLINE, IPL, ISOBRL, ISOBRL6, J2C, J2K, JBG, JBIG, JNG, JNX, JP2, JPC, JPE, JPEG, JPG, JPM, JPS, JPT, JSON, JXL, K25, KDC, KERNEL, LABEL, M2V, M4V, MAC, MAP, MASK, MAT, MATTE, MEF, MIFF, MKV, MNG, MONO, MOV, MP4, MPC, MPEG, MPG, MRW, MSL, MSVG, MTV, MVG, NEF, NRW, NULL, ORA, ORF, OTB, OTF, PAL, PALM, PAM, PANGO, PATTERN, PBM, PCD, PCDS, PCL, PCT, PCX, PDB, PDF, PDFA, PEF, PES, PFA, PFB, PFM, PGM, PGX, PHM, PICON, PICT, PIX, PJPEG, PLASMA, PNG, PNG00, PNG24, PNG32, PNG48, PNG64, PNG8, PNM, POCKETMOD, PPM, PS, PS2, PS3, PSB, PSD, PTIF, PWP, RADIAL-GRADIENT, RAF, RAS, RAW, RGB, RGB565, RGBA, RGBO, RGF, RLA, RLE, RMF, RSVG, RW2, SCR, SCREENSHOT, SCT, SFW, SGI, SHTML, SIX, SIXEL, SPARSE-COLOR, SR2, SRF, STEGANO, SUN, SVG, SVGZ, TEXT, TGA, THUMBNAIL, TIFF, TIFF64, TILE, TIM, TM2, TTC, TTF, TXT, UBRL, UBRL6, UIL, UYVY, VDA, VICAR, VID, VIFF, VIPS, VST, WBMP, WEBM, WEBP, WMF, WMV, WPG, X3F, XBM, XC, XCF, XPM, XPS, XV, YAML, YCbCr, YCbCrA, YUV </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">imagick.allow_zero_dimension_images</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">imagick.locale_fix</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">imagick.progress_monitor</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">imagick.set_single_thread</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">imagick.shutdown_sleep_count</td><td class="v">10</td><td class="v">10</td></tr>
<tr><td class="e">imagick.skip_version_check</td><td class="v">0</td><td class="v">0</td></tr>
</table>
<h2><a name="module_json">json</a></h2>
<table>
<tr><td class="e">json support </td><td class="v">enabled </td></tr>
</table>
<h2><a name="module_libxml">libxml</a></h2>
<table>
<tr><td class="e">libXML support </td><td class="v">active </td></tr>
<tr><td class="e">libXML Compiled Version </td><td class="v">2.9.10 </td></tr>
<tr><td class="e">libXML Loaded Version </td><td class="v">20910 </td></tr>
<tr><td class="e">libXML streams </td><td class="v">enabled </td></tr>
</table>
<h2><a name="module_mbstring">mbstring</a></h2>
<table>
<tr><td class="e">Multibyte Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Multibyte string engine </td><td class="v">libmbfl </td></tr>
<tr><td class="e">HTTP input encoding translation </td><td class="v">disabled </td></tr>
<tr><td class="e">libmbfl version </td><td class="v">1.3.2 </td></tr>
</table>
<table>
<tr class="h"><th>mbstring extension makes use of "streamable kanji code filter and converter", which is distributed under the GNU Lesser General Public License version 2.1.</th></tr>
</table>
<table>
<tr><td class="e">Multibyte (japanese) regex support </td><td class="v">enabled </td></tr>
<tr><td class="e">Multibyte regex (oniguruma) version </td><td class="v">6.9.5 </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">mbstring.detect_order</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mbstring.encoding_translation</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">mbstring.func_overload</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">mbstring.http_input</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mbstring.http_output</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mbstring.http_output_conv_mimetypes</td><td class="v">^(text/|application/xhtml\+xml)</td><td class="v">^(text/|application/xhtml\+xml)</td></tr>
<tr><td class="e">mbstring.internal_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mbstring.language</td><td class="v">neutral</td><td class="v">neutral</td></tr>
<tr><td class="e">mbstring.regex_retry_limit</td><td class="v">1000000</td><td class="v">1000000</td></tr>
<tr><td class="e">mbstring.regex_stack_limit</td><td class="v">100000</td><td class="v">100000</td></tr>
<tr><td class="e">mbstring.strict_detection</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">mbstring.substitute_character</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</table>
<h2><a name="module_mysqli">mysqli</a></h2>
<table>
<tr class="h"><th>MysqlI Support</th><th>enabled</th></tr>
<tr><td class="e">Client API library version </td><td class="v">mysqlnd 7.4.27 </td></tr>
<tr><td class="e">Active Persistent Links </td><td class="v">0 </td></tr>
<tr><td class="e">Inactive Persistent Links </td><td class="v">0 </td></tr>
<tr><td class="e">Active Links </td><td class="v">0 </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">mysqli.allow_local_infile</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">mysqli.allow_persistent</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">mysqli.default_host</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysqli.default_port</td><td class="v">3306</td><td class="v">3306</td></tr>
<tr><td class="e">mysqli.default_pw</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysqli.default_socket</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysqli.default_user</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysqli.max_links</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
<tr><td class="e">mysqli.max_persistent</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
<tr><td class="e">mysqli.reconnect</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">mysqli.rollback_on_cached_plink</td><td class="v">On</td><td class="v">On</td></tr>
</table>
<h2><a name="module_mysqlnd">mysqlnd</a></h2>
<table>
<tr class="h"><th>mysqlnd</th><th>enabled</th></tr>
<tr><td class="e">Version </td><td class="v">mysqlnd 7.4.27 </td></tr>
<tr><td class="e">Compression </td><td class="v">supported </td></tr>
<tr><td class="e">core SSL </td><td class="v">supported </td></tr>
<tr><td class="e">extended SSL </td><td class="v">supported </td></tr>
<tr><td class="e">Command buffer size </td><td class="v">4096 </td></tr>
<tr><td class="e">Read buffer size </td><td class="v">32768 </td></tr>
<tr><td class="e">Read timeout </td><td class="v">86400 </td></tr>
<tr><td class="e">Collecting statistics </td><td class="v">Yes </td></tr>
<tr><td class="e">Collecting memory statistics </td><td class="v">No </td></tr>
<tr><td class="e">Tracing </td><td class="v">n/a </td></tr>
<tr><td class="e">Loaded plugins </td><td class="v">mysqlnd,debug_trace,auth_plugin_mysql_native_password,auth_plugin_mysql_clear_password,auth_plugin_caching_sha2_password,auth_plugin_sha256_password </td></tr>
<tr><td class="e">API Extensions </td><td class="v">mysqli,pdo_mysql </td></tr>
</table>
<h2><a name="module_odbc">odbc</a></h2>
<table>
<tr class="h"><th>ODBC Support</th><th>enabled</th></tr>
<tr><td class="e">Active Persistent Links </td><td class="v">0 </td></tr>
<tr><td class="e">Active Links </td><td class="v">0 </td></tr>
<tr><td class="e">ODBC library </td><td class="v">Win32 </td></tr>
<tr><td class="e">ODBCVER </td><td class="v">0x0350 </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">odbc.allow_persistent</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">odbc.check_persistent</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">odbc.default_cursortype</td><td class="v">Static cursor</td><td class="v">Static cursor</td></tr>
<tr><td class="e">odbc.default_db</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">odbc.default_pw</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">odbc.default_user</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">odbc.defaultbinmode</td><td class="v">return as is</td><td class="v">return as is</td></tr>
<tr><td class="e">odbc.defaultlrl</td><td class="v">return up to 4096 bytes</td><td class="v">return up to 4096 bytes</td></tr>
<tr><td class="e">odbc.max_links</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
<tr><td class="e">odbc.max_persistent</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
</table>
<h2><a name="module_openssl">openssl</a></h2>
<table>
<tr><td class="e">OpenSSL support </td><td class="v">enabled </td></tr>
<tr><td class="e">OpenSSL Library Version </td><td class="v">OpenSSL 1.1.1m  14 Dec 2021 </td></tr>
<tr><td class="e">OpenSSL Header Version </td><td class="v">OpenSSL 1.1.1l  24 Aug 2021 </td></tr>
<tr><td class="e">Openssl default config </td><td class="v">g:\openserver\modules\http\Apache_2.4-PHP_7.2-7.4\conf\openssl.cnf </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">openssl.cafile</td><td class="v">g:/openserver/userdata/config/cacert.pem</td><td class="v">g:/openserver/userdata/config/cacert.pem</td></tr>
<tr><td class="e">openssl.capath</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</table>
<h2><a name="module_pcre">pcre</a></h2>
<table>
<tr><td class="e">PCRE (Perl Compatible Regular Expressions) Support </td><td class="v">enabled </td></tr>
<tr><td class="e">PCRE Library Version </td><td class="v">10.35 2020-05-09 </td></tr>
<tr><td class="e">PCRE Unicode Version </td><td class="v">13.0.0 </td></tr>
<tr><td class="e">PCRE JIT Support </td><td class="v">enabled </td></tr>
<tr><td class="e">PCRE JIT Target </td><td class="v">x86 64bit (little endian + unaligned) </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">pcre.backtrack_limit</td><td class="v">1000000</td><td class="v">1000000</td></tr>
<tr><td class="e">pcre.jit</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">pcre.recursion_limit</td><td class="v">100000</td><td class="v">100000</td></tr>
</table>
<h2><a name="module_pdo">PDO</a></h2>
<table>
<tr class="h"><th>PDO support</th><th>enabled</th></tr>
<tr><td class="e">PDO drivers </td><td class="v">mysql, pgsql, sqlite </td></tr>
</table>
<h2><a name="module_pdo_mysql">pdo_mysql</a></h2>
<table>
<tr class="h"><th>PDO Driver for MySQL</th><th>enabled</th></tr>
<tr><td class="e">Client API version </td><td class="v">mysqlnd 7.4.27 </td></tr>
</table>
<h2><a name="module_pdo_pgsql">pdo_pgsql</a></h2>
<table>
<tr><td class="e">PDO Driver for PostgreSQL </td><td class="v">enabled </td></tr>
<tr><td class="e">PostgreSQL(libpq) Version </td><td class="v">11.4 </td></tr>
</table>
<h2><a name="module_pdo_sqlite">pdo_sqlite</a></h2>
<table>
<tr class="h"><th>PDO Driver for SQLite 3.x</th><th>enabled</th></tr>
<tr><td class="e">SQLite Library </td><td class="v">3.31.1 </td></tr>
</table>
<h2><a name="module_phar">Phar</a></h2>
<table>
<tr class="h"><th>Phar: PHP Archive support</th><th>enabled</th></tr>
<tr><td class="e">Phar API version </td><td class="v">1.1.1 </td></tr>
<tr><td class="e">Phar-based phar archives </td><td class="v">enabled </td></tr>
<tr><td class="e">Tar-based phar archives </td><td class="v">enabled </td></tr>
<tr><td class="e">ZIP-based phar archives </td><td class="v">enabled </td></tr>
<tr><td class="e">gzip compression </td><td class="v">enabled </td></tr>
<tr><td class="e">bzip2 compression </td><td class="v">enabled </td></tr>
<tr><td class="e">OpenSSL support </td><td class="v">enabled </td></tr>
</table>
<table>
<tr class="v"><td>
Phar based on pear/PHP_Archive, original concept by Davey Shafik.<br />Phar fully realized by Gregory Beaver and Marcus Boerger.<br />Portions of tar implementation Copyright (c) 2003-2009 Tim Kientzle.</td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">phar.cache_list</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">phar.readonly</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">phar.require_hash</td><td class="v">On</td><td class="v">On</td></tr>
</table>
<h2><a name="module_readline">readline</a></h2>
<table>
<tr class="h"><th>Readline Support</th><th>enabled</th></tr>
<tr><td class="e">Readline library </td><td class="v">WinEditLine </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">cli.pager</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">cli.prompt</td><td class="v">\b&nbsp;\&gt;&nbsp;</td><td class="v">\b&nbsp;\&gt;&nbsp;</td></tr>
</table>
<h2><a name="module_reflection">Reflection</a></h2>
<table>
<tr><td class="e">Reflection </td><td class="v">enabled </td></tr>
</table>
<h2><a name="module_session">session</a></h2>
<table>
<tr><td class="e">Session Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Registered save handlers </td><td class="v">files user  </td></tr>
<tr><td class="e">Registered serializer handlers </td><td class="v">php_serialize php php_binary  </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">session.auto_start</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">session.cache_expire</td><td class="v">180</td><td class="v">180</td></tr>
<tr><td class="e">session.cache_limiter</td><td class="v">nocache</td><td class="v">nocache</td></tr>
<tr><td class="e">session.cookie_domain</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">session.cookie_httponly</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">session.cookie_lifetime</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">session.cookie_path</td><td class="v">/</td><td class="v">/</td></tr>
<tr><td class="e">session.cookie_samesite</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">session.cookie_secure</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">session.gc_divisor</td><td class="v">1000</td><td class="v">1000</td></tr>
<tr><td class="e">session.gc_maxlifetime</td><td class="v">3600</td><td class="v">3600</td></tr>
<tr><td class="e">session.gc_probability</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">session.lazy_write</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">session.name</td><td class="v">PHPSESSID</td><td class="v">PHPSESSID</td></tr>
<tr><td class="e">session.referer_check</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">session.save_handler</td><td class="v">files</td><td class="v">files</td></tr>
<tr><td class="e">session.save_path</td><td class="v">g:/openserver/userdata/temp</td><td class="v">g:/openserver/userdata/temp</td></tr>
<tr><td class="e">session.serialize_handler</td><td class="v">php</td><td class="v">php</td></tr>
<tr><td class="e">session.sid_bits_per_character</td><td class="v">5</td><td class="v">5</td></tr>
<tr><td class="e">session.sid_length</td><td class="v">32</td><td class="v">32</td></tr>
<tr><td class="e">session.upload_progress.cleanup</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">session.upload_progress.enabled</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">session.upload_progress.freq</td><td class="v">1%</td><td class="v">1%</td></tr>
<tr><td class="e">session.upload_progress.min_freq</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">session.upload_progress.name</td><td class="v">PHP_SESSION_UPLOAD_PROGRESS</td><td class="v">PHP_SESSION_UPLOAD_PROGRESS</td></tr>
<tr><td class="e">session.upload_progress.prefix</td><td class="v">upload_progress_</td><td class="v">upload_progress_</td></tr>
<tr><td class="e">session.use_cookies</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">session.use_only_cookies</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">session.use_strict_mode</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">session.use_trans_sid</td><td class="v">0</td><td class="v">0</td></tr>
</table>
<h2><a name="module_simplexml">SimpleXML</a></h2>
<table>
<tr><td class="e">SimpleXML support </td><td class="v">enabled </td></tr>
<tr><td class="e">Schema support </td><td class="v">enabled </td></tr>
</table>
<h2><a name="module_soap">soap</a></h2>
<table>
<tr><td class="e">Soap Client </td><td class="v">enabled </td></tr>
<tr><td class="e">Soap Server </td><td class="v">enabled </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">soap.wsdl_cache</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">soap.wsdl_cache_dir</td><td class="v">g:/openserver/userdata/temp</td><td class="v">g:/openserver/userdata/temp</td></tr>
<tr><td class="e">soap.wsdl_cache_enabled</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">soap.wsdl_cache_limit</td><td class="v">5</td><td class="v">5</td></tr>
<tr><td class="e">soap.wsdl_cache_ttl</td><td class="v">86400</td><td class="v">86400</td></tr>
</table>
<h2><a name="module_sockets">sockets</a></h2>
<table>
<tr><td class="e">Sockets Support </td><td class="v">enabled </td></tr>
</table>
<h2><a name="module_sodium">sodium</a></h2>
<table>
<tr class="h"><th>sodium support</th><th>enabled</th></tr>
<tr><td class="e">libsodium headers version </td><td class="v">1.0.17 </td></tr>
<tr><td class="e">libsodium library version </td><td class="v">1.0.17 </td></tr>
</table>
<h2><a name="module_spl">SPL</a></h2>
<table>
<tr class="h"><th>SPL support</th><th>enabled</th></tr>
<tr><td class="e">Interfaces </td><td class="v">OuterIterator, RecursiveIterator, SeekableIterator, SplObserver, SplSubject </td></tr>
<tr><td class="e">Classes </td><td class="v">AppendIterator, ArrayIterator, ArrayObject, BadFunctionCallException, BadMethodCallException, CachingIterator, CallbackFilterIterator, DirectoryIterator, DomainException, EmptyIterator, FilesystemIterator, FilterIterator, GlobIterator, InfiniteIterator, InvalidArgumentException, IteratorIterator, LengthException, LimitIterator, LogicException, MultipleIterator, NoRewindIterator, OutOfBoundsException, OutOfRangeException, OverflowException, ParentIterator, RangeException, RecursiveArrayIterator, RecursiveCachingIterator, RecursiveCallbackFilterIterator, RecursiveDirectoryIterator, RecursiveFilterIterator, RecursiveIteratorIterator, RecursiveRegexIterator, RecursiveTreeIterator, RegexIterator, RuntimeException, SplDoublyLinkedList, SplFileInfo, SplFileObject, SplFixedArray, SplHeap, SplMinHeap, SplMaxHeap, SplObjectStorage, SplPriorityQueue, SplQueue, SplStack, SplTempFileObject, UnderflowException, UnexpectedValueException </td></tr>
</table>
<h2><a name="module_sqlite3">sqlite3</a></h2>
<table>
<tr class="h"><th>SQLite3 support</th><th>enabled</th></tr>
<tr><td class="e">SQLite Library </td><td class="v">3.31.1 </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">sqlite3.defensive</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">sqlite3.extension_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</table>
<h2><a name="module_standard">standard</a></h2>
<table>
<tr><td class="e">Dynamic Library Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Path to sendmail </td><td class="v">g:\openserver\modules\sendmail\sendmail.exe -local </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">assert.active</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">assert.bail</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">assert.callback</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">assert.exception</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">assert.quiet_eval</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">assert.warning</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">auto_detect_line_endings</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">default_socket_timeout</td><td class="v">60</td><td class="v">60</td></tr>
<tr><td class="e">from</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">session.trans_sid_hosts</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">session.trans_sid_tags</td><td class="v">a=href,area=href,frame=src,form=</td><td class="v">a=href,area=href,frame=src,form=</td></tr>
<tr><td class="e">unserialize_max_depth</td><td class="v">4096</td><td class="v">4096</td></tr>
<tr><td class="e">url_rewriter.hosts</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">url_rewriter.tags</td><td class="v">form=</td><td class="v">form=</td></tr>
<tr><td class="e">user_agent</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</table>
<h2><a name="module_timezonedb">timezonedb</a></h2>
<table>
<tr><td class="e">Alternative Timezone Database </td><td class="v">enabled </td></tr>
<tr><td class="e">Timezone Database Version </td><td class="v">2021.5 </td></tr>
</table>
<h2><a name="module_tokenizer">tokenizer</a></h2>
<table>
<tr><td class="e">Tokenizer Support </td><td class="v">enabled </td></tr>
</table>
<h2><a name="module_xml">xml</a></h2>
<table>
<tr><td class="e">XML Support </td><td class="v">active </td></tr>
<tr><td class="e">XML Namespace Support </td><td class="v">active </td></tr>
<tr><td class="e">libxml2 Version </td><td class="v">2.9.10 </td></tr>
</table>
<h2><a name="module_xmlreader">xmlreader</a></h2>
<table>
<tr><td class="e">XMLReader </td><td class="v">enabled </td></tr>
</table>
<h2><a name="module_xmlrpc">xmlrpc</a></h2>
<table>
<tr><td class="e">core library version </td><td class="v">xmlrpc-epi v. 0.51 </td></tr>
<tr><td class="e">author </td><td class="v">Dan Libby </td></tr>
<tr><td class="e">homepage </td><td class="v">http://xmlrpc-epi.sourceforge.net </td></tr>
<tr><td class="e">open sourced by </td><td class="v">Epinions.com </td></tr>
</table>
<h2><a name="module_xmlwriter">xmlwriter</a></h2>
<table>
<tr><td class="e">XMLWriter </td><td class="v">enabled </td></tr>
</table>
<h2><a name="module_xsl">xsl</a></h2>
<table>
<tr><td class="e">XSL </td><td class="v">enabled </td></tr>
<tr><td class="e">libxslt Version </td><td class="v">1.1.32 </td></tr>
<tr><td class="e">libxslt compiled against libxml Version </td><td class="v">2.9.7 </td></tr>
<tr><td class="e">EXSLT </td><td class="v">enabled </td></tr>
<tr><td class="e">libexslt Version </td><td class="v">0.8.20 </td></tr>
</table>
<h2><a name="module_zip">zip</a></h2>
<table>
<tr><td class="e">Zip </td><td class="v">enabled </td></tr>
<tr><td class="e">Zip version </td><td class="v">1.15.6 </td></tr>
<tr><td class="e">Libzip headers version </td><td class="v">1.7.1 </td></tr>
<tr><td class="e">Libzip library version </td><td class="v">1.7.1 </td></tr>
</table>
<h2><a name="module_zlib">zlib</a></h2>
<table>
<tr class="h"><th>ZLib Support</th><th>enabled</th></tr>
<tr><td class="e">Stream Wrapper </td><td class="v">compress.zlib:// </td></tr>
<tr><td class="e">Stream Filter </td><td class="v">zlib.inflate, zlib.deflate </td></tr>
<tr><td class="e">Compiled Version </td><td class="v">1.2.11 </td></tr>
<tr><td class="e">Linked Version </td><td class="v">1.2.11 </td></tr>
</table>
<table>
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">zlib.output_compression</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">zlib.output_compression_level</td><td class="v">-1</td><td class="v">-1</td></tr>
<tr><td class="e">zlib.output_handler</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</table>
<h2>Additional Modules</h2>
<table>
<tr class="h"><th>Module Name</th></tr>
</table>
<h2>Environment</h2>
<table>
<tr class="h"><th>Variable</th><th>Value</th></tr>
<tr><td class="e">ALLUSERSPROFILE </td><td class="v">C:\ProgramData </td></tr>
<tr><td class="e">APPDATA </td><td class="v">C:\Users\larmi\AppData\Roaming </td></tr>
<tr><td class="e">CommonProgramFiles </td><td class="v">C:\Program Files\Common Files </td></tr>
<tr><td class="e">CommonProgramFiles(x86) </td><td class="v">C:\Program Files (x86)\Common Files </td></tr>
<tr><td class="e">CommonProgramW6432 </td><td class="v">C:\Program Files\Common Files </td></tr>
<tr><td class="e">COMPUTERNAME </td><td class="v">DESKTOP-6N087L8 </td></tr>
<tr><td class="e">ComSpec </td><td class="v">C:\Windows\system32\cmd.exe </td></tr>
<tr><td class="e">DriverData </td><td class="v">C:\Windows\System32\Drivers\DriverData </td></tr>
<tr><td class="e">HOME </td><td class="v">g:\openserver </td></tr>
<tr><td class="e">HOMEDRIVE </td><td class="v">g: </td></tr>
<tr><td class="e">HOMEPATH </td><td class="v">\openserver </td></tr>
<tr><td class="e">LOCALAPPDATA </td><td class="v">C:\Users\larmi\AppData\Local </td></tr>
<tr><td class="e">LOGONSERVER </td><td class="v">\\DESKTOP-6N087L8 </td></tr>
<tr><td class="e">NUMBER_OF_PROCESSORS </td><td class="v">4 </td></tr>
<tr><td class="e">OneDrive </td><td class="v">C:\Users\larmi\OneDrive </td></tr>
<tr><td class="e">OneDriveConsumer </td><td class="v">C:\Users\larmi\OneDrive </td></tr>
<tr><td class="e">OPENSSL_CONF </td><td class="v">g:\openserver\modules\http\Apache_2.4-PHP_7.2-7.4\conf\openssl.cnf </td></tr>
<tr><td class="e">OS </td><td class="v">Windows_NT </td></tr>
<tr><td class="e">Path </td><td class="v">g:\openserver\modules\php\PHP_7.4\ext;g:\openserver\modules\php\PHP_7.4\pear;g:\openserver\modules\php\PHP_7.4\pear\bin;g:\openserver\modules\php\PHP_7.4;g:\openserver\modules\wget\bin;g:\openserver\modules\database\MySQL-5.7\bin;g:\openserver\modules\http\Apache_2.4-PHP_7.2-7.4\bin;g:\openserver\modules\http\Apache_2.4-PHP_7.2-7.4;C:\Windows\system32;C:\Windows;C:\Windows\system32\Wbem;C:\Windows\SysWOW64 </td></tr>
<tr><td class="e">PATHEXT </td><td class="v">.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC </td></tr>
<tr><td class="e">PHPBIN </td><td class="v">g:\openserver\modules\php\PHP_7.4\php.exe </td></tr>
<tr><td class="e">PHPDIR </td><td class="v">g:\openserver\modules\php\PHP_7.4\ </td></tr>
<tr><td class="e">PHPRC </td><td class="v">g:\openserver\modules\php\PHP_7.4 </td></tr>
<tr><td class="e">PHP_BIN </td><td class="v">g:\openserver\modules\php\PHP_7.4\php.exe </td></tr>
<tr><td class="e">PHP_BINARY </td><td class="v">g:\openserver\modules\php\PHP_7.4\php.exe </td></tr>
<tr><td class="e">PHP_BINDIR </td><td class="v">g:\openserver\modules\php\PHP_7.4\ </td></tr>
<tr><td class="e">PHP_DIR </td><td class="v">g:\openserver\modules\php\PHP_7.4\ </td></tr>
<tr><td class="e">PHP_INI </td><td class="v">g:\openserver\modules\php\PHP_7.4\php.ini </td></tr>
<tr><td class="e">PHP_PEAR_BIN_DIR </td><td class="v">g:\openserver\modules\php\PHP_7.4\PEAR </td></tr>
<tr><td class="e">PHP_PEAR_DATA_DIR </td><td class="v">g:\openserver\modules\php\PHP_7.4\PEAR\data </td></tr>
<tr><td class="e">PHP_PEAR_DOC_DIR </td><td class="v">g:\openserver\modules\php\PHP_7.4\PEAR\docs </td></tr>
<tr><td class="e">PHP_PEAR_INSTALL_DIR </td><td class="v">g:\openserver\modules\php\PHP_7.4\PEAR\pear </td></tr>
<tr><td class="e">PHP_PEAR_PHP_BIN </td><td class="v">g:\openserver\modules\php\PHP_7.4\php.exe </td></tr>
<tr><td class="e">PHP_PEAR_SYSCONF_DIR </td><td class="v">g:\openserver\modules\php\PHP_7.4\PEAR </td></tr>
<tr><td class="e">PHP_PEAR_TEST_DIR </td><td class="v">g:\openserver\modules\php\PHP_7.4\PEAR\tests </td></tr>
<tr><td class="e">PROCESSOR_ARCHITECTURE </td><td class="v">AMD64 </td></tr>
<tr><td class="e">PROCESSOR_IDENTIFIER </td><td class="v">Intel64 Family 6 Model 15 Stepping 11, GenuineIntel </td></tr>
<tr><td class="e">PROCESSOR_LEVEL </td><td class="v">6 </td></tr>
<tr><td class="e">PROCESSOR_REVISION </td><td class="v">0f0b </td></tr>
<tr><td class="e">ProgramData </td><td class="v">C:\ProgramData </td></tr>
<tr><td class="e">ProgramFiles </td><td class="v">C:\Program Files </td></tr>
<tr><td class="e">ProgramFiles(x86) </td><td class="v">C:\Program Files (x86) </td></tr>
<tr><td class="e">ProgramW6432 </td><td class="v">C:\Program Files </td></tr>
<tr><td class="e">PSModulePath </td><td class="v">C:\Program Files\WindowsPowerShell\Modules;C:\Windows\system32\WindowsPowerShell\v1.0\Modules </td></tr>
<tr><td class="e">PUBLIC </td><td class="v">C:\Users\Public </td></tr>
<tr><td class="e">SystemDrive </td><td class="v">C: </td></tr>
<tr><td class="e">SystemRoot </td><td class="v">C:\Windows </td></tr>
<tr><td class="e">TEMP </td><td class="v">g:\openserver\userdata\temp </td></tr>
<tr><td class="e">TMP </td><td class="v">g:\openserver\userdata\temp </td></tr>
<tr><td class="e">USERDOMAIN </td><td class="v">DESKTOP-6N087L8 </td></tr>
<tr><td class="e">USERDOMAIN_ROAMINGPROFILE </td><td class="v">DESKTOP-6N087L8 </td></tr>
<tr><td class="e">USERNAME </td><td class="v">larmi </td></tr>
<tr><td class="e">USERPROFILE </td><td class="v">C:\Users\larmi </td></tr>
<tr><td class="e">VBOX_MSI_INSTALL_PATH </td><td class="v">C:\Program Files\Oracle\VirtualBox\ </td></tr>
<tr><td class="e">windir </td><td class="v">C:\Windows </td></tr>
<tr><td class="e">AP_PARENT_PID </td><td class="v">10696 </td></tr>
</table>
<h2>PHP Variables</h2>
<table>
<tr class="h"><th>Variable</th><th>Value</th></tr>
<tr><td class="e">$_REQUEST['q']</td><td class="v">about=brx</td></tr>
<tr><td class="e">$_GET['q']</td><td class="v">about=brx</td></tr>
<tr><td class="e">$_COOKIE['SNID_']</td><td class="v">1</td></tr>
<tr><td class="e">$_COOKIE['SNID']</td><td class="v">e109931bd49b8a43f1e32c80b4f433354f53de43c2c2bdde20cfdbd8f0929471ce3890a583489bd46f82f9b87df83bb50c86603f12524ec105c981e183d6bf47</td></tr>
<tr><td class="e">$_COOKIE['PHPSESSID']</td><td class="v">8kddh4mji73u310ldjs16d8vk359fsj7</td></tr>
<tr><td class="e">$_SERVER['REDIRECT_HTTPS']</td><td class="v">on</td></tr>
<tr><td class="e">$_SERVER['REDIRECT_SSL_TLS_SNI']</td><td class="v">birux.loc</td></tr>
<tr><td class="e">$_SERVER['REDIRECT_STATUS']</td><td class="v">200</td></tr>
<tr><td class="e">$_SERVER['HTTPS']</td><td class="v">on</td></tr>
<tr><td class="e">$_SERVER['SSL_TLS_SNI']</td><td class="v">birux.loc</td></tr>
<tr><td class="e">$_SERVER['SSL_SERVER_S_DN_CN']</td><td class="v">localhost</td></tr>
<tr><td class="e">$_SERVER['SSL_SERVER_I_DN_CN']</td><td class="v">ospanel</td></tr>
<tr><td class="e">$_SERVER['SSL_VERSION_INTERFACE']</td><td class="v">mod_ssl/2.4.52</td></tr>
<tr><td class="e">$_SERVER['SSL_VERSION_LIBRARY']</td><td class="v">OpenSSL/1.1.1m</td></tr>
<tr><td class="e">$_SERVER['SSL_PROTOCOL']</td><td class="v">TLSv1.3</td></tr>
<tr><td class="e">$_SERVER['SSL_SECURE_RENEG']</td><td class="v">false</td></tr>
<tr><td class="e">$_SERVER['SSL_COMPRESS_METHOD']</td><td class="v">NULL</td></tr>
<tr><td class="e">$_SERVER['SSL_CIPHER']</td><td class="v">TLS_AES_256_GCM_SHA384</td></tr>
<tr><td class="e">$_SERVER['SSL_CIPHER_EXPORT']</td><td class="v">false</td></tr>
<tr><td class="e">$_SERVER['SSL_CIPHER_USEKEYSIZE']</td><td class="v">256</td></tr>
<tr><td class="e">$_SERVER['SSL_CIPHER_ALGKEYSIZE']</td><td class="v">256</td></tr>
<tr><td class="e">$_SERVER['SSL_CLIENT_VERIFY']</td><td class="v">NONE</td></tr>
<tr><td class="e">$_SERVER['SSL_SERVER_M_VERSION']</td><td class="v">1</td></tr>
<tr><td class="e">$_SERVER['SSL_SERVER_M_SERIAL']</td><td class="v">AF90673611D8DD9B</td></tr>
<tr><td class="e">$_SERVER['SSL_SERVER_V_START']</td><td class="v">Dec 23 10:54:34 2016 GMT</td></tr>
<tr><td class="e">$_SERVER['SSL_SERVER_V_END']</td><td class="v">Dec 20 10:54:34 2031 GMT</td></tr>
<tr><td class="e">$_SERVER['SSL_SERVER_S_DN']</td><td class="v">CN=localhost</td></tr>
<tr><td class="e">$_SERVER['SSL_SERVER_I_DN']</td><td class="v">CN=ospanel</td></tr>
<tr><td class="e">$_SERVER['SSL_SERVER_A_KEY']</td><td class="v">rsaEncryption</td></tr>
<tr><td class="e">$_SERVER['SSL_SERVER_A_SIG']</td><td class="v">sha256WithRSAEncryption</td></tr>
<tr><td class="e">$_SERVER['SSL_SESSION_ID']</td><td class="v">50708482e4c897a9340a87590a4808b4d15972d13d9e19fafb5e317e6ecc5018</td></tr>
<tr><td class="e">$_SERVER['SSL_SESSION_RESUMED']</td><td class="v">Resumed</td></tr>
<tr><td class="e">$_SERVER['HTTP_HOST']</td><td class="v">birux.loc</td></tr>
<tr><td class="e">$_SERVER['HTTP_CONNECTION']</td><td class="v">keep-alive</td></tr>
<tr><td class="e">$_SERVER['HTTP_SEC_CH_UA']</td><td class="v">&quot; Not;A Brand&quot;;v=&quot;99&quot;, &quot;Google Chrome&quot;;v=&quot;97&quot;, &quot;Chromium&quot;;v=&quot;97&quot;</td></tr>
<tr><td class="e">$_SERVER['HTTP_SEC_CH_UA_MOBILE']</td><td class="v">?0</td></tr>
<tr><td class="e">$_SERVER['HTTP_SEC_CH_UA_PLATFORM']</td><td class="v">&quot;Windows&quot;</td></tr>
<tr><td class="e">$_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS']</td><td class="v">1</td></tr>
<tr><td class="e">$_SERVER['HTTP_USER_AGENT']</td><td class="v">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36</td></tr>
<tr><td class="e">$_SERVER['HTTP_ACCEPT']</td><td class="v">text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9</td></tr>
<tr><td class="e">$_SERVER['HTTP_SEC_FETCH_SITE']</td><td class="v">none</td></tr>
<tr><td class="e">$_SERVER['HTTP_SEC_FETCH_MODE']</td><td class="v">navigate</td></tr>
<tr><td class="e">$_SERVER['HTTP_SEC_FETCH_USER']</td><td class="v">?1</td></tr>
<tr><td class="e">$_SERVER['HTTP_SEC_FETCH_DEST']</td><td class="v">document</td></tr>
<tr><td class="e">$_SERVER['HTTP_ACCEPT_ENCODING']</td><td class="v">gzip, deflate, br</td></tr>
<tr><td class="e">$_SERVER['HTTP_ACCEPT_LANGUAGE']</td><td class="v">ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7</td></tr>
<tr><td class="e">$_SERVER['HTTP_COOKIE']</td><td class="v">SNID_=1; SNID=e109931bd49b8a43f1e32c80b4f433354f53de43c2c2bdde20cfdbd8f0929471ce3890a583489bd46f82f9b87df83bb50c86603f12524ec105c981e183d6bf47; PHPSESSID=8kddh4mji73u310ldjs16d8vk359fsj7</td></tr>
<tr><td class="e">$_SERVER['PATH']</td><td class="v">g:\openserver\modules\php\PHP_7.4\ext;g:\openserver\modules\php\PHP_7.4\pear;g:\openserver\modules\php\PHP_7.4\pear\bin;g:\openserver\modules\php\PHP_7.4;g:\openserver\modules\wget\bin;g:\openserver\modules\database\MySQL-5.7\bin;g:\openserver\modules\http\Apache_2.4-PHP_7.2-7.4\bin;g:\openserver\modules\http\Apache_2.4-PHP_7.2-7.4;C:\Windows\system32;C:\Windows;C:\Windows\system32\Wbem;C:\Windows\SysWOW64</td></tr>
<tr><td class="e">$_SERVER['SystemRoot']</td><td class="v">C:\Windows</td></tr>
<tr><td class="e">$_SERVER['COMSPEC']</td><td class="v">C:\Windows\system32\cmd.exe</td></tr>
<tr><td class="e">$_SERVER['PATHEXT']</td><td class="v">.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC</td></tr>
<tr><td class="e">$_SERVER['WINDIR']</td><td class="v">C:\Windows</td></tr>
<tr><td class="e">$_SERVER['SERVER_SIGNATURE']</td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">$_SERVER['SERVER_SOFTWARE']</td><td class="v">Apache</td></tr>
<tr><td class="e">$_SERVER['SERVER_NAME']</td><td class="v">birux.loc</td></tr>
<tr><td class="e">$_SERVER['SERVER_ADDR']</td><td class="v">127.0.0.1</td></tr>
<tr><td class="e">$_SERVER['SERVER_PORT']</td><td class="v">443</td></tr>
<tr><td class="e">$_SERVER['REMOTE_ADDR']</td><td class="v">127.0.0.1</td></tr>
<tr><td class="e">$_SERVER['DOCUMENT_ROOT']</td><td class="v">G:/Maksim/biruxv2</td></tr>
<tr><td class="e">$_SERVER['REQUEST_SCHEME']</td><td class="v">https</td></tr>
<tr><td class="e">$_SERVER['CONTEXT_PREFIX']</td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">$_SERVER['CONTEXT_DOCUMENT_ROOT']</td><td class="v">G:/Maksim/biruxv2</td></tr>
<tr><td class="e">$_SERVER['SERVER_ADMIN']</td><td class="v">[no address given]</td></tr>
<tr><td class="e">$_SERVER['SCRIPT_FILENAME']</td><td class="v">G:/Maksim/biruxv2/index.php</td></tr>
<tr><td class="e">$_SERVER['REMOTE_PORT']</td><td class="v">63862</td></tr>
<tr><td class="e">$_SERVER['REDIRECT_URL']</td><td class="v">/about=brx</td></tr>
<tr><td class="e">$_SERVER['REDIRECT_QUERY_STRING']</td><td class="v">q=about=brx</td></tr>
<tr><td class="e">$_SERVER['GATEWAY_INTERFACE']</td><td class="v">CGI/1.1</td></tr>
<tr><td class="e">$_SERVER['SERVER_PROTOCOL']</td><td class="v">HTTP/1.1</td></tr>
<tr><td class="e">$_SERVER['REQUEST_METHOD']</td><td class="v">GET</td></tr>
<tr><td class="e">$_SERVER['QUERY_STRING']</td><td class="v">q=about=brx</td></tr>
<tr><td class="e">$_SERVER['REQUEST_URI']</td><td class="v">/about=brx</td></tr>
<tr><td class="e">$_SERVER['SCRIPT_NAME']</td><td class="v">/index.php</td></tr>
<tr><td class="e">$_SERVER['PHP_SELF']</td><td class="v">/index.php</td></tr>
<tr><td class="e">$_SERVER['REQUEST_TIME_FLOAT']</td><td class="v">1644243500.2182</td></tr>
<tr><td class="e">$_SERVER['REQUEST_TIME']</td><td class="v">1644243500</td></tr>
<tr><td class="e">$_SERVER['PROJECT_NAME']</td><td class="v">My Project!</td></tr>
<tr><td class="e">$_SERVER['PROJECT_DESCRIPTION']</td><td class="v">My Project website!</td></tr>
<tr><td class="e">$_SERVER['PROJECT_URL']</td><td class="v">https://birux.xyz</td></tr>
<tr><td class="e">$_SERVER['MYSQL_HOST']</td><td class="v">127.0.0.1</td></tr>
<tr><td class="e">$_SERVER['MYSQL_NAME']</td><td class="v">root</td></tr>
<tr><td class="e">$_SERVER['MYSQL_PASSWORD']</td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">$_SERVER['MYSQL_DB']</td><td class="v">birux</td></tr>
<tr><td class="e">$_SERVER['MAINTENANCE_MODE']</td><td class="v">true</td></tr>
<tr><td class="e">$_SERVER['TRACY']</td><td class="v">true</td></tr>
<tr><td class="e">$_SERVER['SFS']</td><td class="v">true</td></tr>
<tr><td class="e">$_SERVER['SFSURL']</td><td class="v">https://sfs1-eu.hostcats.ru</td></tr>
<tr><td class="e">$_SERVER['CLARAPHP']</td><td class="v">1.2</td></tr>
<tr><td class="e">$_ENV['PROJECT_NAME']</td><td class="v">My Project!</td></tr>
<tr><td class="e">$_ENV['PROJECT_DESCRIPTION']</td><td class="v">My Project website!</td></tr>
<tr><td class="e">$_ENV['PROJECT_URL']</td><td class="v">https://birux.xyz</td></tr>
<tr><td class="e">$_ENV['MYSQL_HOST']</td><td class="v">127.0.0.1</td></tr>
<tr><td class="e">$_ENV['MYSQL_NAME']</td><td class="v">root</td></tr>
<tr><td class="e">$_ENV['MYSQL_PASSWORD']</td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">$_ENV['MYSQL_DB']</td><td class="v">birux</td></tr>
<tr><td class="e">$_ENV['MAINTENANCE_MODE']</td><td class="v">true</td></tr>
<tr><td class="e">$_ENV['TRACY']</td><td class="v">true</td></tr>
<tr><td class="e">$_ENV['SFS']</td><td class="v">true</td></tr>
<tr><td class="e">$_ENV['SFSURL']</td><td class="v">https://sfs1-eu.hostcats.ru</td></tr>
<tr><td class="e">$_ENV['CLARAPHP']</td><td class="v">1.2</td></tr>
</table>
<hr />
<h1>PHP Credits</h1>
<table>
<tr class="h"><th>PHP Group</th></tr>
<tr><td class="e">Thies C. Arntzen, Stig Bakken, Shane Caraveo, Andi Gutmans, Rasmus Lerdorf, Sam Ruby, Sascha Schumann, Zeev Suraski, Jim Winstead, Andrei Zmievski </td></tr>
</table>
<table>
<tr class="h"><th>Language Design &amp; Concept</th></tr>
<tr><td class="e">Andi Gutmans, Rasmus Lerdorf, Zeev Suraski, Marcus Boerger </td></tr>
</table>
<table>
<tr class="h"><th colspan="2">PHP Authors</th></tr>
<tr class="h"><th>Contribution</th><th>Authors</th></tr>
<tr><td class="e">Zend Scripting Language Engine </td><td class="v">Andi Gutmans, Zeev Suraski, Stanislav Malyshev, Marcus Boerger, Dmitry Stogov, Xinchen Hui, Nikita Popov </td></tr>
<tr><td class="e">Extension Module API </td><td class="v">Andi Gutmans, Zeev Suraski, Andrei Zmievski </td></tr>
<tr><td class="e">UNIX Build and Modularization </td><td class="v">Stig Bakken, Sascha Schumann, Jani Taskinen, Peter Kokot </td></tr>
<tr><td class="e">Windows Support </td><td class="v">Shane Caraveo, Zeev Suraski, Wez Furlong, Pierre-Alain Joye, Anatol Belski, Kalle Sommer Nielsen </td></tr>
<tr><td class="e">Server API (SAPI) Abstraction Layer </td><td class="v">Andi Gutmans, Shane Caraveo, Zeev Suraski </td></tr>
<tr><td class="e">Streams Abstraction Layer </td><td class="v">Wez Furlong, Sara Golemon </td></tr>
<tr><td class="e">PHP Data Objects Layer </td><td class="v">Wez Furlong, Marcus Boerger, Sterling Hughes, George Schlossnagle, Ilia Alshanetsky </td></tr>
<tr><td class="e">Output Handler </td><td class="v">Zeev Suraski, Thies C. Arntzen, Marcus Boerger, Michael Wallner </td></tr>
<tr><td class="e">Consistent 64 bit support </td><td class="v">Anthony Ferrara, Anatol Belski </td></tr>
</table>
<table>
<tr class="h"><th colspan="2">SAPI Modules</th></tr>
<tr class="h"><th>Contribution</th><th>Authors</th></tr>
<tr><td class="e">Apache 2.0 Handler </td><td class="v">Ian Holsman, Justin Erenkrantz (based on Apache 2.0 Filter code) </td></tr>
<tr><td class="e">CGI / FastCGI </td><td class="v">Rasmus Lerdorf, Stig Bakken, Shane Caraveo, Dmitry Stogov </td></tr>
<tr><td class="e">CLI </td><td class="v">Edin Kadribasic, Marcus Boerger, Johannes Schlueter, Moriyoshi Koizumi, Xinchen Hui </td></tr>
<tr><td class="e">Embed </td><td class="v">Edin Kadribasic </td></tr>
<tr><td class="e">FastCGI Process Manager </td><td class="v">Andrei Nigmatulin, dreamcat4, Antony Dovgal, Jerome Loyet </td></tr>
<tr><td class="e">litespeed </td><td class="v">George Wang </td></tr>
<tr><td class="e">phpdbg </td><td class="v">Felipe Pena, Joe Watkins, Bob Weinand </td></tr>
</table>
<table>
<tr class="h"><th colspan="2">Module Authors</th></tr>
<tr class="h"><th>Module</th><th>Authors</th></tr>
<tr><td class="e">BC Math </td><td class="v">Andi Gutmans </td></tr>
<tr><td class="e">Bzip2 </td><td class="v">Sterling Hughes </td></tr>
<tr><td class="e">Calendar </td><td class="v">Shane Caraveo, Colin Viebrock, Hartmut Holzgraefe, Wez Furlong </td></tr>
<tr><td class="e">COM and .Net </td><td class="v">Wez Furlong </td></tr>
<tr><td class="e">ctype </td><td class="v">Hartmut Holzgraefe </td></tr>
<tr><td class="e">cURL </td><td class="v">Sterling Hughes </td></tr>
<tr><td class="e">Date/Time Support </td><td class="v">Derick Rethans </td></tr>
<tr><td class="e">DB-LIB (MS SQL, Sybase) </td><td class="v">Wez Furlong, Frank M. Kromann, Adam Baratz </td></tr>
<tr><td class="e">DBA </td><td class="v">Sascha Schumann, Marcus Boerger </td></tr>
<tr><td class="e">DOM </td><td class="v">Christian Stocker, Rob Richards, Marcus Boerger </td></tr>
<tr><td class="e">enchant </td><td class="v">Pierre-Alain Joye, Ilia Alshanetsky </td></tr>
<tr><td class="e">EXIF </td><td class="v">Rasmus Lerdorf, Marcus Boerger </td></tr>
<tr><td class="e">FFI </td><td class="v">Dmitry Stogov </td></tr>
<tr><td class="e">fileinfo </td><td class="v">Ilia Alshanetsky, Pierre Alain Joye, Scott MacVicar, Derick Rethans, Anatol Belski </td></tr>
<tr><td class="e">Firebird driver for PDO </td><td class="v">Ard Biesheuvel </td></tr>
<tr><td class="e">FTP </td><td class="v">Stefan Esser, Andrew Skalski </td></tr>
<tr><td class="e">GD imaging </td><td class="v">Rasmus Lerdorf, Stig Bakken, Jim Winstead, Jouni Ahto, Ilia Alshanetsky, Pierre-Alain Joye, Marcus Boerger </td></tr>
<tr><td class="e">GetText </td><td class="v">Alex Plotnick </td></tr>
<tr><td class="e">GNU GMP support </td><td class="v">Stanislav Malyshev </td></tr>
<tr><td class="e">Iconv </td><td class="v">Rui Hirokawa, Stig Bakken, Moriyoshi Koizumi </td></tr>
<tr><td class="e">IMAP </td><td class="v">Rex Logan, Mark Musone, Brian Wang, Kaj-Michael Lang, Antoni Pamies Olive, Rasmus Lerdorf, Andrew Skalski, Chuck Hagenbuch, Daniel R Kalowsky </td></tr>
<tr><td class="e">Input Filter </td><td class="v">Rasmus Lerdorf, Derick Rethans, Pierre-Alain Joye, Ilia Alshanetsky </td></tr>
<tr><td class="e">Internationalization </td><td class="v">Ed Batutis, Vladimir Iordanov, Dmitry Lakhtyuk, Stanislav Malyshev, Vadim Savchuk, Kirti Velankar </td></tr>
<tr><td class="e">JSON </td><td class="v">Jakub Zelenka, Omar Kilani, Scott MacVicar </td></tr>
<tr><td class="e">LDAP </td><td class="v">Amitay Isaacs, Eric Warnke, Rasmus Lerdorf, Gerrit Thomson, Stig Venaas </td></tr>
<tr><td class="e">LIBXML </td><td class="v">Christian Stocker, Rob Richards, Marcus Boerger, Wez Furlong, Shane Caraveo </td></tr>
<tr><td class="e">Multibyte String Functions </td><td class="v">Tsukada Takuya, Rui Hirokawa </td></tr>
<tr><td class="e">MySQL driver for PDO </td><td class="v">George Schlossnagle, Wez Furlong, Ilia Alshanetsky, Johannes Schlueter </td></tr>
<tr><td class="e">MySQLi </td><td class="v">Zak Greant, Georg Richter, Andrey Hristov, Ulf Wendel </td></tr>
<tr><td class="e">MySQLnd </td><td class="v">Andrey Hristov, Ulf Wendel, Georg Richter, Johannes Schlüter </td></tr>
<tr><td class="e">OCI8 </td><td class="v">Stig Bakken, Thies C. Arntzen, Andy Sautins, David Benson, Maxim Maletsky, Harald Radi, Antony Dovgal, Andi Gutmans, Wez Furlong, Christopher Jones, Oracle Corporation </td></tr>
<tr><td class="e">ODBC driver for PDO </td><td class="v">Wez Furlong </td></tr>
<tr><td class="e">ODBC </td><td class="v">Stig Bakken, Andreas Karajannis, Frank M. Kromann, Daniel R. Kalowsky </td></tr>
<tr><td class="e">Opcache </td><td class="v">Andi Gutmans, Zeev Suraski, Stanislav Malyshev, Dmitry Stogov, Xinchen Hui </td></tr>
<tr><td class="e">OpenSSL </td><td class="v">Stig Venaas, Wez Furlong, Sascha Kettler, Scott MacVicar </td></tr>
<tr><td class="e">Oracle (OCI) driver for PDO </td><td class="v">Wez Furlong </td></tr>
<tr><td class="e">pcntl </td><td class="v">Jason Greene, Arnaud Le Blanc </td></tr>
<tr><td class="e">Perl Compatible Regexps </td><td class="v">Andrei Zmievski </td></tr>
<tr><td class="e">PHP Archive </td><td class="v">Gregory Beaver, Marcus Boerger </td></tr>
<tr><td class="e">PHP Data Objects </td><td class="v">Wez Furlong, Marcus Boerger, Sterling Hughes, George Schlossnagle, Ilia Alshanetsky </td></tr>
<tr><td class="e">PHP hash </td><td class="v">Sara Golemon, Rasmus Lerdorf, Stefan Esser, Michael Wallner, Scott MacVicar </td></tr>
<tr><td class="e">Posix </td><td class="v">Kristian Koehntopp </td></tr>
<tr><td class="e">PostgreSQL driver for PDO </td><td class="v">Edin Kadribasic, Ilia Alshanetsky </td></tr>
<tr><td class="e">PostgreSQL </td><td class="v">Jouni Ahto, Zeev Suraski, Yasuo Ohgaki, Chris Kings-Lynne </td></tr>
<tr><td class="e">Pspell </td><td class="v">Vlad Krupin </td></tr>
<tr><td class="e">Readline </td><td class="v">Thies C. Arntzen </td></tr>
<tr><td class="e">Reflection </td><td class="v">Marcus Boerger, Timm Friebe, George Schlossnagle, Andrei Zmievski, Johannes Schlueter </td></tr>
<tr><td class="e">Sessions </td><td class="v">Sascha Schumann, Andrei Zmievski </td></tr>
<tr><td class="e">Shared Memory Operations </td><td class="v">Slava Poliakov, Ilia Alshanetsky </td></tr>
<tr><td class="e">SimpleXML </td><td class="v">Sterling Hughes, Marcus Boerger, Rob Richards </td></tr>
<tr><td class="e">SNMP </td><td class="v">Rasmus Lerdorf, Harrie Hazewinkel, Mike Jackson, Steven Lawrance, Johann Hanne, Boris Lytochkin </td></tr>
<tr><td class="e">SOAP </td><td class="v">Brad Lafountain, Shane Caraveo, Dmitry Stogov </td></tr>
<tr><td class="e">Sockets </td><td class="v">Chris Vandomelen, Sterling Hughes, Daniel Beulshausen, Jason Greene </td></tr>
<tr><td class="e">Sodium </td><td class="v">Frank Denis </td></tr>
<tr><td class="e">SPL </td><td class="v">Marcus Boerger, Etienne Kneuss </td></tr>
<tr><td class="e">SQLite 3.x driver for PDO </td><td class="v">Wez Furlong </td></tr>
<tr><td class="e">SQLite3 </td><td class="v">Scott MacVicar, Ilia Alshanetsky, Brad Dewar </td></tr>
<tr><td class="e">System V Message based IPC </td><td class="v">Wez Furlong </td></tr>
<tr><td class="e">System V Semaphores </td><td class="v">Tom May </td></tr>
<tr><td class="e">System V Shared Memory </td><td class="v">Christian Cartus </td></tr>
<tr><td class="e">tidy </td><td class="v">John Coggeshall, Ilia Alshanetsky </td></tr>
<tr><td class="e">tokenizer </td><td class="v">Andrei Zmievski, Johannes Schlueter </td></tr>
<tr><td class="e">XML </td><td class="v">Stig Bakken, Thies C. Arntzen, Sterling Hughes </td></tr>
<tr><td class="e">XMLReader </td><td class="v">Rob Richards </td></tr>
<tr><td class="e">xmlrpc </td><td class="v">Dan Libby </td></tr>
<tr><td class="e">XMLWriter </td><td class="v">Rob Richards, Pierre-Alain Joye </td></tr>
<tr><td class="e">XSL </td><td class="v">Christian Stocker, Rob Richards </td></tr>
<tr><td class="e">Zip </td><td class="v">Pierre-Alain Joye, Remi Collet </td></tr>
<tr><td class="e">Zlib </td><td class="v">Rasmus Lerdorf, Stefan Roehrich, Zeev Suraski, Jade Nicoletti, Michael Wallner </td></tr>
</table>
<table>
<tr class="h"><th colspan="2">PHP Documentation</th></tr>
<tr><td class="e">Authors </td><td class="v">Mehdi Achour, Friedhelm Betz, Antony Dovgal, Nuno Lopes, Hannes Magnusson, Philip Olson, Georg Richter, Damien Seguy, Jakub Vrana, Adam Harvey </td></tr>
<tr><td class="e">Editor </td><td class="v">Peter Cowburn </td></tr>
<tr><td class="e">User Note Maintainers </td><td class="v">Daniel P. Brown, Thiago Henrique Pojda </td></tr>
<tr><td class="e">Other Contributors </td><td class="v">Previously active authors, editors and other contributors are listed in the manual. </td></tr>
</table>
<table>
<tr class="h"><th>PHP Quality Assurance Team</th></tr>
<tr><td class="e">Ilia Alshanetsky, Joerg Behrens, Antony Dovgal, Stefan Esser, Moriyoshi Koizumi, Magnus Maatta, Sebastian Nohn, Derick Rethans, Melvyn Sopacua, Pierre-Alain Joye, Dmitry Stogov, Felipe Pena, David Soria Parra, Stanislav Malyshev, Julien Pauli, Stephen Zarkos, Anatol Belski, Remi Collet, Ferenc Kovacs </td></tr>
</table>
<table>
<tr class="h"><th colspan="2">Websites and Infrastructure team</th></tr>
<tr><td class="e">PHP Websites Team </td><td class="v">Rasmus Lerdorf, Hannes Magnusson, Philip Olson, Lukas Kahwe Smith, Pierre-Alain Joye, Kalle Sommer Nielsen, Peter Cowburn, Adam Harvey, Ferenc Kovacs, Levi Morrison </td></tr>
<tr><td class="e">Event Maintainers </td><td class="v">Damien Seguy, Daniel P. Brown </td></tr>
<tr><td class="e">Network Infrastructure </td><td class="v">Daniel P. Brown </td></tr>
<tr><td class="e">Windows Infrastructure </td><td class="v">Alex Schoenmaker </td></tr>
</table>
<h2>PHP License</h2>
<table>
<tr class="v"><td>
<p>
This program is free software; you can redistribute it and/or modify it under the terms of the PHP License as published by the PHP Group and included in the distribution in the file:  LICENSE
</p>
<p>This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</p>
<p>If you did not receive a copy of the PHP license, or have any questions about PHP licensing, please contact license@php.net.
</p>
</td></tr>
</table>
</div></body></html>