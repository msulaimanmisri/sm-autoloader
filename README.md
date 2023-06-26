## ✨ About this project
<p align="center">
    <img src="https://i.imgur.com/II0RUVw.png" alt="Plugin SMAutoloader">
</p>

## 📚 Findings
1. Using `Autoloader` in WordPress plugin can be complex than you think. Even though it's clearly make your code easy to maintain.

2. If you are not creating a Large and Complex plugin, I do not recomend you to use `Autoload`. Just use a normal `require` or `include` files in you main plugin file.

3. Include your `vendor` folder in github because not all people can run `composer install` or `composer update` in thier side. Failed to do that will brake the website (because the plugin will throw an error).