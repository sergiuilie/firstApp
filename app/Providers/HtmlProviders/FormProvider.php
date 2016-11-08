<?php

namespace App\Providers\HtmlProviders;

use Illuminate\Support\ServiceProvider;

class FormProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        \Form::macro('appText', function($label, $name, $value = NULL, $properties = NULL) {
            $input = \Form::text($name, $value, array_merge(['class' => 'form-control', 'autocomplete' => 'off'], $properties));

            $errors = session('errors', new \Illuminate\Support\MessageBag);
            $errorMessage = $errors->has($name) ? $errors->first($name) : "";
            $errorClass = $errors->has($name) ? 'has-error' : '';

            return "<div class='form-group $errorClass'>
                        <label class='col-lg-2 control-label'>$label</label>
                        <div class='col-lg-10'>
                            $input
                            <span class='help-block'>
                                <strong>$errorMessage</strong>
                            </span>
                        </div>
                    </div>";
        });
        \Form::macro('appEmail', function($label, $name, $value = NULL, $properties = NULL) {
            $input = \Form::email($name, $value, array_merge(['class' => 'form-control', 'autocomplete' => 'off'], $properties));

            $errors = session('errors', new \Illuminate\Support\MessageBag);
            $errorMessage = $errors->has($name) ? $errors->first($name) : "";
            $errorClass = $errors->has($name) ? 'has-error' : '';

            return "<div class='form-group $errorClass'>
                        <label class='col-lg-2 control-label'>$label</label>
                        <div class='col-lg-10'>
                            $input
                            <span class='help-block'>
                                <strong>$errorMessage</strong>
                            </span>
                        </div>
                    </div>";
        });
        \Form::macro('appPassword', function($label, $name, $properties = NULL) {
            $input = \Form::password($name, array_merge(['class' => 'form-control'], $properties));

            $errors = session('errors', new \Illuminate\Support\MessageBag);
            $errorMessage = $errors->has($name) ? $errors->first($name) : "";
            $errorClass = $errors->has($name) ? 'has-error' : '';

            return "<div class='form-group $errorClass'>
                        <label class='col-lg-2 control-label'>$label</label>
                        <div class='col-lg-10'>
                            $input
                            <span class='help-block'>
                                <strong>$errorMessage</strong>
                            </span>
                        </div>
                    </div>";
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
