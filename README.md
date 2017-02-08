# Simple PHP Hit counter

This package provides page hit counter data as simply as possible. It is
entirely file-base, with no database connection needed.

## Installation

All you need is the simplephpcounter.php file. Put it anywhere you would like
in your application directory structure. Be default, it expects there to be
a writable (by the web server) directory name "hits" in the same directory. If
you don't want it there, you can override it via the second (optional)
constructor parameter. (You could just hard-code it into the class parameter
if you prefer.)

## Usage

```
require_once 'path/to/simplephpcounter.php';
$counter = new simplephpcounter/Hits('index');
echo "<p>Page hits: ".$counter->hits()."</p>";
```

(Replace 'index' with whatever you want to call that page's counter.)

## License

Basically, feel free to use/modify as you want, but it would be nice to point
people to the [GitHub repo](https://github.com/nogdog/simplephpcounter)

See the LICENSE file in this directory for the official verbiage.

