# استخدام صورة PHP مع Apache
FROM php:8.1-apache

# تثبيت Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# نسخ ملفات التطبيق إلى الحاوية
COPY . /var/www/html

# تعيين أذونات
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# تثبيت التبعيات
RUN composer install --no-dev

# تعيين البيئة
ENV APP_ENV=production
