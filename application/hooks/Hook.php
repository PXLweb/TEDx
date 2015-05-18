<?php

function setGuest() {
    if (!array_key_exists('user_id', $_SESSION)) {
        $_SESSION['guest'] = TRUE;
    }
}
