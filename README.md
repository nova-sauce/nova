Install NVM (Node Version Manager): http://learn.bevry.me/node/install/#install-node-js-via-node-version-manager-https-github-com-creationix-nvm-

then run `nvm use` from the root directory of the project. if you get an error saying you don't have that version of node then run `nvm install 0.12.7`

run `npm i` then you can build the site by running `gulp build`, launch a dev server by running `gulp dev` or a production ready environment by running `gulp live`