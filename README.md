0. install apache with mysql, mysql pdo, mod rewrite, php5.4 (or newer)
1. clone the repo
2. composer.phar install
3. cat >> /etc/apache2/sites-available/healthcenter.conf

    <VirtualHost *:80>
        ServerName healthcenter
        ServerAdmin webmaster@localhost
        DocumentRoot /var/www/healthcenter/public
        SetEnv APPLICATION_ENV "development"

        <Directory /var/www/healthcenter/public>
            DirectoryIndex index.php
            AllowOverride All
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>

4. a2ensite healthcenter.conf
5. a2enmod rewrite
5. service apache2 reload
6. echo "127.0.0.1	healthcare" >> /etc/hosts
7. firefox http://healthcare

