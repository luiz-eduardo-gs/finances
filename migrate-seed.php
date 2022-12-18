<?php

exec(__DIR__ . '/vendor/bin/phinx rollback -r');
exec(__DIR__ . '/vendor/bin/phinx migrate');
exec(__DIR__ . '/vendor/bin/phinx seed:run');