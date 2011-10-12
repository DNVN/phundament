#!/bin/bash

# Setup script for Phundament 3
#
# Since bash script is pretty cool and we haven't coded the PHP installer yet

if [ "$1" == "" ]; then
    echo "No export location provided, exiting."
    exit 
fi

pushd "$1" > /dev/null
exportDir=`pwd`
popd  > /dev/null
baseDir=`dirname $0`
pushd "$baseDir/.."  > /dev/null
appDir=`pwd`
revision=`git rev-parse HEAD`
packageName="phundament3-${revision:0:8}"

if [ -d "$exportDir/$packageName" ]; then
    echo "Error: Export directory exists."
    exit 
fi


echo "Export Phundament 3 from '$appDir' to '$exportDir/$packageName'? (y/n)"
read choice
if [ $choice == "y" ]; then

rsync -a \
  --exclude='.git*' --exclude='protected/data' \
  --exclude='assets'  --exclude='runtime' \
  --exclude='config/local.php' \
  --exclude='nbproject' \
  $appDir/ $exportDir/$packageName
fi;

pushd $exportDir
tar -czf $packageName.tar.gz $packageName

echo "Done."