<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Sequence Game</title>

    <link rel="stylesheet" href="MyStyle/v3/mystyle.css">
    <script src="MyStyle/mystyle-icons.js"></script>
    <style>
        #itemInputFields {
            display: none; /* Initially hide the input fields */
        }
    </style>
</head>
<body>

    <style>
        html{
            background: linear-gradient(to bottom right, red, blue);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            width: 100%;
            height: 440vh;
            
        }
        .head1{
            font-size: 70px;
            color: rgb(23, 23, 255);
            -webkit-text-stroke: 2px white;
        }
        .head2{
            font-size: 50px;
            color: white;
            margin-bottom: 0px;
            display: inline-block;
        }

        label{
            color: white;
            font-size: 28px;
            margin-bottom: 15px;
            display: inline-block;
        }

        input{
            height: 25px;
            border-radius: 30px;
            width: 70%;
        }

        .start{
            width: 40%;
            background: rgba(255,255,255,0.4);
            backdrop-filter: blur(5px);
            border-radius: 40px;
            padding: 40px;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .item{
            width: 50%;
        }


        @media only screen and (max-width: 700px) {
            .head1{
            font-size: 50px;
            margin-top: 100px;
            color: rgb(23, 23, 255);
            -webkit-text-stroke: 2px white;
        }
        .head2{
            font-size: 30px;
            color: white;
            margin-bottom: 40px;
            display: inline-block;
        }

        label{
            color: white;
            font-size: 28px;
            margin-bottom: 10px;
            display: inline-block;
        }

        input{
            height: 35px;
            border-radius: 30px;
            width: 90%;
        }

        form{
            margin: 0px;
        }

        .start{
            width: 85%;
            background: rgba(255,255,255,0.4);
            backdrop-filter: blur(5px);
            border-radius: 40px;
            padding: 10px;
            padding-top: 15px;
            padding-bottom: 2px;
            margin-bottom: 20px;
        }

        .item{
            width: 90%;
        }

        }
    </style>

<center>
        <h1 class="head1"><b>PARIVARTAN 2k24</b></h1> <br>
        <h2 class="head2">Scavanger Hunt: Round-1</h2>
    
    <form id="gameForm" onsubmit="return submitForm()">

        <div class="start">
        <label>Team Name:</label><br>
        <input type="text" id="teamName" required><br><br>
        
        <label>Team ID:</label><br>
        <input type="text" id="teamId" required><br><br>
        
        <!-- Start Button -->
        <button class="btn rd-3 shadow-3 blue" type="button" id="startButton" onclick="startGame()">Start Game</button><br><br>
        

    </div>

    <div class="item">

        <!-- Input Fields Section (Hidden Initially) -->
        <div id="itemInputFields">
            <label>Enter the 15 items in the correct sequence:</label><br><br>
            <div id="itemFields"></div>
            <button class="btn rd-3 shadow-3 blue" type="submit">Submit</button>
        </div>

    </div>
    </form>

    </center>

    <script>
        let startTime;

        // Function to start the game
        function startGame() {
            // Record start time
            startTime = Date.now();

            // Show the input fields section
            document.getElementById('itemInputFields').style.display = 'block';

            // Disable the start button to prevent re-clicking
            document.getElementById('startButton').disabled = true;

            // Generate the input fields
            generateInputFields();
        }

        // Function to dynamically generate input fields for 15 items
        function generateInputFields() {
            let fields = document.getElementById('itemFields');
            fields.innerHTML = ''; // Clear any existing fields
            for (let i = 1; i <= 15; i++) {
                fields.innerHTML += `<label>Item ${i}:</label><br><input type="text" id="item${i}" required><br><br>`;
            }
        }

        // Function to handle form submission
        function submitForm() {
            let teamName = document.getElementById('teamName').value;
            let teamId = document.getElementById('teamId').value;
            let items = [];
            for (let i = 1; i <= 15; i++) {
                items.push(document.getElementById('item' + i).value);
            }

            let timeTaken = (Date.now() - startTime) / 1000; // Calculate time in seconds
            let correctSequence = ['a', 'b', 'c','p', 'x', 'y', 'z', 'q', 'r','m', 'n', 'o', 'q', 'w', 'e'];  // Predefined correct sequence
            let points = calculatePoints(items, correctSequence);

            // Send data to backend using AJAX
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "submit_game.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                    // Redirect to confirmation page
                    window.location.href = `confirmation.php?teamName=${teamName}&points=${points}&timeTaken=${timeTaken}`;
                }
            };
            xhr.send("teamName=" + teamName + "&teamId=" + teamId + "&points=" + points + "&timeTaken=" + timeTaken);
            return false;
        }

        // Function to calculate points
        function calculatePoints(userSequence, correctSequence) {
            let points = 0;
            for (let i = 0; i < correctSequence.length; i++) {
                if (userSequence[i].toLowerCase() === correctSequence[i].toLowerCase()) {
                    points++;
                }
            }
            return points;
        }
    </script>
</body>
</html>
