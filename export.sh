#!/bin/bash
SERVER_TYPE="staging"

if [ $# -ne 1 ];
then
  SERVER_TYPE="staging"
else
  SERVER_TYPE=$1
fi

# cd src


if [ "$SERVER_TYPE" = "staging" ];
then
  echo "Importing Humanity 360 on Staging"
  sshpass -e scp -rv src/* ${UN_STAGING}:${UN_STAGING_DIR}/gho2015

  # echo "Importing HE Study Flipbook on Staging"
  # sshpass -e scp -rv he-flipbook/* ${UN_STAGING}/he-study-2015

  # echo "Importing WHDT 2015 Flipbook on Staging"
  # sshpass -e scp -rv whdt-flipbook/* ${UN_STAGING}/data-and-trends-2015
fi

if [ "$SERVER_TYPE" = "prod" ];
then
  echo "Importing Humanity 360 on PROD"
  sshpass -e scp -rv src/* ${UN_PROD1}:${UN_PROD_DIR}/gho2015
  sshpass -e scp -rv src/* ${UN_PROD2}:${UN_PROD_DIR}/gho2015

  # echo "Importing HE Study Flipbook on PROD"
  # sshpass -e scp -rv he-flipbook/* ${UN_PROD1}:${UN_PROD_DIR}/gho2015
  # sshpass -e scp -rv he-flipbook/* ${UN_PROD2}:${UN_PROD_DIR}/gho2015

  # echo "Importing WHDT 2015 Flipbook on PROD"
  # sshpass -e scp -rv whdt-flipbook/* ${UN_PROD1}/data-and-trends-2015
  # sshpass -e scp -rv whdt-flipbook/* ${UN_PROD2}/data-and-trends-2015
fi

