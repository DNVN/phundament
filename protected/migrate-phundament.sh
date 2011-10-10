#!/bin/bash
baseDir=`dirname $0`
pushd $baseDir

echo "Apply database migrations? (y/n)"; read choice
if [ $choice == "y" ]; then
	echo "Applying migrations...";
    protected/yiic migrate --migrationPath=application.modules.p3admin.modules-install.user.migrations --migrationTable=tbl_migration_module_user --interactive=0
    protected/yiic migrate --migrationPath=application.modules.p3admin.modules-install.rights.migrations --migrationTable=tbl_migration_module_rights --interactive=0
    protected/yiic migrate --migrationPath=application.modules.p3widgets.migrations --migrationTable=tbl_migration_module_p3widgets --interactive=0
    protected/yiic migrate --migrationPath=application.modules.p3media.migrations --migrationTable=tbl_migration_module_p3media --interactive=0
else 
	echo "Skipped."
fi