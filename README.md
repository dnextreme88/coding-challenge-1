# Coding Challenge 1

## Coding Challenge Description
Write a code that will accept numbers in words and will output the numerical value.

> e.g.
> Enter a number in word: Fifty Four Thousand Three Hundred Twenty One
> Your number is 54321

## How to run
### Pre-requisites
This coding challenge uses the [Laravel framework](https://laravel.com/docs/11.x) so this will require package managers to install the dependencies.
1. Download the latest version of Composer from https://getcomposer.org/
2. Download the latest version of NodeJs from https://nodejs.org/en.
3. Download the latest version of XAMPP from https://www.apachefriends.org/ that uses PHP 8.2.12. After downloading, the plugins that matter is PHP from the installation window. Since this doesn't use any database logic, MySQL isn't required.
4. You need to set the environment variables of the PHP version. This must point to the PHP version that XAMPP is using. Search for `environment variables` in your computer. Click the `Environment Variables...` button.
5. From here, find the `Path` variable and double-click it. Click the `New` button and add the directory where PHP is installed. Usually, this would be `C:\xampp\php`.

### Instructions
1. Unzip the contents of this repository to your desired location, preferably the Desktop for easy access.
2. Using Powershell/CMD or any terminal program, open up two instances of your terminal from your OS.
3. Using one of the terminals, go to the location where the contents of the repository was unzipped. For example `cd Desktop`.
4. Run both `composer install` and `npm install` to install the dependencies.
5. Run both `npm run dev` to run a Vite instance and `php artisan serve` for the server.
6. Open a web browser and navigate to `http://127.0.0.1:8000`. Simply enter words into the input below. You may toggle dark mode on the upper right screen, if desired.
7. If it complains about dependencies not installing, try running `composer update` and `npm update`.

## Challenges
- One of my challenges was figuring out how to convert words such as "twenty one" into an integer. I figured out the part where I have to use integer and floats but ultimately decided to put the definitions in an array.
- The second challenge was to figure out how to add error handling on the input. What I did was to use a custom rule using Closures from Laravel to handle instances of incorrect words, since there's no built-in way of handling such scenarios.
- This coding challenge features the ability to sanitize and trim inputs, error handling, as well as the ability to toggle between light and dark modes. This kind of feature is slowly becoming a standard in modern webpages, and this is actually the first coding assessment that I have implemented such feature. The code for this is based on one of my recent projects, just altering it a bit to make it inline (my code from that project shows the toggle without the icons, I added icons here for clarity).

## Defects
- Almost all inputs would work, however if there is an indistinguishable word like "one million twenty four thousand hundred two", it may result into incorrect numbers and that there would be no errors.
- Most of the validation is done on one function, `submit_input()`. If any of the logic here is changed, it would break the code. Changing the named keys in the arrays `ones[]`, `tens[]`, and `bigger_scales[]` would also break the code, it just wouldn't return any number, or it would return incorrect numbers (depending if all or some of the keys were changed/removed).
- The limitation of this code is that it relies on a framework and its Composer and Node dependencies. This can be done with regular HTML/CSS/JavaScript but I fear that the error handling would be harder to implement since there would be a lot of conditional statements to use.

## Disclaimer
- Credits to https://leetcode.com/discuss/interview-question/633508/amazon-onsite-english-words-to-integer, where most of the logic was based. Without which, I cannot finish this on time.
- Credits to https://onlinetools.com/integer/convert-words-to-integers for providing an idea to put the required data in arrays.
- Credits to the people at TechTaxi Inc. for giving me the opportunity to do this wonderful coding challenge. I'm grateful to have learned from this coding challenge, whether I get hired for this or not.

All rights reserved &copy; October 10, 2024
