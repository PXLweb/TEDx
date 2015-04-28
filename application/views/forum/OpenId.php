<?php
/*
 * 
    openid => Lightopenid is a really easy library to use/integrate. Even stackoverflow/jeff atwood is using it because he knows it hard to get login-system correctly. Even if you are a security expert.
    google friend connect.
    facebook connect.
    twitter single sign-in.

So safe yourself the time of again devising another login-system and instead use for example the really simple lightopenid library and let users sign in with there google account. The snippet below is the only code you need to get it working:
 */

# Logging in with Google accounts requires setting special identity, so this example shows how to do it.
require 'openid.php';
try {
    $openid = new LightOpenID;
    if (!$openid->mode) {
        if (isset($_GET['login'])) {
            $openid->identity = 'https://www.google.com/accounts/o8/id';
            header('Location: ' . $openid->authUrl());
        }
        ?>
        <form action="?login" method="post">
            <button>Login with Google</button>
        </form>
        <?php
    } elseif ($openid->mode == 'cancel') {
        echo 'User has canceled authentication!';
    } else {
        echo 'User ' . ($openid->validate() ? $openid->identity . ' has ' : 'has not ') . 'logged in.';
    }
} catch (ErrorException $e) {
    echo $e->getMessage();
}