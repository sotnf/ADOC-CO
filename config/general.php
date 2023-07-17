<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\config\GeneralConfig;
use craft\helpers\App;

return GeneralConfig::create()
    // Set the default week start day for date pickers (0 = Sunday, 1 = Monday, etc.)
    ->defaultWeekStartDay(1)
    
    // Prevent generated URLs from including "index.php"
    ->omitScriptNameInUrls()
    
    // Enable Dev Mode (see https://craftcms.com/guides/what-dev-mode-does)
<<<<<<< HEAD
    // ->devMode(App::env('DEV_MODE') ?? false)
    // ->devMode(false)
    
=======
    //->devMode(App::env('DEV_MODE') ?? false)
    ->devMode(true)
>>>>>>> PRODUCTION
    // Preload Single entries as Twig variables
    ->preloadSingles()
    
    // Allow administrative changes
    ->allowAdminChanges(App::env('ALLOW_ADMIN_CHANGES') ?? false)
    
    // Disallow robots
    ->disallowRobots(App::env('DISALLOW_ROBOTS') ?? false)
    ->aliases([    
        '@PrimarySiteUrl' => getenv('PRIMARY_SITE_URL'),
        '@web' => App::env('PRIMARY_SITE_URL'),
        '@webroot' => App::env('BASE_PATH'),
        '@SOTNFSiteUrl' => getenv('SOTNF_SITE_URL'),
        '@webADOC' => App::env('ADOC_SITE_URL'),
        // '@webrootSOTNF' => App::env('BASE_PATH'),
        '@mailGunAPI'=> getenv('MAILGUN_API'),
        ])
    ->testToEmailAddress(['jbudlong@gmail.com' => 'Craft Test Email'])


;
