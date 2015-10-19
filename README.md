Universal-OpenCart-configuration
================================

This configuration was created in order not to change a lot of information in several files when transferring to another server. No matter where the store (in a root or a subfolder) only need to change the configuration database, and only a single file. The configuration database made by a separate file for ease of development environments. For example, it can be excluded on synchronization in PhpStorm.
Tested at OpenCart 1.5.6.1 - 2.1.0.1.

Configuration files
-------------------

```
config.php                  config for catalog (will replace original file)
admin/config.php            config for admin (will replace original file)
system/config/common.php    common config for catalog and admin
system/config/db.php        db config for catalog and admin
```

Install
-------

1. Backup `config.php` and `admin/config.php` files from your store.
2. Copy files to your store this replace.
3. Open a `system/config/db.php` file and configure database configuration. For example from saved files.
