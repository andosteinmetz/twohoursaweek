#!/bin/sh

mkdir -p kirby/content
mkdir -p kirby/content/actions
mkdir -p kirby/content/actions/1-test-action

echo "Title: Test Action\n\n----\n\nIntro Text: Example introductory text. This is what appears before you click to see the full action. \n\n----\n\nDescription: This text could populate a meta tag, or serve as Facebook og:description.\n\n----\n\nStatus-message: This field has gone unused, and has been replaced with the Active boolean\n\n----\n\nAction-type: electoral\n\n----\n\nCause-type:\n\n----\n\nTags:\n\n----\n\nFurther-info: Here is where the main body of the action goes. Lorem ipsum dolor sit amet conscutet. Etc." > kirby/content/actions/1-test-action/action.txt

