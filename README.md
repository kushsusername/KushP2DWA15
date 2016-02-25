# Project 2

## Description
This project is to build a xkcd password generator. It takes input parameters from a user and then spits out a password with the respective requirements. Also, if the interaction is invalid, the user should see helpful errors messages letting them know what they may have done wrong. See the website + demo for additional details and information.

**URL** <http://p2.kushsdwa15.xyz/>
**DEMO** <https://youtu.be/PFhRBS5zY0Q>

## Known Errors
 - https://validator.w3.org/ says that an <icon> tag cannot be placed within an <a> tag. However I'm not really using an icon, but more a specific unicode character as the hyperlink. Bootstrap has framework around it which actually creates a valid interaction. The house icon on my website is clickable.

## Additional Design Details
 - I'm just keep 1 project that kind of builds on itself and in order to do so, I've built tabs. Now those tabs do navigate to different pages subdomains, but to the user the interaction percives to be all at the same website.
 - Testing this was slightly complex locally, and so I added domain specific checks in logic.php. You will see ```($_SERVER['SERVER_NAME'] == "p1.kushsdwa15.xyz")```
 - This, locally is configured to sample the different pages manually, but in production I replaced the URLs with the live ones.
 - This allows me to keep the same project and home and index, while having dynamic "title" and other fields.

## External Resources
 - Bootstrap <http://getbootstrap.com/>
 - Jquery <https://jquery.com/>
 - Word List Generator <https://www.randomlists.com/random-words>
