<?php


namespace App\Reprositories;


interface ModelRepositoryInterface
{
    function index();
    function findById($id);
    function store($obj);
    function destroy($obj);
    function update($obj);
    function search($keyword);
}
