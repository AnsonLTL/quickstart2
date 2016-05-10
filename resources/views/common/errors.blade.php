<?php
/**
 * Created by PhpStorm.
 * User: thyelee
 * Date: 02/04/2016
 * Time: 2:21
 */
?>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops! Someting went wrong!</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
