#!/usr/bin/env sh
set -e

export BACKEND_ADDRESS="php-fpm:9000"

if [ -z "$RESOLVER_ADDRESS" ]; then
  export RESOLVER_ADDRESS="$(grep nameserver /etc/resolv.conf | grep -v '#' | head -n 1 | cut -d ' ' -f 2)"
fi

envsubst '${RESOLVER_ADDRESS} ${BACKEND_ADDRESS}' < /etc/nginx/sites-available/default.conf.template > /etc/nginx/sites-available/default.conf

exec "$@"
