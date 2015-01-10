#!/bin/ash
# RPi Network Conf Bootstrapper

ssid="MY_WIFI_SSID"
 
ERROR=$(ifconfig wlan0 2>&1 >/dev/null)
ERROR=`echo $ERROR | grep error`;
if [ "$ERROR" != "" ]; then
        echo "$ERROR"
        echo "WIFI device not found."
        exit 0;
fi

echo "Found WIFI device"

createAdHocNetwork(){
    echo "Creating ad-hoc network"
    ifconfig wlan0 down
    iw wlan0 set type ibss
    ifconfig wlan0 up 
    iw wlan0 ibss join RpiCopter 2412 key d:0:01234
    ifconfig wlan0 10.0.2.1 netmask 255.255.255.0 up
    dnsmasq -i wlan0 -I lo -z --dhcp-range=10.0.2.2,10.0.2.10,1h
    echo "Ad-hoc network created"
}

createAPNetwork(){
    echo "Creating AccessPoint"
    ifconfig wlan0 down
    hostapd -B /etc/hostapd.conf
    ifconfig wlan0 10.0.2.1 netmask 255.255.255.0 up
    dnsmasq -i wlan0 -I lo -z --dhcp-range=10.0.2.2,10.0.2.10,1h
    echo "AP created"
}

createSoftAPNetwork() {
    echo "Creating AccessPoint"
    modprobe tun
    ifconfig wlan0 down
    #iw phy phy0 set txpower fixed 100
    iw phy phy0 interface add moni0 type monitor
    airbase-ng -e RPiCopterAP1 -c 6 moni0 &
    ifconfig at0 10.0.2.1 netmask 255.255.255.0 up
    dnsmasq -i at0 -I lo -z --dhcp-range=10.0.2.2,10.0.2.10,1h
}

echo "================================="
echo "RPi Network Conf Bootstrapper 0.1"
echo "================================="
echo "Scanning for known WiFi networks"
connected=false

ifconfig wlan0 up
if iw wlan0 scan | grep $ssid > /dev/null
then
	echo "First WiFi in range has SSID:" $ssid
	echo "Starting supplicant for WPA/WPA2"
	wpa_supplicant -B -D nl80211 -i wlan0 -c /etc/wpa_supplicant.conf > /dev/null 2>&1
        echo "Obtaining IP from DHCP"
        if udhcpc -i wlan0 -n
        then
            echo "Connected to WiFi"
            connected=true
            break
        else
            echo "DHCP server did not respond with an IP lease (DHCPOFFER)"
            wpa_cli terminate
            break
        fi
else
	echo "Not in range, WiFi with SSID:" $ssid
fi
 
if ! $connected; then
#    createAPNetwork
#    createSoftAPNetwork
    createAdHocNetwork
fi
 
exit 0

