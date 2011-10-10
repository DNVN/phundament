#!/bin/bash

# Folder permissions setup for Phundament 3
#
# Since bash script is pretty cool and we haven't coded the PHP installer yet

baseDir=`dirname $0`
pushd $baseDir

echo "Setup folder permissions? (y/n)"; read choice
if [ $choice == "y" ]; then
    mkdir ../runtime
    chmod 777 ../runtime
    mkdir data/p3media
    chmod 777 data/p3media
else 
	echo "Skipped."
fi