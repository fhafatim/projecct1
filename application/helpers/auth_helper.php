<?php

function is_logged_in()
{
    $help = get_instance();
    if (!$help->session->userdata('email')) {
        redirect('Auth');
    } else {
        }
    }