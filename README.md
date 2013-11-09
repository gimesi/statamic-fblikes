# Statamic Facebook Likes
"fblikes" is a tiny [Statamic](http://www.statamic.com) plugin that lets you display the number of fans of any publicly accessible Facebook Page.

## Installation
- Download the zip file and unzip it (or clone the repo) into	`/_add-ons/`.
- Ensure that the folder name is `fblikes` and that `pi.fblikes.php` is in it.

## How to use it
- Insert following code in your template file where you want the number to be displayed: `{{ fblikes name="YOURNAME" }}`
- `YOURNAME` is the name in the URL of the particular Facebook Page you want to use. An example: The URL of Coca-Cola's Facebook appearance is `https://www.facebook.com/cocacola`, so `cocacola` is the name you're looking for.
- Be happy.

## Notes
- **Goodie #1**: You can enter the tag as often in your template as you want to display the fan count of *multiple* Facebook Pages.
- **Goodie #2**: In case your Facebook Page has more than one thousand followers, a dot will be inserted between every three digits to make the number easier to read ;)
- This add-on relies on JSON data which is easily accessible via the Facebook Graph. To see all available information, visit `http://graph.facebook.com/YOURNAME`. If I find the time, I'll add some features to incorporate other variables from the JSON data in the near future.
- The script is primarily intended for my personal use and is provided **"as is"**. I have no plans of making updates on a regular basis. There's no warranty expressed or implied. Use it at your own risk.
- If you have suggestions, corrections, or just want to say hello, please feel free to drop me a line on Twitter ([@gimesi](http://twitter.com/gimesi)).