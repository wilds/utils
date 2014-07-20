#!/bin/sh
/etc/init.d/manual/S60nfs stop
/etc/init.d/manual/S40network stop
/etc/init.d/manual/S13portmap stop            
killall lighttpd
killall dropbear
killall dnsmasq
route del -net 0.0.0.0 gw 10.0.1.2
ifconfig bnep0 down
echo "" > /etc/resolv.conf
