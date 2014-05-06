#!/bin/sh
while [ 1 ]; do
sleep 2;
if [ -c /dev/input/js0 ]; then 
	/controller
fi

done

