<?php

require __DIR__.'/../src/bootstrap.php';

require __DIR__ . '/../vendor/autoload.php';

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);