<p align="center">
	<img height="250px" src="https://raw.githubusercontent.com/levelsranks/levels-ranks-web/alpha/.github/logo.png">
</p>
<h1 align="center">
    Levels Ranks - WEB Interface
</h1>
<p><a href="https://www.codacy.com/manual/M0st1ce/levels-ranks-web?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=levelsranks/levels-ranks-web&amp;utm_campaign=Badge_Grade"><img src="https://api.codacy.com/project/badge/Grade/76c6d7faeac04277ba27d1e112f186fd"/></a>
<a href="https://php.net/" rel="nofollow"><img src="https://img.shields.io/badge/PHP-%3E%3D7.0-blue" alt="PHP" data-canonical-src="https://img.shields.io/badge/PHP-%3E%3D7.0-blue" style="max-width:100%;"></a></p>

-----

Пользовательский WEB интерфейс для взаимодействия с плагинами статистики <a href="https://github.com/levelsranks/levels-ranks-core">Levels Ranks</a>, <a href="https://hlmod.ru/resources/fire-players-stats.1232/">Fire Players Stats</a> и <a href="https://forums.alliedmods.net/showthread.php?t=290063">RankMe Kento Edition</a>.

Официальный канал поддержки в <a href="https://discord.gg/Mbjnh3h">Discord</a>.

-----

<p align="center">
	<img height="43px" src="https://raw.githubusercontent.com/levelsranks/levels-ranks-web/alpha/.github/just_themes.png">
</p>
<p align="center">
	<img height="560px" src="https://raw.githubusercontent.com/levelsranks/levels-ranks-web/alpha/.github/interface.png">
</p>
<p align="center">
	<img height="43px"src="https://raw.githubusercontent.com/levelsranks/levels-ranks-web/alpha/.github/full_adaptation.png">
</p>
<p align="center">
	<img height="880px"src="https://raw.githubusercontent.com/levelsranks/levels-ranks-web/alpha/.github/profile.png">
</p>
<p align="center">
	<img height="43px"src="https://raw.githubusercontent.com/levelsranks/levels-ranks-web/alpha/.github/multi_lingual.png">
</p>
<p align="center">
	<img width="720"src="https://raw.githubusercontent.com/levelsranks/levels-ranks-web/alpha/.github/flags.png">
</p>

-----

```
640K ought to be enough for anybody
```

Демо
-----

- https://warfal.ru/
- https://cybercs.ru/
- https://nsproject.site/
- https://war-cccr.ru/
- https://provincial-project.ru/
- https://foges.info/
- https://yablochko-csgo.ru/
- https://hellstar.fun/
- https://ttsserv.ru/
- https://lr.nightproject.ru/
- https://nokill.ru/
- https://unitcsgo.ru/
- https://lr.neostrike.ru/
- https://gg-pro.ru/levels/
- https://crystalx.ru/
- https://krivbass.xyz/
- https://blackpublic.ru/
- https://ice-css.ru/
- https://csepsilon.ru/
- https://oneraven13.ru/
- https://horizoncsgo.ru/
- https://dobavogonka.ru/stats/?page=lk
- https://grandlandcsgo.cssold.ru/
- https://russia.myarena.site/
- https://progaming.ba/csgo/stats/
- https://grandlandcsgo.cssold.ru/
- https://desperateproject.space/
- https://rsb-cs.ru/
- https://ezstars.myarena.site/?page=home
- https://sanders-cs.ru/
- https://torgaming.xyz/
- https://suicideserver.xyz/
- https://www.weallplay.eu/stats/web_dev/
- https://ilitagame.ru/
- https://czar-serv.ru/
- https://ilitagame.ru/
- https://gabepub.hl2.su/
- https://lvl.tkofficial.ru/
- https://wocawp.ru/stats/
- https://bberryproject.ru/lr/
- https://sanders-cs.ru/
- https://elustic.ru/
- https://malldova.ru/
- https://hask-gaming.ru/

Требования
-----

- **Обязательно**
  - PHP 7.0 и выше.
  - Поддержка PHP PDO.
  - Поддержка PHP GMP.
  - Поддержка PHP BCMath.
  - Поддержка PHP cURL.
  - Поддержка PHP json.
  - Поддержка PHP Zip.
- **Рекомендуется**
  - MySQL 5.7 или MariaDB 10.1 и выше.

Установка
-----

