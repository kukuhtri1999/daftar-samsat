# Antri Samsat - Layanan Pendaftaran Antrian SAMSAT Online

Aplikasi berbasis web untuk layanan pendaftaran nomor antrian SAMSAT online yang dikembangkan menggunakan Laravel 11 dengan Jetstream, Inertia.js, Vue.js, Tailwind CSS, dan Vuetify.

## Created by: Kukuh Tri Winarno Nugroho

- LinkedIn: [Kukuh Tri Winarno Nugroho](https://www.linkedin.com/in/kukuhtri99/)
- Website: [kukuhtri.my.id](https://kukuhtri.my.id/)

---

## Fitur Utama

- **Pendaftaran Antrian Online**: Sistem pendaftaran antrian SAMSAT secara online
- **Autentikasi Pengguna**: Login dan registrasi dengan Laravel Jetstream
- **Interface Modern**: UI yang responsif dengan Tailwind CSS dan Vuetify
- **Single Page Application**: Menggunakan Inertia.js dan Vue.js untuk pengalaman pengguna yang lancar
- **Manajemen Profil**: Pengaturan profil pengguna dan keamanan akun

## Tech Stack

- **Backend**: Laravel 11
- **Frontend**: Vue.js 3, Inertia.js
- **Styling**: Tailwind CSS, Vuetify
- **Authentication**: Laravel Jetstream
- **Database**: MySQL/PostgreSQL

## Prerequisites

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL/PostgreSQL

## Installation

1. Clone repository:
```bash
git clone https://github.com/kukuhtri1999/daftar-samsat.git
cd antri-samsat
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Setup environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure database di file `.env`

5. Run migrations:
```bash
php artisan migrate
```

6. Build frontend assets:
```bash
npm run dev
```

7. Start development server:
```bash
php artisan serve
```

## Contributing

Silakan buat pull request untuk kontribusi pada project ini.

## License

Open source project untuk kepentingan publik.
