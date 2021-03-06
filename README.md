# nextcloud-12factor
12-Factor-compatible, Docker image for Nextcloud, using an S3-compatible
primary storage.

## Environment Variables

Customisable:

- `DEBUG`.
- `NEXTCLOUD_URL`.
- `NEXTCLOUD_DATA_PATH`.
- `NEXTCLOUD_SECRET`.
- `NEXTCLOUD_PASSWORD_SALT`.
- `NEXTCLOUD_TRUSTED_DOMAINS`.
- `NEXTCLOUD_DB_TYPE`.
- `NEXTCLOUD_DB_HOST`.
- `NEXTCLOUD_DB_USER`.
- `NEXTCLOUD_DB_PASSWORD`.
- `NEXTCLOUD_DB_NAME`.
- `NEXTCLOUD_DB_TABLE_PREFIX` (default: empty string).
- `NEXTCLOUD_MAIL_SENDER_DOMAIN`.
- `NEXTCLOUD_MAIL_SENDER_USER`.
- `NEXTCLOUD_SMTP_HOST`.
- `NEXTCLOUD_SMTP_PORT`.
- `NEXTCLOUD_SMTP_ENCRYPTION` (default: empty string; also valid: "tls" or "ssl").
- `NEXTCLOUD_SMTP_AUTHN_TYPE` (default: "LOGIN"; also valid: "PLAIN").
- `NEXTCLOUD_SMTP_AUTHN_USER`.
- `NEXTCLOUD_SMTP_AUTHN_PASSWORD`.
- `NEXTCLOUD_ADMIN_USER`.
- `NEXTCLOUD_ADMIN_PASS`.

Also:

- `NEXTCLOUD_S3_BUCKET` (required)
- `NEXTCLOUD_S3_ACCESS_KEY` (required)
- `NEXTCLOUD_S3_SECRET_KEY` (required)
- `NEXTCLOUD_S3_AUTOCREATE`
- `NEXTCLOUD_S3_HOSTNAME`
- `NEXTCLOUD_S3_PORT`
- `NEXTCLOUD_S3_SSL` (default: `true`; use `0` to disable)
- `NEXTCLOUD_S3_USE_PATH_STYLE`

More options can be set by adding configuration files to `/usr/src/nextcloud/config`.

