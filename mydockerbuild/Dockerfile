#Pull base image.
FROM php:apache

#Copy index.php file
COPY index.php /var/www/html

# Expose ports.
EXPOSE 80
EXPOSE 443

# Define default command.
CMD ["apache2-foreground"]
