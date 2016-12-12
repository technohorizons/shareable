# Sharebee
sharebee is a laravel review module

## Installation
Download this repository and paste into your laravel root folder and add the following line to this file <root folder> **config/app.php**
in the providers array

```
App\Modules\ModulesServiceProvider::class
```
## Table
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

In this table **from_user_id** and **to_user_id** is linked with user table and you have to setup connectivity with it to show the review otherwise it will show demo name and image. According to me, you may setup connectivity by adding following line to the review model save in above modules folder.
```
public function getUser() {
        return $this->hasOne('<User Model>','id','from_user_id');
    }
```

## Show Review Section In View

In view add the following code where you want to show the review form btn. 
```
 <script src="{{ URL::asset('assets/js/review.js') }}" async data-baseUrl="{{ URL::to('/') }}" data-action="form" data-review-param="1" ></script>
```

in this script there is three attribute extra attribute
```
data-baseUrl - for base Url to request and response from controller
data-action - there is two value for this 
1. form  // to show the form btn
2. list  // to show the review list btn
data-review-param - id of user 
```

# Save Review
In review controller there is function:
```
public function postAdd() {
        $InputAll = Request::input();
        $InputAll['from_user_id'] = 2; //current user session id
        Review::create($InputAll);
        return response()->json([ 'status' => 'success']);
}
```

to_user_id will be specified by script tag.

## Requirment
Your project should have jquery and bootstrap css and js file to run the project perfectly.
Thanks
