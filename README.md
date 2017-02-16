2 Hours a Week
==============

This is the website for 2 Hours a Week.

The 1.0 version of the site is in the root directory.

The 2.0 version is in the  `kirby/` folder.
The new site is currently built on top of [Kirby](http://www.getkirby.com), a simple flat file CMS.
[Kirby Documentation](https://getkirby.com/docs).

###Setup

Clone the repository and from the project root directory, run `./create_content.sh`.

As a development environment, use whatever you're comfortable with. I have been using [MAMP](https://www.mamp.info/en/). 
To set up the environment using MAMP: 

* open MAMP 
* click 'Preferences' and go to the 'Apache Tab'
* click 'Select' below the 'Document Root' text field
* navigate to 2hoursaweek.org/kirby and confirm
* hit 'OK' and click 'Start Servers'

###Structure

The templates for each section of the homepage are defined in `kirby/site/snippets`, as is the code for the header and footer.

The homepage template is in `kirby/templates/home.php`.

Javascript and CSS folders are in `kirby/assets`.

Content Types are defined in `/kirby/site/blueprints` in YML. 
The data structure of an action is defined in the `kirby/site/blueprints/action.php` file in YAML.
[Blueprints field types](https://getkirby.com/docs/cheatsheet/#panel-fields).