FROM	debian:buster

RUN	apt-get update
RUN	apt-get -y upgrade
RUN	apt-get -y install	wget \
				nginx \
				mariadb-server \
				php7.3 php-mysql php-fpm php-pdo php-gd php-cli php-mbstring \
				vim \
				openssl

WORKDIR	/var/www/html/

RUN 	wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-english.tar.gz
RUN	tar -xf phpMyAdmin-5.0.1-english.tar.gz
RUN	rm -rf phpMyAdmin-5.0.1-english.tar.gz
RUN	mv phpMyAdmin-5.0.1-english /var/www/html/phpmyadmin

RUN	wget https://wordpress.org/latest.tar.gz
RUN	tar -xvzf latest.tar.gz
RUN	rm -rf latest.tar.gz

RUN	openssl req -x509 -nodes -days 365 \
	-subj "/C=RU/ST=Moscow/L=Moscow/O=21school/OU=ubolt/CN=localhost/emailAddress=ubolt@student.21-school.ru" \
	-newkey rsa:2048 \
	-keyout /etc/ssl/private/nginx-selfsigned.key \
	-out /etc/ssl/certs/nginx-selfsigned.crt

COPY    ./srcs/nginx.conf /etc/nginx/sites-available/default
COPY    ./srcs/wp-config.php /usr/share/wordpress/wp-config.php
COPY    ./srcs/db_init.sql .
COPY	./srcs/config.inc.php /var/www/html/phpmyadmin

RUN	cp -r  /usr/share/wordpress /var/www/html

COPY ./srcs/init.sh /usr/local/bin

EXPOSE	80 443

CMD bash init.sh
