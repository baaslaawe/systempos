FROM ubuntu:14.04

RUN apt-get update && \
apt-get install -y apache2  && \
apt-get install -y php5 && \
apt-get install -y php5-mysql && \
apt-get install -y php5-curl && \
apt-get install -y php5-mysqlnd && \
rm -rf /var/lib/apt/lists/* && \
rm -rf /var/www/html/index.html
#echo "ServerName localhost" >> /etc/apache2/sites-enabled/000-default.conf
#echo "<Directory /var/www/html/>" >> /etc/apache2/sites-enabled/000-default.conf && \
#echo "Options Indexes FollowSymLinks MultiViews" >> /etc/apache2/sites-enabled/000-default.conf && \
#echo "AllowOverride All" >> /etc/apache2/sites-enabled/000-default.conf && \
#echo "Order allow,deny" >> /etc/apache2/sites-enabled/000-default.conf && \
#echo "allow from all" >> /etc/apache2/sites-enabled/000-default.conf && \
#echo "</Directory>" >> /etc/apache2/sites-enabled/000-default.conf
COPY . /var/www/html/

RUN a2enmod rewrite
RUN chown -R www-data:www-data /var/www/html
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

EXPOSE 80
CMD sudo apachectl -D FOREGROUND
