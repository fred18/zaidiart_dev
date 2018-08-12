<?php
return [
  'backend' => [
    'frontName' => 'admin_zaidiart'
  ],
  'crypt' => [
    'key' => 'e61d57cfe5708906060a6b5aa61a0c3e'
  ],
  'db' => [
    'table_prefix' => '',
    'connection' => [
      'default' => [
        'host' => 'localhost',
        'dbname' => 'zaidiart_magento',
        'username' => 'zaidiart_user',
        'password' => 'zaidiart_2018',
        'active' => '1'
      ]
    ]
  ],
  'resource' => [
    'default_setup' => [
      'connection' => 'default'
    ]
  ],
  'x-frame-options' => 'SAMEORIGIN',
  'MAGE_MODE' => 'default',
  'session' => [
    'save' => 'files'
  ],
  'cache_types' => [
    'config' => 1,
    'layout' => 1,
    'block_html' => 1,
    'collections' => 1,
    'reflection' => 1,
    'db_ddl' => 1,
    'eav' => 1,
    'customer_notification' => 1,
    'config_integration' => 1,
    'config_integration_api' => 1,
    'full_page' => 1,
    'translate' => 1,
    'config_webservice' => 1
  ],
  'install' => [
    'date' => 'Wed, 04 Jul 2018 09:15:20 +0000'
  ]
];
