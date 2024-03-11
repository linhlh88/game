$(document).ready(function() {
    // Load games when the page is ready
    loadGames();
    
    // Function to load games from games.php
    function loadGames() {
        $('#games-list').load('games.php');
    }
    
    // Set interval to reload games every few seconds
    setInterval(function() {
        loadGames();
    }, 5000); // 5000 milliseconds = 5 seconds
});
