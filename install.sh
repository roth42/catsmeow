sudo apt-get update
#	? hoe recentere versie zoals 5.5 of 5.6, dit installeert 5.3.10
sudo apt-get install php5 php5-sqlite
#	volgens nodig voor efficientie https://www.digitalocean.com/community/tutorials/how-to-install-bolt-on-a-vps-running-ubuntu-12-04
sudo apt-get install php5-gd php5-curl
#	enable mod_rewrite
sudo a2enmod rewrite
#	TODO allow override, see https://www.digitalocean.com/community/tutorials/how-to-install-bolt-on-a-vps-running-ubuntu-12-04
sudo service apache2 restart
cd /var/www
sudo mkdir bolt
sudo wget "http://bolt.cm/distribution/archive/bolt-2.2.17.tar.gz"
cd bolt
sudo tar -xzf ../bolt-2.2.17.tar.gz --strip-components=1
sudo rm ../bolt-2.2.17.tar.gz
sudo chmod -R 777 files/ app/database/ app/cache/ app/config/ theme/ extensions/

# manually change: sudo vi /etc/apache2/sites-available/default to
# <Directory /var/www/>
#         Options Indexes FollowSymLinks MultiViews
#         AllowOverride All
#         Order allow,deny
#         allow from all
# </Directory>
# sudo service apache2 restart

# and change .htaccess: RewriteBase /bolt/


# onduidelijk waarom dan al dan niet opstart, combinatie van commandos leidt uiteindelijk tot resultaat, zucht
# chmod 777 app/database/bolt.db 
# php app/nut cache:clear
# rm app/cache/config_cache.php 

