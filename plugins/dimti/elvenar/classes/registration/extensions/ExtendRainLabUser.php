<?php namespace Dimti\Elvenar\Classes\Registration\Extensions;

use RainLab\User\Models\User;

trait ExtendRainLabUser {
    public function extendRainLabUser()
    {
        // add Polymorphic relations
        User::extend(function (User $model) {
            $model->rules['password'] = 'required:create|between:4,255|confirmed';
            $model->rules['password_confirmation'] = 'required_with:password|between:4,255';
        });
    }
}
