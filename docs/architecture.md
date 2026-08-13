# Architecture Notes

## Public Layer

The corporate website is primarily static HTML/CSS/JavaScript.

The project gallery is loaded from a PHP API that returns a safe subset of gallery metadata.

## Gallery Administration

The management area uses:

- PHP sessions
- CSRF tokens
- POST-only upload/delete endpoints
- MIME type validation
- upload size limits
- randomized filenames
- JSON persistence

## Storage Protection

Private application and data folders are protected through Apache rules.

The root `.htaccess` also handles:

- HTTP → HTTPS redirects
- canonical host redirects
- HSTS
- `X-Content-Type-Options`
- referrer policy
- mixed-content upgrading

## Public Showcase Boundary

The production admin credential/configuration is not included in this repository.
