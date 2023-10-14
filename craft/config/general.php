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
    
    // // Prevent generated URLs from including "index.php"
    ->omitScriptNameInUrls(true)
    
    // // Allow upscaling of images
    ->upscaleImages(false)

    // Enable GQL (GraphQL) queries
    ->enableGql(true)
   
    // // Preload Single entries as Twig variables
    // ->preloadSingles(tru e)
    
    // Allow administrative changes
    ->allowAdminChanges(App::env('ALLOW_ADMIN_CHANGES') ?? false)
    
    // Disallow robots
    ->disallowRobots(App::env('DISALLOW_ROBOTS') ?? false)
    ->verificationCodeDuration(432000) // 5 days    
    // ->errorTemplatePrefix('_')

    // Set the default week start day for date pickers (0 = Sunday, 1 = Monday, etc.)
    ->defaultWeekStartDay(1)

    

    // Enable Dev Mode (see https://craftcms.com/guides/what-dev-mode-does)
    ->devMode(App::env('DEV_MODE') ?? false)
    
    

    // Aliases
    ->aliases([    
        '@web' => App::env('PRIMARY_SITE_URL'),
        '@webroot' => App::env('BASE_PATH'),
        '@PrimarySiteUrl' => getenv('PRIMARY_SITE_URL'),
        '@SOTNFSiteUrl' => getenv('SOTNF_SITE_URL'),
        '@webADOC' => App::env('ADOC_SITE_URL'),
        '@webrootSOTNF' => App::env('BASE_PATH'),
        '@mailGunAPI'=> getenv('MAILGUN_API'),
        ])
    // Email to use for ALL emails when not in production
    ->testToEmailAddress(['jbudlong@gmail.com' => 'Craft Email (tk) Gen.php'])


;
