FROM ubuntu:14.04

RUN sudo apt-get update && \
sudo apt-get install -y apache2  && \
sudo apt-get install -y php5 && \
sudo apt-get install -y php5-mysql && \
sudo apt-get install -y php5-curl && \
sudo apt-get install -y php5-mysqlnd && \
sudo rm -rf /var/lib/apt/lists/* && \
sudo rm -rf /var/www/html/index.html && \
echo "ServerName localhost" >> /etc/apache2/sites-enabled/000-default.conf
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