# TableTopFinder Lang Files [![Build Status](https://travis-ci.org/jerodev/teamleader-coding-test.svg?branch=master)](https://travis-ci.org/jerodev/teamleader-coding-test)
This repository contains the translation files for [tabletopfinder.eu](https://www.tabletopfinder.eu/).

Consider adding your own language to the repository to browse the website in your own language and help us to expand the website.

> :exclamation: These are the translation files for the new [TableTopFinder website](https://www.tabletopfinder.eu/) that will hopefully be live Q4 2018

## How can I help?
The [`src`](src/) folder contains all translations, separated by language. The name of the folder is the [ISO 639-1](https://en.wikipedia.org/wiki/ISO_639-1) language code.

Each folder contains a number of `php` files that return an array with key-value pairs. The key is the same for each language, the value is the translated string.

For example:

``` php
<?php

// src/nl/common.php

return [
  'key' => 'value'
  'one' => 'een',
  'two' => 'twee'
];
```

The [English language](src/en/) is the template for other languages, new keys are added to these files first.

## TODO
This is the current list of languages we are hoping to support:

| Language  | Code | % translated |
| - | - | - |
| <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/flags/4x3/gb.svg" height="16" /> English | en | <pre>\|====================\| 100%</pre> |
| <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/flags/4x3/nl.svg" height="16" /> Dutch   | nl | <pre>\|==                  \|   8%</pre> |
| <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/flags/4x3/fr.svg" height="16" /> French  | fr | <pre>\|                    \|   0%</pre> |
| <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/flags/4x3/de.svg" height="16" /> German  | de | <pre>\|                    \|   0%</pre> |
| <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/flags/4x3/es.svg" height="16" /> Spanish | es | <pre>\|                    \|   0%</pre> |
| <img src="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/flags/4x3/it.svg" height="16" /> Italian | it | <pre>\|                    \|   0%</pre> |

## Contributors
We are very grateful for anyone who wants to help us to translate the website, so as a token of appreciation we will list contributors here and/or on the website if you want.
Feel free to mention this in your pull-request.