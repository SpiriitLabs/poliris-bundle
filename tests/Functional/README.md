# CSV Export Functional Test

This directory contains the automated functional test for CSV export generation with the Poliris bundle.

## Overview

The functional test validates that the Poliris bundle correctly generates CSV export files for real estate properties without requiring a database. It uses mock JSON data to simulate real-world scenarios.

## Test Structure

### Mock Data File
- **Location**: `tests/Fixtures/mock-properties.json`
- **Content**: 3 simulated real estate properties:
  1. **House for Sale** - Paris, €750,000
  2. **Apartment for Rent** - Lyon, €1,200/month
  3. **Land for Sale** - Bordeaux, €180,000

Each property includes realistic data:
- Identifiant (agency ID, reference, type, technical ID)
- Type (property type and subtype)
- Localisation (address, city, postal code, coordinates, proximity info)
- Prix (price, pricing details)
- Surface (living space, land area, room sizes)
- Contact (name, phone, email, website)
- Detail (title, description)
- Photos (URLs and titles)
- Additional fields (location/rental info, land details, etc.)

### Test File
- **Location**: `tests/Functional/CsvExportFunctionalTest.php`
- **Test Methods**:
  1. `it_generates_complete_csv_export_with_property_data()` - Main test validating full CSV generation with all fields
  2. `it_generates_empty_csv_when_no_properties()` - Tests empty export handling
  3. `it_validates_csv_structure_and_format()` - Validates Poliris CSV structure
  4. `it_contains_expected_values_from_mock_data()` - Verifies specific data values in CSV

## What the Test Validates

✅ **File Generation**: CSV file is created successfully  
✅ **File Content**: CSV is not empty and contains data  
✅ **Line Count**: Correct number of lines (one per property)  
✅ **Poliris Format**: Uses correct delimiter format (`"field"!`)  
✅ **Field Count**: Each line has 100+ columns (Poliris format has 333+ columns)  
✅ **Data Integrity**: All expected values (prices, addresses, references) are present  
✅ **Structure**: Validates proper CSV parsing and field extraction

## Running the Test Locally

```bash
# Install dependencies
composer install

# Run the CSV export functional test
composer test tests/Functional/CsvExportFunctionalTest.php

# Or using PHPUnit directly
vendor/bin/simple-phpunit tests/Functional/CsvExportFunctionalTest.php --testdox
```

## GitHub Actions Integration

The test runs automatically via the **CSV Export Functional Test** workflow (`.github/workflows/csv-export-test.yml`):

- **Trigger**: On every push and pull request
- **PHP Versions**: 8.2 and 8.3
- **Symfony Version**: 7.0.*
- **Steps**:
  1. Checkout code
  2. Setup PHP environment
  3. Install dependencies via Composer
  4. Verify mock data file exists
  5. Run functional test with detailed output
  6. Display test summary

## Adding New Test Cases

To add more test properties to the mock data:

1. Edit `tests/Fixtures/mock-properties.json`
2. Add a new property object with the required fields
3. Update the test assertions if needed (e.g., line count)
4. Run the tests locally to verify

Example minimal property:
```json
{
  "identifiant": {
    "agenceId": "AGENCY_ID",
    "agencePropertyRef": "REF",
    "annonceType": "vente",
    "annonceIdTechnique": "TECH_ID"
  },
  "type": {
    "type": "Appartement",
    "sousType": "T2"
  },
  "prix": {
    "prix": 250000,
    "mentionPrix": "FAI"
  }
}
```

## Technical Details

### Dependencies
- `symfony/property-access` - Required for CSV serialization
- `symfony/serializer` - Used for converting property objects to CSV
- PHPUnit - Test framework

### CSV Format
The bundle uses the Poliris CSV format:
- **Delimiter**: `"!` (exclamation mark between quoted fields)
- **Enclosure**: `"` (double quotes)
- **Columns**: 333+ fields per property
- **Encoding**: UTF-8

### Mock Data Loading
The test uses a helper method `loadMockData()` to:
1. Load the JSON fixture file
2. Parse and validate JSON structure
3. Return an array of property data

### Property Building
The test uses `buildExportFromMockData()` to:
1. Initialize an `AnnonceExportBuilder`
2. For each property in mock data:
   - Create a new line with `startLine()`
   - Set all required fields (identifiant, type, photo, champCustom, etc.)
   - Populate optional fields from mock data (localisation, prix, surface, etc.)
3. Build the complete `AnnonceExport` object

All properties must have ALL fields initialized (even with null values) to satisfy the Poliris format requirements.

## Troubleshooting

### Test Fails with "Property not initialized" Error
- Ensure all required properties are initialized in `buildExportFromMockData()`
- The Annonce model requires ALL 30+ properties to be set before calling `toArray()`

### Mock Data File Not Found
- Verify the file exists at `tests/Fixtures/mock-properties.json`
- Check file permissions

### CSV Parsing Issues
- Verify the Poliris delimiter format is correct (`"!`)
- Check that the CSV content matches expected structure

## Maintenance

This test should be updated when:
- New fields are added to the Annonce model
- The Poliris CSV format specification changes
- New property types need to be tested
- Additional validation rules are required
