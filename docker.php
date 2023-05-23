 

Docker 

Docker is an open platform for developing, shipping, and running applications




container bnate hai 

dev env to prod le jana h to 
contanier utha ke le jayenge 
image bnate hai hm use le jayenge



Durgesh 
https://www.youtube.com/watch?v=X3Wtjwu0vBI


 Docker :- 

 sudo apt install docker.io 

 docker --version 


 sudo systemctl status docker 

 sudo systemctl enable --now docker 



 sudo docker run hello-world

 sudo docker images

 ########################################
 video 3---------------------------  

 1) 
$ docker --help

 1) Management Commands: parent  module
 2) Commands: child module

    like docker container/image create 


2) $ docker container ls or docker ps
 docker image ls  
 Image se container me run krta hai 

 [  image ke under setup file ,container ek application h ise kisi chij ki jarurt ni hai
   apne bta rkha hai ye node version  ye php version , ye ubuntu ya koi or celtos hona chahiye 

   apna bs CPU ,hardware devices, AM , storage, space  use krega system ka 
 ]

 container :- instance of images 

 dockerfile 
docker image  : setof readonlyfile can not be change (min contain some necssary set of file )
docker container  : class or container is object 

docker hub 

centos + php + oracle  ,

ubuntu + mongodb+ mysql + node js 
java + centos + mysql  + code 



--------------------------------------
=========================================  
video 4 
docker desktop 

1) 
$ docker --help

 1) Management Commands: parent  module
 2) Commands: child module

    like docker container/image create 


2) $ docker container ls or docker ps
 docker image ls  

3) run container 

docker container run hello-world 

4) list container  running 

docker container ls 
or 
previous running container list 

docker container ls -a

5) download image if not exist while running container


sudo docker run hello-world 
or 

docker container run ubuntu

or 
docker container run nginx

6) then run container 
docker container run ubuntu ls

or 
docker container run ubuntu cat /etc/os-release 


7) docker container run ubuntu sleep 30 

8) remove container 

$ docker container rm CONATINER_ID /NAME

(CONATINER_ID)  unique id 

or remove multiple container 

$  docker container rm CONATINER_ID1  CONATINER_ID2
 

 
9) remove all container 
docker container ls -aq 

docker container rm $(docker container ls -aq)
or 
docker container stop $(docker container ls -aq)
 

10) rm image or add image 
(can not remove if any container use that's image)
docker image rm ubuntu

add image 

docker run ubuntu

or check 
docker image ls
 

11) docker container run ubuntu sleep 30

or new tab check 

docker ps / docker container ls -a
 

12) background proccess container running  (d detach)

docker container run -d ubuntu sleep 30


===============================================================================================  
Video 5 


1) 
docker run redis     :- first check download or not then download from docker hub 

2) docker container run redis  : same as above 

3) if image use in docker can not be remove  

docker image rm ubuntu

docker container ls -a

4) docker kill containerID 
or stop 
stop also kill after 10 sec 

5) docker start 
docker container start 8b

restart 
docker container restart 8b


6) go to inside container 

docker container run -it redis
or 
docker container run -it ubuntu  :- isme kuch bhi krolo check krlo

if you out use ctrl + D 
but container also stop check :- 
docker ps 

use 
ctrl + P + Q  

7) container detail 
docker container inspect CON_ID

like IPAddress, container all details
 
8) checks logs  

first run redis container 
docker container run redis

docker container logs bf

9) check proccess runing inside container 

docker container top bf

10) check container use memory , cpu use 

docker container stats

11) set name in container 

docker container run -d --name anyName  ubuntu

then check list 
docker container ls -a

12) rename container 
first run redis container if not 
docker container run redis

docker container rename 48 kkk

docker ps  (can not be same name)




===========================================  
video 6 

docker port mapping 

1) 
http://172.17.0.2/

docker container inspect CID


2) ifconfig 
192.168.0.105 

3) 
first check both url 
check both your 
http://192.168.0.105:9081/
http://172.17.0.2/

docker container run -d -p 9081:80 nginx

check both your 
http://192.168.0.105:9081/
http://172.17.0.2/
 
