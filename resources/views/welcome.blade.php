<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test_Laravel</title>
    <!-- ติดตั้ง Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body class="bg-gray-100">

    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
        <a href="#" class="w3-bar-item w3-button">HOME 01</a>
        <a href="#" class="w3-bar-item w3-button">HOME 02</a>
        <a href="#" class="w3-bar-item w3-button">HOME 03</a>
    </div>
    {{-- ไอดีที่คุมทั้งหมดในหน้าเว็บไซต์ --}}
    <div id="main">
        <div class="w3-teal">
            <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
            <div class="w3-container">
                <h1>HOME</h1>
            </div>
        </div>

        <script>
            function w3_open() {
                document.getElementById("main").style.marginLeft = "15%";
                document.getElementById("mySidebar").style.width = "15%";
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("openNav").style.display = 'none';
            }

            function w3_close() {
                document.getElementById("main").style.marginLeft = "0%";
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("openNav").style.display = "inline-block";
            }
        </script>

        <!-- Content -->
        <main class="container mx-auto mt-4">
            <h1 id="greeting" class="text-3xl text-center mb-4">Hello, World!</h1>
        </main>

        <!-- Footer -->
        <footer class="bg-blue-500 text-white p-4 mt-4">
            <div class="container mx-auto">
                <p class="text-center">&copy; 2024 Test_Laravel</p>
            </div>
        </footer>
    </div>


</body>

</html>
