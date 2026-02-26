# PT. Kita Cerdas Digital - Company Profile

This is a premium corporate company profile website built with Laravel 11 and Tailwind CSS.

## 🚀 Deployment Guide (VPS)

This project uses **GitHub Actions** for automated deployment. Every push to the `main` branch will automatically update the files on your VPS.

### 1. Manual Setup (First Time Only)
After the first successful deployment run, log in to your VPS and perform ini:

```bash
# Masuk ke folder proyek
cd /var/www/kita-cerdas-digital

# Setup environment file
cp .env.example .env
nano .env # Update APP_URL, DB_DATABASE, DB_USERNAME, DB_PASSWORD

# Generate app key
php artisan key:generate
```

### 2. Nginx Configuration
Point your domain site configuration to the `public` directory:
```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /var/www/kita-cerdas-digital/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

### 3. SSL (HTTPS)
Jalankan Certbot untuk keamanan:
```bash
sudo certbot --nginx -d yourdomain.com
```

---
Built with ❤️ by PT. Kita Cerdas Digital.