4)  IF

docker stop  containerID 
or stop   
docker container start 8b 

docker container rm $(docker container ls -aq)
or 
docker container stop $(docker container ls -aq)

5) Inside container 

docker container run -it ubuntu

run 
docker ps   (not found bcz no docker inside this also check id)

Quit 
use 
ctrl + P + Q 

again goto container use 

docker container  exec -it 8a /bin/bash
ls
-    - -  - - - - - - 
or again create new container 

docker container run -it ubuntu (proccess repeat)
ls


6) attach goto that container like 

if not running 
docker container run -it ubuntu 
or 
docker container run -it nginx 

6.1) docker container attach nginxContainerID
 then check logs 
http://172.17.0.2/    hit on browser

6.2) same for ubuntu
 docker container attach ubuntuConatinerId 
 then check root@conatiner id or run ls 


 7) wait, pause, unpause, prune, port
7.1) wait 
 docker container wait 8a

  IF:- docker container run -d ubuntu 
 docker container kill  8a


 7.2) pause & unpause  (pause nginx then run http://172.17.0.2/ can not be accessed)
 docker container pause 7

 docker container unpause 7


 7.3) prune & port 
 docker container prune (stop all not usable container)

 also same 
 [
  docker container run -d ubuntu 
  docker container stop 8
  ]
 docker container ls -aq 

docker container rm $(docker container ls -aq)

or remove all first stop all like 
docker container stop $(docker container ls -aq) then 
docker container rm $(docker container ls -aq)


7.4) docker container run -d -p 9081:80 nginx
then check port 
docker container port 9c


======================================== 

video 7 
   
1)  
docker container create nginx
or for start  
docker container start CID

2) diff  
docker container diff 68 

take image then create container but after that some file open write append like log  
or 
docker container run -it ubuntu

open other tab check 
docker container  diff  2    (no diff)

then goto 1 tab create file  or dir 

cd /tmp/
ls 
mkdir test    [ goto tab2 run docker container  diff  CID :-- check diff]
touch new1.txt 

3) copy file in container 

cd /home/vishnu/Downloads
docker container cp books.json 279dbdee8493:/tmp/

then check inside container /tmp file 

docker container attach CID
or 
docker container exec -it CID /bin/bash 

4) Export/ Import docker container 

1) export 
cd /home/vishnu/Downloads
docker container export 279dbdee8493 > p1.tar
docker container export 279dbdee8493 -o p1.tar

2) import 
docker image ls (first check image list)

docker image import p1.tar project_code

then check 
docker image ls

docker  container run  -it project_code /bin/bash
 
cd /tmp/    (check your file like books.json which created before container)


3) own system create docker image from container 

docker container commit --author "code improve" -m "demo test"  CID image_name


docker container commit --author "code improve" -m "demo test"  279dbdee8493 image_namep
or 

docker container run -it my_test
cd /tmp. (check file)


================================================================= 

video 8 

1) docker image save ubuntu > ubuntu.tar 

2) docker image history ubuntu

3) remove image 

docker image rm ubuntu

4) docker image load <  uu.tar

132


docker save
   will indeed produce a tarball,
    but with all parent layers, and all tags + versions.

docker export 
  does also produce a tarball, but without any layer/history.


docker import
 creates one image from one tarball 
 which is not even an image (just a filesystem you want to import as an image)

docker load 
creates potentially multiple images from a tarred repository 
(since docker save can save multiple images in a tarball).


+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
============================================================= 

video 9 

16 - 21


1)  dockerfiles
  - abhi tk image se container bnare the ya import/export krke image lete the
    tb uska container bnare the  
  - ab dockerfile se hi image bnayenge :- dockerfiles 
  -  layer architecture follow 


  2) vim Dockerfile 
  From hello-world:latest  

  3)
  docker image ls
  docker image build -t customimage:12 . 
  docker image ls


  4) dockerfile 
  From ubuntu:latest  

  docker container run -it cicode:12 
  then check tmp file   
  if not then add line in docker file 
 --------------------------------------------------
  From ubuntu:latest 
  RUN mkdir /tmp/codeimprove-test

  4.1)  docker image ls
  docker image build -t customproject:12 .

  4.2) docker container run -it customproject:12
  4.3) check file cd /tmp/ 
    codeimprove-test file exist 

