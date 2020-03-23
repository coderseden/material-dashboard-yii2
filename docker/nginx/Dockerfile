#
# @package    Material Dashboard Yii2
# @author     CodersEden <hello@coderseden.com>
# @link       https://www.coderseden.com
# @copyright  2020 Material Dashboard Yii2 (https://www.coderseden.com)
# @license    MIT - https://www.coderseden.com
# @since      1.0
FROM phpdockerio/nginx:latest

RUN echo '@testing http://nl.alpinelinux.org/alpine/edge/testing' >> /etc/apk/repositories && \
    echo '@community http://nl.alpinelinux.org/alpine/edge/community' >> /etc/apk/repositories && \ 
    echo '@main http://dl-cdn.alpinelinux.org/alpine/edge/main' >> /etc/apk/repositories && \ 
    
    # Install specific packages
    apk add --update \ 
        git \
        bash \ 
        nano \
        grep \
        sed \
        curl \
        wget \
        tar \
        gzip \
        pcre \
        perl \
        openssh \
        patch \
        patchutils \
        diffutils \     
        docker \
        mariadb-client \
        imap \
        imagemagick@main \ 
        libwebp@main \ 
        libressl@main \
        && \
    
    # Install PHP packages
    apk add --update \
        php7@community \
        php7-opcache@community \
        php7-session@community \
        php7-xml@community \
        php7-ctype@community \
        php7-ftp@community \
        php7-gd@community \
        php7-json@community \
        php7-posix@community \
        php7-curl@community \
        php7-dom@community \
        php7-pdo@community \
        php7-pdo_mysql@community \
        php7-sockets@community \
        php7-zlib@community \
        php7-mcrypt@community \
        php7-mysqli@community \
        php7-sqlite3@community \
        php7-bz2@community \
        php7-phar@community \
        php7-openssl@community \
        php7-posix@community \
        php7-zip@community \
        php7-calendar@community \
        php7-iconv@community \
        php7-imap@community \
        php7-soap@community \
        php7-dev@community \
        php7-pear@community \
        php7-mbstring@community \
        php7-exif@community \
        php7-xsl@community \
        php7-ldap@community \
        php7-bcmath@community \
        && \
            
    # Create symlinks PHP -> PHP7
    ln -sf /usr/bin/php7 /usr/bin/php && \
    
    # Configure php.ini
    sed -i \
        -e "s/^expose_php.*/expose_php = Off/" \
        -e "s/^;date.timezone.*/date.timezone = UTC/" \
        -e "s/^memory_limit.*/memory_limit = -1/" \
        -e "s/^max_execution_time.*/max_execution_time = 300/" \
        -e "s/^post_max_size.*/post_max_size = 512M/" \
        -e "s/^upload_max_filesize.*/upload_max_filesize = 512M/" \
        -e "s@^;sendmail_path.*@sendmail_path = /usr/sbin/sendmail -t -i -S opensmtpd:25@" \
        /etc/php7/php.ini && \

    echo "error_log = \"/var/log/php/error.log\"" | tee -a /etc/php7/php.ini && \
    
    # Configure php log dir
    rm -rf /var/log/php7 && \
    mkdir /var/log/php && \
    touch /var/log/php/error.log && \
    
    # Install composer
    #curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \

    # Purge dev APK packages
    apk del --purge *-dev build-base autoconf libtool && \
    
    # Final cleanup
    rm -rf /var/cache/apk/* /tmp/* /usr/share/man