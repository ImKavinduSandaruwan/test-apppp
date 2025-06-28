# Azure App Service Deployment Guide

## Database Configuration
- Update database connection in `includes/db.php`
- Use Azure Database for MySQL connection string

## File Permissions
- Ensure uploads folder has write permissions
- Check `.htaccess` rules if using Apache

## Environment Variables
Set the following in Azure App Service Configuration:
- DB_HOST: your-mysql-server.mysql.database.azure.com
- DB_NAME: gatepass_db
- DB_USER: your-username
- DB_PASS: your-password

## Post-Deployment
1. Import database using phpMyAdmin or MySQL Workbench
2. Test file upload functionality
3. Verify all user roles work correctly
