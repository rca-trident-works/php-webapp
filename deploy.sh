#!/opt/homebrew/bin/bash

# semi-automatic deployment script

IS_DEBUG="true"

SOURCE_DIR="/Users/rca/proj/trident/WebApp/source"
HTDOCS_DIR="/Applications/XAMPP/htdocs"

function logger {
    if [[ -v IS_DEBUG ]]; then
        if [ "${IS_DEBUG}" = "false" ]; then
                exit
        fi
    fi

    head=""
    case $1 in
        "err_c")
                head="\e[41m ERROR \e[00m";;
        "err")
                head="\e[31m ERROR \e[00m";;
        "warn")
                head="\e[33m WARN  \e[00m";;
        "info")
                head="\e[34m INFO  \e[00m";;
        "succ")
                head="\e[32m SUCC  \e[00m";;
        "wait")
                head="\e[36m WAIT  \e[00m";;
        *)
            head="$1";;
    esac

    if [[ "$3" = "true" ]]; then
        printf "${head} : ${2}"
        return
    fi
    printf "${head} : ${2}\n"
}

function _deploy {
    logger info "Deploying..."
    \cp -f -r ${SOURCE_DIR}/* ${HTDOCS_DIR}/
    logger "succ" "Deployment completed"
}

function _greet {
    logger "info" "Welcome to the deployment script"
    logger "info" "This script will deploy the source code to the htdocs directory"
    logger "info" "Source directory: ${SOURCE_DIR}"
    logger "info" "Destination directory: ${HTDOCS_DIR}"
}

# Logic
continue=1

_greet

while [ $continue -eq 1 ]; do
    logger wait "Press any key then press enter to deploy again or 'q' to quit: " "true"
    read input
    if [ "$input" = "q" ]; then
        continue=0
    else
        _deploy
    fi
done
