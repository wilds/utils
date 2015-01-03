#!/bin/sh
while [ 1 ]; do
sleep 2;
if [ -c /dev/input/js0 ]; then 
	killall avrconfig
	/usr/local/bin/avrcontroller
fi

done

