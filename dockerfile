# Usamos PHP 8.2 con Apache
FROM php:8.2-apache

# Instalar extensiones para MySQL
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Copiar tu app (opcional si usas volúmenes)
COPY ./app /var/www/html

# Dar permisos correctos a Apache
RUN chown -R www-data:www-data /var/www/html

# Puerto por defecto de Apache
EXPOSE 80

# Comando por defecto para Apache
CMD ["apache2-foreground"]
