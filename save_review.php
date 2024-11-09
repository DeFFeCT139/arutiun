<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    if ($data && isset($data['name']) && isset($data['review']) && isset($data['rating']) && isset($data['date'])) {
        $reviewsFile = 'reviews.json';
        if (file_exists($reviewsFile)) {
            $reviews = json_decode(file_get_contents($reviewsFile), true);
        } else {
            $reviews = [];
        }

        $reviews[] = $data;
        file_put_contents($reviewsFile, json_encode($reviews, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid data']);
    }
}
?>
