# Sage 10 Custom Theme by Federico Tassara

##TODO - Theme Name

## Theme structure
```sh
themes/your-theme-name/   # → Root of your Sage based theme
├── app/                  # → Theme PHP
│   ├── Blocks/           # → View blocks controller
│   ├── Fields/           # → View fields controller
│   ├── View/             # → View models
    │   ├── Components/   # → View components
    │   ├── Composers/    # → View composers
        │   ├── App.php    # → View theme app file
        │   ├── Navigation.php    # → View nav walkers
        │   ├── Post.php    # → View theme post file
│   ├── Providers/        # → Service providers
│   ├── filters.php       # → Theme filters
│   └── setup.php         # → Theme setup
├── composer.json         # → Autoloading for `app/` files
├── composer.lock         # → Composer lock file (never edit)
├── public/               # → Built theme assets (never edit)
├── functions.php         # → Theme bootloader
├── index.php             # → Theme template wrapper
├── node_modules/         # → Node.js packages (never edit)
├── package.json          # → Node.js dependencies and scripts
├── resources/            # → Theme assets and templates
│   ├── fonts/            # → Theme fonts
│   ├── images/           # → Theme images
│   ├── scripts/               # → Theme javascript
│   ├── styles/              # → Theme stylesheets
│   └── views/            # → Theme templates
│       ├── Blocks/       # → Blocks template
│       ├── components/   # → Component templates
│       ├── form/         # → Form templates
│       ├── layouts/      # → Base templates
│       └── partials/     # → Partial templates
├── screenshot.png        # → Theme screenshot for WP admin
├── style.css             # → Theme meta information
├── vendor/               # → Composer packages (never edit)
└── webpack.mix.js        # → Laravel Mix configuration
└── tailwind.config.js        # → Laravel Mix configuration
```
### Changelog

[Theme up to version 1.0.4](https://bitbucket.org/FedericoTassara98/custom-theme-sage10/src/master/)
- v1.0.0 Custom WordPress Theme with custom dependencies.
- v1.0.1 Fix project readme.
- v1.0.2 Added .gitkeep file in fonts and images directory.
- v1.0.3 Added npm library for fontawesome. Now we can import only the icons we need, improving performance.
- v1.0.4 Update .gitignore file.

- v2.0 Update sage at latest version with Laravel Mix instead of BUD.
- v2.0.1 Fix json load errors.

# Theme description

Ready base for developing a custom theme on Wordpress with Gutemberg blocks and custom fields. Developed on Sage 10 with the following composer dependencies:
- Log1x Navi (Menu walker)
- Log1x Acf-composer (Create Gutemberg block, Option pages and fields using ACF plugin base)
- Log1x Poet (Create CPT and custom taxonomy)
- Swiper (Create custom slider)
- Tailwind CSS


# First step: _theme data setup_
First of all, search for "**TODO**" in the theme root to modify your theme data.

# Second step: _let's begin_

### Theme setup
Edit `app/setup.php` to enable or disable theme features, setup navigation menus, post thumbnail sizes, and sidebars.
Follow this steps in order:
- npm install
- composer install
- composer require roots/acorn
- npx build
- activate theme
- start coding!

## Theme development
- Run `npm install` from the theme directory to install dependencies
- Update `webpack.mix.js` with your local dev URL

### Build commands
- `npx mix watch` — Compile assets when file changes are made, start Browsersync session
- `npx mix` — Compile and optimize the files in your assets directory
- `npx mix --production` — Compile assets for production

## Documentation
- [Sage documentation](https://roots.io/sage/docs/)
- [Laravel Mix](https://laravel-mix.com/docs/6.0/installation)
- [ACF-composer documentation](https://github.com/Log1x/acf-composer)
- [Poet documentation](https://github.com/Log1x/poet)
- [Nav Walker documentation](https://github.com/Log1x/navi)
- [Tailwind documentation](https://tailwindcss.com/docs/installation)
- [Swiper](https://swiperjs.com/get-started)
