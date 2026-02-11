# ACF Country Field

Custom Advanced Custom Fields (ACF) field type that provides a complete ISO-3166-1 country dropdown.

---

## Description

**ACF Country Field** adds a new custom field type to Advanced Custom Fields called:

> Country (ISO 3166)

It provides a production-ready dropdown with all ISO-3166-1 alpha-2 country codes and country names.

The field:

* Stores the ISO country code (e.g., `UA`, `DE`, `US`)
* Displays the full country name
* Does not require CSV import
* Uses a separate countries definition file
* Is cleanly structured and extendable

This plugin is suitable for:

* Directories
* B2B platforms
* User profiles
* CRM systems
* Location-based filtering
* Headless WordPress setups

---

## Requirements

* WordPress 6.0+
* Advanced Custom Fields (Free or Pro)

---

## Installation

1. Create a folder:

```
wp-content/plugins/acf-country-field
```

2. Place the plugin files inside:

```
acf-country-field/
├── acf-country-field.php
├── countries.php
└── fields/
    └── class-acf-field-country.php
```

3. Activate the plugin in:

WordPress Admin → Plugins

---

## Usage

1. Go to:

Custom Fields → Add Field Group

2. Add a new field.

3. Choose:

Field Type → Country

4. Save.

The field will now render a dropdown containing all ISO countries.

---

## Stored Value

The field stores the ISO-3166-1 alpha-2 country code:

```php
$country_code = get_field('country');
```

Example output:

```
UA
```

---

## License

GPLv2 or later
