#FROM 367794562090.dkr.ecr.us-west-2.amazonaws.com/pos-vendy
FROM romeoz/docker-nginx-php:5.6
RUN apt-get install -y php5.6-mysql && \
apt-get install -y php5.6-curl && \
mkdir /var/www/app/uploads

COPY app.conf /etc/nginx/sites-enabled/
COPY php.ini /etc/php/5.6/fpm/
COPY php.ini /etc/php/5.6/cli/
COPY nginx.conf /etc/nginx/
COPY . /var/www/app/
RUN echo CustomLog "/dev/stdout" access_log && \ 
chmod 0700 -R /var/www/app/uploads
