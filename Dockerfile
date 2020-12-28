FROM romeoz/docker-nginx-php:5.3
RUN apt-get install -y php5-mysql && \
apt-get install -y php5-curl
COPY nginx.conf /etc/nginx/
COPY . /var/www/app/
RUN echo CustomLog "/dev/stdout" access_log