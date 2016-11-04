Yii2-rest-api-template
===============================
Rest application with yii2 has been configured and some of the most crucuial parts are included 
for easy plug and play.

Whats Included ?
----------------
- Modifying default api response
- Adding or deleting api actions
- Modifying existing api actions
- Route rules are seperated [See routes directory]
- runtime initialization on php init and environment seperation [See environments directory]

Configuration
---------------
After the installation, create api folder with the following directory struture.

```
api
    assets/              contains api assets
    config/              contains api configurations
    modules/             contains api versions as per modular form
    routes               contains route rules for rule-seperation
    runtime              contains files generated during runtime
    web                  contains entry scripts for api
```
For reference, see my files in this repository.

- Setup your database accordingly.
    - In My example, I have 
    ```
    CREATE TABLE `country` (
  `code` CHAR(2) NOT NULL PRIMARY KEY,
  `name` CHAR(52) NOT NULL,
  `population` INT(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Country` VALUES ('AU','Australia',18886000);
INSERT INTO `Country` VALUES ('BR','Brazil',170115000);
INSERT INTO `Country` VALUES ('CA','Canada',1147000);
INSERT INTO `Country` VALUES ('CN','China',1277558000);
INSERT INTO `Country` VALUES ('DE','Germany',82164700);
INSERT INTO `Country` VALUES ('FR','France',59225700);
INSERT INTO `Country` VALUES ('GB','United Kingdom',59623400);
INSERT INTO `Country` VALUES ('IN','India',1013662000);
INSERT INTO `Country` VALUES ('RU','Russia',146934000);
INSERT INTO `Country` VALUES ('US','United States',278357000);
    ```
    - Check out the models and controllers in api/modules/v1/controllers and api/modules/v1/models
    - Analyse routes directory in this repo
    
Outputs
---------
-  Default Api Action
![alt tag](https://raw.githubusercontent.com/TNChalise/yii2-rest-api-template/master/github-images/one.png)

- Modified api action
![alt tag](https://raw.githubusercontent.com/TNChalise/yii2-rest-api-template/master/github-images/custom.png)

- Added api action
![alt tag](https://raw.githubusercontent.com/TNChalise/yii2-rest-api-template/master/github-images/additional-method.png)


[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2-app-advanced/v/stable.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii2-app-advanced/downloads.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-advanced.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-advanced)

DIRECTORY STRUCTURE
-------------------

```
api
    assets/              contains api assets
    config/              contains api configurations
    modules/             contains api versions as per modular form
    routes               contains route rules for rule-seperation
    runtime              contains files generated during runtime
    web                  contains entry scripts for api
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```

