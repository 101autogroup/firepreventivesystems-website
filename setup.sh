#!/bin/bash
# =============================================================
# Fire Preventive Systems - DigitalOcean Server Setup Script
# Run this on a fresh Ubuntu 22.04 $6/mo Droplet as root
# Usage: bash setup.sh
# =============================================================

set -e

DOMAIN="firepreventivesystems.com"
REPO="https://github.com/101autogroup/firepreventivesystems-website.git"
WEBROOT="/var/www/firepreventivesystems"

echo "--- Updating system ---"
apt-get update -y && apt-get upgrade -y

echo "--- Installing Apache, PHP, Git, Certbot ---"
apt-get install -y apache2 php libapache2-mod-php php-mail git certbot python3-certbot-apache

echo "--- Enabling Apache modules ---"
a2enmod rewrite
a2enmod ssl

echo "--- Cloning site from GitHub ---"
rm -rf $WEBROOT
git clone $REPO $WEBROOT

echo "--- Setting permissions ---"
chown -R www-data:www-data $WEBROOT
chmod -R 755 $WEBROOT

echo "--- Creating Apache virtual host ---"
cat > /etc/apache2/sites-available/firepreventivesystems.conf << 'EOF'
<VirtualHost *:80>
    ServerName firepreventivesystems.com
    ServerAlias www.firepreventivesystems.com
    DocumentRoot /var/www/firepreventivesystems

    <Directory /var/www/firepreventivesystems>
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/fps_error.log
    CustomLog ${APACHE_LOG_DIR}/fps_access.log combined
</VirtualHost>
EOF

echo "--- Enabling site and disabling default ---"
a2ensite firepreventivesystems.conf
a2dissite 000-default.conf
systemctl restart apache2

echo "--- Creating .htaccess for clean URLs and PHP mail ---"
cat > $WEBROOT/.htaccess << 'EOF'
Options -Indexes
RewriteEngine On

# Redirect www to non-www
RewriteCond %{HTTP_HOST} ^www\.(.+)$ [NC]
RewriteRule ^ https://%1%{REQUEST_URI} [R=301,L]

# Remove .php extension from URLs
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME}.php -f
RewriteRule ^([^.]+)$ $1.php [L]
EOF
chown www-data:www-data $WEBROOT/.htaccess

echo ""
echo "=== SETUP COMPLETE ==="
echo ""
echo "Next steps:"
echo "1. Point your DNS A record for $DOMAIN to this server's IP address"
echo "2. Once DNS propagates, run SSL setup:"
echo "   certbot --apache -d $DOMAIN -d www.$DOMAIN"
echo "3. To update the site in future, SSH in and run:"
echo "   cd $WEBROOT && git pull"
echo ""
echo "Your site will be live at: https://$DOMAIN"
