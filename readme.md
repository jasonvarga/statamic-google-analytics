# Google Analytics for Statamic 2
*Requirement:* Statamic v2.x  
*Version:* 1.0.0

### Version note
- 1.0.0 Beta: This addon is complete but would benefit with further testing. Please submit issues or pull requests if you run into any issues.

### What is this?
Add Google Analytics support to Statamic 2 and configure tracking from the Control Panel

### Installation
- Rename the folder `GoogleAnalytics` and copy it to your `site/addons` folder

### Usage
- Use the settings to configure your tracking id and other Google Analytics settings or create a settings file in `site/settings/addons/google_analytics.yaml`
```
tracking_id: UA-*******-*
async: false
beacon: false
display_features: false
link_id: false
track_uid: false
ignore_admins: false
debug: false
trace_debugging: false
disable_sending: false

```
- Manually add the tag to your theme layout file just before your close `</head>` tag.

```
  {{ google_analytics }}
```

### Environment Support
- Use Statamic's built in (environment specific settings)[https://docs.statamic.com/settings#environment] to specify different settings for Google Analytics in development or testing.
- There is a slight bug with this. See https://github.com/statamic/v2-hub/issues/846 and https://github.com/statamic/v2-hub/issues/1073
