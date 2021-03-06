<?php

require_once '../api/Controllers/TitlesController.php';

//GET ALL TITLES
$app->get('/api/titles', $get_all_titles);

//GET MOVIE DETAILS BY ID
$app->get('/api/titles/{id}', $get_movie_by_id);

//CREATE MOVIE
$app->post('/api/titles', $create_new_movie);

//UPDATE MOVIE
$app->patch('/api/titles/{id}', $update_movie_by_id);

//DELETE MOVIE
$app->delete('/api/titles/{id}', $delete_movie_by_id);




