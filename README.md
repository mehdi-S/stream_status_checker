# stream_status_checker

## Description
php script with twitch API to check online status of all streamer you want.
## Usage
Just `php twitch_status_checker.php *<some streamer>*` to get the status of one streamer.
You can also use it for multiple stream like this `php twitch_status_checker.php *<streamer1> <streamer2> <...>*` and so on.
Or use a file to check the status : fill a file with streamer name, one per line and use cat. `php twitch_status_checker.php \`cat *file*\``
