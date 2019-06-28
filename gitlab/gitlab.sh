docker run \
    --publish 443:443 --publish 80:80 --publish 22:22 \
    --name gitlab-server \
    --volume ./gitlab/config:/etc/gitlab \
    --volume ./gitlab/logs:/var/log/gitlab \
    --volume ./gitlab/data:/var/opt/gitlab \
    -d --restart=always -e 'GITLAB_HOST=gitlab.jerry.com'
    gitlab/gitlab-ce