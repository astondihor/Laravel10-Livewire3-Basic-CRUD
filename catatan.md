# catatan

```bash
composer create-project laravel/laravel:^10.0 example-app
cd example-app
npm install && npm run build
composer require livewire/livewire
php artisan make:livewire counter
php artisan livewire:layout
```

set database

```bash
php artisan migrate
```

TailwindCSS

```bash
npm install -D tailwindcss postcss autoprefixer sass postcss-import postcss-nesting @tailwindcss/forms @tailwindcss/typography
npx tailwindcss init -p
```


```bash
php artisan make:seeder UserSeeder
php artisan db:seed UserSeeder
```

```bash
art make:livewire Users/UsersIndex
art make:livewire Users/CreateUser
art make:livewire Users/EditUser
art make:livewire Users/ShowUser
art livewire:form UserForm
```
