<?php
$lessons = [
    '<h2>Part 1: What Makes Up a Computer?</h2><p>A computer consists of two main components: <b> Hardware and Software </b>. Hardware refers to the physical parts of a computer that you can see and touch, while software includes the programs and applications that make the hardware useful. In this lesson, we will focus on the hardware components of a computer.',
    '<h2>Part 2: Input Devices</h2><p>Input devices allow you to communicate with the computer by sending information to it:</p><ul><li><b>Keyboard:</b> Used to type letters, numbers, and commands.</li><li><b>Mouse:</b> Used to move the cursor and click on items on the screen.</li><li><b>Touchpad (on laptops):</b> A flat surface that acts as a mouse replacement.</li></ul><img src="part2.png" alt="Input Devices" style="width:100%;">',
    '<h2>Part 3: Output Devices</h2><p>Output devices display or produce the results of the computer’s processes:</p><ul><li><b>Monitor:</b> The screen where you see the computer’s output, like text and images.</li><li><b>Printer:</b> Produces physical copies of documents or images.</li><li><b>Speakers:</b> Output sound from the computer.</li></ul><img src="part3.png" alt="Output Devices" style="width:100%;">',
    '<h2>Part 4: The System Unit</h2><p>The system unit is the main part of a computer that contains essential components like the CPU, motherboard, RAM, and storage devices. It houses and protects these parts in a single case, ensuring they work together to keep the computer running and connect with external devices.</p><img src="part4.png" alt="System Unit" style="width:100%;">',
    '<h2>Part 5: Storage Devices</h2><p>Storage devices keep data and programs safe for future use:</p><ul><li><b>Hard Drive (HDD) or Solid-State Drive (SSD):</b> Store your files, software, and operating system.</li><li><b>USB Flash Drive:</b> A portable storage device for transferring data.</li></ul><img src="part5.png" alt="Storage Devices" style="width:100%;">',
    '<h2>Part 6: Peripheral Devices</h2><p>These are optional devices that can be added to a computer for additional functionality:</p><ul><li><b>Webcam:</b> Captures video input.</li><li><b>External Hard Drive:</b> Provides extra storage.</li><li><b>Headphones:</b> For personal audio output.</li></ul><img src="part6.png" alt="Peripheral Devices" style="width:100%;">'
];

$currentLessonIndex = isset($_GET['lesson']) ? (int)$_GET['lesson'] : 0;
$currentLessonIndex = max(0, min($currentLessonIndex, count($lessons) - 1));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage Layout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f2f2f2;
            padding: 10px 20px;
        }

        header .logo {
            display: flex;
            align-items: center;
        }

        header .logo div {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ccc;
            margin-right: 10px;
        }

        header nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #333;
        }

        main {
            padding: 20px;
            text-align: center;
        }

        .content {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px auto;
            width: 80%;
            flex-direction: row;
            gap: 20px;
        }

        .character {
            width: 250px;
            height: 150px;
            background-color: #eaeaea;
            border: 1px solid #ccc;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .navigation button {
            padding: 10px 20px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #f2f2f2;
        }

        ul {
            text-align: left;
            margin: 0 auto;
            padding: 0;
            list-style-type: disc;
            margin-left: 20px;
        }

        img {
            max-width: 30%;
            height: auto;
            margin-top: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <div></div>
        <span>LOGO</span>
    </div>
    <nav>
        <a href="#">Home</a>
        <a href="#">Lesson</a>
        <a href="#">Activity</a>
        <a href="#">About</a>
        <a href="#">Profile</a>
    </nav>
</header>

<main>
    <div class="content">
        <div class="character">Character</div>
        <div>
            <?php echo $lessons[$currentLessonIndex]; ?>
        </div> 
    </div>
    <div class="navigation">
        <a href="?lesson=<?php echo max(0, $currentLessonIndex - 1); ?>">
            <button <?php if ($currentLessonIndex === 0) echo 'disabled'; ?>>Previous</button>
        </a>
        <a href="?lesson=<?php echo min(count($lessons) - 1, $currentLessonIndex + 1); ?>">
            <button <?php if ($currentLessonIndex === count($lessons) - 1) echo 'disabled'; ?>>Next</button>
        </a>
    </div>
</main>

<footer>
    &copy; COMPLITE 2024
</footer>

</body>
</html>