- Скачать **stable *(Рекомендуется)*** или dev релиз Levels Ranks WEB.
- Извлечь файлы из архива и переместить их в любой каталог на вашем домене или субдомене.
- Перейти на ваш сайт с извлеченной Levels Ranks WEB и пройти процесс установки.
- Profit!

Детальная настройка базы данных
-----

Файл и директория:
```
/storage/cache/sessions/db.php
```
<details><summary>Основной шаблон</summary>

```
<?php return ['LevelsRanks' => 
                [0 => 
                    [
                    'HOST' => 'Ваш хост',
                    'USER' => 'Логин',
                    'PASS' => 'Пароль',
                    'DB'   => [0 => 
                                  [
                                  'DB'     => 'Имя основной базы данных',
                                  'Prefix' => [0 => 
                                                  [
                                                  'table' => 'Название таблицы (lvl_base)',
                                                  'name'  => 'Название (Основной AWP сервер)',
                                                  'mod' => '730/240/215',
												  'ranks_pack' => 'default',
                                                  'steam' => '1/0'
                                                  ],
                                               ],
                                  ],
                              ],
                    ],
                ],
		'Core' => 
                [0 => 
                    [
                    'HOST' => 'Ваш хост',
                    'USER' => 'Логин',
                    'PASS' => 'Пароль',
                    'DB'   => [0 => 
                                  [
                                  'DB'     => 'Имя основной базы данных',
                                  'Prefix' => [0 => 
                                                  [
                                                  'table' => 'lvl_'
                                                  ],
                                               ],
                                  ],
                              ],
                    ],
                ],
];
```
</details>

<details><summary>Если вы используете две и более таблиц в одной базе данных</summary>

```
<?php return ['LevelsRanks' => 
                [0 => 
                    [
                    'HOST' => 'Ваш хост',
		    'PORT' => '3306',
                    'USER' => 'Логин',
                    'PASS' => 'Пароль',
                    'DB'   => [0 => 
                                  [
                                  'DB'     => 'Имя основной базы данных',
                                  'Prefix' => [0 => 
                                                  [
                                                  'table' => 'Название таблицы (lvl_base)',
                                                  'name'  => 'Название (Основной AWP сервер)',
                                                  'mod' => '730/240/215',
												  'ranks_pack' => 'default',
                                                  'steam' => '1/0'
                                                  ],
                                                  [
                                                  'table' => 'Название таблицы 2 (lvl_base_2)',
                                                  'name'  => 'Название (Основной MM сервер)',
                                                  'mod' => '730/240/215',
												  'ranks_pack' => 'default',
                                                  'steam' => '1/0'
                                                  ],
                                              ],
                                  ],
                              ],
                    ],
                ],
		'Core' => 
                [0 => 
                    [
                    'HOST' => 'Ваш хост',
                    'USER' => 'Логин',
                    'PASS' => 'Пароль',
                    'DB'   => [0 => 
                                  [
                                  'DB'     => 'Имя основной базы данных',
                                  'Prefix' => [0 => 
                                                  [
                                                  'table' => 'lvl_'
                                                  ],
                                               ],
                                  ],
                              ],
                    ],
                ],
];
```
</details>

<details><summary>Если вы используете две и более базы данных из под одного пользователя</summary>

```
<?php return ['LevelsRanks' => 
                [0 => 
                    [
                    'HOST' => 'Ваш хост',
		    'PORT' => '3306',
                    'USER' => 'Логин',
                    'PASS' => 'Пароль',
                    'DB'   => [0 => 
                                  [
                                  'DB'     => 'Имя основной базы данных',
                                  'Prefix' => [0 => 
                                                  [
                                                  'table' => 'Название таблицы (lvl_base)',
                                                  'name'  => 'Название (Основной AWP сервер)',
                                                  'mod' => '730/240/215',
												  'ranks_pack' => 'default',
                                                  'steam' => '1/0'
                                                   ],
                                               ],
                                  ],
                                  [
                                  'DB'     => 'Имя второй базы данных',
                                  'Prefix' => [0 => 
                                                  [
                                                  'table' => 'Название таблицы (lvl_base)',
                                                  'name'  => 'Название (Новый MM сервер)',
                                                  'mod' => '730/240/215',
												  'ranks_pack' => 'default',
                                                  'steam' => '1/0'
                                                  ]
                                              ],
                                  ],
                              ],
                    ],
                ],
		'Core' => 
                [0 => 
                    [
                    'HOST' => 'Ваш хост',
                    'USER' => 'Логин',
                    'PASS' => 'Пароль',
                    'DB'   => [0 => 
                                  [
                                  'DB'     => 'Имя основной базы данных',
                                  'Prefix' => [0 => 
                                                  [
                                                  'table' => 'lvl_'
                                                  ],
                                               ],
                                  ],
                              ],
                    ],
                ],
];
```
</details>

