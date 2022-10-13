# Group F year 1 period 1 

## Project OUI

A NHLStenden student project in cooparation with an imaginary dutch french coffeeshop that is represented by two of our teachers Gerjan Van Oenen and Bart Oerlemans.

### Group members:
* Joey Krämer (Team leader) Email: joey.kramer@student.nhlstenden.com
* Grzegorz Tomkiel (Co-leader) Email: grzegorz.tomkiel@student.nhlstenden.com
* Lorand Hajos Email: lorand.hajos@student.nhlstenden.com
* Hakan Ege Email: hakan.ege.ozerol@student.nhlstenden.com
* Iarina Dicu Email: iarina.dicu@student.nhlstenden.com
* Andrii Chumakov Email: andrii.chumakov@student.nhlstenden.com
* Lennox James Email: lennox.james@student.nhlstenden.com

## Git tutorial

Everyone has their own branch to work on. Make sure you use that one.

| Name             | Branch   |
| -----------------| -------- |
| Joey Krämer      | feature7 |
| Grzegorz Tomkiel | feature6 |
| Lorand Hajos     | feature3 |
| Hakan Ege        | feature4 |
| Iarina Dicu      | feature2 |
| Andrii Chumakov  | feature5 |
| Lennox James     | feature  |

### If you want to use git make sure you
1. Open your terminal/console 
2. Navigate to the folder where you have the project files ```cd GroupF-term1```
3. Switch to your branch
4. Pull
4. Write your code
5. Commit, pull, push, create pull request
6. Repeat 4.-6. until done

### To switch to you branch
1. git checkout YOUR_BRANCH_HERE (keep in mind this will discard all your local changes)

### To commit your changes and push your files
1. git add . (This command adds all the files to git)
2. git commit -m "YOUR_MESSAGE_HERE" (message is necessary, always give information what you have done)
3. git pull (make sure you have the latest version)
4. git push (push the commits to GitHub)

### To get the newest files from git
1. git pull

### To create a pull request
1. Go to the GitHub repository
2. Click pull requests
3. New pull request
4. Click on your branch
5. Write a title, a short comment and add Lorand and Joey as reviewers
6. Wait for feedback

### To revert your push
1. Find the hash of you commit from GitHub
2. git revert GIT_COMMIT_HASH
3. git commit -m "MESSAGE"
4. git push

### To sync your branch to master
1. Make sure you are in your branch
2. git fetch origin
3. git merge origin/master
4. (optional) fix merge conflicts
