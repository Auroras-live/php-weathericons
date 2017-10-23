# php-weathericons

This repo is a small one that contains mappings between PHP and CSS for Erik Flowers' amazing [weather-icons font](https://github.com/erikflowers/weather-icons). The Auroras.live [API](http://developers.auroras.live/) uses this to embed weather icons in [sharable weather forecasts](http://developers.auroras.live/#embed).

This class also includes mappings for [yr.no](http://yr.no). To use these in your app, check out [our fork of weather-icons](https://github.com/Auroras-live/weather-icons)

You can use this class one of two ways -- either open it and copy / paste the large array into your own code, or `include` it in your project and use it that way. You'll obviously need to put the TTF font somewhere in your project and all that jazz.

## Example code

```php
<?php
    include('/path/to/weather-icons-class.php');
    $icons = new AurorasLive\weathericons;
    // ... image creation code ..
    $iconToInsert = $icons->getUnicode("wi-day-snow");
    // ... more image creation code ..
?>
```

If your code works as intended, you should see the snow icon. If not, make sure your code is correct, and perhaps read over some PHP image creation tutorials, as getting fonts right can be tricky :)

## Generating this array yourself

There is now a PHP script, generate.php, that does thsi for you. Run it and replace the array in weather-icons.class.php with this one. 
