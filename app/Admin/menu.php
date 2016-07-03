<?php

Admin::menu()->url('/')->label('Start page')->icon('fa-dashboard');
Admin::menu('App\User')->icon('fa-user');
Admin::menu('App\Answer')->icon('fa fa-key');
Admin::menu('App\Quention')->icon('fa fa-question');
Admin::menu('App\Interview')->icon('fa fa-microphone');