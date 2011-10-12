#!/bin/bash

# Setup script for Phundament 3
#
# Since bash script is pretty cool and we haven't coded the PHP installer yet


baseDir=`dirname $0`
pushd $baseDir  > /dev/null

echo "Phundament 3 Setup"
echo ""

if [ $1 != "" ]; then
    echo "Note: Skip '...overwrite?' by hitting <enter>";        
    echo ""    
    pushd .. > /dev/null
    appDir="`pwd`"
    popd  > /dev/null
    extYiicDir=`dirname $1`
    echo "$extYiicDir/yiic webapp $appDir"
    $extYiicDir/yiic webapp $appDir
else
    echo "External yiic command not specified, skipping webapp stage.";
fi

echo "Apply database migrations? (y/n)"; 
read choice
if [ $choice == "y" ]; then
	echo "Applying migrations...";
    ./yiic migrate --migrationPath=application.modules.p3admin.modules-install.user.migrations --migrationTable=tbl_migration_module_user --interactive=0
    ./yiic migrate --migrationPath=application.modules.p3admin.modules-install.rights.migrations --migrationTable=tbl_migration_module_rights --interactive=0
    ./yiic migrate --migrationPath=application.modules.p3widgets.migrations --migrationTable=tbl_migration_module_p3widgets --interactive=0
    ./yiic migrate --migrationPath=application.modules.p3media.migrations --migrationTable=tbl_migration_module_p3media --interactive=0
else 
	echo "Skipped."
fi

echo "Setup folder permissions? (y/n)"; 
read choice
if [ $choice == "y" ]; then
    mkdir ../runtime
    chmod 777 ../runtime
    mkdir ./data/p3media
    chmod 777 ./data/p3media
    mkdir ./data/p3media-import
    chmod 777 ./data/p3media-import
else 
	echo "Skipped."
fi

popd