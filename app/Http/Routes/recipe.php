<?php

Route::resource('recipe', 'RecipeController',
                ['only' => ['index', 'show']]);