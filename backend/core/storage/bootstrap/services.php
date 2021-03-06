<?php return array (
  'providers' => 
  array (
    'Console_Migration' => 'Illuminate\\Database\\MigrationServiceProvider',
    'Laravel_View' => 'Illuminate\\View\\ViewServiceProvider',
    'Laravel_Database' => 'Illuminate\\Database\\DatabaseServiceProvider',
    'Laravel_Filesystem' => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    'Laravel_Cache' => 'Illuminate\\Cache\\CacheServiceProvider',
    'Laravel_Redis' => 'Illuminate\\Redis\\RedisServiceProvider',
    'Laravel_Lang' => 'Illuminate\\Translation\\TranslationServiceProvider',
    'Laravel_Validator' => 'Illuminate\\Validation\\ValidationServiceProvider',
    'Bootstrap_ExceptionHandler' => 'EvolutionCMS\\Providers\\ExceptionHandlerServiceProvider',
    'Console_Artisan' => 'EvolutionCMS\\Providers\\ArtisanServiceProvider',
    'Console_Composer' => 'EvolutionCMS\\Providers\\ComposerServiceProvider',
    'Evolution_Auth' => 'EvolutionCMS\\Providers\\AuthServiceProvider',
    'Evolution_Observers' => 'EvolutionCMS\\Providers\\ObserversServiceProvider',
    'Evolution_Pagination' => 'EvolutionCMS\\Providers\\PaginationServiceProvider',
    'Evolution_Events' => 'EvolutionCMS\\Providers\\EventServiceProvider',
    'Evolution_DBAPI' => 'EvolutionCMS\\Providers\\DatabaseServiceProvider',
    'Evolution_DEPRECATED' => 'EvolutionCMS\\Providers\\DeprecatedCoreServiceProvider',
    'Evolution_MODxMailer' => 'EvolutionCMS\\Providers\\MailServiceProvider',
    'Evolution_makeTable' => 'EvolutionCMS\\Providers\\MakeTableServiceProvider',
    'Evolution_ManagerAPI' => 'EvolutionCMS\\Providers\\ManagerApiServiceProvider',
    'Evolution_MODIFIERS' => 'EvolutionCMS\\Providers\\ModifiersServiceProvider',
    'Evolution_phpass' => 'EvolutionCMS\\Providers\\PasswordHashServiceProvider',
    'Evolution_PHPCOMPAT' => 'EvolutionCMS\\Providers\\PhpCompatServiceProvider',
    'Evolution_DocBlock' => 'EvolutionCMS\\Providers\\DocBlockServiceProvider',
    'Evolution_ManagerTheme' => 'EvolutionCMS\\Providers\\ManagerThemeServiceProvider',
    'Evolution_UrlProcessor' => 'EvolutionCMS\\Providers\\UrlProcessorServiceProvider',
    'Evolution_TemplateProcessor' => 'EvolutionCMS\\Providers\\TemplateProcessorServiceProvider',
    'Evolution_HelperProcessor' => 'EvolutionCMS\\Providers\\HelperProcessorServiceProvider',
    'Evolution_Blade' => 'EvolutionCMS\\Providers\\BladeServiceProvider',
    'Evolution_UserManager' => 'EvolutionCMS\\UserManager\\Providers\\UserManagerServiceProvider',
    'Evolution_DocumentManager' => 'EvolutionCMS\\DocumentManager\\Providers\\DocumentManagerServiceProvider',
    'Evolution_Routing' => 'EvolutionCMS\\Providers\\RoutingServiceProvider',
    'Evolution_Config' => 'EvolutionCMS\\Providers\\ConfigServiceProvider',
    'Evolution_Session' => 'EvolutionCMS\\Providers\\SessionServiceProvider',
    'Evolution_Salo' => 'EvolutionCMS\\Salo\\SaloServiceProvider',
    'Fix_DLTemplate' => 'EvolutionCMS\\Providers\\DLTemplateServiceProvider',
    'Fix_Phx' => 'EvolutionCMS\\Providers\\PhxServiceProvider',
    'Fix_ModResource' => 'EvolutionCMS\\Providers\\ModResourceServiceProvider',
    'Fix_ModUsers' => 'EvolutionCMS\\Providers\\ModUsersServiceProvider',
    'Fix_Fs' => 'EvolutionCMS\\Providers\\FsServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Illuminate\\View\\ViewServiceProvider',
    1 => 'Illuminate\\Database\\DatabaseServiceProvider',
    2 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    3 => 'EvolutionCMS\\Providers\\ExceptionHandlerServiceProvider',
    4 => 'EvolutionCMS\\Providers\\ArtisanServiceProvider',
    5 => 'EvolutionCMS\\Providers\\ComposerServiceProvider',
    6 => 'EvolutionCMS\\Providers\\AuthServiceProvider',
    7 => 'EvolutionCMS\\Providers\\ObserversServiceProvider',
    8 => 'EvolutionCMS\\Providers\\PaginationServiceProvider',
    9 => 'EvolutionCMS\\Providers\\EventServiceProvider',
    10 => 'EvolutionCMS\\Providers\\DatabaseServiceProvider',
    11 => 'EvolutionCMS\\Providers\\DeprecatedCoreServiceProvider',
    12 => 'EvolutionCMS\\Providers\\MailServiceProvider',
    13 => 'EvolutionCMS\\Providers\\MakeTableServiceProvider',
    14 => 'EvolutionCMS\\Providers\\ManagerApiServiceProvider',
    15 => 'EvolutionCMS\\Providers\\ModifiersServiceProvider',
    16 => 'EvolutionCMS\\Providers\\PasswordHashServiceProvider',
    17 => 'EvolutionCMS\\Providers\\PhpCompatServiceProvider',
    18 => 'EvolutionCMS\\Providers\\DocBlockServiceProvider',
    19 => 'EvolutionCMS\\Providers\\ManagerThemeServiceProvider',
    20 => 'EvolutionCMS\\Providers\\UrlProcessorServiceProvider',
    21 => 'EvolutionCMS\\Providers\\TemplateProcessorServiceProvider',
    22 => 'EvolutionCMS\\Providers\\HelperProcessorServiceProvider',
    23 => 'EvolutionCMS\\Providers\\BladeServiceProvider',
    24 => 'EvolutionCMS\\UserManager\\Providers\\UserManagerServiceProvider',
    25 => 'EvolutionCMS\\DocumentManager\\Providers\\DocumentManagerServiceProvider',
    26 => 'EvolutionCMS\\Providers\\RoutingServiceProvider',
    27 => 'EvolutionCMS\\Providers\\ConfigServiceProvider',
    28 => 'EvolutionCMS\\Providers\\SessionServiceProvider',
    29 => 'EvolutionCMS\\Providers\\DLTemplateServiceProvider',
    30 => 'EvolutionCMS\\Providers\\PhxServiceProvider',
    31 => 'EvolutionCMS\\Providers\\ModResourceServiceProvider',
    32 => 'EvolutionCMS\\Providers\\ModUsersServiceProvider',
    33 => 'EvolutionCMS\\Providers\\FsServiceProvider',
  ),
  'deferred' => 
  array (
    'migrator' => 'Illuminate\\Database\\MigrationServiceProvider',
    'migration.repository' => 'Illuminate\\Database\\MigrationServiceProvider',
    'migration.creator' => 'Illuminate\\Database\\MigrationServiceProvider',
    'command.migrate' => 'Illuminate\\Database\\MigrationServiceProvider',
    'command.migrate.fresh' => 'Illuminate\\Database\\MigrationServiceProvider',
    'command.migrate.install' => 'Illuminate\\Database\\MigrationServiceProvider',
    'command.migrate.refresh' => 'Illuminate\\Database\\MigrationServiceProvider',
    'command.migrate.reset' => 'Illuminate\\Database\\MigrationServiceProvider',
    'command.migrate.rollback' => 'Illuminate\\Database\\MigrationServiceProvider',
    'command.migrate.status' => 'Illuminate\\Database\\MigrationServiceProvider',
    'command.migrate.make' => 'Illuminate\\Database\\MigrationServiceProvider',
    'cache' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.store' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.psr6' => 'Illuminate\\Cache\\CacheServiceProvider',
    'memcached.connector' => 'Illuminate\\Cache\\CacheServiceProvider',
    'Illuminate\\Cache\\RateLimiter' => 'Illuminate\\Cache\\CacheServiceProvider',
    'redis' => 'Illuminate\\Redis\\RedisServiceProvider',
    'redis.connection' => 'Illuminate\\Redis\\RedisServiceProvider',
    'translator' => 'Illuminate\\Translation\\TranslationServiceProvider',
    'translation.loader' => 'Illuminate\\Translation\\TranslationServiceProvider',
    'validator' => 'Illuminate\\Validation\\ValidationServiceProvider',
    'validation.presence' => 'Illuminate\\Validation\\ValidationServiceProvider',
    'EvolutionCMS\\Salo\\Console\\InstallCommand' => 'EvolutionCMS\\Salo\\SaloServiceProvider',
    'EvolutionCMS\\Salo\\Console\\PublishCommand' => 'EvolutionCMS\\Salo\\SaloServiceProvider',
  ),
  'when' => 
  array (
    'Illuminate\\Database\\MigrationServiceProvider' => 
    array (
    ),
    'Illuminate\\Cache\\CacheServiceProvider' => 
    array (
    ),
    'Illuminate\\Redis\\RedisServiceProvider' => 
    array (
    ),
    'Illuminate\\Translation\\TranslationServiceProvider' => 
    array (
    ),
    'Illuminate\\Validation\\ValidationServiceProvider' => 
    array (
    ),
    'EvolutionCMS\\Salo\\SaloServiceProvider' => 
    array (
    ),
  ),
);