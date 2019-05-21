# Jenkins

## docker 版的 jenkins

### 这里用了 jenkins 最新稳定版最为基础镜像，主要干了两件事：

1. 将账户改为 root, 避免后面不必要的权限问题.
2. 安装 libltdl-dev, 它是为了解决用 jenkins 调用容器外部 docker 命令时发生以下错误的问题.

```
docker: error while loading shared libraries: libltdl.so.7: cannot open shared object file: No such file or directory
```


### 在启动刚刚重写好的 jenkins 镜像的时候还需要挂载三个宿主机的目录到容器内，第一个 jenkins_home 是为了对容器内 jenkins 的所有改动做数据持久化。最后两个目录是为了能让容器内的 jenkins 调用并操作容器外的 docker。


```
$ docker-compose up -d
```