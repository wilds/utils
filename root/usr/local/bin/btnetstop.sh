#!/bin/sh
/etc/init.d/manual/S13portman stop            
/etc/init.d/manual/S60nfs stop
killall dropbear
killall dnsmasq
route del -net 0.0.0.0 gw 10.0.1.2
ifconfig bnep0 down
