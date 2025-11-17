# Dimgent Technologies Website

A modern, professional Laravel website for Dimgent Technologies - an electronics development company specializing in custom electronic device development.

## 🚀 Quick Start

### Prerequisites
- PHP 8.4+
- Node.js 18+
- Composer
- Laravel Herd (or any Laravel development environment)

### Installation

1. **Install PHP dependencies**
```bash
composer install
```

2. **Install Node dependencies**
```bash
npm install
```

3. **Build assets**
```bash
npm run build
```

4. **Run development server** (if not using Herd)
```bash
php artisan serve
```

5. **For development with auto-reload**
```bash
npm run dev
```

Visit: `http://localhost` (or your Herd domain)

## 📄 Pages

- **Home** (`/`) - Company overview and featured products
- **Products** (`/products`) - Garand 101 Magnetometer showcase
- **Services** (`/services`) - Development services offered
- **Projects** (`/projects`) - Past projects and expertise
- **About** (`/about`) - Company information and history
- **Contacts** (`/contacts`) - Contact form and information

## 🎨 Design

Built with **Refactoring UI** principles:
- Clean, modern aesthetic
- Strong visual hierarchy
- Excellent spacing and typography
- Subtle, purposeful shadows
- Professional color palette
- Fully responsive design

## 🛠 Technology Stack

- **Backend**: Laravel 12.38.1
- **Frontend**: 
  - Tailwind CSS v4 (module-based)
  - Alpine.js v3 (lightweight interactivity)
- **Build Tool**: Vite 7
- **PHP Version**: 8.4.14

## 📁 Project Structure

```
resources/
├── css/app.css          # Tailwind CSS with custom styles
├── js/app.js            # Alpine.js initialization
└── views/
    ├── components/
    │   └── layout.blade.php    # Main layout component
    ├── home.blade.php
    ├── products.blade.php
    ├── services.blade.php
    ├── projects.blade.php
    ├── contacts.blade.php
    └── about.blade.php

public/
└── images/
    ├── logo.png
    └── products/           # Product images

routes/
└── web.php              # All page routes
```

## 🎯 Features

### Responsive Navigation
- Sticky header
- Mobile-friendly menu
- Active page indicators
- Smooth transitions

### Interactive Elements
- Image gallery with thumbnails (Alpine.js)
- Contact form with validation
- Mobile menu toggle
- Hover effects and animations

### Content Highlights
- 20+ years of experience
- 50+ completed projects
- 100% success rate
- 11 development service phases
- Multiple project categories

## 🔧 Development

### Build for Production
```bash
npm run build
```

### Development Mode (Hot Reload)
```bash
npm run dev
```

### Clear Cache
```bash
php artisan optimize:clear
```

## 📱 Responsive Breakpoints

- **Mobile**: < 640px
- **Tablet**: 640px - 1024px
- **Desktop**: > 1024px

## 🎨 Color Palette

- **Primary**: Blue (#2563eb)
- **Secondary**: Indigo (#4f46e5)
- **Neutral**: Slate shades
- **Accents**: Green, Purple, Orange (for variety)

## 📊 Key Statistics

- **Experience**: 20+ years
- **Projects**: 50+ completed
- **Success Rate**: 100%
- **Team**: Engineers, Designers, Programmers
- **Location**: Minsk, Belarus

## 📞 Contact

- **Location**: Minsk, Belarus
- **Product Website**: [www.gradiometr.com](http://www.gradiometr.com)
- **Contact Form**: Available on the Contacts page

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 📝 Content Management

All page content is currently hardcoded in Blade templates. For easier content management in the future, consider:
- Adding a CMS like Laravel Nova or Filament
- Creating a simple admin panel
- Using markdown files with front matter

## 🚀 Future Enhancements

- [ ] Backend contact form processing
- [ ] Email notification system
- [ ] Multi-language support (EN, RU, BY, PL)
- [ ] Blog/News section
- [ ] Project case studies with details
- [ ] Client testimonials
- [ ] SEO optimization
- [ ] Analytics integration
- [ ] Performance monitoring
- [ ] Admin dashboard

## 📄 License

Proprietary - Dimgent Technologies

## 🤝 Credits

- **Design Philosophy**: Inspired by Refactoring UI
- **Framework**: Laravel
- **Styling**: Tailwind CSS
- **Interactivity**: Alpine.js
- **Build Tool**: Vite

---

**Built with ❤️ for Dimgent Technologies**

