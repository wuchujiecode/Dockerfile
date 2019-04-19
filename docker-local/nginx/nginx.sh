#!/bin/bash

docker run --name nginx-server \
--restart=always \
-v $(pwd)/nginx-conf:/etc/nginx/conf.d/ \
--link pma-server:pma-server \
-p 80:80 \
-d nginx
