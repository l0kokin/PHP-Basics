<?php

// How to set cookies
setcookie('key', 'value', time() + 60);

// How to update cookie
setcookie('key', 'value [updated]', time() + 360);

// How to delete cookie
setcookie('key', 'value', time() - 1);