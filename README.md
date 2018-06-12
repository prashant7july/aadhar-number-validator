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
  "license": "MIT",
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
  "minimum-stability": "stable",
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

#### Step 5 - Just Commit the Code
* $ git add .
* $ git commit -m "add module"
* $ git push origin master

#### Step 6 - Submit Package in to Packagist
https://packagist.org/packages/submit

#### Step 7 - How to update packages?
This package is not auto-updated. Please set up the [GitHub Service Hook](https://packagist.org/about#how-to-update-packages) for Packagist so that it gets updated whenever you push!

Enabling the Packagist service hook ensures that your package will always be updated instantly when you push to GitHub.
To do so you can:

* Go to your GitHub repository
* Click the "Settings" button
* Click "Integrations & services"
* Add a "Packagist" service, and configure it with your API token, plus your Packagist username
* Check the "Active" box and submit the form

You can then hit the "Test Service" button to trigger it and check if Packagist removes the warning about the package not being auto-updated.

#### Step 8 - Set Git Versioning [How to change version (dev-master) in packagist.org]
* [create php composer package](http://jessesnet.com/development-notes/2015/create-php-composer-package/)
* [how to release a composer package](https://jameshfisher.com/2017/11/06/how-to-release-a-composer-package.html)
* [create-a-tag-in-github-repository](https://stackoverflow.com/questions/18216991/create-a-tag-in-github-repository)
* During execute $ composer require prashant7july/tutorial-validator getting an issues as below -
[InvalidArgumentException]
  Could not find package prashant7july/tutorial-validator at any version for your minimum-stability (stable). Check the package spelling or   
  your minimum-stability 
* [Creating Releases form Github](https://help.github.com/articles/creating-releases/)
## Solution - 
* $ git tag -a 1.0.0 -m 'release of version 1.0.0'
* $ git push origin 1.0.0

# IndiaAadhaarNumberValidator Install in zf2 or Apigility

#### Run the following composer command:
* $ composer require prashant7july/aadhar-number-validator

OR

```
"require": {
    "prashant7july/aadhar-number-validator": "1.0.0"
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
