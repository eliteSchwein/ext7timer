#!/bin/bash
sudo chown -R pi ~/typo3
git pull
composer install
sudo chown -R www-data ~/typo3