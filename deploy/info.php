<?php

/////////////////////////////////////////////////////////////////////////////
// General information
/////////////////////////////////////////////////////////////////////////////

$app['basename'] = 'joomla';
$app['version'] = '1.0.0';
$app['release'] = '1';
$app['vendor'] = 'Xtreem Solution';
$app['packager'] = 'Xtreem Solution';
$app['license'] = 'GPL'; // e.g. 'GPLv3';
$app['license_core'] = 'GPL'; // e.g. 'LGPLv3';
$app['description'] = lang('joomla_app_description');

/////////////////////////////////////////////////////////////////////////////
// App name and categories
/////////////////////////////////////////////////////////////////////////////

$app['name'] = lang('joomla_app_name');
$app['category'] = lang('base_category_server');
$app['subcategory'] = lang('base_subcategory_web');


/////////////////////////////////////////////////////////////////////////////
// Packaging
/////////////////////////////////////////////////////////////////////////////


$app['core_requires'] = array(
    'mod_authnz_external',
    'mod_authz_unixgroup',
    'mod_ssl',
    'phpMyAdmin',
    'app-flexshare-core',
);

$app['requires'] = array(
    'app-web-server',
    'app-mariadb',
    'unzip',
    'zip',
);

$app['core_directory_manifest'] = array(
    '/var/clearos/joomla' => array(
        'mode' => '0775',
        'owner' => 'webconfig',
        'group' => 'webconfig'
	),
    '/var/clearos/joomla/backup' => array(
        'mode' => '0775',
        'owner' => 'webconfig',
        'group' => 'webconfig'
	),
    '/var/clearos/joomla/versions' => array(
        'mode' => '0775',
        'owner' => 'webconfig',
        'group' => 'webconfig'
    ),
    '/var/clearos/joomla/sites' => array(
        'mode' => '0775',
        'owner' => 'webconfig',
        'group' => 'webconfig'
	)
);

$app['core_file_manifest'] = array(
    'app-joomla.conf'=> array('target' => '/etc/httpd/conf.d/app-joomla.conf'),
);