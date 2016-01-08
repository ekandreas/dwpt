# Docker WordPress Tests
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://packagist.org/packages/ekandreas/bladerunner)

Testing WordPress Develop with Composer and Docker in OSX.

## Requirements
All these components should be installed to your local environment, preferable with Brew.
* Docker with the new docker-machine installed (not the old Boot2Docker)
* PHP installed
* PHP Composer installed
* PHPUnit installed
* Git

## Step by step

### Clone
Checkout this repo to your folder
```bash
git clone http://github.com/ekandreas/dwpt
```

### Folder
Step into the folder
```bash
cd dwpt
```

### IP-address
Change the IP-address in 'deploy.php' to your Docker IP, eg 192.168.99.100
```bash
nano deploy.php
```

### Composer update
Run composer install or update
```bash
composer update
```

### Running tests
Run tests with PHP Deployer
```bash
vendor/bin/dep tests
```
If you want a more verbose output then add -v, -vv or -vvv to the command, eg:
```bash
vendor/bin/dep tests -vvv
```

