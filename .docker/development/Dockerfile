FROM jellybellydev/ci-cd-theory-into-practice:latest

RUN echo "xdebug.mode=debug" | tee -a /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.start_with_request" | tee -a /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.discover_client_host=0" | tee -a /usr/local/etc/php/conf.d/xdebug.ini \
    && export XDEBUG_SESSION=docker
