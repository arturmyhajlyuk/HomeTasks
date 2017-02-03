<?php
if (!empty($_POST)) {
    $data = parseData($_POST);
    $result = saveData($data);
}

$comments = getAll();

function parseData($request)
{
    $data = [
        'name' => !empty($request['name']) ? $request['name'] : '',
        'email' => !empty($request['email']) ? $request['email'] : '',
        'comment' => !empty($request['text']) ? $request['text'] : '',
    ];

    return $data;
}

function saveData($data)
{
    $items = getAll();
    $items[] = $data;
    $result = save($items);

    return $result;
}

function getAll()
{
    $data = file_get_contents('comments.txt');
    $data = unserialize($data) ? : [];

    return $data;
}

function save(array $items)
{
    $items = serialize($items);

    file_put_contents('comments.txt', $items);

    return true;
}


