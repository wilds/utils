#!/bin/sh

/usr/bin/raspistill -o /rpicopter/image-$1.jpg  -hf -vf -w 1024 -h 768 -ex sports &

