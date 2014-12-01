#!/bin/sh

if [ "$1" = "add" ]; then
        echo "btnet add" >> /tmp/mdev
        ifconfig bnep0 10.0.1.1 netmask 255.255.255.0 up
        route add -net 0.0.0.0 gw 10.0.1.2
        dnsmasq --dhcp-range=10.0.1.2,10.0.1.10,1h
        #echo "nameserver 8.8.4.4" >> /etc/resolv.conf
        #echo "nameserver 8.8.8.8" >> /etc/resolv.conf
else
        echo "btnet remove" >> /tmp/mdev
        killall dnsmasq
        route del -net 0.0.0.0 gw 10.0.1.2
        ifconfig bnep0 down
        #echo "" > /etc/resolv.conf
fi
