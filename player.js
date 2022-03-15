// récupération des éléments du lecteur
let url = document.querySelector('#basic-url');

let lecteur = document.querySelector('h2');
let nameStream = '{CHANNEL}';
let count = 0;

// contrôles du lecteur
url.addEventListener("keypress", function(e) {

    if (e.key === "Enter" && count == 0) {
        let options = {
            width: 600,
            height: 480,
            channel: `${url.value}`,
        };
        let player = new Twitch.Player("PLAYER_DIV_ID", options);
        player.setVolume(0.5);
        count++;
        console.log(player);
    } else if (e.key === "Enter" && count > 0) {
        document.querySelector('#PLAYER_DIV_ID').innerHTML = "";
        let options = {
            width: 600,
            height: 480,
            channel: `${url.value}`,
        };
        let player = new Twitch.Player("PLAYER_DIV_ID", options);
        player.setVolume(0.5);
    }

});