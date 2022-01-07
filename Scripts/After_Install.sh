#!/bin/bash
sudo systemctl enable apache2
cd /var/www/wordpress/
sudo chmod -R 755 wp-content