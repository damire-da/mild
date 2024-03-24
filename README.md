# mild
php web framework

# nginx
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
