# Macy. A WordPress Theme

WordPress theme for `http://thecontentcat.com` a.k.a the lovely cat. Based on my 'bare bear' bare theme.

## Features

- Custom logo
- Custom favicon
- Responsive layout (based on two a column golden ratio grid)
- Responsive navigation with animated toggle button
- Typography from Adobe Type, 'Brandon Grotesque' for body text and headings

## Installation

Clone or download and run `npm install`.
To build the assets once run `gulp` or to watch them run `gulp watch`.

## Prerequisites

Node, Gulp CLI and a virtual machine running WordPress (for local dev ovs).

## Notes

There is one custom post type 'articles' which is the post type for portfolio content.

There are two custom page templates: `page-contact.php` and `page-work.php`.

Contact (`page-contact.php`) is for the contact page, only difference between this and the default page is the background image and colour.

Work (`page-work.php`) is for the portfolio page and pulls in posts from the 'articles' custom post type.
