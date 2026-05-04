# 📄 Project README

## Project Description

This project is a custom WordPress theme built using a modern frontend bundler — **Vite**.

Implemented features:

* Custom WordPress theme Landing
* Vite integration for asset development and bundling
* SCSS and JavaScript support
* Live reload in development mode
* Optimized production build

---

## Completed Levels / Tasks

### Level 1

* WordPress installation and setup
* Basic theme creation
* Template structure (`header.php`, `footer.php`, `index.php`)

### Level 2

* Enqueuing custom styles and scripts
* Theme structure setup
* Creating additional pages (e.g., Contact)

### Level 3

* Vite integration
* `vite.config.js` setup
* Dev server connection (`localhost:5173`)
* Hot reload support

### Level 4

* Production build setup
* `manifest.json` integration
* Conditional asset loading (dev / prod)

---

## ⚙️ Requirements

Make sure you have installed:

* PHP >= 8.0
* MySQL / MariaDB
* Node.js >= 18
* npm or yarn
* Local server (e.g., OpenServer, XAMPP, Docker)

---

## Installation and Setup

### 1. Clone the repository

```bash
git clone git@github.com:VitaliyNickishin/landing-test.git
cd wp-content/themes/landing
```

---

### 2. Install WordPress

1. Download WordPress from the official website
2. Place it inside your project directory
3. Create a database
4. Configure `wp-config.php` (you need add define('WP_ENV', 'development'); for mode dev)

---

### 3. Install Vite dependencies

```bash
npm install
```

---

### 4. Run development mode

```bash
npm run dev
```

After run:

* Vite server: http://localhost:5173
* WordPress runs on your local server

---

### 5. Build for production

```bash
npm run build
```

After build:

* Assets are generated in `/dist`
* WordPress uses `manifest.json`

---


## 📁 Project Structure (example)

```
/theme
 ├── dist/
 ├── assets/
 │   ├── js/
 │   ├── scss/
 │   ├── fonts/
 ├── images/
 ├── template-parts/
 ├── templates/
 ├── functions.php
 ├── header.php
 ├── footer.php
 ├── package.json
 ├── index.php
 ├── page-contact.php
 └── style.css
```

---

## 💡 Notes

* Vite Dev Server is used in development mode
* Static assets are used in production
* SCSS is compiled via Vite
* Easily scalable for larger projects
