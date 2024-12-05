<?php 
include 'header.php';
include 'connection.php';
include 'demandesql.php'; 


$idcat = $_GET['id'];
$products = getProducts($idcat); 
// Récupération des données depuis la base de données - მონაცემების მიღება ბაზიდან. 
?>

<main class="main-content">
  <section class="categories-section">
    <div class="categories-container">
      <?php foreach ($products as $product): ?>
        <div class="category">

          <!-- Image - სურათი -->
          <img src="img/<?php echo htmlspecialchars($product->image); ?>" 
               alt="<?php echo htmlspecialchars($product->libelle); ?>">

          <!-- Titre - სათაური -->
          <p class=""><?php echo htmlspecialchars($product->libelle); ?></p>

          <!-- Prix - ფასი -->
          <p class="price"><?php echo number_format($product->prix, 2, ',', ' '); ?> €</p>

          <!-- Contrôles de commande - შეკვეთის კონტროლი -->
          <div class="order-controls">
            <button class="minus-btn" disabled>-</button>
            <span class="quantity">0</span>
            <button class="plus-btn">+</button>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>
<a href="Contact.php" class="cart-button">
  <i class="fa-solid fa-cart-shopping"></i>
</a>

<?php include 'footer.php'; ?>


<script src="js/script.js"></script>