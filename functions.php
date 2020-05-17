<?php
// connects master.view.php and passes further route and objects of components
function render($page, array $data = []) {
    $data['viewPage'] = $page;
    extract($data);
    require_once __DIR__."/views/layouts/master.view.php";
}

// checks the image for duplication in the image array and eliminates this duplication
function checkRenderResult ($array, $response) {
    if (count($array)>0) {
        do {
            $item = $response->photos[array_rand($response->photos)];
        } while (in_array($item->id, $array));
    } else {
        $item = $response->photos[array_rand($response->photos)];
    }
    return $item;
}

// adds the loaded image to the image array
function updateAlbum ($array, $item) {
    $array[] .= $item->id;
    return $array;
}

// uploads a new image
function getPhoto($array) {
    $item = $array->photos[array_rand($array->photos)];
    return $item;
}