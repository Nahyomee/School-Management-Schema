# Laravel School Management Schema (Multi-Tenant)

This project contains a full Laravel migration and seeder setup for a multi-tenant school management system.
To make it for only one school, just remove school_id wherever you see it.

## 📦 Features

- Multi-school support
- Users (admin, teacher, student)
- Classrooms, subjects, grades, attendance
- Fully seeded test data
- Models and some relationships


---

## 📦 What's Inside
```
├── 📁database/
│ └── 📁migrations/ # Migrations for all tables
│ └── 📁seeders/ # Seeders for all tables
├── 📁sql/
│ └── schema_dump.sql # SQL export of schema
├── 📁erd/
│ └── school_mgmt_erd.png # Visual ERD diagram
├── README.md # This file
```

---

## 🧱 Tables Included

- School
- Users (admin, teacher, student)
- Sessions, terms
- Classrooms, subjects, attendance
- Assessments, grades
- Notices

---

## 🚀 Getting Started

1. Clone the repo:
```bash
git clone https://github.com/Nahyomee/school-management-schema.git
cd school-management-schema   
```
2. Install Laravel dependencies
```bash
composer install
```
3. Setup .env:
```bash
cp .env.example .env
php artisan key:generate
```
4. Run the migrations:
```bash
php artisan migrate
```
5. Run the seeders
```bash
php artisan db:seed
```
## 🧪 Using SQLite for Fast Testing
Instead of MySQL, you can use SQLite by updating .env like so:

```bash
DB_CONNECTION=sqlite
```

## 🎨 ERD Diagram
Visual representation is available in /erd/school_mgmt_erd.png.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
