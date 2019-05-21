FROM node:latest

WORKDIR /home/app

COPY . ${WORKDIR}

RUN npm install -g cnpm --registry=https://registry.npm.taobao.org \
    && cnpm install

EXPOSE 8080

ENTRYPOINT [ "npm", "start" ]