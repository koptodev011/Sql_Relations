<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrow Hover Effect</title>
    <link rel="stylesheet" href="styles.css">
    <style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f0f0;
}

.arrow {
    font-size: 10rem;
    color: #333;
    transition: transform 0.20s ease;
    cursor: pointer;
}
.arrow:hover {
    transform: translateX(50px);
}

    </style>
</head>
<body>
    <div class="arrow">→</div>
</body>
</html>
