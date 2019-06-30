docker run \
    --publish 10443:443 --publish 10080:80 --publish 10022:22 \
    --name gitlab-server \
    --volume $(pwd)/gitlab/config:/etc/gitlab \
    --volume $(pwd)/gitlab/logs:/var/log/gitlab \
    --volume $(pwd)/gitlab/data:/var/opt/gitlab \
    -d --restart=always -e 'GITLAB_HOST=gitlab.jerrywu.com' \
    gitlab/gitlab-ce