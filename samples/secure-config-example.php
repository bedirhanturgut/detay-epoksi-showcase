<?php
// Public-safe example. Never commit the real admin code.

const MAX_UPLOAD_BYTES = 8 * 1024 * 1024;

function admin_code(): string
{
    $code = getenv('DETAY_ADMIN_CODE');

    if (!$code) {
        throw new RuntimeException('DETAY_ADMIN_CODE is not configured.');
    }

    return $code;
}

function verify_admin_code(string $submitted): bool
{
    return hash_equals(admin_code(), $submitted);
}
