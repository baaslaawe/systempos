FROM romeoz/docker-nginx-php:5.6
RUN apt-get install -y php5.6-mysql && \
apt-get install -y php5.6-curl
COPY app.conf /etc/nginx/sites-enabled/
COPY nginx.conf /etc/nginx/
COPY . /var/www/app/
RUN echo CustomLog "/dev/stdout" access_log
#