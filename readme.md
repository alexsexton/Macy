# Macy. A WordPress Theme

WordPress theme for `http://thecontentcat.com`.

## Features

- Custom logo
- Custom favicon
- Responsive layout (based on two a column golden ratio grid)
- Responsive navigation with animated toggle button
- Custom page background images - using ACF
- Typography from Adobe Type, 'Brandon Grotesque' for body text and headings

## Installation

Download and then upload to your WordPress site as a `.zip` file

To riff on this theme and design:

- Clone or download it
- Run `npm install` to get going
- Edit the `scss` and `js` found in the `assets` folder
- Change the markup found in the root folder or `partials`
- Build the assets once run `gulp`
- To watch them run `gulp watch`
- Don't blame me if something bricks you computer...I barely know what I'm doing

## Prerequisites

Node, Gulp CLI and a virtual machine running WordPress (for local dev obviously)

### Required Plugins

Advanced Custom Fields
https://wordpress.org/plugins/advanced-custom-fields/

Contact Form 7
https://wordpress.org/plugins/contact-form-7/

Bogo (Translations)
https://wordpress.org/plugins/bogo/

Classic Editor
https://wordpress.org/plugins/classic-editor/

Paste the code below into the form code section of contact form 7.

```
<div class="form-group">
<label>Your Name <span class="required">(required)</span></label>[text* your-name]</div>

<div class="form-group">
<label> Your Email <span class="required">(required)</span></label>[email* your-email]</div>

<div class="form-group">
<label> Subject</label>[text your-subject] </div>

<div class="form-group">
<label>Your Message <span class="required">(required)</span></label>[textarea* your-message]</div>

<div class="form-buttons">
[submit class:button "Send"]
</div>
```

## Notes

There is one custom post type 'articles' which is the post type for portfolio content. Create your portfolio pieces here.

There are two custom page templates: `page-contact.php` and `page-work.php`.

Contact (`page-contact.php`) is for the contact page, only difference between this and the default page is the background image and colour.

Work (`page-work.php`) is for the portfolio page and pulls in posts from the 'articles' custom post type.

When you're logged in to WordPress and view the site, the shit way WordPress does their admin bar changes the logo position, ignore this as everyone not logged in sees this as it should be.
