<?php
$manifest = array(
    'name' => 'semlot_sectors',
    'acceptable_sugar_versions' => array(),
    'acceptable_sugar_flavors' => array('CE'),
    'author' => 'Leon.V.Nikitin@pravmail.ru',
    'description' => 'Добавление направлений в основные модули (semlot)',
    'is_uninstallable' => true,
    'published_date' => '2016-08-19',
    'type' => 'module',
    'version' => '1.1.0',
);
$installdefs = array(
    'id' => 'semlot_sectors',
	'language' => array (
      array (
        'from' => '<basepath>/source/modules/Tasks/language/ru_ru.lang.php',
        'to_module' => 'Tasks',
        'language' => 'ru_ru',
      ),
      array (
        'from' => '<basepath>/source/modules/Project/language/ru_ru.lang.php',
        'to_module' => 'Project',
        'language' => 'ru_ru',
      ),
      array (
        'from' => '<basepath>/source/modules/ProjectTask/language/ru_ru.lang.php',
        'to_module' => 'ProjectTask',
        'language' => 'ru_ru',
      ),
	),

  'vardefs' => array (
      array (
        'from' => '<basepath>/source/modules/Tasks/vardefs/vardefs.php',
          'to_module' => 'Tasks',
      ),
      array (
        'from' => '<basepath>/source/modules/Project/vardefs/vardefs.php',
          'to_module' => 'Project',
      ),
      array (
        'from' => '<basepath>/source/modules/ProjectTask/vardefs/vardefs.php',
          'to_module' => 'ProjectTask',
      ),
  ),
);
