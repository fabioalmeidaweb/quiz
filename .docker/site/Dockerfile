FROM php:7.2-apache
RUN apt-get update
RUN apt-get install -y curl libmcrypt-dev libc6 libstdc++6
RUN apt-get update
RUN apt-get install -y libcurl4-gnutls-dev libexpat1-dev gettext libz-dev libssl-dev git zip unzip locales

RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen && locale-gen

RUN docker-php-ext-install pdo pdo_mysql
RUN pecl install redis-4.0.0 && docker-php-ext-enable redis

ADD apache2.conf /etc/apache2/sites-enabled/000-default.conf
ADD site.conf /etc/apache2/sites-enabled/site.conf
ADD cert1.crt /var/www/cert1.crt
ADD cert1.key /var/www/cert1.key

RUN a2enmod rewrite
RUN a2enmod ssl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/quiz

CMD ["apache2-foreground"]