<details><summary>Если вы используете двух и более пользователей с разными базами данных</summary>

```
<?php return ['LevelsRanks' => 
                [0 => 
                    [
                    'HOST' => 'Ваш хост',
		    'PORT' => '3306',
                    'USER' => 'Логин',
                    'PASS' => 'Пароль',
                    'DB'   => [0 => 
                                  [
                                  'DB'     => 'Имя основной базы данных',
                                  'Prefix' => [0 => 
                                                  [
                                                  'table' => 'Название таблицы (lvl_base)',
                                                  'name'  => 'Название (Основной AWP сервер)',
                                                  'mod' => '730/240/215',
												  'ranks_pack' => 'default',
                                                  'steam' => '1/0'
                                                   ],
                                               ],
                                  ],
                              ],
                    ],
                    [
                    'HOST' => 'Ваш хост 2',
		    'PORT' => '3306',
                    'USER' => 'Логин 2',
                    'PASS' => 'Пароль 2',
                    'DB'   => [0 => 
                                  [
                                  'DB'     => 'Имя базы данных',
                                  'Prefix' => [0 => 
                                                  [
                                                  'table' => 'Название таблицы (lvl_base)',
                                                  'name'  => 'Название (Основной AWP сервер)',
                                                  'mod' => '730/240/215',
												  'ranks_pack' => 'default',
                                                  'steam' => '1/0'
                                                   ],
                                               ],
                                  ],
                              ],
                    ],
                ],
		'Core' => 
                [0 => 
                    [
                    'HOST' => 'Ваш хост',
                    'USER' => 'Логин',
                    'PASS' => 'Пароль',
                    'DB'   => [0 => 
                                  [
                                  'DB'     => 'Имя основной базы данных',
                                  'Prefix' => [0 => 
                                                  [
                                                  'table' => 'lvl_'
                                                  ],
                                               ],
                                  ],
                              ],
                    ],
                ],
];
```
</details>

<details><summary>Если модулю необходимо подключение к другому <b>"моду" (SB/MA пример)</b></summary>

Используйте шаблон подключения из описания модуля.
Пример. Интерация SourceBans или Material Admin:

```
<?php return ['LevelsRanks' => 
                [0 => 
                    [
                    'HOST' => 'Ваш хост',
		    'PORT' => '3306',
                    'USER' => 'Логин',
                    'PASS' => 'Пароль',
                    'DB'   => [0 => 
                                  [
                                  'DB'     => 'Имя основной базы данных',
                                  'Prefix' => [0 => 
                                                  [
                                                  'table' => 'Название таблицы (lvl_base)',
                                                  'name'  => 'Название (Основной AWP сервер)',
                                                  'mod' => '730/240/215',
												  'ranks_pack' => 'default',
                                                  'steam' => '1/0'
                                                  ],
                                              ],
                                  ],
                              ],
                    ],
                ],
		'Core' => 
                [0 => 
                    [
                    'HOST' => 'Ваш хост',
                    'USER' => 'Логин',
                    'PASS' => 'Пароль',
                    'DB'   => [0 => 
                                  [
                                  'DB'     => 'Имя основной базы данных',
                                  'Prefix' => [0 => 
                                                  [
                                                  'table' => 'lvl_'
                                                  ],
                                               ],
                                  ],
                              ],
                    ],
                ],
		'SourceBans' => 
                [0 => 
                   [
                   'HOST' => 'Хост SB/MA',
		   'PORT' => '3306',
                   'USER' => 'Логин SB/MA',
                   'PASS' => 'Пароль SB/MA',
                   'DB'   => [0 => 
                                 [
                                 'DB'     => 'Имя базы данных SB/MA',
                                 'Prefix' => [0 => 
                                                 [
                                                 'table' => 'sb_',
                                                 'name'  => 'SourceBans',
                                                 'mod' => '730/240/215',
                                                 'steam' => '1/0'
                                                 ],
                                             ],
                                 ],
                             ],
                   ],
               ],
];
```

</details>

Доступные модули
-----

