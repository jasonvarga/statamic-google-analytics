<?php
return [
    'tracking_id' => 'Google Analytics Tracking ID',
    'tracking_id_instruct' => "Your Google Analytics Tracking ID. You can obtain this value from Google Analytics. It starts with 'UA-'",
    'async' => 'Async Tracking Code',
    'async_instruct' => 'Use the Async tracking code for Google Analytics. This can result in a small performance boost for modern browsers. You should only enable this if most users are using IE 9+. More Info: https://developers.google.com/analytics/devguides/collection/analyticsjs/',
    'beacon' => 'Enable Beacon Transport',
    'beacon_instruct' => 'Enable beacon for transportation of data in modern browsers.',
    'track_uid' => 'Track UID',
    'track_uid_instruct' => 'Track users by their unique Statamic ID (when signed in). Note: you must enable User ID tracking on your Google Analytics property for this setting to have any effect.',
    'display_features' => 'Enable Display Features',
    'display_features_instruct' => 'Enable Display Features',
    'link_id' => 'Enable Enhanced Link Attribution',
    'link_id_instruct' => 'Enhanced Link Attribution improves the accuracy of your In-Page Analytics report by automatically differentiating between multiple links to the same URL on a single page by using link element IDs. You must enable Enhanced Link Attribution in the Admin UI of your Google Analytics Account, see: https://support.google.com/analytics/answer/2558867#enable',
    'ignore_admins' => 'Ignore Admins',
    'ignore_admins_instruct' => 'Do not track users with control panel access',
    'debug' => 'Enable the Debug Version of Google Analytics',
    'debug_instruct' => 'Note: The debug version of analytics.js should only be used during development and testing, as it\'s quite a bit larger than analytics.js and will slow down the loading of your page.',
    'trace_debugging' => 'Enable Trace Debugging',
    'trace_debugging_instruct' => 'Enabling trace debugging will output more verbose information to the console. Note: you must use the debug version of Google Analytics for this setting to have any effect.',
    'disable_sending' => 'Disable Sending Trafic to Goggle',
    'disable_sending_instruct' => 'This allows you to visit a website running analytics.js code and inspect the implementation without interfering with the data being tracked. This is useful if you do not want to send data to Google Analytics in certain cases (e.g. development or testing environments).'
];
