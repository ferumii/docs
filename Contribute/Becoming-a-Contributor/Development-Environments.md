# Окружение разработчика

## Рекомендуемые инструменты и окружение разработчика для MODx Revolution

В разработке MODX команда MODX находит следующие программы и среды бесценными:

### Netbeans
* Netbeans 6.8
* Плагин Git для Netbeans

### Eclipse
* Eclipse 3.2.+ (рекомендуется последняя версия 3.5.1)
* Web Standard Tools Project (WST) 2.0.1 (http://download.eclipse.org/webtools/updates/)
* eGit
* PHPEclipse 1.2.3 (http://update.phpeclipse.net/update/nightly)
* Spket IDE 1.6.18 (http://spket.com/update/)

### Установка Eclipse
* Просто установите последнюю версию Eclipse Classic
* Запустите Eclipse / выберите рабочее пространство (workspace)
* Выберите опцию Install Software под меню помощи
* Кликните правой клавишей мыши и скопируйте каждую из ссылок выше
* Нажмите кнопку "Добавить" ("Add")
* Назовите "repo" WST, Subclipse, PHPEclipse, или Spket, как он соотносится с URL
* Вставьте ссылку
* Кликните OK
* Повторите для каждой ссылки выше по мере необходимости
* Подробнее о каждом:
    * WST - выберите последнюю версию Web Tools Platform (занимает некоторое время)
    * Subclipse - просто установите опцию Subclipse
    * PHPEclipse - установите все, что предлагается
    * Spket - Установите все, что предлагается

### Другие инструменты

Для Mac:

* [PhpStorm](http://www.jetbrains.com/phpstorm/) - IDE
* [TextMate](http://macromates.com/) - IDE
* [Coda](http://www.panic.com/coda/) - IDE

Для PC:

* [PhpStorm](http://www.jetbrains.com/phpstorm/) - IDE
* [UltraEdit](http://www.ultraedit.com/) - IDE
* [E](http://www.e-texteditor.com/) - IDE
* [msysgit](http://code.google.com/p/msysgit/) - linux-подобная консоль для git

Для Linux:

* [PhpStorm](http://www.jetbrains.com/phpstorm/) - IDE
* [Kate](http://kate-editor.org/) - IDE для Linux/KDE

### Окружение сервера разработки

Так же используются MacPorts, XAMPP и MAMP и следующие инструменты/библиотеки в разработке MODx Revolution:

__PHPUnit__ - это драйвер для PHP 5.1+ для фреймворка модульного тестирования для xPDO, и команда MODx будет добавлять все больше надежных тестов.
__PHPDocumentor__ - все классы в MODx Revolution документированы в формате PHPDoc и команда MODx будет создавать инструкции и другую документацию для включения в PHPDocs в формате DocBook XML.
__Phing__ - будет позволять делать автоматически собираемые ночные билды, другие различные сборки, юнит-тестирование и много других задач разработки.