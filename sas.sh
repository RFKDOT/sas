#!/bin/bash
DIR=/tmp/sas_secure_dir
PROJECT=/var/www/proyecto

if test -f $DIR/PageSpeedRemoveCache
then
date
    echo PageSpeedRemoveCache
    rm -vf $DIR/PageSpeedRemoveCache
    rm -vf $DIR/ApacheRestart
    rm -r /var/cache/mod_pagespeed/*
    /usr/sbin/service apache2 restart
    echo .
fi


if test -f $DIR/ApacheRestart
then
date
     echo ApacheRestart
     rm -vf $DIR/ApacheRestart
     /usr/sbin/service apache2 restart
     echo .
fi

if test -f $DIR/GitPull
then
date
     echo GitPull
     rm -vf $DIR/GitPull
     cd $PROJECT
     /usr/bin/git pull
     echo .
fi
