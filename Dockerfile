FROM ubuntu:14.04

# disable interactive functions
ENV DEBIAN_FRONTEND noninteractive

RUN apt-get install -y apache2  && \
apt-get install -y php5 && \
apt-get install -y php5-mysql && \
apt-get install -y php5-curl && \
rm -rf /var/lib/apt/lists/* && \
rm -rf /var/www/html/index.html
COPY . /var/www/html/
EXPOSE 80
CMD apachectl -D FOREGROUND