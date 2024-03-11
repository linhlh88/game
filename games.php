<?php
// Retrieve game data from JSON feed
$games_json = file_get_contents('http://stage.whgstage.com/front-end-test/games.php');
$games_data = json_decode($games_json, true);

// Output game items
foreach ($games_data as $game) {
    echo '<div class="col-md-4">';
    echo '<div class="card">';
    echo '<img src="' . $game['image'] . '" class="card-img-top" alt="' . $game['name'] . '">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $game['name'] . '</h5>';
    echo '<p class="card-text">Categories: ' . implode(', ', $game['categories']) . '</p>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>
