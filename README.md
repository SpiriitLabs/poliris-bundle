PolirisBundle
=============

This bundle provide Poliris generation CSV.

Poliris Current version is V4.1.17.

[![Latest Stable Version](https://poser.pugx.org/spiriitlabs/poliris-bundle/v/stable.svg)](https://packagist.org/packages/spiriitlabs/poliris-bundle)
[![CI Tests](https://github.com/spiriitlabs/poliris-bundle/actions/workflows/ci.yml/badge.svg)](https://github.com/spiriitlabs/poliris-bundle/actions/workflows/ci.yml)
[![CI Tests](https://github.com/spiriitlabs/poliris-bundle/actions/workflows/coding-standards.yml/badge.svg)](https://github.com/spiriitlabs/poliris-bundle/actions/workflows/coding-standards.yml)

Installation
--------------

Add
[spiriitlabs/poliris-bundle](https://packagist.org/packages/spiriitlabs/poliris-bundle)
to your ``composer.json`` file:

```bash
$ php composer.phar require "spiriitlabs/poliris-bundle"
```

Documentation
-------------

📚 **[Complete Documentation](docs/DOCUMENTATION.md)**

The documentation provides:
- 🚀 Detailed getting started tutorial
- 🎯 Illustrated use cases (SeLoger, photos, automation)
- 📊 Model reference tables
- 🔧 Common error solutions
- 💡 Complete and tested code examples

How to use
----------

A CSV Poliris is very long. More than 333 columns.

Here we propose to use the pattern Builder to create it.

Some classes:
-------------

The `Column` class represents a position in a CSV file by associating an index with a value:

```php
$column1 = new Column(1, 'Agence id'); // a string
$column2 = new Column(2, true); // OUI / NON
$column2 = new Column(2, new \DateTimeImmutable('2023-05-01')); // format d/m/Y
$column2 = new Column(2, object); // return toString on object
$column2 = new Column(2, 1); // 1 
```

If a string is used, we remove spaces and EOL.

Exemple:

```php
beautiful  house
with garage
```

is transformed into:

```
beautiful house with garage
```

After that we have a lot of classes, exemple "Exterieur"

If we look at the constructor:

```php
    public function __construct(
        $ascenseur,
        $calme,
        $piscine,
        $vueDegagee,
        $entree,
        $visAVis,
        $monteCharge
    ) {
        $this->ascenseur = new Column(41, $ascenseur);
        $this->calme = new Column(63, $calme);
        $this->piscine = new Column(65, $piscine);
        $this->vueDegagee = new Column(78, $vueDegagee);
        $this->entree = new Column(189, $entree);
        $this->visAVis = new Column(192, $visAVis);
        $this->monteCharge = new Column(197, $monteCharge);
    }
```

In this example, the CSV file contains data about Exterior features of a property, which are not sequentially
arranged in consecutive columns. To simplify the handling of this data, we decided to consolidate them using
the `Column` class.

Each property is represented by an instance of `Column`, where the index specifies the column position
in the CSV file, and the value holds the associated data. This approach allows for easier access to the exterior
features of the property, even if they are scattered throughout the CSV file.

There is 31 classes. [models](Models/Annonce/)

Usage
-----

```php
$builder = new AnnonceExportBuilder();

foreach ($lines as $line) {
    try {
        $this->createLine($builder, $line);
    } catch (\Throwable $throwable) {
        // log
    }
}

return $builder->build();
```

```php
function createLine() {
    $builder
        ->startLine()
        ->withIdentifiant(
            'somewhere',
            'agence_id',
            Annonce::ANNONCE_TYPE_VENTE,
            'REF_BA123'
        )
        ->withType(
            getType(),
            getSubType()
        )
```

Important - No validation
-------------------------

There is no validation on the data. Why? A CSV file can have several thousand rows, multiplied by approximately 300 columns, and PHP struggles to keep up.

Historically, there were validation classes using the Validator component, but it is too memory-intensive.

One solution would be to batch process the CSV and validate only a few rows at a time. However, that is not currently on the agenda.
