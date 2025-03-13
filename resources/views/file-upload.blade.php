<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fayl yuklash</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .upload-box {
            border: 2px dashed #007bff;
            padding: 20px;
            border-radius: 10px;
            cursor: pointer;
            background-color: #f9f9f9;
            display: inline-block;
        }
        .upload-box:hover {
            background-color: #e8f0fe;
        }
        input[type="file"] {
            display: none;
        }
        .upload-text {
            color: #007bff;
            font-size: 16px;
        }
        .btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 15px;
            transition: 0.3s;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .file-name {
            margin-top: 10px;
            font-size: 14px;
            color: #333;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Fayl yuklash</h2>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <form action="/file-upload" method="post" enctype="multipart/form-data">
        @csrf
        <label class="upload-box" for="file-input">
            <span class="upload-text">Fayl tanlash</span>
        </label>
        <input id="file-input" name="file" type="file" onchange="updateFileName()">
        <p class="file-name" id="file-name"></p>
        <button class="btn" type="submit">Yuklash</button>
    </form>
    <br>
    <a class="btn" href="/files">Yuklangan rasmlarni ko'rish</a>
</div>

<script>
    function updateFileName() {
        const fileInput = document.getElementById('file-input');
        const fileName = document.getElementById('file-name');
        fileName.textContent = fileInput.files.length > 0 ? fileInput.files[0].name : '';
    }
</script>
</body>
</html>
