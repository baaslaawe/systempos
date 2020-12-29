FROM romeoz/docker-nginx-php:5.5
RUN apt-get install -y php5.5-mysql && \
apt-get install -y php5.5-curl
COPY app.conf /etc/nginx/sites-enabled/
COPY php.ini /etc/php/5.5/fpm/
COPY php.ini /etc/php/5.5/cli/
COPY nginx.conf /etc/nginx/
COPY . /var/www/app/
RUN echo CustomLog "/dev/stdout" access_log
#