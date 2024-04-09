#!/bin/bash
# This file should be ran as a service by hosting.service
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"
cd $DIR
./php artisan discord:run
