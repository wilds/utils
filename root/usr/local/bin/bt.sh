#!/bin/sh

#get ADDRESS of our device (needed for pairing ps3 controller during boot - see /etc/init.d
BTADDR=`hciconfig | sed -n '2p' | awk -F' ' '{print $3}'`

if [ "$BTADDR" != "" ]; then
        echo $BTADDR > /var/local/last_btaddress

        /sbin/modprobe uinput
        /usr/sbin/sixad-bin 0 0 0 &

        /usr/sbin/bluetoothd

        /usr/sbin/hciconfig hci0 up

        #DEBUG=====
        /usr/sbin/hciconfig hci0 piscan
        /usr/bin/bt-agent -d -p /etc/bluetooth/pin
        #END

        /usr/bin/pand --listen --role nap -M --devup /usr/local/bin/btnet.sh add --devdown /usr/local/bin/btnet.sh remove
fi
