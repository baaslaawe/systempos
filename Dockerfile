FROM navidonskis/nginx-php5.6
COPY . /var/www/
RUN echo CustomLog "/dev/stdout" access_log