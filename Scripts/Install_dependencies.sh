#!/bin/bash
sudo apt update -y
sudo apt install ruby -y 
sudo wget https://aws-codedeploy-us-east-1.s3.us-east-1.amazonaws.com/latest/install
sudo chmod +x ./install
sudo ./install auto 
sudo systemctl start codedeploy-agent
sudo apt install apache2 php php-mysql -y 