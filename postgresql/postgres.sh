#!/bin/bash

docker run --name postgresql-server \
-e POSTGRES_USER=root \
-e POSTGRES_DB=database \
-e POSTGRES_PASSWORD=123456 \
-p 5432:5432 \
--restart="always" \
-d postgres:latest
