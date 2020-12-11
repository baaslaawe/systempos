FROM ubuntu:14.04

RUN sudo apt-get update && \
sudo apt-get install -y apache2  && \
sudo apt-get install -y php5 && \
sudo apt-get install -y php5-mysql && \
sudo apt-get install -y php5-curl && \
sudo apt-get install -y php5-mysqlnd && \
sudo apt-get install -y libapache2-mod-php5 && \
sudo rm -rf /var/lib/apt/lists/* && \
sudo rm -rf /var/www/html/index.html && \
echo "ServerName localhost" >> /etc/apache2/sites-enabled/000-default.conf



#EXPOSE 80
#

RUN rm -rf /var/www/html 
RUN mkdir -p /var/www/html 
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/lock/apache2 /var/run/apache2 /var/log/apache2 /var/www/html

# Configure apache
RUN a2enmod rewrite
RUN a2enmod headers
RUN a2enmod expires
RUN chmod 755 /usr/sbin/apache2ctl
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

EXPOSE 80
EXPOSE 443

CMD sudo apachectl -D FOREGROUND