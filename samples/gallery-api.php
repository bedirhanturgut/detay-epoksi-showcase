<?php
// Sanitized public API example.

try {
    $items = array_map(
        static fn(array $item): array => [
            'id' => (string) ($item['id'] ?? ''),
            'src' => (string) ($item['src'] ?? ''),
            'caption' => (string) ($item['caption'] ?? ''),
            'createdAt' => (string) ($item['createdAt'] ?? ''),
        ],
        read_gallery_items()
    );

    json_response(['ok' => true, 'items' => $items]);
} catch (Throwable $e) {
    json_response(['ok' => false, 'message' => 'Gallery could not be loaded.'], 500);
}