<details><summary>LR WEB (min. dev #0.2.114) - Мини-Статистика на главной странице</summary>

<p align="center">
	<img src="https://raw.githubusercontent.com/levelsranks/levels-ranks-web/alpha/.github/modules/module_block_main_stats.png">
</p>

- **Старница отображения**: Главная
- **Информация**: Добавляет три мини блока с описанием количества игроков, игроков которые заходили за последние 24 часа и количестве убийств в голову.
- **Скачать:** Доступен в базовом пакете модулей.
</details>

<details><summary>LR WEB (min. dev #0.2.114) - Мониторинг онлайна на главной странице</summary>

<p align="center">
	<img src="https://raw.githubusercontent.com/levelsranks/levels-ranks-web/alpha/.github/modules/module_block_main_servers_monitoring_type_3.png">
</p>

- **Старница отображения**: Главная
- **Информация**: Добавляет мониторинг онлайна серверов с возможностью подключения.
- **Скачать:** Доступен в базовом пакете модулей.
</details>

<details><summary>LR WEB (min. dev #0.2.114) - Топ игроков на главной странице</summary>

<p align="center">
	<img src="https://raw.githubusercontent.com/levelsranks/levels-ranks-web/alpha/.github/modules/module_block_main_top.png">
</p>

- **Старница отображения**: Главная
- **Информация**: Добавляет блоки с "топ 10" каждой подключенной таблице Levels Ranks.
- **Скачать:** Доступен в базовом пакете модулей.
</details>

<details><summary>LR WEB (min. dev #0.2.114) - Профили</summary>

<p align="center">
	<img src="https://raw.githubusercontent.com/levelsranks/levels-ranks-web/alpha/.github/modules/module_page_profiles.png">
</p>

- **Старница отображения**: profiles
- **Информация**: Добавляет страницы игроков с их личной статистикой.
- **Скачать:** Доступен в базовом пакете модулей.
</details>

<details><summary>LR WEB (min. dev #0.2.114) - Статистика игроков</summary>

<p align="center">
	<img src="https://raw.githubusercontent.com/levelsranks/levels-ranks-web/alpha/.github/modules/module_page_toppoints.png">
</p>

- **Старница отображения**: toppoints
- **Информация**: Добавляет страницу со статистикой всех игроков игроков.
- **Скачать:** Доступен в базовом пакете модулей.
</details>

<details><summary>LR WEB (min. dev #0.2.114) - Распределением рангов</summary>

<p align="center">
	<img src="https://raw.githubusercontent.com/levelsranks/levels-ranks-web/alpha/.github/modules/module_page_rankstats.png">
</p>

- **Старница отображения**: rankstats
- **Информация**: Добавляет страницу с распределением рангов на серверах.
- **Скачать:** Доступен в базовом пакете модулей.
</details>

<details><summary>LR WEB (min. dev #0.2.114) - Панель администратора</summary>

- **Старница отображения**: adminpanel
- **Информация**: Добавляет гибкое администрирование вэб интерфейсом и полезные функции.
- **Скачать:** Доступен в базовом пакете модулей.
</details>

<details><summary>LR WEB (min. dev #0.2.114) - Страница с банами</summary>

<p align="center">
	<img src="https://raw.githubusercontent.com/levelsranks/levels-ranks-web/alpha/.github/modules/module_page_bans.png">
</p>

- **Старница отображения**: bans
- **Информация**: 
  - Интеграция с SB/MA.
  - Необходимо добавить в db.php новый мод "SourceBans" и описать подключение. Название таблицы указать префиксом, пример: "sb_".
- **Скачать:** Доступен в базовом пакете модулей.
</details>

<details><summary>LR WEB (min. dev #0.2.114) - Страница с мутами</summary>

<p align="center">
	<img src="https://raw.githubusercontent.com/levelsranks/levels-ranks-web/alpha/.github/modules/module_page_comms.png">
</p>

- **Старница отображения**: comms
- **Информация**: 
  - Интеграция с SB/MA.
  - Необходимо добавить в db.php новый мод "SourceBans" и описать подключение. Название таблицы указать префиксом, пример: "sb_".
- **Скачать:** Доступен в базовом пакете модулей.
</details>

Благодарность
-----

- pedrotski#1184 (Discord, ghostcapgaming.com) - 3 803 RUB.
- Larsalex    (hlmod.ru)  - 3000 RUB.
- .ZΛCHΞR#1337(Discord)   - 2093.37 RUB.
- CEED 🐼#4061  (Discord)   - 1488 RUB.
- mixxed.xyz#4469 (Discord) - 1200 RUB.
- Эльдарка#7777   (Discord)  - 1055.1 RUB.
- OkyHek#2441 (Discord)   - 1000 RUB.
- Felya#1342  (Discord)   - 817.12 RUB.
- Clubber#2324 (Discord) - 784,44 RUB.
- Nestor#9876 (Discord)   - 600 RUB.
- MAMAC#9993  (Discord)   - 511.05 RUB.
- dyoma#5525  (Discord)   - 500 RUB.
- Морячок#9904  (Discord)   - 500 RUB.
- Xzotys#3880  (Discord)   - 500 RUB.
- Unity       (hlmod.ru)  - 460 RUB.
- MotherRussia#2235    (Discord)   - 350 RUB.
- interes#3153    (Discord)   - 300 RUB.
- xek#1152    (Discord)   - 300 RUB.
- Paranoiiik  (hlmod.ru)  - 300 RUB.
- L1MON#4529  (Discord)   - 300 RUB.
- ju4ka1371   (hlmod.ru)  - 282 RUB.
- Good Game Project ( gg-pro.ru ) - 250 RUB.
- Wend4r      (hlmod.ru)  - 250 RUB.
- Rabb1t      (hlmod.ru)  - 250 RUB.
- Sleep#0725  (Discord)   - 250 RUB.
- ERROR404#9842 (Discord)  - 200 RUB.
- Malenkiy Alik#1945 (Discord)  - 200 RUB.
- Морковка#7277 (Discord)  - 200 RUB.
- valerun     (hlmod.ru)  - 185 RUB.
- FIVE#3136   (Discord)   - 155 RUB.
- MaZa#8322    (Discord)  - 150 RUB.
- ™S.E.N.A.T.O.R™♛#1466 (Discord)  - 150 RUB.
- SynZilla    (hlmod.ru)  - 150 RUB.
- d4Ck#0698 (Discord)   - 147.67 RUB.
- ka1jaru#1648 (Discord)  - 137.45 RUB.
- uraganas#7978 (Discord)   - 132 RUB.
- Domikuss#3855 (Discord) - 121.45 RUB.
- punisher89#7116 (Discord)  - 104.45 RUB.
- SV3N#9923   (Discord)   - 100.40 RUB.
- HILER#3959  (Discord)   - 100 RUB.
- Truyn#6750  (Discord)   - 100 RUB.
- DevBT#4750  (Discord)   - 100 RUB.
- DismoraL    (hlmod.ru)  - 100 RUB.
- xXMaXimXx   (hlmod.ru)  - 100 RUB.
- Twenix#4347 (Discord)   - 100 RUB.
- LEGACY#3877 (Discord)   - 50 RUB.
- ARONGAMES#2063 (Discord)   - 50 RUB.
- fr4nch#3619 (Discord)   - 50 RUB.
- HolyHender#8673 (Discord)   - 33 RUB.
- Мировой     (hlmod.ru)  - 29 RUB.

Блок разработчика
-----

<details><summary>dev</summary>

Скелет WEB интерфейса (dev #0.2.114)
-----

```
/app            - Ядро.
  /ext          - PHP Классы.
  /includes     - Основные и дополнительные PHP функции.
  /modules      - Каталог с модулями.
  /page         - Основные заготовки и шаблоны WEB интерфейса.
  
/storage        - Хранилище.
  /assets       - CSS, JS, Fonts файлы.
  /cache        - Основной кэш.
    /img        - Кэш изображений.
    /sessions   - Кэш связанный с работой ядра.
      
/index.php      - 'Hello World'
```
Модули
-----

Каталог с модулями:
```
/app/modules
```
Что представляет из себя модуль **(На примере `module_block_main_stats`)**:
```
/app
  /modules
    /module_block_main_stats       - Название папки = ID модуля.
      /ext          		   	   - PHP Классы.
      /assets                      - Ассеты.
        /css                       - CSS ассеты.
        /js                        - JS ассеты.
      /forward                     - Функциональная часть.
        /data.php                  - Пре-инициализация. Скрипт начинает свою работу до загрузки шаблона страницы.
	/data_always.php           	   - Пре-инициализация. Скрипт начинает свою работу до загрузки шаблона и работает на всех страницах.
        /interface.php             - Инициализация. Скрипт начинает свою работу во время загрузки шаблона.
      /temp						   - Кэш файлы.
    /description.json - Описание модуля
    /translation.json - Если модуль имеет мультиязычность, переводы описываются в данном файле.

```
</details>

-----

<p align="right">
	<img height="75px" src="https://raw.githubusercontent.com/levelsranks/levels-ranks-web/alpha/.github/authors.png">
</p>
