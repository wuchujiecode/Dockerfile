#!/bin/bash

# mysql_db_server your docker CONTAINER
docker run --name pma-server -d --link mysql_db_server:db -p 9100:80 phpmyadmin/phpmyadmin
