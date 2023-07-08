# Git & GitHub
---
## Git
* Git is the industry-standard version control system for web developers
* Use Git commands to help keep track of changes made to a project:
* `git init` creates a new Git repository
* `git status` inspects the contents of the working directory and staging area
* `git add ` *filename*: adds files from the working directory to the staging area
    * `git add . ` to add everything in the cwd to the staging area 
    * Staging Multiple Files: `git add filename_1 filename_2`
* `git diff ` *filename*: shows the difference between the working directory and the staging area
* `git commit -m "my message here"` permanently stores file changes from the staging area in the repository
* `git log` shows a list of all previous commits
* `git checkout HEAD filename`: Discards changes in the working directory.
    * Restore a file in hte workgin directory to look as it did in our last commit.
    * `HEAD`: The commit we are currently on.
* `git reset HEAD filename`: Unstages file changes in the staging area.
* `git reset commit_SHA`: Resets to a previous commit in your commit history.
    * SHA (commit's long code)
    * We only need to write the first 7 characters of the SHA
    <br />

* Git branching 
    * Allows users to experiment with different versions of a project by checking out separate branches to work on.
        * It is very useful to develop new project features.
    * The following commands are useful in the Git branch workflow.
        * `git branch`: Lists all a Git project’s branches.
        * `git branch branch_name`: Creates a new branch.
            * If we are on "master/main", this branch and the new one, will share the exact same commit history.  
        * `git checkout branch_name`: Used to switch from one branch to another.
        * `git merge branch_name`: Used to join file changes from one branch to another.
        * `git branch -d branch_name`: Deletes the branch specified.
`
## GitHub

* Git is defined as a version control system that’s maintained on your local system.
* GitHub, is a hosting service for repositories.
* Git is the tool and GitHub is the service for projects that use Git

## Git Teamwork

* Git Remote
    * A *remote* is a **shared Git repository** 
    * It allows multiple collaborators to work on the same Git project from different locations.
    * Collaborators work on the project independently and **merge changes together** when they are ready to do so.
<br />

* The Git Collaborative Workflow is:
    1. Fetch and merge changes from the remote
    2. Create a branch to work on a new project feature
    3. Develop the feature on a branch and commit the work
    4. Fetch and merge from the remote again (in case new commits were made)
    5. Push branch up to the remote for review
    * Steps 1 and 4 are a safeguard against **merge conflicts**
        * It may occur when two branches contain file changes that cannot be merged with the git merge command.
<br />

* Basic commands: 
    * `git clone`: Creates a local copy of a remote.
    * `git remote -v`: Lists a Git project’s remotes.
    * `git fetch`: Fetches work from the remote into the local copy.
    * `git merge origin/master`: Merges origin/master into your local branch.
    * `git push origin <branch_name>`: Pushes a local branch to the origin remote.
<br />

* List the Git Remotes
    * `git remote -v` command returns a verbose list of remote repositories that the current project is tied to
    * Git lists the name of the remote repository as well as its locations.
    * Git automatically names this remote origin, because it refers to the remote repository of origin. However, it is possible to safely change its name.
    * The remote is listed twice: once for (fetch) and once for (push).
<br />

* Pushing Branch Changes
    * `git push origin branch-name command`` pushes the branch, and all committed changes, to the remote. 
    * This branch can now be reviewed by collaborators.
<br />

* Cloning a Remote Repository   
    * `git clone` *remote_location* *clone_name* : creates a local copy of a remote repository.
    * *remote_location* tells Git where to find the remote repository and can be a filepath or web address.
    * *clone_name* is the name of the directory where the remote repository’s contents will be copied.  
<br />

* Fetching Remote Origin Changes
    * `git fetch` : downloads objects from the origin remote repository.
    * The changes, are **NOT merged** into the current branch-name branch. Instead, 
    * they are **stored** in the origin/branch-name branch, **waiting to be merged**.
<br />

* Collaborative Workflow Tip:
    * [How to write the perfect pull request - GitHub](https://github.blog/2015-01-21-how-to-write-the-perfect-pull-request/)
