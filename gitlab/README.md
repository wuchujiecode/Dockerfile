# gitlab

## docker 版的 gitlab

1. 环境变量 `GITLAB_HOST` 设置 gitlab 域名
2. 挂载 `config` 文件夹到容器 `/etc/gitlab`   
```
--volume ./gitlab/config:/etc/gitlab
```
3. 挂载 `log` 文件夹到容器 `/var/log/gitlab`
```
--volume ./gitlab/logs:/var/log/gitlab
```
4. 挂载 `data` 文件夹到容器 `/var/opt/gitlab`
```
--volume ./gitlab/data:/var/opt/gitlab
```