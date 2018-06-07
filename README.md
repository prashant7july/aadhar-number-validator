# aadhar-number-validator
India Aadhar Number Validator Moduel for zf2/Apigility

## How to create custom module (Like custom validator etc) and convert it in to the 3rd party vender module?

#### Step 1 - Structure in Module for IndiaAadhaarNumberValidator
```
─ IndiaAadhaarNumberValidator
	├── config
	│   └── module.config.php
	├── Module.php
	├── README.md
	└── src
	    └── IndiaAadhaarNumberValidator
	        └── Validator
	            └── AadharNumberValidator.php
```

#### Step 2 - Create a new repository -
![Create a new repository](https://github.com/prashant7july/aadhar-number-validator/blob/master/images/create-a-new-repository.png)

#### Step 3 - Take git branch in your local -
git clone https://github.com/prashant7july/aadhar-number-validator.git

#### Step 4 - Set Composer - composer.json and run $ composer dump-autoload -o

```
{
  "name": "prashant7july/aadhar-number-validator",
  "description": "India Aadhar Number Validator Moduel for zf2/Apigility",
  "keywords": [
    "zf2",
    "apigility",
    "Aadhar Number",
    "validator"
  ],
  "authors": [
    {
      "name": "Prashant Shekher",
      "email": "prashant7july@gmail.org",
      "role": "Author"
    }
  ],
  "require": {
    "php": ">=5.3.3",
    "zendframework/zendframework": "2.*"
  },
  "autoload": {
    "psr-0": {
      "IndiaAadhaarNumberValidator\\": "src/"
    },
    "classmap": [
      "Module.php"
    ]
  }
}
```
RUN Composer Validator Command 
* $ composer validate

#### Step 5 - Submit Package in to Packagist
https://packagist.org/packages/submit

#### Step 6 - How to update packages?
This package is not auto-updated. Please set up the [GitHub Service Hook](https://packagist.org/about#how-to-update-packages) for Packagist so that it gets updated whenever you push!

Enabling the Packagist service hook ensures that your package will always be updated instantly when you push to GitHub.
To do so you can:

* Go to your GitHub repository
* Click the "Settings" button
* Click "Integrations & services"
* Add a "Packagist" service, and configure it with your API token, plus your Packagist username
* Check the "Active" box and submit the form

You can then hit the "Test Service" button to trigger it and check if Packagist removes the warning about the package not being auto-updated.

#### Step 6 - Set Git Versioning [How to change version (dev-master) in packagist.org]
* [create php composer package](http://jessesnet.com/development-notes/2015/create-php-composer-package/)
* [how to release a composer package](https://jameshfisher.com/2017/11/06/how-to-release-a-composer-package.html)
* [create-a-tag-in-github-repository](https://stackoverflow.com/questions/18216991/create-a-tag-in-github-repository)
* During execute $ composer require prashant7july/tutorial-validator getting an issues as below -
[InvalidArgumentException]                                                                                                                
  Could not find package prashant7july/tutorial-validator at any version for your minimum-stability (stable). Check the package spelling or   
  your minimum-stability 
## Solution - 
* $ git tag -a 1.0.0 -m 'release of version 1.0.0'
* $ git push origin 1.0.0

# IndiaAadhaarNumberValidator Install in zf2 or Apigility

#### Run the following composer command:
## Latest Version [Still not Done]
* $ composer require prashant7july/aadhar-number-validator

## dev-master Version 
* $ composer require prashant7july/aadhar-number-validator:dev-master
* $ composer require prashant7july/aadhar-number-validator:dev-master --ignore-platform-reqs


####  Alternately, manually add the following to your composer.json, in the require section:
## Latest Version [Still not Done]
```
"require": {
    "prashant7july/aadhar-number-validator": "1.0.0"
}
```

## dev-master Version 
```
"require": {
    "prashant7july/tutorial-validator": "dev-master"
}
```

And then run composer update to ensure the module is installed.

Finally, add the module name to your project's config/application.config.php under the modules key:
```
return [
    /* ... */
    'modules' => [
        /* ... */
        'IndiaAadhaarNumberValidator',
    ],
    /* ... */
];
```
OR 

```
config/modules.config.php 

return [
    /* ... */
    'IndiaAadhaarNumberValidator',
    /* ... */
];
```

# creating-your-first-composer-packagist-package
* [creating your first composer packagist package](https://blog.jgrossi.com/2013/creating-your-first-composer-packagist-package/)
* [Submit package in Packagist and versioning it](https://www.youtube.com/watch?v=2l90LuhoqoE)
* [creating composer package library](http://www.darwinbiler.com/creating-composer-package-library/)

# Hello World
* [Hello World](https://github.com/udayshi/php_composer_hello-world)
* [Hello World](https://github.com/prabhu0101/hello-world)
* [Hello World psr4](https://github.com/wasay/php-composer-psr4-hello-world)
* [ZF2 Hello World](https://github.com/wyanez/Zf2HelloWorldModule)
* [learnzf-debug](https://github.com/slaff/learnzf-debug) or [3rd Party Vendor Module](https://books.google.co.in/books?id=TYoXAgAAQBAJ&pg=PA249&lpg=PA249&dq=ZF2+MODULE+THROUGH+GITHUB,+PACKAGIST+%26+COMPOSER&source=bl&ots=rSbpGF4jeg&sig=vQzaXLfHPvVgeqq-KcrA2K9v9O4&hl=en&sa=X&ved=0ahUKEwjC4qGD7rHbAhVEqo8KHSGtByU4ChDoAQhWMAU#v=onepage&q=ZF2%20MODULE%20THROUGH%20GITHUB%2C%20PACKAGIST%20%26%20COMPOSER&f=false)

## 1st Issues
We had problems parsing your composer.json file, the parser reports: "master:composer.json" does not contain valid JSON Parse error on line 22: ...hp": ">=5.3.3", }, "autoload": { ---------------------^ Expected: 'STRING' - It appears you have an extra trailing comma

# solution
$ composer validate [command to validate]


# 2nd Issues
The vendor is already taken by someone else. You may ask them to add your package and give you maintainership access. If they add you as a maintainer on any package in that vendor namespace, you will then be able to add new packages in that namespace. The packages already in that vendor namespace can be found at validator

# Soultion
https://github.com/prashant7july/TutorialValidator.git set name tage with "prashant7july/TutorialValidator" in composer.json

# 3rd Issues
The package name prashant7july/TutorialValidator is invalid, it should not contain uppercase characters. We suggest using prashant7july/tutorial-validator instead.

# Soultion
prashant7july/tutorial-validator in composer.json

# 4th Issues after execute composer require prashant7july/tutorial-validator:dev-master
Failed to decode response: zlib_decode(): data error
Retrying with degraded mode, check https://getcomposer.org/doc/articles/troubleshooting.md#degraded-mode for more info

# solution -
$ composer clear-cache

# Issues after execute composer require prashant7july/tutorial-validator:dev-master
How can I resolve “Your requirements could not be resolved to an installable set of packages” error?
# Solution
https://jameshfisher.com/2017/11/06/how-to-release-a-composer-package.html

## Versioning [How to change version (dev-master) in packagist.org]
* [create php composer package](http://jessesnet.com/development-notes/2015/create-php-composer-package/)
* [how to release a composer package](https://jameshfisher.com/2017/11/06/how-to-release-a-composer-package.html)
* During execute $ composer require prashant7july/tutorial-validator getting an issues as below -
[InvalidArgumentException]                                                                                                                  
  Could not find package prashant7july/tutorial-validator at any version for your minimum-stability (stable). Check the package spelling or   
  your minimum-stability 
## Solution - 
* $ git tag -a 1.0.0 -m 'release version'
* $ git push origin 1.0.0

