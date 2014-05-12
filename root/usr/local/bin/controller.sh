#!/bin/sh
while [ 1 ]; do
sleep 2;
if [ -c /dev/input/js0 ]; then 
	rm -rdf /var/log/flight*.log
	/usr/local/bin/controller
fi

done

