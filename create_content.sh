#!/bin/sh

mkdir -p kirby/content
mkdir -p kirby/content/actions
mkdir -p kirby/content/actions/1-test-action

echo "Title: Test Action\n\n----\n\nIntro Text: Example introductory text. This is what appears before you click to see the full action. \n\n----\n\nDescription: This text could populate a meta tag, or serve as Facebook og:description.\n\n----\n\nStatus-message: This field has gone unused, and has been replaced with the Active boolean\n\n----\n\nAction-type: electoral\n\n----\n\nCause-type:\n\n----\n\nTags:\n\n----\n\nFurther-info: Here is where the main body of the action goes. Lorem ipsum dolor sit amet conscutet. Etc." > kirby/content/actions/1-test-action/action.txt

mkdir -p kirby/content/about

echo "Title: About\n\n----\n\nText: We imagine ourselves as a venn diagram, an overlapping group with various interests and concerns, united by a shared sense of the world we want to live in.\n\nWe are a small group of volunteers, called to action with the express goal of fostering self motivation in the individuals within our community. We are here to support you as you begin to work on projects and take action in small and large steps. We realize that people will have different strengths they can offer, varying time, experience, passion, and interest. We aim to meet each of you at the level that is comfortable for you, and encourage you to become as involved as you are inspired to be.\n\nWe also recognize that there are hours in our day that could be better spent; if we can spend 2 hours a day online, surely we can each spend 2 hours a week making the world a better place. Long term, we hope to change the way we relate to the world of politics and policy. It is clear that we can not expect change from the top down, we must now build it from the bottom up.\n\nWe are sending out daily emails with concrete actions to take. We are also hosting local meetings in NYC, collaborating with other groups, and supporting our members in starting action groups to focus on specific issues. We've been meeting with lobbyists, politicians, community organizers, non-profit leaders and seasoned activists to learn how we can best be of service, and have our voices be heard.\n\nWe believe that the world has changed, and it's time that we the people become our own lobbyists, and create the change we want instead of waiting for someone else to do it. We encourage everyone to reach out and share your dreams for a better future in the form of simple or long term actions we can take, or let us know if you want to join us in organizing. Thank you for your activism." > kirby/content/about/default.txt

mkdir -p kirby/content/freeform

echo "Title: Freeform Section\n\n----\n\nText: This is an area for editors to put in whatever they want to add." > kirby/content/freeform/default.txt

mkdir -p kirby/content/home

echo "Title: Home\n\n----\n\nIntro: Yay! If you are seeing this, the installation of Kirby worked. :-)\n\nText: " > kirby/content/home/home.txt

echo "Title: 2 Hours A Week\n\n----\n\nAuthor: Two Hours a Week\n\n----\n\nDescription: We are fostering a new level of civic engagement following the 2016 election by offering you 2 hours a week of tangible action.\n\n----\n\nCopyright: &copy; 2017 2 Hours a Week" > kirby/content/site.txt