---------------------------------------  


---------------------------------------------------------

  6.1) Multi layer architecture
  From ubuntu:latest  
  RUN apt-get update && apt-get install -y git

  6.2) docker container run -it gym:1

  cd /tmp/ 
  git init 
  
  or 

  docker container run -it ubuntu
cd /tmp/ 
git status (not found git)

  ctrl + p + Q  
  docker container attach nginxContainerID
------------------------------------------------------------

5) 
1) Dockerfile

From ubuntu:latest 
RUN mkdir /tmp/codeimprove-test
RUN mkdir /tmp/codeimprove-test2
RUN mkdir /tmp/codeimprove-test3
RUN mkdir /tmp/codeimprove-test5
RUN mkdir /tmp/codeimprove-test6

2) docker image build -t p1:1 .
3) docker container run -it p1:1
   cd /tmp/ 

   if change in RUN first file then it will not take command from cache

   change dockerfile like 

From ubuntu:latest 
RUN mkdir /tmp/codeimprove-extra
RUN mkdir /tmp/codeimprove-test
RUN mkdir /tmp/codeimprove-test2
RUN mkdir /tmp/codeimprove-test3
RUN mkdir /tmp/codeimprove-test5
RUN mkdir /tmp/codeimprove-test6
 
so always add line in last 
-----------------------------------------------------------------

7) LABEL 
  1)
From ubuntu:latest 
LABEL name="code improve"
LABEL type="youtube"
  

2) docker image build -t c1:1 .
3) docker image inspect c1:1
  see in Labels key your "type" & "name"

-----------------------------------------------
8) ENV 

1)
From ubuntu:latest 
LABEL name="code improve"
LABEL type="youtube"
ENV USER_NAME code123
ENV PASSWORD code<>>?>?9898


2) docker image build -t c1:2 .

3) docker container run -it c1:2
4) env 
  then check env variable names 

-----------------------------------------------
9) WORKDIR 
for no cache use  --no-cache
docker image build --no-cache -t p1:5 .


1) dockerfile 

From ubuntu:latest 
LABEL name="code improve"
LABEL type="youtube"
ENV USER_NAME code123
ENV PASSWORD code<>>?>?9898
RUN ls
RUN cd /bin
RUN ls 

2) docker image build -t c1:2 .

Not show bin list now use dockerfile 

From ubuntu:latest 
LABEL namess="code improves"
LABEL name="code improves"
LABEL type="youtube"
ENV USER_NAME code123
ENV PASSWORD code<>>?>?9898

RUN ls
RUN cd /bin
RUN ls 

RUN cd /bin && ls

WORKDIR /bin
RUN ls 

3) docker image build -t c1:5 .
4) docker container run -it c1:2

  [for single line use && like RUN cd /bin && ls]


------------------------------------------------------  

10) COPY & ADD 

1) dockerfile 
From ubuntu:latest 
LABEL namess="code improves"
LABEL name="code improves"
LABEL type="youtube"
ENV USER_NAME code123
ENV PASSWORD code<>>?>?9898
 
COPY old /tmp/

2) docker image build -t t1:5 .
docker container run -it c1:2


3) ADD  (same but after extract file then copy data)
 
COPY src.tar.xz /tmp/
or 
 
ADD src.tar.xz /tmp/

------------------------------------------------------  

11) CMD 

docker file 



From ubuntu:latest 
LABEL namess="code improves"
LABEL name="code improves"
LABEL type="youtube"
ENV USER_NAME code123
ENV PASSWORD code<>>?>?9898
  
RUN apt-get update && apt-get install -y git
CMD ["git","--version"]


1) docker image build -t ok:1 .
2) docker container run -it ok:1

used CMD only one if you will use twice
 it will run only first run & out then second run & show value


 --------------------------------------------------------------- 

12) EXPOSE  docker file 

From ubuntu:latest 
LABEL namess="code improves"
LABEL name="code improves"
LABEL type="youtube"
ENV USER_NAME code123
ENV PASSWORD code<>>?>?9898 
EXPOSE 22 


