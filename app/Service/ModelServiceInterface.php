<?php


namespace App\Service;


interface ModelServiceInterface
{
    function getAll();
    function findById($id);
    function add($request);
    function delete($id);
    function edit($request, $id);
    function search($request);
}
