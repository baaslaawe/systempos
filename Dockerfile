#FROM ubuntu:14.04
FROM ubuntu:trusty-20191217

RUN sudo apt-get update && \
sudo apt-get install -y apache2  && \
sudo apt-get install -y php5 && \
sudo apt-get install -y php5-mysql && \
sudo apt-get install -y php5-curl && \
sudo apt-get install -y php5-mysqlnd && \
sudo apt-get install -y libapache2-mod-php5 && \
sudo apt-get install -y wget && \
sudo rm -rf /var/lib/apt/lists/* && \
sudo rm -rf /var/www/html/index.html && \
echo "ServerName localhost" >> /etc/apache2/sites-enabled/000-default.conf && \
echo CustomLog "/dev/stdout" access_log

# Instana Agent Setup 
ENV INSTANA_ZONE=CodeIgniter
ENV INSTANA_SERVICE_NAME=CodeIgniter
ENV INSTANA_AGENT_ENDPOINT=ingress-orange-saas.instana.io
ENV INSTANA_AGENT_ENDPOINT_PORT=443
ENV INSTANA_AGENT_KEY=6ETjMarMTE2mpeVrZCKA6w

RUN wget -q -O /tmp/instana-agent-static.deb "https://_:6ETjMarMTE2mpeVrZCKA6w@packages.instana.io/agent/deb/dists/generic/main/binary-amd64/instana-agent-static_20201211-0308_amd64.deb" && \
	dpkg -i /tmp/instana-agent-static.deb && \
	rm -f /tmp/instana-agent-static.deb

COPY configuration-a.yaml /opt/instana/agent/etc/instana
COPY entrypoint.sh /
#RUN chmod 755 /entrypoint.sh



RUN rm -rf /var/www/html 
RUN mkdir -p /var/www/html 
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/lock/apache2 /var/run/apache2 /var/log/apache2 /var/www/html

# Configure apache
RUN a2enmod rewrite
RUN a2enmod headers
RUN a2enmod expires

# Instana enable status
RUN a2enmod status

RUN chmod 755 /usr/sbin/apache2ctl
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

EXPOSE 80
EXPOSE 443

# CMD sudo apachectl -D FOREGROUND
# Cambio a ENTRYPOINT para iniciar agente Instana y Apache
ENTRYPOINT ["bash","/entrypoint.sh"]