FROM node
MAINTAINER Jerry Wu

#将根目录下的文件都copy到container（运行此镜像的容器）文件系统的app文件夹下
ADD . /app/

#cd到app文件夹下
WORKDIR /app

#安装项目依赖包
RUN npm install

#容器对外暴露的端口号
EXPOSE 8080

#容器启动时执行的命令 每个Dockerfile只有一个CMD命令 多了则会覆盖之前的CMD
CMD ["npm", "run","dev"]
