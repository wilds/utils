#!/bin/sh
DIR=/avr
while [ 1 ]; do
sleep 2;
FILES=`ls $DIR`
for f in $FILES
do
	RET=`lsof | grep $DIR/$f | wc -l`
	if [ "$RET" -eq "0" ]; then
		killall avrspi
		echo "Processing $DIR/$f" > /tmp/avr
		avrdude -c linuxspi -p m328 -P /dev/spidev0.0 -F -U flash:w:$DIR/$f 2>&1 /tmp/avr
		rm -f $DIR/$f
		/usr/local/bin/avrspi -d 
	fi
done

done
