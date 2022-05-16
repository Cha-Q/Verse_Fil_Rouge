// récupération des éléments du lecteur
let url = document.querySelector('#basic-url');
let nameStream = '{CHANNEL}';
let count = 0;


// url.addEventListener("keypress", function(e) {

//     if (e.key === "Enter" && count == 0) {
//         new Twitch.Embed("twitch-embed", {
//             width: '100%',
//             height: '800px',
//             channel: "naowh",


//         });
//     };
// });
// contrôles du lecteur
// url.addEventListener("keypress", function(e) {

//     if (e.key === "Enter" && count == 0) {
//         let options = {
//             channel: `${url.value}`,
//             width: 100,
//             height: 300,

//         };
//         let player = new Twitch.Player("PLAYER_DIV_ID", options);
//         player.setVolume(0.5);
//         count++;
//         console.log(player);
//     } else if (e.key === "Enter" && count > 0) {
//         document.querySelector('#PLAYER_DIV_ID').innerHTML = "";
//         let options = {
//             channel: `${url.value}`,
//             width: 100,
//             height: 100,
//         };
//         let player = new Twitch.Player("PLAYER_DIV_ID", options);
//         player.setVolume(0.5);
//     }

// });

// let options = {
//     channel: `naowh`,
//     width: 100,
//     height: 300,

// };
// let player = new Twitch.Player("PLAYER_DIV_ID", options);

let modalContainer = document.querySelector('.modal-container');

let modalLauncher = document.querySelectorAll('.modal-trigger');



modalLauncher.forEach(element =>
    element.addEventListener('click', (toggleModal)));


function toggleModal() {
    modalContainer.classList.toggle("active")
}