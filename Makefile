install:
		install -d $(DESTDIR)/etc
		install -d $(DESTDIR)/etc/init.d
		install -d $(DESTDIR)/etc/init.d/manual
		install -d $(DESTDIR)/etc/udev/rules.d
		install -d $(DESTDIR)/usr/local/bin
		install -d $(DESTDIR)/var/local
		install -d $(DESTDIR)/etc/bluetooth
		install -d $(DESTDIR)/etc/dropbear
		install -d $(DESTDIR)/etc/lighttpd
		install -d $(DESTDIR)/etc/lighttpd/conf.d
		install -d $(DESTDIR)/avr
		install -d $(DESTDIR)/var/www
		install -d $(DESTDIR)/
		install -m 644 root/etc/php.ini $(DESTDIR)/etc/php.ini
		install -m 644 root/etc/group $(DESTDIR)/etc/group
		install -m 644 root/etc/exports $(DESTDIR)/etc/exports
		install -m 644 root/etc/mdev.conf $(DESTDIR)/etc/mdev.conf
		install -m 644 root/etc/wpa_supplicant.conf $(DESTDIR)/etc/wpa_supplicant.conf
		install -m 644 root/etc/bluetooth/main.conf $(DESTDIR)/etc/bluetooth/main.conf
		install -m 644 root/etc/bluetooth/network.conf $(DESTDIR)/etc/bluetooth/network.conf
		install -m 644 root/etc/bluetooth/pin $(DESTDIR)/etc/bluetooth/pin
		install -m 755 root/etc/init.d/S02firstboot $(DESTDIR)/etc/init.d/S02firstboot
		install -m 755 root/etc/init.d/S11modules $(DESTDIR)/etc/init.d/S11modules
		install -m 755 root/etc/init.d/S99controller $(DESTDIR)/etc/init.d/S99controller
		install -m 755 root/usr/local/bin/mdev-debug.sh $(DESTDIR)/usr/local/bin/mdev-debug.sh
		install -m 755 root/usr/local/bin/sixpair.sh $(DESTDIR)/usr/local/bin/sixpair.sh
		install -m 755 root/usr/local/bin/bt.sh $(DESTDIR)/usr/local/bin/bt.sh
		install -m 755 root/usr/local/bin/btnetup.sh $(DESTDIR)/usr/local/bin/btnetup.sh
		install -m 755 root/usr/local/bin/btnetdown.sh $(DESTDIR)/usr/local/bin/btnetdown.sh
		install -m 755 root/usr/local/bin/controller.sh $(DESTDIR)/usr/local/bin/controller.sh
		install -m 755 root/usr/local/bin/avr.sh $(DESTDIR)/usr/local/bin/avr.sh
		install -m 755 root/usr/local/bin/picsnap.sh $(DESTDIR)/usr/local/bin/picsnap.sh
		install -m 755 root/usr/local/bin/vidsnap.sh $(DESTDIR)/usr/local/bin/vidsnap.sh
		install -m 755 root/usr/local/bin/wifi.sh $(DESTDIR)/usr/local/bin/wifi.sh
		install -m 644 root/etc/lighttpd/modules.conf $(DESTDIR)/etc/lighttpd/modules.conf
		install -m 644 root/etc/lighttpd/conf.d/fastcgi.conf $(DESTDIR)/etc/lighttpd/conf.d/fastcgi.conf
		install -m 644 root/var/local/rpicopter.config $(DESTDIR)/var/local/rpicopter.config
		cp -R root/var/www/* $(DESTDIR)/var/www/
		install -m 644 root/firstboot $(DESTDIR)/firstboot
		mkdir -p $(DESTDIR)/etc/dropbear
		mkdir -p $(DESTDIR)/var/local
		mkdir -p $(DESTDIR)/avr

