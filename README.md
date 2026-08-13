# Detay Epoksi — Corporate Website & Gallery Management

A source-informed portfolio case study of the live **Detay Epoksi** website.

> The complete production source is private. This public repository contains approved screenshots, architecture notes and sanitized representative code only.

## Project Overview

The site presents Detay Epoksi's injection, waterproofing, structural reinforcement and epoxy flooring services while providing direct contact and gallery-management workflows.

## Technical Stack

- HTML
- CSS
- JavaScript
- PHP
- JSON-based gallery storage
- Apache `.htaccess`
- cPanel / shared-hosting deployment
- Session-based admin access
- CSRF protection
- MIME-validated image uploads

## Main Features

- Responsive corporate homepage
- Service-focused content architecture
- Polyurethane injection
- Acrylic gel injection
- Epoxy floor coating
- Cement injection
- Structural reinforcement
- Foundation / curtain wall / roof waterproofing
- Tunnel and underground injection
- Phone / WhatsApp actions
- Social media shortcuts
- Dynamic project gallery
- Private gallery-management panel
- Gallery image upload and deletion
- HTTPS enforcement and security headers

## Screenshots

### Homepage

![Detay Epoksi Homepage](screenshots/homepage-hero.png)

### Services

![Detay Epoksi Services](screenshots/services-grid.png)

### Service Detail Structure

![Detay Epoksi Service Details](screenshots/services-detail.png)

## Architecture

```text
Public Site
├── index.html
├── CSS / JavaScript
├── service assets
└── gallery API

Gallery Backend
├── PHP configuration
├── JSON gallery storage
├── upload endpoint
├── delete endpoint
└── admin session / CSRF

Deployment
└── Apache / cPanel
```

## Representative Code

Sanitized examples are available in [`samples/`](samples/):

- `secure-config-example.php`
- `gallery-upload.php`
- `gallery-delete.php`
- `gallery-api.php`

## My Role

I worked on:

- Requirements analysis
- UI / UX development
- Responsive front-end
- Service information architecture
- Gallery workflow
- PHP upload / management flows
- Contact integrations
- Testing and revisions
- cPanel / live deployment

## Live Website

https://detayepoksi.com

## Source Code

The complete client source remains private.

## Status

**Production / Live**
