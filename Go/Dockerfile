FROM golang

ADD . /go/src/mylove-api-golang

WORKDIR /go/src/mylove-api-golang

RUN go get github.com/tools/godep

RUN godep restore

RUN go install mylove-api-golang

ENTRYPOINT /go/bin/mylove-api-golang

EXPOSE 34000
