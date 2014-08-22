<?php

class JConfig {
  public $offline = '0';
  public $offline_message = 'This site is down for maintenance.<br /> Please check back again soon.';
  public $display_offline_message = '1';
  public $offline_image = '';
  public $sitename = 'Test';
  public $editor = 'tinymce';
  public $captcha = '0';
  public $list_limit = '20';
  public $access = '1';
  public $debug = '0';
  public $debug_lang = '0';
  public $dbtype = 'mysqli';
  public $host = "localhost";
  public $user = 'root';
  public $password = "";
  public $db = "joomla";
  public $dbprefix = 'fi3ly_';
  public $live_site = '';
  public $secret = 'WKhGYZex77k5VQTW';
  public $gzip = '0';
  public $error_reporting = 'default';
  public $helpurl = 'http://help.joomla.org/proxy/index.php?option=com_help&amp;keyref=Help{major}{minor}:{keyref}';
  public $ftp_host = '';
  public $ftp_port = '';
  public $ftp_user = '';
  public $ftp_pass = '';
  public $ftp_root = '';
  public $ftp_enable = '';
  public $offset = 'UTC';
  public $mailonline = '1';
  public $mailer = 'mail';
  public $mailfrom = 'example@example.com';
  public $fromname = 'Test';
  public $sendmail = '/usr/sbin/sendmail';
  public $smtpauth = '0';
  public $smtpuser = '';
  public $smtppass = '';
  public $smtphost = 'localhost';
  public $smtpsecure = 'none';
  public $smtpport = '25';
  public $caching = '0';
  public $cache_handler = 'file';
  public $cachetime = '15';
  public $MetaDesc = 'Test';
  public $MetaKeys = '';
  public $MetaTitle = '1';
  public $MetaAuthor = '1';
  public $MetaVersion = '0';
  public $robots = '';
  public $sef = '1';
  public $sef_rewrite = '0';
  public $sef_suffix = '0';
  public $unicodeslugs = '0';
  public $feed_limit = '10';
  public $log_path = '/data02/aeappdir/webapps/wp.local/logs';
  public $tmp_path = '/data02/aeappdir/webapps/wp.local/tmp';
  public $lifetime = '15';
  public $session_handler = 'database';

  public function __construct() {
    $this->host = getenv('DB_1_PORT_3306_TCP_ADDR') . ":" . getenv('DB_1_PORT_3306_TCP_PORT');
    $this->password = getenv('DB_PASSWORD');
    $this->db = getenv('DB_NAME');
  }
}