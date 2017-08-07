<?php
/*
  This file overrides "config.php", even the options that were originally
  set in "autoconfig.php".
*/

$CONFIG = array(
    'debug' => (bool) getenv('DEBUG'),
    'log_type' => 'errorlog',
    'datadirectory' => getenv('NEXTCLOUD_DATA_PATH'),
    'skeletondirectory' => '',

    'adminlogin' => getenv('NEXTCLOUD_ADMIN_USER'),
    'adminpass' => getenv('NEXTCLOUD_ADMIN_PASS'),

    'dbtype' => getenv('NEXTCLOUD_DB_TYPE'),
    'dbhost' => getenv('NEXTCLOUD_DB_HOST'),
    'dbuser' => getenv('NEXTCLOUD_DB_USER'),
    'dbpassword' => getenv('NEXTCLOUD_DB_PASSWORD'),
    'dbname' => getenv('NEXTCLOUD_DB_NAME'),
    'dbtableprefix' => getenv('NEXTCLOUD_DB_TABLE_PREFIX') ?: "",

    'mail_smtpmode' => "smtp",
    'mail_smtphost' => getenv('NEXTCLOUD_SMTP_HOST'),
    'mail_smtpport' => getenv('NEXTCLOUD_SMTP_PORT'),
    'mail_smtpsecure' => getenv('NEXTCLOUD_SMTP_ENCRYPTION') ?: "",
    'mail_smtpauth' => (bool) getenv('NEXTCLOUD_SMTP_AUTHN_USER'),
    'mail_smtpauthtype' => getenv('NEXTCLOUD_SMTP_AUTHN_TYPE') ?: "LOGIN",
    'mail_smtpname' => getenv('NEXTCLOUD_SMTP_AUTHN_USER'),
    'mail_smtppassword' => getenv('NEXTCLOUD_SMTP_AUTHN_PASSWORD'),

    'objectstore' => array(
        'class' => 'OC\\Files\\ObjectStore\\S3',
        'arguments' => array(
            'bucket' => getenv('NEXTCLOUD_S3_BUCKET'),
            'autocreate' => (bool) getenv('NEXTCLOUD_S3_AUTOCREATE'),
            'key' => getenv('NEXTCLOUD_S3_ACCESS_KEY'),
            'secret' => getenv('NEXTCLOUD_S3_SECRET_KEY'),
            'hostname' => getenv('NEXTCLOUD_S3_HOSTNAME'),
            'port' => getenv('NEXTCLOUD_S3_PORT'),
            'use_ssl' => getenv('NEXTCLOUD_S3_SSL') != "0",
            'use_path_style' => (bool) getenv('NEXTCLOUD_S3_USE_PATH_STYLE'),
        ),
    ),
);

$CONFIG['loglevel'] = $CONFIG['debug'] ? 0 : 2;

if (getenv('NEXTCLOUD_SECRET')) {
    $CONFIG['secret'] = getenv('NEXTCLOUD_SECRET');
}

if (getenv('NEXTCLOUD_PASSWORD_SALT')) {
    $CONFIG['passwordsalt'] = getenv('NEXTCLOUD_PASSWORD_SALT');
}

if (getenv('NEXTCLOUD_TRUSTED_DOMAINS')) {
    $CONFIG['trusted_domains'] = explode(',', getenv('NEXTCLOUD_TRUSTED_DOMAINS'));
}
