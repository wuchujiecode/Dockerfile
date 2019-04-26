#!/bin/bash

# postgresql-server your docker CONTAINER
docker run --name ppa-server \
-d --link postgresql-server:db \
-p 9200:80 \
-e PHP_PG_ADMIN_SERVER_DESC=PostgreSQL \
-e PHP_PG_ADMIN_SERVER_HOST=db \
-e PHP_PG_ADMIN_SERVER_PORT=5432 \
--restart="always" \
-d dockage/phppgadmin

