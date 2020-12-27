FROM aspendigital/codeigniter:php5.6-apache
COPY . /var/www/html/
RUN echo CustomLog "/dev/stdout" access_log