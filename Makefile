install:
		install -d $(DESTDIR)/etc/udev/rules.d
		install -d $(DESTDIR)/usr/local/bin
		install -d $(DESTDIR)/var/local
		install -m 655 root/etc/udev/rules.d/ps3controller.rules $(DESTDIR)/etc/udev/rules.d/ps3controller.rules
		install -m 655 root/etc/udev/rules.d/91-btremove.rules $(DESTDIR)/etc/udev/rules.d/91-btremove.rules
		install -m 655 root/etc/udev/rules.d/91-btadd.rules $(DESTDIR)/etc/udev/rules.d/91-btadd.rules
		install -m 755 root/usr/local/bin/udevrun.sh $(DESTDIR)/usr/local/bin/udevrun.sh
		install -m 755 root/usr/local/bin/sixpair.sh $(DESTDIR)/usr/local/bin/sixpair.sh
		install -m 755 root/usr/local/bin/pand.sh $(DESTDIR)/usr/local/bin/pand.sh
		install -m 755 root/usr/local/bin/btstart.sh $(DESTDIR)/usr/local/bin/btstart.sh
		install -m 755 root/usr/local/bin/btstop.sh $(DESTDIR)/usr/local/bin/btstop.sh

