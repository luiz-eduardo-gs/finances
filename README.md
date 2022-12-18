# finances

## Migrations

* `alias phinx='vendor/bin/phinx'`
* `docker compose up -d`
* `phinx migrate`
* If need to rollback: `phinx rollback`

## Seeds

* `phinx seed:run`