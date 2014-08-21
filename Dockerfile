FROM centurylink/apache-php:latest
MAINTAINER CentruyLink

# Install packages
RUN apt-get update && \
 DEBIAN_FRONTEND=noninteractive apt-get -y upgrade && \
 DEBIAN_FRONTEND=noninteractive apt-get -y install supervisor pwgen && \
 apt-get -y install mysql-client

# Download Wordpress into /app
RUN rm -fr /app && mkdir /app && \
 curl -O http://joomlacode.org/gf/download/frsrelease/19665/160049/Joomla_3.3.3-Stable-Full_Package.zip && \
 unzip Joomla_3.3.3-Stable-Full_Package.zip -d /app  && \
 rm Joomla_3.3.3-Stable-Full_Package.zip

# Add wp-config with info for Wordpress to connect to DB
ADD wp-config.php /app/wp-config.php
RUN chmod 644 /app/wp-config.php

# Fix permissions for apache
RUN chown -R www-data:www-data /app

# Add script to create 'joomla' DB
ADD run.sh run.sh
RUN chmod 755 /*.sh

EXPOSE 80
CMD ["/run.sh"]