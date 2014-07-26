#!/bin/sh

/usr/bin/raspivid -o video-$1.h264 -vf -hf -t 20000 -w 800 -h 600 &

