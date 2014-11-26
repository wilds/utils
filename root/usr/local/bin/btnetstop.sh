#!/bin/sh
killall dnsmasq
route del -net 0.0.0.0 gw 10.0.1.2
ifconfig bnep0 down
echo "" > /etc/resolv.conf
