#! /bin/bash

# This script is used to install the necessary packages for the Raspberry Pi
# to run the project. It is assumed that the Raspberry Pi is running Raspbian

sudo apt-get update
sudo apt-get upgrade
sudo apt-get install -y git nodejs nginx vim

