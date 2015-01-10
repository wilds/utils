#!/bin/sh
ifconfig bnep0 10.0.1.1 netmask 255.255.255.0 up
route add -net 0.0.0.0 gw 10.0.1.2
dnsmasq -i bnep0 -I lo -z --dhcp-range=10.0.1.2,10.0.1.10,1h
#echo "nameserver 8.8.4.4" >> /etc/resolv.conf
#echo "nameserver 8.8.8.8" >> /etc/resolv.conf
