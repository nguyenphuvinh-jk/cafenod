<?php
$message = Session::get('message');
if ($message) {
    echo '<p class="alert alert-success justify-content-center text-center">' . $message . '</p>';
    Session::put('message', null);
}

if (count($errors) > 0) {
    foreach ($errors->all() as $error) {
        echo '<p class="alert alert-danger">' . $error . '</p>';
    }
}
