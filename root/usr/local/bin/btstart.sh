#!/bin/sh
echo $1 > /var/local/last_btaddress

pidof sixad > /dev/null 2>&1
if [ $? != 0 ]; then
    /usr/bin/sixad -s &
    sleep 2;
fi

pidof bluetoothd > /dev/null 2>&1
if [ $? != 0 ]; then
        /usr/sbin/dbus-daemon 
        /usr/bin/bluetoothd 
#        sleep 1;
fi

/usr/sbin/hciconfig hci0 up
#/usr/sbin/hciconfig hci0 piscan
/usr/bin/pand --listen --role gn -M -u /usr/local/bin/pand.sh

