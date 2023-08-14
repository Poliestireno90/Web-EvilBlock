cd /var/www
sudo apt-get install pip
sudo apt-get install arp-scan
sudo pip install scapy
git clone https://github.com/termal73/EvilBlock.git
cp /var/www/EvilBlock/EvilBlock.py /var/www/Web-EvilBlock
sudo chown -R www-data:www-data Web-EvilBlock
sudo chmod -R 774 Web-EvilBlock
echo 'www-data ALL=(ALL) NOPASSWD:/usr/bin/python3 /var/www/Web-EvilBlock/EvilBlock.py' | sudo EDITOR='tee -a' visudo
echo 'www-data ALL=(ALL) NOPASSWD:/usr/bin/bash /var/www/Web-EvilBlock/pkill.sh' | sudo EDITOR='tee -a' visudo
sed -i '12s/.*/\tDocumentRoot \/var\/www\/Web-EvilBlock/' /etc/apache2/sites-available/000-default.conf
