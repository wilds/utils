#!/bin/sh
echo $@ >> /tmp/udev.log
prog=$1
shift
$prog $@ &
