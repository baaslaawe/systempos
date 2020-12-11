FROM ubuntu:14.04

RUN apt-get update && \
apt-get install -y apache2  && \
apt-get install -y php5 && \
apt-get install -y php5-mysql && \
apt-get install -y php5-curl && \
apt-get install -y php5-mysqlnd && \
rm -rf /var/lib/apt/lists/* && \
rm -rf /var/www/html/index.html && \
echo "ServerName localhost" >> /etc/apache2/sites-enabled/000-default.conf
COPY . /var/www/html/
EXPOSE 80
CMD sudo apachectl -D FOREGROUND
