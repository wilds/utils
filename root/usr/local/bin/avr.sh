#!/bin/sh
DIR=/avr
while [ 1 ]; do
sleep 2;
FILES=`ls $DIR`
for f in $FILES
do
	echo "Processing $DIR/$f" > /tmp/avr
	avrdude -c linuxspi -p m328 -P /dev/spidev0.0 -F -U flash:w:$DIR/$f
	rm -f $DIR/$f
done

done

