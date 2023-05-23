
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

aHwKc

 GIT :
 submodule
 git rebase

 version control system like SVN
  :- make copy every code & run any time & check

  1) local copy then move  to final code
  2) esaliy get old code & get correct line of code then push
  3) roll back & get issue when it will break
    in old way , people make zip for backup it will use lot of space memory
 
    https://medium.com/mindorks/what-is-git-commit-push-pull-log-aliases-fetch-config-clone-56bc52a3601c

    ####################################################################
    2 Video 

    Developer A 
    Developer B

    untracted file --->staged---> committed
                  git add      git commit
    add 
    staging area ---> local repo  commit ----> remote
    
    1) git install window/ linux
    2) git config user.name "your name"
    3) git config user.email "youremail"
    4) git config--list
      or 
      check your name 
      $ git config --global user.name


    5) git init 

    6) git log   or git log --oneline  (for single line)
    7) git clone 


  1)  git clone https://github.com/codeimprove0/shopes.git

    then as password 
    go to -> setting->developer setting
    create token Personal access tokens

    ghp_mVkDoxGoR90gqT7y7Tewea94Sg6N5J1  

    aHwKc

    9lIsv

    git reset --hard 76690958a0303eccf85c861e8d92b75d1acd6367

    1) create branch test 
    git checkout -b branchName
    2) add file 
    3) commit :-- add comment 
      git commit -m ""
      git commit -am ""
    4) push code 
    until not push code not move to server see in github

    git push origin branchName 
    git push <remote> <branch>
    git push <remote> --force


    5) git log :-- check your history  or git log --oneline  (for single line)
    6) git status 
    7) git add 
    8) git checkout filename 
    9) git add filename

    or add remote file

    10) untrack file means not added


    git add . The dot (.) operator is a wildcard meaning all files.

git add . : Stages new and modified files, without deleting.

git add -a : Stages all files.

git add -u : Stages modified and deleted, without new.


//------------- REMOTE ---------------------//

    git remote rm origin

    $ git remote add <origin/ any name> https://github.com/user/repo.git

    git remote -v
    git remote set-url cds https://github.com/codeimprove0/shopes.git

    $ git remote add origin https://github.com/user/repo.git

    A remote name
    A remote URL

    git remote show ci


    --------------------------

    Remote 
    origin:- is short name for the url
    default : master branch

    1) git init 
    2) git remote add origin https://github.com/codeimprove0/shopes.git



    NOTE :- 
    fatal: refusing to merge unrelated histories
    git pull origin master --allow-unrelated-histories

    3)     git remote -v
    4)     git remote rm origin
    git remote -v
    5) 

    git remote add cc https://github.com/codeimprove0/shopes.git

    6) use git push cc master
    git remote rm cc

    7) git remote rename old new

    git remote show ci

    -------------------------------------------------

video 3-----------

1) add,commit,diff, 
  red- working area 
  green:- stage area

  diff:- 
    git diff 
    git diff --staged

    logs 
    git log 
    git log --oneline
    goto-->.git file --> object
    git cat-file hash -p

2) branch , delete branch merge branch
  branch--> .git-->refs-->head --> branches

  git branch branchName
  or 
  git checkout -b branchname

  git checkout branchName
  cat .git/HEAD 

  Rename branch :-- 
    git branch -m newBranchname

    delete branch 

    git branch -d branchname

    add some data commit the delete use -D

3) merge branch & resolve conflict  


1) fetch, merge, pull 
2) branch, conflict, logs 

3) git ignore, gitdiff 
------------------------------------------

############
VIDEO 

git log --oneline --graph

-----------------------------------
video 
alias


1) git config --global alias.s status

2)  git config --global alias.last  'git log -p -1'


3) rename test2.js to test21.js
  git mv test2.js test_newname.js

  git status

4)  git rm filename   :-- remove with stage

  git rm --cached readme.md

---------------------------------------------
 
1) unstaging, stash, 
  restore 
    git restore --stage filename
      then 
      git restore filename
  


  video ---------------------- 
  unstaging & unmodifying, stash
  1) git checkout .
  git checkout filename
    or 
    git checkout -- filename 
    git checkout head filename 
  git checkout -f 


  2) git reset HEAD filename 
    or 
    git restore --staged filename 
  
  3) checkout command 
    1) move branch one to another git checkout branch
    2) create branch git checkout -b branchname
    3) git checkout .  remove modifiy file 
    4) git checkout logHash

    5) git checkout - 
        1) git checkout code1  then git checkout code2 then git checkout - 
    6) git checkout HEAD~3
 
-----------------------------------------  

1) 
git stash:- when move to other branch show msj

  git stash 
  git stash list
  git stash pop  // alsoo delete
  or 
  git stash apply {id}
  git stash save "modify save"


  show :- 
  git stash show 
  git stash show -p  :-- last changes for multiple use id below as
  git stash show stash@{0} -p


  new branch code
  git stash branch newBranch stash@{1}

  delete :- 
  git stash pop :--- add then delete from list last stash value
  git stash drop stash@{1}

  git stash clear
--------------------------------------------------------------  

1) cherry pick & merge abort 

git branch c1
git cherry-pick f153914
git log --oneline
git merge c1

git merge --abort



--------------------
    
1) changes file & 
  git add . 
  then 
  git reset or git reset --mixed  :- remove from stage but not local 
  git reset --hard :- remove from both stage & local


  2) stage to local commit 
  git reset --hard commitId
  remove commit from branch use this above 

  3) move to particular commit 
  git reset --mixed commitId 

  4)  git revert commitId

  5) git reset HEAD filename 
    or 
    git restore --staged filename 
    

-------------------------------------------  

2) amend command in
    https://www.youtube.com/watch?v=XFS7-5NqIUc&list=PL_euSNU_eLbegnt7aR8I1gXfLhKZbxnYX&index=19 

    git config --global core.editor "vim"

    git commit --amend

    git commit --amend -m "an updated commit message"

----------------------------------  
submodule

ghp_mVkDoxGoR90gqT7y7Tewea94Sg6N5J1
aHwKc

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

git submodule add https://github.com/codeimprove0/shopes.git

git submodule --init


git submodule update

 remove ------------------
git submodule deinit -f shopes 
rm -rf .git/modules/shopes 
rm -rf .gitmodules  
git rm -f shopes/
