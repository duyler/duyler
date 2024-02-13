FROM spiralscout/roadrunner as roadrunner

FROM duyler/php-fpm-zts

# Copy the RoadRunner binary from the roadrunner image to the local bin directory
COPY --from=roadrunner /usr/bin/rr /usr/local/bin/rr

# Run the RoadRunner server command
CMD rr serve -c .rr.yaml

# Run the ReactPHP server
#CMD php runtime/react.php
