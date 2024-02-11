FROM duyler/php-fpm-zts

#FROM spiralscout/roadrunner as roadrunner
#
## Copy the RoadRunner binary from the roadrunner image to the local bin directory
#COPY --from=roadrunner /usr/bin/rr /usr/local/bin/rr
#
## Run the RoadRunner server command
#CMD rr serve -c .rr.yaml

# Settings composer
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install dependencies
COPY composer.* /var/www/
RUN composer install --no-plugins --no-scripts

# Run the React server
CMD php public/react.php
