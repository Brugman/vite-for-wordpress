# Vite for WordPress themes

## Can Vite replace Gulp?

The dev community claims we should be moving to Vite. It's "out of the box" capabilities seem to be enough for JS developers. Making Vite work in a PHP project with multiple CSS outputs however seems to require plenty of configuration, and fighting a system that was not designed for this purpose.

My opinion may change in the future.

The setup explained in this repo works! You be the judge if Vite is good enough.

## Features

:heavy_check_mark: Run once\
:heavy_check_mark: Run continously

:heavy_check_mark: Compile Less to CSS\
:heavy_check_mark: Compile ES to JS\
:heavy_check_mark: Minify CSS\
:heavy_check_mark: Minify JS\
:heavy_check_mark: Multiple CSS inputs\
:heavy_check_mark: Multiple JS inputs

:heavy_check_mark: Reload on PHP changes\
:heavy_check_mark: Reload on CSS changes\
:heavy_check_mark: Reload on JS changes

:heavy_check_mark: Keep going on CSS error\
:heavy_check_mark: Keep going on JS error

## Failures

:x: Full control over filenames (theme.js and theme.less will cause problems)\
:x: Separated tasks (all assets are rebuilt on every change)\
:x: CSS changes via HMR

:grey_question: Run in development mode\
:grey_question: Run in production mode

:grey_question: CSS linting\
:grey_question: JS linting

:grey_question: Notification on CSS linting error\
:grey_question: Notification on JS linting error

:grey_question: CSS sourcemaps\
:grey_question: JS sourcemaps

Some of these can probably be overcome by adding more modules and adding further complexity to the setup. Considering the shaky core I did not feel it was worth exploring this.

## Setup

The root of this repo should be your WordPress theme.

The `hooks` folder should be (auto)loaded into your functions.php. The enqueue files contain standard code, `vite.php` is custom. To toggle Vite usage on-off you can edit the boolean at the top of `vite.php`.

On your development environment only, we need to install some NPM packages:
```
pnpm i
```

## Usage

| command | description |
|---|---|
| `pnpm dev` | Run the Vite dev server. |
| `pnpm build` | Build all assets once. |
| `pnpm watch` | Watch files and rebuild assets when files change. |

1. In your terminal run `pnpm dev` in one tab and `pnpm watch` in another.
1. Load your website in your browser. The Vite server will not work until the a webpage loads the Vite client JS.
1. Start working on `js/theme.js` or `less/theme.less`.

