## Magento Cache Buster Extension

# Description
This is a simple extension for adding version numbers to all css and js files. This will make sure that when you update these files, users will load the new version instead of the one they have cached in their browser.

# Install
Simply copy the app directory into your magento install and merge with your exsisting app direcotry.

# Configuration
All configuration for this module can be found in the System section under the group Cache Buster Settings. Here you can enable the extension, set it to auto update when you clear the cache, or manually change the version number that is added to css and scripts.

# Advance Use
This extension comes with a easy to use helper for adding the version number to other assets if needed. You can use this helper to add the version number to the end of any url such as scripts added outside of the normal addItem method, or images.

`
<?php $versionNum = Mage::helper('cachebuster')->getVersion(); ?>

<link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css<?php echo $versionNum; ?>" rel="stylesheet">
`
# Compatibility
This extension rewrites Mage_Page_Block_Html_Head

If you need to use this extension with another extension that also extends that class, you can rewrite Wevans_CacheBuster_Block_Html_Head to extend the other extension's class instead, just make sure to add that extension as a dependancy for this one.
