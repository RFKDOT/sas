#!/bin/bash
DIR=/tmp/sas_secure_dir
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
