cd /var/www
git clone https://github.com/termal73/EvilBlock.git
cp /var/www/EvilBlock/EvilBlock.py /var/www/Web-EvilBlock
sudo chown -R www-data:www-data Web-EvilBlock
sudo chmod -R 774 Web-EvilBlock
echo 'www-data ALL=(ALL) NOPASSWD:/usr/bin/python3 /var/www/Web-EvilBlock/EvilBlock.py' | sudo EDITOR='tee -a' visudo
echo 'www-data ALL=(ALL) NOPASSWD:/usr/bin/bash /var/www/Web-EvilBlock/pkill.sh' | sudo EDITOR='tee -a' visudo
