{
    "name": "symfony/framework-standard-edition",
    "license": "MIT",
    "type": "project",
    "description": "The \"Symfony Standard Edition\" distribution",
    "autoload": {
        "psr-0": { "": "src/", "SymfonyStandard": "app/" }
    },
    "require": {
        "php": ">=5.3.3",
        "symfony/symfony": "2.5.*",
        "doctrine/orm": "~2.2,>=2.2.3",
        "doctrine/doctrine-bundle": "~1.2",
        "twig/extensions": "~1.0",
        "symfony/assetic-bundle": "~2.3",
        "symfony/swiftmailer-bundle": "~2.3",
        "symfony/monolog-bundle": "~2.4",
        "sensio/distribution-bundle": "~3.0",
        "sensio/framework-extra-bundle": "~3.0",
        "incenteev/composer-parameter-handler": "~2.0",
        "friendsofsymfony/user-bundle": "2.0.*@dev"
    },
    "require-dev": {
        "sensio/generator-bundle": "~2.3"
    },
    "scripts": {
        "post-root-package-install": [
            "SymfonyStandard\\Composer::hookRootPackageInstall"
        ],
        "post-install-cmd": [
            "Incenteev\\ParameterHandler\\ScriptHandler::buildParameters",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::buildBootstrap",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::clearCache",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::installAssets",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::installRequirementsFile",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::removeSymfonyStandardFiles"
        ],
        "post-update-cmd": [
            "Incenteev\\ParameterHandler\\ScriptHandler::buildParameters",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::buildBootstrap",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::clearCache",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::installAssets",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::installRequirementsFile",
            "Sensio\\Bundle\\DistributionBundle\\Composer\\ScriptHandler::removeSymfonyStandardFiles"
        ]
    },
    "config": {
        "bin-dir": "bin"
    },
    "extra": {
        "symfony-app-dir": "app",
        "symfony-web-dir": "web",
        "incenteev-parameters": {
            "file": "app/config/parameters.yml"
        },
        "branch-alias": {
            "dev-master": "2.5-dev"
        }
    }
}
