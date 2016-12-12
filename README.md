# sharebee
sharebee is a laravel review module

## Installation
Download this repository and paste into your laravel root folder and add the following line to this file <root folder> config/app.php
in the providers array

```
App\Modules\ModulesServiceProvider::class
```
## table
In this module there is working with one table called user_review. Table structre is given below

```
id
from_user_id
to_user_id
star_rating
comment
created_at
updated_at
deleted_at
```

In this table from_user_id and to_user_id is linked with user table and you have to setup connectivity with it to show the review otherwise it will show demo name and image. According to me, you may setup connectivity by adding following line to the review model save in above modules folder.
```
public function getUser() {
        return $this->hasOne('<User Model>','id','from_user_id');
    }
```
