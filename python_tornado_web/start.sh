#!/bin/bash

docker build -t project-image:v1 .
docker run --name project-server \
-v /usr/src/project-name/static \
--link mysql:mysql \
--link redis:redis \
-p 12000:8000 \
-d project-image:v1 
