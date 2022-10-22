# yii-php
Link: https://www.yiiframework.com/doc/guide/2.0/en/intro-yii

1) install PHP
2) install Composer package manager. Keep updated with command, "composer self-update".
3) install yii using composer
4) to run PHP web server: "php yii serve 0.0.0.0" (for allowing remote connection, otherwise can remove ip)
5) web app can run with apache, nginx HTTP server or IIS
6) "web" dir files can be accessed directly via HTTP
7) <br> ![request-lifecycle](https://user-images.githubusercontent.com/8523768/191619252-575a4520-73e0-44d6-8500-a5185c571500.png)
8) Create/Update httpd.conf
9) Entry script is in web/index.php

How to connect to Virtuxbox Ubuntu using PuTTy ssh:
1) VirtualBox > network settings for the VM > advanced > port forwarding > add new rule
2) In rule, host IP set as 127.0.1.1, host port as 22, guest ip as the internal ip of guest (ubuntu VM. command "ip a"), guest posrt as 22
3) Go to putty gen, generate a rsa key. Save the public key to a folder
4) Go to putty, ssh> auth> private key file browse to this path and add. Then go to session add host as 127.0.1.1 and port as 22.

To install oci8:
1) Follow steps in document to download the dependencies
2) Skip set 1, https://gist.github.com/syahzul/41fb57bd5aa3ba9b2eb00b264d53843c
3) Folder structure for instant client is basic-unzipped > sdk folder from sdk unzipped and same level sqlplus executable

Downgrade from PHP8.1 to PHP8.0:
1) https://medium.com/@skounis/downgrade-php8-1-to-php8-0-or-php7-4-on-ubuntu-22-04-2fab4a6a3be3
