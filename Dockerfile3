#FROM navidonskis/nginx-php5.6
#RUN sudo apt-get update && \
#sudo apt-get install -y php5-mysql && \
#sudo apt-get install -y php5-curl && \
#sudo apt-get install -y php5-mysqlnd && \
#sudo apt-get install -y libapache2-mod-php5 &&\
#RUN echo CustomLog "/dev/stdout" access_log
#RUN grep "listen =" /etc/php/[~PHP-VERSION~]/fpm/pool.d/www.conf $$ 

#COPY . /var/www/
#COPY nginx.conf /etc/nginx/nginx.conf
#RUN rm /etc/nginx/sites-enabled/default
#RUN /etc/init.d/php5.6-fpm restart && /etc/init.d/nginx start
#RUN /etc/init.d/nginx start
FROM vikas027/alpine-nginx-php
RUN ln -sf /dev/stdout /var/log/nginx/access.log \
    && ln -sf /dev/stderr /var/log/nginx/error.log
#FROM codeigniter/nginx-php-fpm
COPY default.conf /etc/nginx/conf.d/
COPY . /usr/share/nginx/html
#RUN sudo apt-get install software-properties-common && \
#RUN sudo rm -rf /var/www/app/index.php
#sudo add-apt-repository ppa:ondrej/php && \
