#!/bin/bash

docker run --name mysql-server \
-v $(pwd)/conf.d:/etc/mysql/conf.d \
-v $(pwd)/data:/var/lib/mysql \
-e MYSQL_ROOT_PASSWORD=123456 \
-p 3307:3306 \
-d mysql:5.5
