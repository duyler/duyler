FROM duyler/php-fpm-zts

#FROM spiralscout/roadrunner as roadrunner
#
## Copy the RoadRunner binary from the roadrunner image to the local bin directory
#COPY --from=roadrunner /usr/bin/rr /usr/local/bin/rr
#
## Run the RoadRunner server command
#CMD rr serve -c .rr.yaml

# Run the React server
CMD php public/react.php
