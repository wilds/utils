#!/bin/sh
/etc/init.d/manual/S13portmap start             
/etc/init.d/manual/S40network start             
/etc/init.d/manual/S60nfs start
ifconfig bnep0 10.0.1.1 netmask 255.255.255.0 up
route add -net 0.0.0.0 gw 10.0.1.2
dnsmasq --dhcp-range=10.0.1.2,10.0.1.10,1h
dropbear -R
#echo "nameserver 8.8.4.4" >> /etc/resolv.conf
#echo "nameserver 8.8.8.8" >> /etc/resolv.conf
lighttpd -f /etc/lighttpd/lighttpd.conf

