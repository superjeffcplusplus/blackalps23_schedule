#! /bin/bash
cd || exit
cd blackalps23_schedule || exit
git pull
npm install
npm run build
sudo cp -r dist/* /var/www/html/
sudo chown www-data:www-data "/var/www/html"