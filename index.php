<?php
$pageTitle = "Discover Egypt";
include 'header.php';
?>

<style>
.hero-section {
    background-color: #222;
    padding: 3rem 0;
    text-align: center;
    color: #FFD700;
}
.carousel-item img {
    height: 500px;
    object-fit: cover;
    width: 100%;
}
.featured-cities {
    padding: 3rem 0;
}
.city-card {
    transition: transform 0.3s ease;
}
.city-card:hover {
    transform: translateY(-5px);
}
.city-card img {
    height: 200px;
    object-fit: cover;
}
</style>

<section class="hero-section">
    <div class="container">
        <h1>DISCOVER EGYPT</h1>

        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.corinthiantravel.co.uk/app/uploads/2023/11/Cairo-Egyptian-pyramids.Giza-pyramid-complex-Egypt-DT-36049269-1.jpg">
                </div>
                <div class="carousel-item">
                    <img src="https://webassets.transavia.com/78ae936f-d39d-01b0-c3ef-dc738304142f/c5db01a8-76b8-400a-a14d-aa1e56b941ef/Egypt%20(Nile).jpg?w=2200&h=800&fit=clip&rect=0,201,2200,800&fm=jpg&auto=format">
                </div>
                <div class="carousel-item">
                    <img src="https://assets.cairo360.com/app/uploads/2024/08/29/abdullah-ali-cD4Ix4i1HZ8-unsplash-1024x497.jpg">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featured-cities">
    <div class="container">
        <h2 class="text-center mb-4">Featured Cities</h2>

        <div class="row g-4">
            <?php
            $cities = [
                ['name' => 'Sharm El Sheikh', 'img' => './images/sharm.jpg', 'slug' => 'sharm'],
                ['name' => 'Hurghada', 'img' => './images/hurghada.jpg', 'slug' => 'hurghada'],
                ['name' => 'Aswan', 'img' => './images/aswan.jpg', 'slug' => 'aswan'],
                ['name' => 'Port Said', 'img' => './images/portsaid.jpg', 'slug' => 'portsaid'],
            ];

            foreach ($cities as $city):
            ?>
                <div class="col-md-3">
                    <div class="card city-card">
                        <img src="<?= $city['img'] ?>" class="card-img-top">
                        <div class="card-body text-center">
                            <h5><?= $city['name'] ?></h5>
                            <a href="city.php?name=<?= $city['slug'] ?>" class="btn btn-outline-info">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
