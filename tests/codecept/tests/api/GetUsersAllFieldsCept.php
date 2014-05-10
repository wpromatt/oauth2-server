<?php
$I = new ApiGuy($scenario);
$I->wantTo('get all users with all fields');
$I->sendGET('api.php/users?access_token=iamgod');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContainsJson([
    [
        'username'  =>  'alexbilbie',
        'name'      =>  'Alex Bilbie',
        'email'     =>  'hello@alexbilbie.com',
        'photo'     =>  'https://s.gravatar.com/avatar/14902eb1dac66b8458ebbb481d80f0a3'
    ],
    [
        'username'  =>  'philsturgeon',
        'name'      =>  'Phil Sturgeon',
        'email'     =>  'email@philsturgeon.co.uk',
        'photo'     =>  'https://s.gravatar.com/avatar/14df293d6c5cd6f05996dfc606a6a951'
    ]
]);
