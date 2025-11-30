# Imagen oficial de Apache con soporte PHP
FROM php:8.2-apache

# Copiar todos los archivos del proyecto al servidor
COPY . /var/www/html/

# Dar permisos a Apache
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto donde correrá Apache
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]
