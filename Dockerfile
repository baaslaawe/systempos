FROM navidonskis/nginx-php5.6
RUN sudo apt-get update && \
sudo apt-get install -y php5-mysql && \
sudo apt-get install -y php5-curl && \
sudo apt-get install -y php5-mysqlnd && \
sudo apt-get install -y libapache2-mod-php5

COPY . /var/www/