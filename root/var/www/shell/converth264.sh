#!/bin/sh

ffmpeg -r 25 -i "$1" -vcodec copy -b:v 5M "$1".mp4 # 2>&1

