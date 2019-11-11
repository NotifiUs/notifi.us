# Business Website

This is the repo for my business website located at https://notifi.us - a static site deployed by [Netlify](https://www.netlify.com)

[![Netlify Status](https://api.netlify.com/api/v1/badges/1e85c5b0-265c-473e-944e-336592388a52/deploy-status)](https://app.netlify.com/sites/elated-ptolemy-389429/deploys)
# Workflow Steps

Install composer dependencies, including `tightenco/jigsaw`

    composer install

Install npm repositories, including `@fortawesome/font-awesome-free` and `tailwindcss`

    yarn

Run Laravel Mix for front-end assets in dev environment

> This also runs jigsaw build and creates `build_local` folder

    yarn run dev

Run Laravel Mix for front-end assets in production environment

> This also runs jigsaw build and creates `build_production` folder

    yarn run production

Build jigsaw site without re-running Laravel Mix everytime

    vendor/bin/jigsaw build

# Technologies Used

* [Jigsaw](https://jigsaw.tighten.co)
* [TailwindCSS](https://tailwindcss.com)
* [Font Awesome](https://fontawesome.com)
* [unDraw](https://undraw.co)
* [Netlify](https://www.netlify.com)
