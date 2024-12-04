<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .main-title-container{
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid black;
        }

        .main-title{
            font-size: 40px;
            font-weight: 550px;
            margin: 0px;
        }

        .slogan{
            margin-top: -10px; 
            letter-spacing: 2px;
        }

        .title-logo{
            width: 200px;
            margin: 15px 0;
        }

        .acc-title-container{
            width: 300px;
            display: flex;
            flex-direction: row;
            align-items: end;
            justify-content: end;
            position: absolute;
            top:25px;
            right:10px;
        }

        .acc-title-logo{
            width: 50px;
        }

        .container2 h3{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .title-slogan-container{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .container1{
            margin-top: 10px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            justify-content: center;
            align-items: center;
            column-gap:10px;
        }

        .row1, .row2{
            background-color: lightgrey;
            width: 840px;
            height: 400px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
        }

        .row1{
            background-color: #FB3640;
        }

        .row2{
            background-color: #22577A;
        }

        body {
            background-color: #F8f7F2;
            color: white;
            font-family: "Lettera Text", Arial, sans-serif;
        }

        h1 {
            color: white;
            font-family: Helvetica, Arial, sans-serif;
        }

        .section-title {
            color: white;
        }

        .podomoro-info{
            background-color: white;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            border: none;
            background-color: white;
            height: 500px;
        }

        .podomoro-manfaat{
            background-color: white;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            border: none;
            background-color: #FB3640;
            height: 800px;
        }

        .podomoro-title{
            color: rgba(255, 0, 0, 0.5);
            font-size: 36px;
            font-weight: bold;
            color: #FB3640;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .podomoro-content{
            color: black;
            font-size: 24px;
        }

        .podomoro-content-manfaat{
            color: white;
            font-size: 24px;
        }

        .manfaat-png{
            width: 700px;
        }

        .info-png{
            width: 600px;
        }

        .manfaat-list{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: start;
        }

    </style>
    <title>LearnAID</title>
</head>
<body>

    <header>
        <div class="container-position">
            <div class="main-title-container">
                <div>
                    <img class="title-logo" src="<?php echo e(asset('logo learnaid.png')); ?>" alt="Example image">
                </div>
                <div class="acc-title-container">
                    <img class="acc-title-logo" src="<?php echo e(asset('acc-logo.jpg')); ?>" alt="Example image">
                </div>
            </div>
    </div>
    </header>
    
    <div class="container1">
        <div class="row1">
            <!-- Pomodoro Timer Section -->
        
            <div class="col-md-4 container2">
                <h3 style="color: white;margin:0px;">Pomodoro Timer</h3>
                <div id="pomodoro-timer" class="text-center">
                    <h2 id="timer-display" style="color: white;">25:00</h2>
                    <button id="start-timer" class="btn btn-primary">Start</button>
                    <button id="reset-timer" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </div>

        <!-- To-Do List Section -->
        <div class="row2">
            <div class="col-md-4">
                <h3  style="color: white;">To-Do List</h3>
                <ul id="task-list" class="list-group js-task-list">
                    <!-- Example of a task item -->
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sample Task
                        <div>
                            <form action="#" class="d-inline">
                                <button type="submit" class="btn btn-danger btn-sm js-delete-btn">Delete</button>
                            </form>
                        </div>
                    </li>
                </ul>
                <div class="input-group mt-3">
                    <input type="text" id="task-title" class="form-control js-task-title" placeholder="Task Title">
                    <div class="input-group-append">
                        <button class="btn btn-primary js-add-task-btn" type="button">Add Task</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Pomodoro Info -->
     <div class="podomoro-info">
        <img class="manfaat-png" src="<?php echo e(asset('PDM Timer.png')); ?>" alt="">
        <div>
            <div class="podomoro-title">
                Apa itu Pomodoro Timer?
            </div>
            <div class="podomoro-content">
                Pomodoro Timer adalah metode manajemen waktu yang menggunakan teknik yang disebut Pomodoro Technique. Teknik ini membantu meningkatkan fokus dan produktivitas dengan membagi waktu kerja menjadi interval pendek, biasanya 25 menit, yang diikuti oleh istirahat singkat.
            </div>
        </div>
    </div>

    <!-- Section Manfaat Pomodoro-->
    <div class="podomoro-manfaat">
        <div style="padding-right: 100px;">
            <div class="podomoro-title" style="justify-content: start;color: #22577A;">
                Manfaat Pomodoro Timer
            </div>
            <div class="manfaat-list">
                <div class="podomoro-content-manfaat">
                    1. Meningkatkan Fokus dan Konsentrasi
                </div>
                <div class="podomoro-content-manfaat">
                    2. Mengurangi Prokrastinasi
                </div>
                <div class="podomoro-content-manfaat">
                    3. Meningkatkan Produktivitas
                </div>
                <div class="podomoro-content-manfaat">
                    4. Meningkatkan Keseimbangan Kerja dan Istirahat
                </div>
                <div class="podomoro-content-manfaat">
                    5. Mengelola Waktu Lebih Efektif
                </div>
                <div class="podomoro-content-manfaat">
                    6. Meningkatkan Kesehatan Mental
                </div>
                <div class="podomoro-content-manfaat">
                    7. Meningkatkan Kesadaran Diri
                </div>
            </div>
        </div>
        <img class="manfaat-png" src="<?php echo e(asset('Manfaat-pomodoro.png')); ?>" alt="">
    </div>


    <!-- Section Panduan Penggunaan LearnAid -->
<div class="podomoro-info">
    <div>
        <div class="podomoro-title">
            Panduan Penggunaan LearnAid
        </div>
        <div class="manfaat-list">
            <div class="podomoro-content">
                <strong>1. Menggunakan Pomodoro Timer:</strong>
                <br>Tekan tombol "Start" untuk memulai sesi belajar selama 25 menit. Setelah selesai, istirahat sejenak sebelum memulai sesi berikutnya.
            </div>
            <div class="podomoro-content">
                <strong>2. Mengelola To-Do List:</strong>
                <br>Tambahkan tugas Anda di bagian To-Do List. Setelah tugas selesai, tandai atau hapus tugas tersebut.
            </div>
        </div>
    </div>
</div>

<!-- Section Fun Fact tentang Pomodoro -->
<div class="podomoro-info" style="margin-top: 30px;">
    <div>
        <div class="podomoro-title">
            Fun Fact tentang Pomodoro
        </div>
        <div class="manfaat-list">
            <div class="podomoro-content">
                🍅 <strong>Pomodoro</strong> artinya "tomat" dalam bahasa Italia! Metode ini dinamai sesuai timer dapur berbentuk tomat yang digunakan oleh penciptanya, Francesco Cirillo, saat mengembangkan teknik ini pada tahun 1980-an.
            </div>
            <div class="podomoro-content">
                🕒 Sesi 25 menit dirancang berdasarkan penelitian bahwa otak manusia dapat fokus maksimal selama 20-30 menit sebelum butuh jeda.
            </div>
        </div>
    </div>
</div>

<!-- Section Mengapa Pomodoro Efektif -->
<div class="podomoro-info" style="margin-top: 20px;">
    <div>
        <div class="podomoro-title">
            Mengapa Metode Pomodoro Efektif?
        </div>
        <div class="manfaat-list">
            <div class="podomoro-content">
                ✅ <strong>Membagi Waktu Menjadi Interval:</strong> Fokus pendek dengan jeda teratur membantu otak tetap segar dan produktif lebih lama.
            </div>
            <div class="podomoro-content">
                ✅ <strong>Mengurangi Kecemasan:</strong> Dengan memecah tugas besar menjadi sesi yang lebih kecil, metode ini membuat tugas terasa lebih ringan dan dapat dikelola.
            </div>
            <div class="podomoro-content">
                ✅ <strong>Meningkatkan Disiplin:</strong> Jadwal teratur membantu membangun kebiasaan belajar yang positif.
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
                // Menampilkan waktu yang tersisa
                const minutes = Math.floor(timeLeft / 60);
                const seconds = timeLeft % 60;
                document.getElementById('timer-display').textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

                // Menambahkan notifikasi di 24:55
                if (timeLeft === 1495) {
                    alert("It's time to have a break!");
                }
            }
            timeLeft--;
        }, 1000);
    });

    document.getElementById('reset-timer').addEventListener('click', function() {
        clearInterval(timer);
        timeLeft = 1500; // Reset to 25 minutes
        document.getElementById('timer-display').textContent = "25:00";
    });

    document.querySelector('.js-add-task-btn')
        .addEventListener('click', () => {
            let taskTitle = document.querySelector('.js-task-title').value;
                if (taskTitle) {
                    const taskList = document.querySelector('.js-task-list');
                    taskList.innerHTML += 
                    `<li class="list-group-item d-flex justify-content-between align-items-center">
                        ${taskTitle}
                            <div>
                                <form action="#" class="d-inline">
                                    <button type="submit" class="btn btn-danger btn-sm js-delete-btn">Delete</button>
                                </form>
                            </div>
                    </li>`;
                    document.querySelector('.js-task-title').value = '';
                }
        });

    document.querySelector('.js-delete-btn')
        .addEventListener('click', () => {
            const taskList = document.querySelector('.list-group-item');
            taskList.innerHTML = '';
        });

    document.addEventListener('click', (event) => {
        // Check if the clicked element has the class '.js-delete-btn'
        if (event.target.classList.contains('js-delete-btn')) {
            // Locate the closest '.task' element
            const task = event.target.closest('.task');
            console.log(task); // Debug: Log the task to ensure it's being selected
            // Remove the '.task' element if it exists
            if (task) {
                task.remove();
            }
        }
    });

    </script>
</body>
</html>
<?php /**PATH C:\Users\Ferry Jaya Dinata\Documents\FJD\Learnaid_Project-main\resources\views/dashboard.blade.php ENDPATH**/ ?>