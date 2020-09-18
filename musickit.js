



<head>

<script src="https://js-cdn.music.apple.com/musickit/v1/musickit.js"></script>

 ...
 <meta name="apple-music-developer-token" content="DEVELOPER-TOKEN">
 <meta name="apple-music-app-name" content="My Cool Web App">
 <meta name="apple-music-app-build" content="1978.4.1">
 ...
 
 
 document.addEventListener('musickitloaded', function() {
  // MusicKit global is now defined
  MusicKit.configure({
    developerToken: 'DEVELOPER-TOKEN',
    app: {
      name: 'My Cool Web App',
      build: '1978.4.1'
    }
  });
});

</head>

<button id="apple-music-authorize"></button>
<button id="apple-music-unauthorize"></button>




let music = MusicKit.getInstance();

 // This is called with or without authorization: 
 music.player.play();

 // This ensures user authorization before calling play():
 music.authorize().then(function() {
   music.player.play();
 });

 // You can wrap any method to ensure authorization before calling:
 music.authorize().then(function() {
   music.api.library.albums.then(function(cloudAlbums) {
     // user's cloudAlbums
   });
 });
 
 
 let music = MusicKit.getInstance();
let url = 'https://itunes.apple.com/us/album/hamilton-original-broadway-cast-recording/1025210938';
music.setQueue({ url: url }).then(function(queue) {
  // Queue is instantiated and set on music player.
});


let music = MusicKit.getInstance();
music.setQueue({ album: '1025210938' }).then(function(queue) {
  // Queue is instantiated and set on music player.
});




let music = MusicKit.getInstance();
let album = music.api.album(1025210938);




let music = MusicKit.getInstance();
let results = music.api.search('james brown', { limit: 2, types: 'artists,albums' });
// Loads https://api.music.apple.com/v1/catalog/us/search?term=james+brown&limit=2&types=artists,albums

 
 
 
 
 
 
 