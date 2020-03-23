#!/bin/bash
#
# @package    Material Dashboard Yii2
# @author     CodersEden <hello@coderseden.com>
# @link       https://www.coderseden.com
# @copyright  2020 Material Dashboard Yii2 (https://www.coderseden.com)
# @license    MIT - https://www.coderseden.com
# @since      1.0

# default values for command line variables
ACTION=""

# arguments init
for i in "$@"
    do
        case $i in
            up)
            ACTION="up"
            shift # past argument=value
            ;;
            down)
            ACTION="down"
            shift # past argument=value
            ;;
            remove)
            ACTION="remove"
            shift # past argument=value
            ;;
            *)
            # unknown option
            ;;
        esac
    done

if [[ "$ACTION" = "up" ]]; then
    docker-compose up --build 
fi

if [[ "$ACTION" = "down" ]]; then
    docker kill $(docker ps -q)
fi

if [[ "$ACTION" = "remove" ]]; then
    docker rm -f $(docker ps -q -a)
fi