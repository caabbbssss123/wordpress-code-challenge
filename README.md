# Shakewell Wordpress Code Challenge

## Instructions

This Wordpress installation installation uses Bedrocks (https://roots.io/bedrock/). Refer to the Bedrock website for documentation and understanding how it works.

-   Inside the tailpress theme, create a template name Page Builder that can be use by pages or posts

-   Install Advance Custom Field (ACF) Plugins. (Either use Wpackagist or commit the plugins to the repository)

-   Create an ACF field group name Page Hero that contain fields: Title, Description, Image

-   Display that Page Hero field group in a Page whenever it uses the Page Builder as the template

-   When I create a Page and use the Page Builder template, I can see the Page Hero field group, Put values into the fields. When I display the page, I should see the Title, Description, and Image that I entered. Do not mind the Design. It is OK if the Page have a very basic design

-   Create a Custom Post Type (Not from ACF. use traditional way) called Records

-   Create an ACF Field Group called Records Information with the following fields: Name, City, Birthday. To be used by the Records Custom Post Type only.

-   Enable REST for the Records Custom Post Type. I should be able to get a JSON result when I enter the following endpoint: /wp-json/wp/v2/records

-   Make sure that the ACF Field groups that are created is automatically exported into the acf-json folder inside the theme directory. If you can't do this, please export the ACF Field Groups created and manually add it. Please inform us if this is the case.
