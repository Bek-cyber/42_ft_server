service mysql start && mysql < db_init.sql
service php7.3-fpm start
nginx -g 'daemon off;'

bash
