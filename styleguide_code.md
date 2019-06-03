## Variables
* Use `camelCase` for variable names

> Reason: Conventional Laravel

**Good**
```php
$fooBar
```

**Bad**
```php
$FooBar
$foo_bar
```

## Tests - Methods
* Use `snake_case` for test method names
* Use clear statements for what it tests

> Reason: legibility, clarity

**Good**
```php
/** @test */
public function a_user_can_view_a_list_of_projects()
{
    // code
}
```

**Bad**
```php
public function AUserCanViewAListOfProjects()
public function projects_list()
```

## Filenames & Directories
* use singular `PascalCase` for model filenames
* use plural `PascalCase` appended with "Test" for feature test filenames
* use singular `PascalCase` appended with "Test" for unit test filenames
* use singular `PascalCase` appended with "Factory" for factory filenames

> Reason: Conventional Laravel

**Usage**
```
php artisan make:model Project
php artisan make:test ProjectsTest
php artisan make:test ProjectTest --unit
php artisan make:factory ProjectFactory
```

## Database
* Use plural `snake_case` for table names
* Use `snake_case` for column names

> Reason: Conventional Laravel

**Good**
```php
create('password_resets', ...
$table->timestamp('created_at') ...
```

**Bad**
```
password_reset
createdAt
```

## Migrations
* Use `snake_case` for migration names
* Begin name with a verb and describe what it does

> Reasons: Conventional Laravel, take advantage of automatic schema population

**Good**
```
php artisan make:migration create_email_addresses_table
```

**Bad**
```
php artisan make:migration email_addresses
```

## Git Commits
* Separate model from feature work
* Separate large laravel changes (eg install, update, auth)

> Reasons: Clarity

## Git Comments
* Begin with imperative verb (eg Add, Update, Clean up)
* Short, clear statement as title on first line
* When necessary, add details on third line

> Reasons: Conventional Git

**Good**
```
Add client model

Update email address model to include clients
```

**Bad**
```
clients db and tests
```

