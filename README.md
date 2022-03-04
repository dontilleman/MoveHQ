Welcome to MoveHQ code test application
Setup: No setup required, data is stored in csv files in the .data folder
       This app is using Bootstrap CDN, so the app will need to be connected to the internet.
File Structure:
    root:
        -index.php -> welcome and login page
        -task-list.php -> CRUD interaction with data
        .data
            -users.csv -> user data
            -data.csv -> task list data
        .scripts
            -users.inc.php -> user class class
            -tasks.inc.php -> task list class
            -data.inc.php -> data class
        style
            -reset.css -> fixes all 'browser' idiosyncracies
            -MoveHQ.css -> custom css

User name: Test Me
Password: 1hMyp@$$