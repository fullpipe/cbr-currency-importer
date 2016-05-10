# The Central Bank of the Russian Federation currency importer

## Usage
```php
$importer = new Fullpipe\CbrCurrency\Importer();

foreach ($importer->import() as $ic) {
    var_dump($ic);
}
```
