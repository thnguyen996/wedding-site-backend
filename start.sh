#!/bin/bash
composer install
php saya migrasi --gen
php saya coba 0.0.0.0:10000
