# Руководство участника сообщества

## Стратегия ветвления для совместной разработки в GitHub

In order to facilitate collaborative development on the MODX source code managed at GitHub, a clear and consistent branching strategy has been adopted. This strategy consists of maintaining two permanent branches in each main Git repository: master, which represents code that is assumed to be in a production-ready state, and develop, which contains work to be incorporated into the "next release". However, there are a number of important supporting branches that will only live for a limited amount of time, including feature branches, production hotfix branches, and specific release branches. Though they are normal Git branches, they differ significantly in the way they are used in the development process.

### Постоянные ветки

Ветка `master` должна быть знакома любому пользователю git, предоставляет стабильный, готовый к боевому использованию код в репозитории. В нашем процессе у нас еще одна ветка с вечным циклом жизни - `develop`. Вы можете считать, что это так называемая "собирающая ветка", где все изменения собираются к следующему релизу. Так же из нее собираются ночные сборки. 

Когда код в `develop` достигает стабильной точки и готов к релизу, все изменения будут слиты в `master` ветку и помечены тегов с номером релиза. Каждый коммит слияния в `master` представляет собой выпуск релиза, по определению.

### Поддержка веток

В нашем процессе существует целый список вспомогательных веток, которые используются, чтобы помочь в совместной разработке исправлений, обновлений переводов, фич, подготовки релизов и быстрого применения патчей в готовых релизах. Эти ветки:

* __Ветки фич (Feature branches)__ - это ветки, с которыми будут работать разработчики из сообщества
* Ветки релизов
* Ветки быстрых исправлений (Hotfix branches)

Каждая из них имеет специальное назначение и строгие правила, регулирующие создание и слияние, но в остальном это обычные git-ветки.

### Работа с вашим форком на GitHub

MODX разработчики должны работать напрямую со своими личными форками на GitHub. Здесь предлагается способ подготовить свой локальный репозиторий разработчика для разработки любого MODX проекта:

	$ git clone git@github.com:YourGitUsername/revolution.git
	$ cd revolution
	$ git remote add upstream -f http://github.com/modxcms/revolution.git

Это устанавливает ваш форк в качестве стандартного удаленного репозитория `origin` и добавляет "священный" репозиторий под именем `upstream`. Вы можете добавить ссылки на форки других разработчиков и назвать их так, чтобы вы могли отслеживать каждого из них.

Пора идти вперед и создавать локальные ветки для постоянных веток из вашего форка, который `origin`: 

	$ git checkout -b master origin/master
	Switched to a new branch "master"
	$ git checkout -b develop origin/develop
	Switched to a new branch "develop"

Чтобы держать свои локальные ветки свежими относительно `develop` and `master`, обновляйтесь с репозитория `upstream`:

	$ git fetch upstream
	$ git checkout develop
	Switched to branch "develop"
	$ git merge --ff-only upstream/develop
	$ git checkout master
	Switched to branch "master"
	$ git merge --ff-only upstream/master
	$ git push origin develop master

Стоит отметить, что push в осноном для "показать" и не стоит пушить в постоянные ветки, даже в своих форках. Другими словами, имена веток `develop` и `master` в вашем форке должны всегда соответствовать именам веток в `upstream`. Ожидается, что все исправления будут отправлены в ветках для фич или быстрых исправлений, происходящих от соответствующей постоянной ветки или ветка с исправлением ошибки, происходящая от ветки релиза в `upstream` репозитории.

Также обратите внимание на флаг `--ff-only`, который гарантирует fast-forward слияние (в случае, когда вы сделали коммит в основную ветку не осознавая этого).

> #### Важно
> Пожалуйста, удостоверьтесь в том, что у вас установлена настройка autocrlf перед тем, как коммитить в ваш форк. Смотрите http://help.github.com/dealing-with-lineendings/, чтобы определить, какие настройки вам нужны. Это зависит от платформы, на которой вы работаете.
 	
### Ветки для фич (Feature Branches)

* Может ветвиться от: develop
* Соглашения именования: что угодно, кроме master, develop, release-, или hotfix-

Feature branches, also known as topic branches, are used to develop a specific new feature (or set of features) for the next release, or for a future release. The target release for the feature to be incorporated may well be unknown, and the branch will exist as long as that feature is in development. Once it is accepted and ready to be incorporated in the next release, it is merged into the develop branch by an integrator. If the feature is never completed or accepted, it can simply be discarded.

Feature branches typically exist in developer forks, and only for sharing purposes, not in the "blessed", or upstream repository.

#### Создание ветки для фичи

When starting work on a new feature, branch off from the develop branch.

	$ git checkout -b myfeature develop

#### Переключиться на новую ветку "myfeature"

Submitting a pull request for a finished feature
Once you have completed development of a feature on a branch, you should first make sure your work is replayed over the latest updates from develop:

	$ git fetch upstream
	$ git checkout develop
	Switched to branch {{develop}}
	$ git merge --ff-only upstream/develop
	$ git checkout myfeature
	Switched to branch "myfeature"
	$ git rebase develop
	
This will make it easier for integrators to incorporate your work without conflict.

Now simply push your feature to your fork (you can do this early on if you want to share your feature branch for collaboration):

	$ git push origin myfeature:myfeature
	
And you are ready to submit a pull request for your feature branch.

### Ветки для ошибок (Bug Branches)

If there's a bug in the MODX Bug Tracker that you would like to fix, here's a simple workflow you can follow.

First, fork the MODX Git repo on github, then clone your fork (see above).

You may wish to start clean if you already have a release branch locally. E.g. if you already have a "release-2.2" branch, you can delete it locally and start clean:

	git branch -D release-2.2
	
Next, you'll want to checkout the branch fresh from upstream:

	git fetch upstream
	git checkout -b release-2.2 upstream/release-2.2
	
Before you begin work on coding your fix, create a branch devoted to your upstream target (where XXXX is the bug number):

	git checkout -b bug-XXXX release-2.2
	
Now you're ready to do your changes. Fix the bug!

Once the bug is fixed, you can commit your changes and push your bugfix branch to your fork:

	git commit .
	git push origin bug-XXXX
	
Then you're ready to issue your pull request from Github.

Log into your Github account, find your MODX fork, then hit the button at the top that says "Pull Request".

![](http://rtfm.modx.com/download/attachments/33948128/github_modx_pull_request.jpg?version=1&modificationDate=1370290791000)

Make sure you select the "base branch" – you want to issue the pull request to the branch that initially checked out.
