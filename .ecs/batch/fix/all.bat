:: Run easy-coding-standard (ecs) via this batch file inside your IDE e.g. PhpStorm (Windows only)
:: Install inside PhpStorm the  "Batch Script Support" plugin
cd..
cd..
cd..
cd..
cd..
cd..
:: src
vendor\bin\ecs check vendor/diversworld/contao-coursebooking-bundle/src --fix --config vendor/diversworld/contao-coursebooking-bundle/.ecs/config/default.php
:: tests
vendor\bin\ecs check vendor/diversworld/contao-coursebooking-bundle/tests --fix --config vendor/diversworld/contao-coursebooking-bundle/.ecs/config/default.php
:: legacy
vendor\bin\ecs check vendor/diversworld/contao-coursebooking-bundle/src/Resources/contao --fix --config vendor/diversworld/contao-coursebooking-bundle/.ecs/config/legacy.php
:: templates
vendor\bin\ecs check vendor/diversworld/contao-coursebooking-bundle/src/Resources/contao/templates --fix --config vendor/diversworld/contao-coursebooking-bundle/.ecs/config/template.php
::
cd vendor/diversworld/contao-coursebooking-bundle/.ecs./batch/fix