1) docker image build -t ok:1 .
2) docker container run -it ok:1


or multiple port use like 
EXPOSE 22 9001

----------------------------------------------  
13) ENTRYPOINT

From ubuntu:latest 
LABEL namess="code improves"
LABEL name="code improves"
LABEL type="youtube"
ENV USER_NAME code123
ENV PASSWORD code<>>?>?9898
  
RUN apt-get update && apt-get install -y git
ENTRYPOINT ["git"]
CMD ["--version"]

1) docker image build -t ok:1 .
2) docker container run -it ok:1


==============================================================================================================
 Video 10 +++++++++++++++++++++++++++++++++++++++++++++++++++++=


 FROM node:10-alpine
 
WORKDIR /home/node/app 

RUN npm install

COPY . .

EXPOSE 8083

CMD [ "node", "app.js" ]

 

1) docker image build -t projects:1 .
2) docker container run -it projects:1 
3) docker inspect 142




 https://btholt.github.io/complete-intro-to-containers/build-a-nodejs-app



 ===================================================== 
 video 11 
Volume 
 1)  
 data gyb ho jaye apki user se pdf file ya doc pan card ye sb upload kraye hai 
ya mysql db me data store kiya hai vo ud jaye then 

1) Two method 
  1.1) volume (manage by docker)
  1.2) bind mount  (folder ka specific location usko access krke sari image file vahi jayengi)
  1.3) tmpfs mount (docker ki write layer me jata hai pr hm chahte ki alg jgh jake write ho memory me ye sb ap age ki video me dikh jayega)

2)   docker image ls 

docker container run -it -v test:/tmp/  hello-world


3) docker image inspect mysql
4) docker container run -d --name mysqlpro -e MYSQL_ALLOW_EMPTY_PASSWORD=true mysql
or 
docker container run -d --name mysqlpro -e MYSQL_ALLOW_EMPTY_PASSWORD=true mysql:5.7
 

5) docker ps
6) docker container exec -it 9f bash
  mysql 
  show database;
  create database ci;

  7) 
  "/var/lib/mysql",

  8) 
  docker volume ls

  9) create again image 

  docker container run -d --name mysqlpro2  
  -v 62c4d61ae36469dae33c6dba852400589ab1cba4c851e5ab74b90f5d3ab21633:/var/lib/mysql mysql:5.7


  docker container run -it -v test:/tmp/  hello-world


  10) remove 
  docker volume rm test



  62c4d61ae36469dae33c6dba852400589ab1cba4c851e5ab74b90f5d3ab21633

- MYSQL_ROOT_PASSWORD
    - MYSQL_ALLOW_EMPTY_PASSWORD
    - MYSQL_RANDOM_ROOT_PASSWORD


==========================================================
--------------------------------------------------------------  
video 12 


1) docker container run -d -p 9081:80 nginx

check both your 
http://192.168.0.105:9081/
http://172.17.0.2/

2) 
/var/www/html/code/1/doc-project

docker container run -d -v "/var/www/html/code/1/doc-project":/usr/share/ngnix/html  -p 9081:80 nginx


docker container  exec -it 8a bash  


3) 
docker container run -it -v "/var/www/html/code/1/2":/tmp ubuntu



=========================================================== 

video 13 Docker composer 

1) sudo curl -L https://github.com/docker/compose/releases/download/1.29.2/docker-compose-`uname -s`-`uname -m` -o /usr/local/bin/docker-compose
2) sudo chmod +x /usr/local/bin/docker-compose
3) docker-compose --version



composer is a tools for defining & running multi container docker application.






























FROM node:10-alpine

RUN mkdir -p /home/node/app/node_modules && chown -R node:node /home/node/app

WORKDIR /home/node/app

COPY package*.json ./

USER node

RUN npm install

COPY --chown=node:node . .

EXPOSE 8080

CMD [ "node", "app.js" ]


https://www.youtube.com/watch?v=rC0Yh13y-wA&list=PL6XT0grm_Tfje2ySztzdhp0HmCjVj5P4z&index=5




