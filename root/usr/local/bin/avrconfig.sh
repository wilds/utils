#!/bin/sh
while [ 1 ]; do
sleep 2;
if [ ! -c /dev/input/js0 ]; then 
	/usr/local/bin/avrconfig -v 0
fi

done

