<?php

require __DIR__ . '../../vendor/autoload.php';

use Kreait\Firebase\Factory;

// Get Firebase credentials (JSON string) and database URI from environment
$firebaseCredentials = getenv('FIREBASE_CREDENTIALS');
$databaseUri = getenv('FIREBASE_DATABASE_URI');

if (empty($firebaseCredentials) || empty($databaseUri)) {
  error_log("Firebase credentials or database URI not set in environment variables.");
  die("Firebase configuration error. Check your environment variables.");
}

try {
  // Simpan JSON ke file sementara
  $tempJsonFile = sys_get_temp_dir() . '/firebase_credentials.json';
  file_put_contents($tempJsonFile, $firebaseCredentials);

  // Initialize Firebase using file path
  $firestore = (new Factory)
    ->withServiceAccount('firebase_credentials.json')
    ->createFirestore();


  $db = $firebase->getFirestore();

  // Get document ID
  $id = $_GET['id'] ?? null;
  if (!$id) {
    error_log("Invalid or missing document ID.");
    die("Invalid document ID.");
  }

  // Delete the document
  $docRef = $db->collection('ste_2025')->document($id);
  $docRef->delete();

  // Redirect success
  header("Location: index.php?delete=success");
  exit;
} catch (Exception $e) {
  error_log("Error deleting document: " . $e->getMessage());
  header("Location: index.php?delete=error&message=" . urlencode($e->getMessage()));
  exit;
}
