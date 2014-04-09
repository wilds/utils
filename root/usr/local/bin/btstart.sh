#!/bin/sh

if [ $1 != 00:00:00:00:00:00 ]; then
       echo $1 > /var/local/last_btaddress
fi 

#/usr/bin/sixad -s &
/sbin/modprobe uinput
/usr/sbin/sixad-bin 0 0 0

/usr/sbin/bluetoothd 

/usr/sbin/hciconfig hci0 up

#DEBUG=====
/usr/sbin/hciconfig hci0 piscan
/usr/bin/bt-agent -d -p /etc/bluetooth/pin
#END

/usr/bin/pand --listen --role gn -M


