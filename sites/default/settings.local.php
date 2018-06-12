<?php

/**
 * @file
 * settings.local.php
 */

$databases['default']['default'] = array(
  'database' => 'troynew',
  'username' => 'root',
  'password' => 'rootpassword',
  'host' => 'localhost',
  'port' => '8889',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

$settings['trusted_host_patterns'] = array(
  'troy.martin',
);

$settings['install_profile'] = 'standard';
$config_directories['sync'] = 'sites/default/files/config_SIzFYgWPc376haDcRjPdkQvFYYhamu_t42sgrg2YYX-Smmd_zAH4slj5QboHKIiMiTTDJTJzgg/sync';

// Turn off CSS/JS aggregation
$config['system.performance']['css']['preprocess'] = 0;
$config['system.performance']['js']['preprocess'] = 0;
