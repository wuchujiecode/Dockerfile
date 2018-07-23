FROM python:2.7

ADD . /usr/src/project_name

WORKDIR /usr/src/project_name

RUN pip install --no-cache-dir -r requirements.txt -i http://mirrors.aliyun.com/pypi/simple/ --trusted-host mirrors.aliyun.com

EXPOSE 8000

ENTRYPOINT ["python", "app.py", "--address=0.0.0.0", "--port=8000"]

