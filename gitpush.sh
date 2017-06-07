git init
git add *
read -p "Enter your Commit String : " commit 
git commit -m "$commit"
git push -u origin master
