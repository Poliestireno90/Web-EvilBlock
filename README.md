# Web-EvilBlock
![pixel-art-fnal250px](https://user-images.githubusercontent.com/116316357/224299475-d2cd23fa-7b6e-4a3a-a2b8-db2a801d355c.png)

This is a Web Interface for EvilBlock  https://github.com/termal73/EvilBlock )
# Requeriments
You need to have apache2 installed: 
```bash
apt-get update && apt-get upgrade -y && apt-get install apache2
```
You need to have python3 installed: 
```bash
apt-get install pyhton3
```
All files have to be located in /var/www/EvilBlock (include the EvilBlock.py from https://github.com/termal73/EvilBlock )

# How to install and setup.
Assuming you have installed the requirements, from the terminal enter the following commands:
```bash
cd /var/www
git clone
git clone https://github.com/termal73/EvilBlock.git
```
( if you do the git clone from another directory do ```mv EvilBlock /var/www``` )
```bash
sudo nano /etc/apache2/sites-available/000-default.conf
```
On the <Virtualhost *:80> edit the DocumentRoot line and enter ```DocumentRoot /var/www/EvilBlock```

Now do ```systemctl``` restart apache2. Then you can do ```systemctl status apache2``` to see if apache is running.

Now from your browser, in the URL type ```localhost```. Thats all

