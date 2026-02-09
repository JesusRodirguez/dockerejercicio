FROM php:8.2-apache

# Instalar extensiones necesarias para MySQL
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Habilitar mod_rewrite (útil para MVC)
RUN a2enmod rewrite

# Copiar archivos del proyecto (opcional si usas volumes)
COPY ./app /var/www/html

# Permisos (para evitar errores)
RUN chown -R www-data:www-data /var/www/html

# Puerto por defecto
EXPOSE 80
