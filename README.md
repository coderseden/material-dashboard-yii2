# [Material Dashboard Yii2 - Free Frontend Preset for Yii2](https://www.coderseden.com/product/material-dashboard-yii2) 

![version](https://img.shields.io/badge/version-1.0.0-blue.svg) ![license](https://img.shields.io/badge/license-MIT-blue.svg) 

*Frontend version*: Material Dashboard for Yii2 v1.0.0. More info at https://www.coderseden.com/product/material-dashboard-yii2

![Product Image](https://coderseden.s3.eu-central-1.amazonaws.com/products/material-dashboard-yii2.jpg)

Speed up your web development with the Bootstrap 4 Admin Dashboard built for Yii2.

## Note

We recommend installing this preset on a project that you are starting from scratch, otherwise your project's design might break.

## Prerequisites

We have included the Docker with all the config files for building MySQL, PHP and Nginx environment.

To review : 
* [Yii2 Framework documentation](https://www.yiiframework.com/doc/guide/2.0/en)
* [Docker Get Started](https://www.docker.com/get-started)

#### Optional
* Add to your hosts file on your machine (macOS `/etc/hosts`, Win `C:\Windows\System32\drivers\etc\hosts`) the following for quick browser access:
 
 ```127.0.0.1       material-dashboard.test```
* check the docker/docker-compose.yml for any user/pass you could need like MySQL credentials
* to access docker container, identify your container from terminal by running `docker ps`
then `docker exec -i -t CONTAINER_NAME /bin/bash`

All the above are available on linux/mac and windows.  

#### Scripts  
In the `docker` folder, you will find a `scripts` folder with a few helpers:  
`scripts/docker.sh up` - will start docker  
`scripts/docker.sh down` - will stop all docker containers from your computer  
`scripts/docker.sh remove` - will remove all the docker containers from your computer (use with caution)  
*** Please run the commands from the docker folder where the docker-compose.yml file is, otherwise it won't work.   

#### Other notes  
1. Before running the docker command make sure you don't have any
web-server or mysql instance running on your computer and blocking port 80, 81, 3360, etc. If you do, Docker will fail to start properly.   
2. All local projects will have their own phpmyadmin interface at `http://material-dashboard.test:81`  
4. On windows, make sure your project lives in C:/Users/Username/* otherwise things won't work properly.  

#### Docker notes
1. `docker-compose rm` will remove loaded containers ( this is applicable when docker-compose.yml is changed ).
2. `docker-compose build --no-cache` to build containers from scratch and not from cache. 

## Installation


1. Using your editor, duplicate `web/config/db-local.php` to be `web/config/db.php` and add your database credentials credentials. If you are using docker as an local environment, then just rename `web/config/db-docker.php` to be `web/config/db.php`
2. Start the docker `sh scripts/docker.sh up`
2. Connect to the docker `php-fpm` using the following command: `docker exec -it material-dashboard-php-fpm /bin/bash`
3. Run `composer install` to install the vendor
4. After Composer is finished, run migration command `php yii migrate/up` and type `Y`

## Usage

A user will be already created for you to login from the migration command `hello@coderseden.com` with password `admin123` so you can login and browse.

Besides the dashboard and the auth pages this preset also has a full CRUD example on users management (Create User, View User, Update User, Delete User). All the necessary files (controllers, models, views) are installed out of the box and all the needed routes are added to `web/config/web.php`. Keep in mind that all of the features can be viewed once you login using the credentials provided above. 

### Dashboard

You can access the dashboard either by using the "**Dashboard**" link in the left sidebar. 

## Table of Contents

* [Demo](#demo)
* [Documentation](#documentation)
* [File Structure](#file-structure)
* [Browser Support](#browser-support)
* [Resources](#resources)
* [Reporting Issues](#reporting-issues)
* [Licensing](#licensing)

## Demo

- [Login](https://demo.coderseden.com/material-dashboard-yii2/)
- [Users Management ](https://demo.coderseden.com/material-dashboard-yii2/users)
- [View User](https://demo.coderseden.com/material-dashboard-yii2/users/view?id=1)
- [Update User](https://demo.coderseden.com/material-dashboard-yii2/users/update?id=1)
- [Create User](https://demo.coderseden.com/material-dashboard-yii2/users/create)

[View More](https://demo.coderseden.com/material-dashboard-yii2/).

## Documentation
The documentation for the Material Dashboard Yii2 is hosted at our [website](https://help.coderseden.com/).

## File Structure
```
├── controllers
│   ├── DashboardController.php
│   ├── IconsController.php
│   ├── MapController.php
│   ├── NotificationsController.php
│   ├── SiteController.php
│   ├── TablesController.php
│   ├── TypographyController.php
│   └── UsersController.php
├── migrations
│   └── m200216_223841_create_user_table.php
├── models
│   ├── User.php
│   ├── UserForgotForm.php
│   ├── UserLoginForm.php
│   └── UserSearch.php
├── views
│   ├── dashboard
│   │   └── index.php
│   ├── icons
│   │   └── index.php
│   ├── layouts
│   │   ├── admin.php
│   │   ├── content.php
│   │   ├── footer.php
│   │   ├── header.php
│   │   ├── left.php
│   │   ├── main.php
│   │   └── plugin.php
│   ├── map
│   │   └── index.php
│   ├── notifications
│   │   └── index.php
│   ├── site
│   │   ├── error.php
│   │   ├── forgot.php
│   │   └── index.php
│   ├── tables
│   │   └── index.php
│   ├── typography
│   │   └── index.php
│   └── users
│       ├── form.php
│       ├── list.php
│       └── view.php
├── web
│   ├── css
│   │   ├── material-dashboard-rtl.css
│   │   ├── material-dashboard.css
│   │   ├── material-dashboard.css.map
│   │   └── material-dashboard.min.css
│   ├── demo
│   │   ├── demo.css
│   │   └── demo.js
│   ├── img
│   │   ├── apple-icon.png
│   │   ├── bg2.jpg
│   │   ├── city-profile.jpg
│   │   ├── city.jpg
│   │   ├── cover.jpg
│   │   ├── faces
│   │   │   ├── avatar.jpg
│   │   │   ├── card-profile1-square.jpg
│   │   │   ├── card-profile2-square.jpg
│   │   │   └── marc.jpg
│   │   ├── favicon.png
│   │   ├── login.jpg
│   │   ├── mask.png
│   │   ├── new_logo.png
│   │   ├── sidebar-1.jpg
│   │   ├── sidebar-2.jpg
│   │   ├── sidebar-3.jpg
│   │   ├── sidebar-4.jpg
│   │   └── yii-logo.svg
│   ├── js
│   │   ├── core
│   │   │   ├── bootstrap-material-design.min.js
│   │   │   ├── jquery.min.js
│   │   │   └── popper.min.js
│   │   ├── material-dashboard.js
│   │   ├── material-dashboard.js.map
│   │   ├── material-dashboard.min.js
│   │   ├── plugin.js
│   │   └── plugins
│   │       ├── arrive.min.js
│   │       ├── bootstrap-datetimepicker.min.js
│   │       ├── bootstrap-notify.js
│   │       ├── bootstrap-selectpicker.js
│   │       ├── bootstrap-tagsinput.js
│   │       ├── chartist.min.js
│   │       ├── fullcalendar.min.js
│   │       ├── jasny-bootstrap.min.js
│   │       ├── jquery-jvectormap.js
│   │       ├── jquery.bootstrap-wizard.js
│   │       ├── jquery.dataTables.min.js
│   │       ├── jquery.tagsinput.js
│   │       ├── jquery.validate.min.js
│   │       ├── moment.min.js
│   │       ├── nouislider.min.js
│   │       ├── perfect-scrollbar.jquery.min.js
│   │       └── sweetalert2.js
│   └── scss
│       ├── material-dashboard
│       │   ├── _alerts.scss
│       │   ├── _buttons.scss
│       │   ├── _cards.scss
│       │   ├── _checkboxes.scss
│       │   ├── _core-bootstrap.scss
│       │   ├── _dropdown.scss
│       │   ├── _example-pages.scss
│       │   ├── _fixed-plugin.scss
│       │   ├── _footers.scss
│       │   ├── _forms.scss
│       │   ├── _headers.scss
│       │   ├── _images.scss
│       │   ├── _info-areas.scss
│       │   ├── _input-group.scss
│       │   ├── _misc.scss
│       │   ├── _mixins.scss
│       │   ├── _navbar.scss
│       │   ├── _popover.scss
│       │   ├── _popups.scss
│       │   ├── _radios.scss
│       │   ├── _responsive.scss
│       │   ├── _ripples.scss
│       │   ├── _sidebar-and-main-panel.scss
│       │   ├── _social-buttons.scss
│       │   ├── _tables.scss
│       │   ├── _tabs.scss
│       │   ├── _togglebutton.scss
│       │   ├── _tooltip.scss
│       │   ├── _type.scss
│       │   ├── _variables.scss
│       │   ├── bootstrap
│       │   │   └── scss
│       │   │       ├── _alert.scss
│       │   │       ├── _badge.scss
│       │   │       ├── _breadcrumb.scss
│       │   │       ├── _button-group.scss
│       │   │       ├── _buttons.scss
│       │   │       ├── _card.scss
│       │   │       ├── _carousel.scss
│       │   │       ├── _close.scss
│       │   │       ├── _code.scss
│       │   │       ├── _custom-forms.scss
│       │   │       ├── _dropdown.scss
│       │   │       ├── _forms.scss
│       │   │       ├── _functions.scss
│       │   │       ├── _grid.scss
│       │   │       ├── _images.scss
│       │   │       ├── _input-group.scss
│       │   │       ├── _jumbotron.scss
│       │   │       ├── _list-group.scss
│       │   │       ├── _media.scss
│       │   │       ├── _mixins.scss
│       │   │       ├── _modal.scss
│       │   │       ├── _nav.scss
│       │   │       ├── _navbar.scss
│       │   │       ├── _pagination.scss
│       │   │       ├── _popover.scss
│       │   │       ├── _print.scss
│       │   │       ├── _progress.scss
│       │   │       ├── _reboot.scss
│       │   │       ├── _root.scss
│       │   │       ├── _tables.scss
│       │   │       ├── _tooltip.scss
│       │   │       ├── _transitions.scss
│       │   │       ├── _type.scss
│       │   │       ├── _utilities.scss
│       │   │       ├── _variables.scss
│       │   │       ├── bootstrap-grid.scss
│       │   │       ├── bootstrap-reboot.scss
│       │   │       ├── bootstrap.scss
│       │   │       ├── mixins
│       │   │       │   ├── _alert.scss
│       │   │       │   ├── _background-variant.scss
│       │   │       │   ├── _badge.scss
│       │   │       │   ├── _border-radius.scss
│       │   │       │   ├── _box-shadow.scss
│       │   │       │   ├── _breakpoints.scss
│       │   │       │   ├── _buttons.scss
│       │   │       │   ├── _caret.scss
│       │   │       │   ├── _clearfix.scss
│       │   │       │   ├── _float.scss
│       │   │       │   ├── _forms.scss
│       │   │       │   ├── _gradients.scss
│       │   │       │   ├── _grid-framework.scss
│       │   │       │   ├── _grid.scss
│       │   │       │   ├── _hover.scss
│       │   │       │   ├── _image.scss
│       │   │       │   ├── _list-group.scss
│       │   │       │   ├── _lists.scss
│       │   │       │   ├── _nav-divider.scss
│       │   │       │   ├── _navbar-align.scss
│       │   │       │   ├── _pagination.scss
│       │   │       │   ├── _reset-text.scss
│       │   │       │   ├── _resize.scss
│       │   │       │   ├── _screen-reader.scss
│       │   │       │   ├── _size.scss
│       │   │       │   ├── _table-row.scss
│       │   │       │   ├── _text-emphasis.scss
│       │   │       │   ├── _text-hide.scss
│       │   │       │   ├── _text-truncate.scss
│       │   │       │   ├── _transition.scss
│       │   │       │   └── _visibility.scss
│       │   │       └── utilities
│       │   │           ├── _align.scss
│       │   │           ├── _background.scss
│       │   │           ├── _borders.scss
│       │   │           ├── _clearfix.scss
│       │   │           ├── _display.scss
│       │   │           ├── _embed.scss
│       │   │           ├── _flex.scss
│       │   │           ├── _float.scss
│       │   │           ├── _position.scss
│       │   │           ├── _screenreaders.scss
│       │   │           ├── _sizing.scss
│       │   │           ├── _spacing.scss
│       │   │           ├── _text.scss
│       │   │           └── _visibility.scss
│       │   ├── cards
│       │   │   ├── _card-plain.scss
│       │   │   ├── _card-profile.scss
│       │   │   └── _card-stats.scss
│       │   ├── mixins
│       │   │   ├── _alert.scss
│       │   │   ├── _animations.scss
│       │   │   ├── _breakpoints.scss
│       │   │   ├── _buttons.scss
│       │   │   ├── _chartist.scss
│       │   │   ├── _colored-shadows.scss
│       │   │   ├── _drawer.scss
│       │   │   ├── _forms.scss
│       │   │   ├── _hover.scss
│       │   │   ├── _layout.scss
│       │   │   ├── _navbar-colors.scss
│       │   │   ├── _navs.scss
│       │   │   ├── _sidebar-color.scss
│       │   │   ├── _transparency.scss
│       │   │   ├── _type.scss
│       │   │   ├── _utilities.scss
│       │   │   ├── _variables.scss
│       │   │   └── _vendor-prefixes.scss
│       │   ├── plugins
│       │   │   ├── _animate.scss
│       │   │   ├── _chartist.scss
│       │   │   └── _perfect-scrollbar.scss
│       │   └── variables
│       │       ├── _body.scss
│       │       ├── _bootstrap-material-design-base.scss
│       │       ├── _bootstrap-material-design.scss
│       │       ├── _brand.scss
│       │       ├── _buttons.scss
│       │       ├── _card.scss
│       │       ├── _code.scss
│       │       ├── _colors-map.scss
│       │       ├── _colors.scss
│       │       ├── _custom-forms.scss
│       │       ├── _drawer.scss
│       │       ├── _dropdown.scss
│       │       ├── _forms.scss
│       │       ├── _layout.scss
│       │       ├── _list-group.scss
│       │       ├── _menu.scss
│       │       ├── _modals.scss
│       │       ├── _nav.scss
│       │       ├── _pagination.scss
│       │       ├── _shadow.scss
│       │       ├── _snackbar.scss
│       │       ├── _spacing.scss
│       │       ├── _state.scss
│       │       ├── _tables.scss
│       │       ├── _tooltip.scss
│       │       └── _type.scss
│       └── material-dashboard.scss
```

## Browser Support

At present, we officially aim to support the last two versions of the following browsers:

<img src="https://github.com/creativetimofficial/public-assets/blob/master/logos/chrome-logo.png?raw=true" width="64" height="64"> <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/firefox-logo.png" width="64" height="64"> <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/edge-logo.png" width="64" height="64"> <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/safari-logo.png" width="64" height="64"> <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/logos/opera-logo.png" width="64" height="64">


## Resources
- Demo: <https://demo.coderseden.com/material-dashboard-yii2/>
- Download Page: <https://www.coderseden.com/product/material-dashboard-yii2>
- Documentation: <https://help.coderseden.com/>
- Support: <https://www.coderseden.com/contact>
- **Dashboards:**

| HTML | Yii2 |
| --- | --- |
| [![Material Dashboard HTML](https://s3.amazonaws.com/creativetim_bucket/products/50/original/opt_md_thumbnail.jpg?1522232645)](https://demos.creative-tim.com/material-dashboard/examples/dashboard.html?ref=mdl-readme) | [![Material Dashboard yii2](https://coderseden.s3.eu-central-1.amazonaws.com/products/material-dashboard-yii2.jpg)](https://demo.coderseden.com/material-dashboard-yii2/)

## Change log

Please see the [changelog](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [CodersEden](https://www.coderseden.com)
- [Creative Tim](https://creative-tim.com/?ref=mdl-readme)

## Reporting Issues

We use GitHub Issues as the official bug tracker for the Material Dashboard Yii2. Here are some advices for our users that want to report an issue:

1. Make sure that you are using the latest version of the Material Dashboard Yii2 Framework. Check the CHANGELOG from your dashboard on our [website](https://www.coderseden.com).
2. Providing us reproducible steps for the issue will shorten the time it takes for it to be fixed.
3. Some issues may be browser specific, so specifying in what browser you encountered the issue might help.

## Licensing

- Copyright 2020 CodersEden (https://www.coderseden.com)
- Copyright 2020 Creative Tim (https://www.creative-tim.com/?ref=mdl-readme)
- [Creative Tim License](https://www.creative-tim.com/license).


### Social Media

### Creative Tim:

Twitter: <https://twitter.com/CreativeTim?ref=mdl-readme>

Facebook: <https://www.facebook.com/CreativeTim?ref=mdl-readme>

Dribbble: <https://dribbble.com/creativetim?ref=mdl-readme>

Instagram: <https://www.instagram.com/CreativeTimOfficial?ref=mdl-readme>

### CodersEden:

Twitter: <https://twitter.com/coderseden?ref=mdl-readme>

Facebook: <https://www.facebook.com/coderseden?ref=mdl-readme>

Instagram: <https://www.instagram.com/coderseden?ref=mdl-readme>

Blog: <https://www.coderseden.com/blog/?ref=mdl-readme>

## Credits

- [Creative Tim](https://creative-tim.com/?ref=mdl-readme)
- [CodersEden](https://www.coderseden.com)