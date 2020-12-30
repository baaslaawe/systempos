FROM romeoz/docker-nginx-php:5.6
RUN apt-get install -y php5.6-mysql && \
apt-get install -y php5.6-curl
COPY app.conf /etc/nginx/sites-enabled/
COPY php.ini /etc/php/5.6/fpm/
COPY php.ini /etc/php/5.6/cli/
COPY nginx.conf /etc/nginx/
COPY . /var/www/app/
RUN echo CustomLog "/dev/stdout" access_log && \
chmod 0700 -R /var/www/app/application/cache/
#echo "fs-131882ba.efs.us-west-2.amazonaws.com:/up/ /mnt/up nfs4 nfsvers=4.1,rsize=1048576,wsize=1048576,hard,timeo=600,retrans=2,_netdev,noresvport 0 0" >> /etc/fstab