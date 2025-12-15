<?php
$cities = [
    'sharm' => [
        'name' => 'Sharm El Sheikh',
        'img' => 'https://redseahotels.com/wp-content/uploads/2023/03/Sharm-Plaza-allinclusive-resort-in-sharm-el-sheikh-by-red-sea-hotels.jpg',
        'desc' => "Sharm El Sheikh is an Egyptian resort town between the desert of the Sinai Peninsula and the Red Sea."
    ]
];

$key = $_GET['name'] ?? 'sharm';
$city = $cities[$key];

$pageTitle = $city['name'];
include 'header.php';
?>

<section class="hero-section">
    <div class="container">
        <h1>TRAVEL IN EGYPT</h1>
    </div>
</section>

<section class="content-section py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <img src="<?= $city['img'] ?>" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-7">
                <h2><?= $city['name'] ?></h2>
                <p><?= $city['desc'] ?></p>
                <a href="index.php" class="btn btn-warning">Back to Home</a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
