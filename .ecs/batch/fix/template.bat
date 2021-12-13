:: Run easy-coding-standard (ecs) via this batch file inside your IDE e.g. PhpStorm (Windows only)
:: Install inside PhpStorm the  "Batch Script Support" plugin
cd..
cd..
cd..
cd..
cd..
cd..
:: templates
vendor\bin\ecs check vendor/diversworld/contao-coursebooking-bundle/src/Resources/contao/templates --fix --config vendor/diversworld/contao-coursebooking-bundle/.ecs/config/template.php
::
cd vendor/diversworld/contao-coursebooking-bundle/.ecs./batch/fix
