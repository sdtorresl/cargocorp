FROM webdevops/php-nginx:7.4
WORKDIR /app
RUN composer install
RUN bin/cake migrations migrate
