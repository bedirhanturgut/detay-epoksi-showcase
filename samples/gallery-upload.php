<?php
// Sanitized representative upload flow.

require_admin();
verify_csrf();

$file = $_FILES['image'] ?? null;

if (!$file || ($file['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_OK) {
    json_response(['ok' => false, 'message' => 'Image is required.'], 400);
}

if ((int) $file['size'] > MAX_UPLOAD_BYTES) {
    json_response(['ok' => false, 'message' => 'Image is too large.'], 400);
}

$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime = $finfo->file((string) $file['tmp_name']);

$allowed = [
    'image/jpeg' => 'jpg',
    'image/png'  => 'png',
    'image/webp' => 'webp',
];

if (!isset($allowed[$mime])) {
    json_response(['ok' => false, 'message' => 'Unsupported image type.'], 400);
}

$filename = 'gallery-' . bin2hex(random_bytes(10)) . '.' . $allowed[$mime];
$target = upload_dir() . '/' . $filename;

if (!move_uploaded_file((string) $file['tmp_name'], $target)) {
    json_response(['ok' => false, 'message' => 'Upload failed.'], 500);
}
