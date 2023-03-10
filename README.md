# Web-EvilBlock
<p align="center">
  <img src="https://user-images.githubusercontent.com/116316357/224345496-a75baadf-8ca3-49e4-8b54-23cd42ea4512.png" />
</p>
<p align="center">
 This is a Web Interface for EvilBlock  https://github.com/termal73/EvilBlock  
</p>


## Requirements
- Linux distribution
- Apache2
- Python 3 or greater

For apache2:
```bash
apt-get update && apt-get upgrade -y && apt-get install apache2
```
For python3:
```bash
apt-get install pyhton3
```
All files have to be located in /var/www/EvilBlock (include the EvilBlock.py from https://github.com/termal73/EvilBlock)

## How to install and setup.
Assuming you have installed the requirements, from the terminal enter the following commands:
```bash
cd /var/www
git clone https://github.com/Poliestireno90/Web-EvilBlock.git
git clone https://github.com/termal73/EvilBlock.git
cd EvilBlock
cp EvilBlock.py /var/www/Web-EvilBlock
```
( if you do the git clone from another directory do ```mv Web-EvilBlock /var/www```and ```cd EvilBlock``` then ```mv EvilBlock.py /var/www/Web-EvilBlock``` )

Now do :
```bash
sudo nano /etc/apache2/sites-available/000-default.conf
```
On the <Virtualhost *:80> edit the DocumentRoot line and enter ```DocumentRoot /var/www/Web-EvilBlock```

Now do ```systemctl restart apache2```. Then you can do ```systemctl status apache2``` to see if apache is running.

## Usage
From your browser, in the URL type ```localhost```. 
Should load the page.

Red button blocks the internet for everyone ```except you```.

Green button unlocks the internet for everyone.

