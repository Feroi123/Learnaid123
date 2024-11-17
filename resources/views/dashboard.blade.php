<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
        background-color: #f06543;
        }
        h1 {
        color: white;
        font-family: Helvetica, Arial, sans-serif;
        }
        .section-title {
        color: white;
        }
    </style>
    <title>LearnAID</title>
</head>
<body>

    <div class="text-center">
        <h1><b>Learnaid</b></h1>
    </div>

    <div class="container mt-4">
        <div class="row">
            <!-- Music Section -->
            <div class="col-md-4">
                <h3 class="section-title">Music Section</h3>
                <div class="form-group">
                    <label for="music-select" class="text-white">Select Music:</label>
                    <select id="music-select" class="form-control">
                        <option value="">Choose a track</option>
                        <option value="track1">Track 1</option>
                        <option value="track2">Track 2</option>
                        <option value="track3">Track 3</option>
                    </select>
                    <button id="play-music" class="btn btn-success mt-2">Play</button>
                </div>
            </div>

            <!-- Pomodoro Timer Section -->
            <div class="col-md-4">
                <h3 class="section-title">Pomodoro Timer</h3>
                <div id="pomodoro-timer" class="text-center">
                    <h2 id="timer-display" class="text-white">25:00</h2>
                    <button id="start-timer" class="btn btn-primary">Start</button>
                    <button id="reset-timer" class="btn btn-secondary">Reset</button>
                </div>
            </div>

            <!-- To-Do List Section -->
            <div class="col-md-4">
                <h3 class="section-title">To-Do List</h3>
                <ul id="task-list" class="list-group">
                    <!-- Example of a task item -->
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sample Task
                        <div>
                            <input type="checkbox" onchange="this.form.submit()">
                            <form action="#" method="POST" class="d-inline">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </li>
                </ul>
                <div class="input-group mt-3">
                    <input type="text" id="task-title" class="form-control" placeholder="Task Title">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Add Task</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        // JavaScript for Pomodoro Timer
        let timer;
        let timeLeft = 1500; // 25 minutes in seconds

        document.getElementById('start-timer').addEventListener('click', function() {
            clearInterval(timer);
            timer = setInterval(function() {
                if (timeLeft <= 0) {
                    clearInterval(timer);
                    alert("Time's up!");
                } else {
                    timeLeft--;
                    const minutes = Math.floor(timeLeft / 60);
                    const seconds = timeLeft % 60;
                    document.getElementById('timer-display').textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
                }
            }, 1000);
        });

        document.getElementById('reset-timer').addEventListener('click', function() {
            clearInterval(timer);
            timeLeft = 1500; // Reset to 25 minutes
            document.getElementById('timer-display').textContent = "25:00";
        });

        // JavaScript for adding tasks to the To-Do List
        document.querySelector('.input-group-append button').addEventListener('click', function() {
            const taskTitle = document.getElementById('task-title').value;
            if (taskTitle) {
                const taskList = document.getElementById('task-list');
                const newTask = document.createElement('li');
                newTask.className = 'list-group-item d-flex justify-content-between align-items-center';
                newTask.innerHTML = `${taskTitle} <div><input type="checkbox" onchange="this.form.submit()"><form action="#" method="POST" class="d-inline"><button type="submit" class="btn btn-danger btn-sm">Delete</button></form></div>`;
                taskList.appendChild(newTask);
                document.getElementById('task-title').value = ''; // Clear input
            }
        });
    </script>
</body>
</html>