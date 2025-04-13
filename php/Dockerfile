FROM php:8.2-apache

# ApacheのDocumentRootを public に変更
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# AllowOverride All を追加して .htaccess を有効化
RUN echo '<Directory /var/www/html/public>\n\
    AllowOverride All\n\
</Directory>' >> /etc/apache2/apache2.conf

# ソースコードを配置
COPY . /var/www/html/

# 必要であればmod_rewrite有効化
RUN a2enmod rewrite
