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
* Checkout the this lib
```bash
git clone http://github.com/ekandreas/dwpt
```

* Go to the folder checked out
```bash
cd dwpt
```

* Change the IP-adress in 'deploy.php' to your Docker IP, eg 192.168.99.100
```bash
nano deploy.php
```

* Run composer install or update
```bash
vendor/bin/dep tests
```
