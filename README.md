EmmaForJoomla
=============
A Joomla! plugin that registers EmmaPHP as a library that can be called from anywhere in Joomla!

## EmmaPHP
Documentation on EmmaPHP can be found here: https://github.com/myemma/EmmaPHP
The last commit in EmmaPHP was eb68035 at the time it was integrated into this plugin.

## Installation in Joomla!
Simply zip the plg_emma_for_joomla directory and install it using the Joomla! Extension Manager.

## Instantiation of the Emma class
The only major difference between EmmaPHP and this plugin is that account id, api keys, etc. are specified in the plugin settings. As such, they are no longer required when calling the Emma class. Simply instantiate Emma as follows: 
```php
$emma = new Emma();
```
