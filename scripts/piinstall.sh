#! /bin/bash

# Run this script from the scripts directory ! 

# This script is used to install the necessary packages for the Raspberry Pi
# to run the project. It is assumed that the Raspberry Pi is running Raspbian

sudo apt-get update
sudo apt-get upgrade
sudo apt-get install -y nodejs npm git nginx vim firefox-esr
sudo apt-get install -y --no-install-recommends xserver-xorg x11-xserver-utils xinit openbox

cd || exit

git clone https://github.com/superjeffcplusplus/blackalps23_schedule.git

cd blackalps23_schedule || exit

npm install
npm run build
sudo cp -r dist/* /var/www/html/
sudo chown www-data:www-data "/var/www/html"

cd || exit

# Openbox configuration
mkdir -p "$HOME/.config/openbox"
cp "$HOME/blackalps23_schedule/scripts/config_files/openbox_autostart.conf" "$HOME/.config/openbox/autostart"

# Firefox configuration
# echo "user_pref(\"browser.shell.checkDefaultBrowser\", false);" >> "$HOME/.mozilla/firefox/*.default/prefs.js"

# startx autostart on login
echo "[[ -z \$DISPLAY && \$XDG_VTNR -eq 1 ]] && startx -- -nocursor" >> "$HOME/.bash_profile"
