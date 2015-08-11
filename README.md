EmmaForJoomla
=============
A Joomla! extension that registers EmmaPHP as a library that can be called from anywhere in Joomla!

## EmmaPHP
Documentation on EmmaPHP can be found here: https://github.com/myemma/EmmaPHP
The last commit in EmmaPHP was eb68035a3b at the time it was integrated into this plugin.

## Installation in Joomla!
Simply download the pkg_emma.zip archive and install it using the Joomla! extension manager. Once installed, you must configure the extension with your MyEmma account information. To do so, locate the Emma plugin in the Joomla! Plugin Manager and edit its settings. You must provide an account ID, Public API Key, and Private API Key.

## Instantiation of the Emma class
The only major difference between EmmaPHP and this plugin is that account id, api keys, etc. are specified in the plugin settings. As such, they are no longer required when calling the Emma class. To use this extension, you must first import the Emma library and then simply instantiate Emma as follows: 
```php
jimport('emma.init');
$emma = new Emma();
```
