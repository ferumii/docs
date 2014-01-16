# Git FAC (часто используемые команды)

* [How do I get and keep my local develop branch in sync?](#1)
* [How do I create a feature branch?](#2)

## [](#1) How do I get and keep my local develop branch in sync?
First, with MODX's collaboration and branching model, you won't be making commits to your develop branch, so it's easy to keep it up to date.

``` bash
	$ git fetch upstream
	$ git checkout develop
	Switched to branch "develop"
	$ git merge --ff-only upstream/develop
```

This assumes that the modxcms or blessed repo is set up as a remote named upstream. (git remote manpage: http://www.kernel.org/pub/software/scm/git/docs/git-remote.html)

## [](#2) How do I create a feature branch?
If you've just merged in the upstream repo's develop branch, then it's simple:

``` bash
	$ git checkout develop
	Switched to branch "develop"
	$ git checkout -b myFeatureBranchName
```