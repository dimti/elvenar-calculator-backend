<?php
Route::group([
    'prefix'     => 'api/v1',
    'namespace'  => 'Foo\Bar\ApiControllers',
    'middleware' => 'cors'
], function() {

    //
    // Your public resources should be here
    //

});
