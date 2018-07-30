#!/bin/bash

docker run --name nginx-mylove \
--link mylove-api-golang:mylove-api-golang \
--link mylove-h5:mylove-h5 \
-p 80:80 \
-d nginx-mylove:v1
