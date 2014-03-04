# Git FAC (часто используемые команды)

* [How do I get and keep my local develop branch in sync?][1]
* [How do I create a feature branch?][2]
* [Is there a naming convention for feature branches?][3]
* [Do I need a new feature branch for every issue that I work on?][4]
* [How do I keep my feature branch in sync with the upstream develop branch?][5]
* [Do I really need to worry about the master branch?][6]

## How do I get and keep my local develop branch in sync?

First, with MODX's collaboration and branching model, you won't be making commits to your develop branch, so it's easy to keep it up to date.

``` bash
	$ git fetch upstream
	$ git checkout develop
	Switched to branch "develop"
	$ git merge --ff-only upstream/develop
```

This assumes that the modxcms or blessed repo is set up as a remote named upstream. (git remote manpage: http://www.kernel.org/pub/software/scm/git/docs/git-remote.html)

## How do I create a feature branch?

If you've just merged in the upstream repo's develop branch, then it's simple:

``` bash
	$ git checkout develop
	Switched to branch "develop"
	$ git checkout -b myFeatureBranchName
```

## Is there a naming convention for feature branches?

If you are fixing a bug from a ticket in the issue tracker (please file a ticket for the bug first if there isn't one) then you can name your branch "bug-xxxx" where xxxx is the issue number from the bug tracker.

```
	$ git checkout -b bug-1234
```

If you are working on an "improvement" ticket in the issue tracker, use the prefix "impr-"

``` bash
	$ git checkout -b impr-2345
```

If you are working on a feature which does not have a ticket, you can name it anything except master, develop, release-, or hotfix-

``` bash
	$ git checkout -b myAwesomeFeature
```

## Do I need a new feature branch for every issue that I work on?

Да.

``` bash
	$ echo 'Да'
```

## How do I keep my feature branch in sync with the upstream develop branch?

If you're working on a feature that's taking a while, you may find it beneficial to keep in sync with upstream changes. Git allows you to "replay" your commits over top of changes in the develop branch using the rebase command.

In fact, it's generally a good idea to do this before any final commits to your fork and issuing a Pull Request.

``` bash
  $ git fetch upstream
  $ git checkout develop
  Switched to branch {{develop}}
  $ git merge --ff-only upstream/develop
  $ git checkout myfeature
  Switched to branch "myfeature"
  $ git rebase develop
```

To learn more, here's the git rebase manpage: http://www.kernel.org/pub/software/scm/git/docs/git-rebase.html

## Do I really need to worry about the master branch?

No, not really. If you want to, you can. But it's not critical to the workflow of a contributor at all.

``` bash
	$
````

[1]: #how-do-i-get-and-keep-my-local-develop-branch-in-sync
[2]: #how-do-i-create-a-feature-branch
[3]: #is-there-a-naming-convention-for-feature-branches
[4]: #do-i-need-a-new-feature-branch-for-every-issue-that-i-work-on
[5]: #how-do-i-keep-my-feature-branch-in-sync-with-the-upstream-develop-branch
[6]: #do-i-really-need-to-worry-about-the-master-branch