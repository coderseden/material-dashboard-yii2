#
# @package    Material Dashboard Yii2
# @author     CodersEden <hello@coderseden.com>
# @link       https://www.coderseden.com
# @copyright  2020 Material Dashboard Yii2 (https://www.coderseden.com)
# @license    MIT - https://www.coderseden.com
# @since      1.0
FROM phpdockerio/php72-fpm:latest

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php7.2-mysql php-redis php7.2-bcmath php7.2-gd php7.2-imap php7.2-intl php7.2-ldap php7.2-mbstring php7.2-soap php7.2-tidy \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

WORKDIR "/var/www/material-dashboard/web"