## How to install first time
1. `git clone git@github.com:mklauco/pwa2-2022-lecture.git`
1. `git checkout L##` where `##` means the number of week in semester `xx \in {01, 02, ..., 12}`
1. `composer install` or `composer update`
1. setup `.env` with database connection
1. `php artisan migrate:fresh --seed`
1. `php artisan serve`
## How to update existing installation
1. `git pull` if you made some changes then use `git stash`, or fork the main repository where you can also commit
1. `git checkout L##` where `##` means the number of week in semester `xx \in {01, 02, ..., 12}`
1. `git pull`
1. `composer update`
1. `php artisan migrate:fresh --seed`
1. `php artisan serve`

## Notes
1. Implemented template: CoreUI free (https://coreui.io/demos/bootstrap/4.2/free/)
1. Implemented form templating in `resources/view/_t`
