# Masuk ke direktori project Laravel
cd C:\xampp\htdocs\Progress_Web

# Mengembalikan perubahan ke versi terakhir di-commit
git reset --hard HEAD
git clean -fd

# Mengambil update dari remote repository (jika diperlukan)
git fetch ori
git reset --hard origin/master

# Membersihkan cache dan rebuild resource
php artisan cache:clear
php artisan view:clear
php artisan config:clear
php artisan route:clear
npm run build

echo "Modul telah di-reset ke versi terakhir yang di-commit."
