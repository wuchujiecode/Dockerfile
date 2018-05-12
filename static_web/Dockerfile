# Version: 0.0.1
FROM ubuntu:14.04
MAINTAINER Jerry Wu "wuchujie123@gmail.com"
#apt-get源 使用163的源
RUN mv /etc/apt/sources.list /etc/apt/sources.list.bak && \
    echo "deb http://cn.archive.ubuntu.com/ubuntu/ trusty main restricted universe multiverse" >/etc/apt/sources.list && \
    echo "deb http://cn.archive.ubuntu.com/ubuntu/ trusty-security main restricted universe multiverse" >>/etc/apt/sources.list && \
    echo "deb http://cn.archive.ubuntu.com/ubuntu/ trusty-updates main restricted universe multiverse" >>/etc/apt/sources.list && \
    echo "deb http://cn.archive.ubuntu.com/ubuntu/ trusty-backports main restricted universe multiverse" >>/etc/apt/sources.list
RUN apt-get update && apt-get install -y nginx
RUN echo "Hi, I am in your container" \
    >/usr/share/nginx/html/index.html
EXPOSE 80