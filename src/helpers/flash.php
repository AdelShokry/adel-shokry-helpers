<?php 

function alert_success($text)
{
    return '<div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>'.$text.'</strong>
            </div>';
}

function alert_error($text)
{
    return '<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>'.$text.'</strong>
            </div>';
}

function alert_warning($text)
{
    return '<div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>'.$text.'</strong>
            </div>';
}

function alert_loading()
{
    return '<div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong class="text-center"><img src="'.url('public/assets/cpanel/img/loading.gif').'" width="20" alt=""></strong>
            </div>';
}