# Security Note

The production package should not be published as-is.

For a production deployment, administrator secrets should be stored outside the web-visible source tree (for example through environment variables or a private server configuration) rather than committed directly in PHP source.

This showcase uses a safe environment-based configuration example.
