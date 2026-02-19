# Changelog

All notable changes to `laravel-shopify-graph` will be documented in this file.

## v1.0.42 - 2026-02-19

### Added

- Added `ReturnReason` enum for Shopify Admin GraphQL `2026-01`.

### Changed

- Hardened Shopify Graph client response handling and stream/body parsing.
- Hardcoded Shopify Admin API version to `2026-01` in the connection layer.
- Improved exception mapping and status defaults (`401`, `403`, `422`, `500`).
- Updated CI workflows to run on pull requests and enforce read-only style checks.
- Refreshed README usage examples and versioning notes.
- Expanded and standardized enum documentation across Shopify enums.
- Renamed `MetaobjectCustomerAccountAccessInput` to `MetaobjectCustomerAccountAccess`.
- Renamed `MetaobjectStorefrontAccessInput` to `MetaobjectStorefrontAccess`.

**Full Changelog**: https://github.com/edstevo/laravel-shopify-graph/compare/v1.0.41...v1.0.42

## v1.0.1 - 2026-01-21

**Full Changelog**: https://github.com/edstevo/laravel-shopify-graph/compare/v1.0.0...v1.0.1
