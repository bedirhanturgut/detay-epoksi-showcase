<?php
// Sanitized representative delete flow.

require_admin();
verify_csrf();

$id = (string) ($payload['id'] ?? '');

$items = read_gallery_items();
$deleted = null;
$remaining = [];

foreach ($items as $item) {
    if ((string) ($item['id'] ?? '') === $id) {
        $deleted = $item;
        continue;
    }

    $remaining[] = $item;
}

if (!$deleted) {
    json_response(['ok' => false, 'message' => 'Image not found.'], 404);
}

$filename = basename((string) ($deleted['filename'] ?? ''));
$path = upload_dir() . '/' . $filename;

$root = realpath(upload_dir());
$file = realpath($path);

if ($root && $file && str_starts_with($file, $root) && is_file($file)) {
    unlink($file);
}

write_gallery_items($remaining);
