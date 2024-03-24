# mild
php web framework

# install nginx Linux
Установка nginx<br>
	`sudo apt-get update`<br>
        `sudo apt-get install nginx`<br>
Проверка nginx<br>
	`sudo nginx`<br>
Проверка работы gninx через браузер<br>
	`http://localhost:8080`<br>
нужно изменить порт 8080 на 80 в конфигурации nginx: /etc/nginx/nginx.conf<br>
проверка<br>
	`http://localhost`<br>
Создадим собственный файл конфигурации<br>
	`touch /etc/nginx/sites-available/_localhost.conf` <br>

-----------------------------------------------------------------------------------------------------

Установка dnsmasq<br>
	`sudo apt-get update`<br>
        `sudo apt-get install dnsmasq`<br>
Настройка dnsmasq для того, чтобы получить свой локальный домен верхнего уровня (.lc)<br>
        `echo 'address=/.lc/127.0.0.1' | sudo tee -a /etc/dnsmasq.conf`<br>
        `sudo systemctl restart dnsmasq`<br>
        `sudo mkdir -v /etc/resolver`<br>
        `sudo touch /etc/resolver/lc`<br>
        `sudo bash -c 'echo "nameserver 127.0.0.1" >> /etc/resolver/lc'`<br>
Проверка настройки dnsmasq<br>
	`ping test.lc`<br>



# install nginx Mac OS
Установка nginx<br>
	`brew install nginx`<br>
Проверка nginx<br>
	`sudo nginx`<br>
Проверка работы gninx через браузер<br>
	`http://localhost:8080`<br>
нужно изменить порт 8080 на 80 в конфигурации nginx: /opt/homebrew/etc/nginx/nginx.conf<br>
проверка<br>
	`http://localhost`<br>
Создадим собственный файл конфигурации<br>
	`touch /opt/homebrew/etc/nginx/servers/_localhost.conf` <br>

-----------------------------------------------------------------------------------------------------

Установка dnsmasq<br>
	`brew install dnsmasq`<br>
Настройка dnsmasq для того, чтобы получить свой локальный домен верхнего уровня (.lc)<br>
        `echo 'address=/.lc/127.0.0.1' > /opt/homebrew/etc/dnsmasq.conf`<br>
	`sudo brew services start dnsmasq`<br>
	`sudo mkdir -v /etc/resolver` <br>
	`sudo touch /etc/resolver/lc` <br>
	`sudo /bin/bash -c 'echo "nameserver 127.0.0.1" >> /etc/resolver/lc'`<br>
Проверка настройки dnsmasq<br>
	`ping test.lc`<br>

# nginx conf
```
server {
        listen 80;
        server_name mild.lc;
        root /opt/homebrew/var/www/mild;
        index index.html index.php;


        location / {
                try_files $uri $uri/ /index.php?url=$uri;
        }

        location ~ \.php$ {
                fastcgi_pass 127.0.0.1:9000;
                fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
                include fastcgi_params;
        }

}
```
