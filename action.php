<?php

require_once 'vendor/autoload.php';

use App\classes\Series;
use App\classes\Auth;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    } elseif ($_GET['page'] == 'series')
    {
        include "pages/series.php";
    } elseif ($_GET['page'] == 'series-result')
    {
        $series = new Series($_POST);
        $result = $series->getSeries();

        include "pages/series.php";
    } elseif ($_GET['page'] == 'sum-of-digit')
    {
        include "pages/sumOfDigit.php";
    } elseif ($_GET['page'] == 'sum-of-digit-result')
    {
        $series = new Series($_POST);
        $result = $series->sumOfDigit();

        include "pages/sumOfDigit.php";
    } elseif ($_GET['page'] == 'login')
    {
        include "pages/login.php";
    } elseif ($_GET['page'] == 'user-login')
    {
        $auth = new Auth($_POST);
        $message = $auth->checkUser();
        include "pages/login.php";
    } elseif ($_GET['page'] == 'logout')
    {
        $auth = new Auth();
        $message = $auth->logOut();
        include "pages/login.php";
    }
}