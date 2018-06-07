# aadhar-number-validator
India Aadhar Number Validator Moduel for zf2/Apigility

## How to create custom module (Like custom validator etc) and convert it in to the 3rd party vender module?

## Step 1 - Structure in Module for IndiaAadhaarNumberValidator
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

## Step 2 - Create a new repository -
![Create a new repository](https://github.com/prashant7july/aadhar-number-validator/blob/master/images/create-a-new-repository.png)

## Step 3 - Take git branch in your local -
git clone https://github.com/prashant7july/aadhar-number-validator.git

## Step 1 - Set Composer - composer.json and run $ composer dump-autoload -o

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
