<?php
require_once ROOT_PATH . '/includes/config.php';

function getNavigation() {
    return [
        ['title' => 'Home', 'url' => 'index.php?page=home'],
        ['title' => 'About Me', 'url' => 'index.php?page=about'],
        ['title' => 'Projects', 'url' => 'index.php?page=projects'],
        ['title' => 'Contact', 'url' => 'index.php?page=contact'],
        ['title' => 'Download Resume', 'url' => 'index.php?page=download']
    ];
}
function getProjects() {
    return [
        [
            'title' => 'Products App',
            'description' => 'A React application showcasing product listings with filtering capabilities',
            'image' => 'ecommerce.png',
            'demo_url' => 'https://products-app-fawn.vercel.app/',
            'code_url' => 'https://github.com/ikako58/products-app',
            'created_at' => '2023-11-15',
            'technologies' => ['React', 'JavaScript', 'CSS'] // Add this line
        ],
        [
            'title' => 'Villa Agency',
            'description' => 'A PHP-based real estate website showcasing property listings',
            'image' => 'villa.png',
            'demo_url' => 'http://villa-agency.atwebpages.com/index.php',
            'code_url' => 'https://github.com/ikako58/villa-agency',
            'created_at' => '2023-10-20',
            'technologies' => ['PHP', 'MySQL', 'JavaScript'] // Add this line
        ],
        [
            'title' => 'DressUp clone',
            'description' => 'Interactive JavaScript dress-up game with drag-and-drop functionality',
            'image' => 'dressup.png',
            'demo_url' => 'https://ikako58.github.io/dressup/',
            'code_url' => 'https://github.com/ikako58/dressup',
            'created_at' => '2023-09-10',
            'technologies' => ['JavaScript', 'HTML5', 'CSS3'] // Add this line
        ]
    ];
}

function handleContactForm() {
    global $conn;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $message = trim($_POST['message'] ?? '');

        if (empty($name) || empty($email) || empty($message)) {
            return ['success' => false, 'message' => 'All fields are required.'];
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return ['success' => false, 'message' => 'Invalid email format.'];
        }

        $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        if ($stmt === false) {
            return ['success' => false, 'message' => 'Prepare failed: ' . $conn->error];
        }

        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            return ['success' => true, 'message' => 'Thank you for your message! I will get back to you soon.'];
        } else {
            return ['success' => false, 'message' => 'Error: ' . $stmt->error];
        }
    }
    return null;
}
?>