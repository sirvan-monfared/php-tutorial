<?php

use Core\Authenticator;

(new Authenticator)->logout();

redirectTo('/');