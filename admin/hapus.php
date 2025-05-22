<?php

require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Exception\FirebaseException;
use Google\Cloud\Core\Exception\NotFoundException;

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Firebase configuration
$serviceAccount = ServiceAccount::fromJsonString(getenv('FIREBASE_CREDENTIALS'));

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->withDatabaseUri($_ENV['FIREBASE_DATABASE_URI'])
    ->create();

$db = $firebase->getFirestore();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $docRef = $db->collection('ste_2025')->document($id);
        $docRef->delete();

        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href='index.php';
              </script>";
    } catch (NotFoundException $e) {
        echo "<script>
                alert('Data tidak ditemukan: " . $e->getMessage() . "');
                window.location.href='index.php';
              </script>";
    } catch (FirebaseException $e) {
        echo "<script>
                alert('Terjadi kesalahan pada Firebase: " . $e->getMessage() . "');
                window.location.href='index.php';
              </script>";
    } catch (Exception $e) {
        echo "<script>
                alert('Gagal menghapus data: " . $e->getMessage() . "');
                window.location.href='index.php';
              </script>";
    }
} else {
    echo "<script>
            alert('ID tidak valid!');
            window.location.href='index.php';
          </script>";
}
?>