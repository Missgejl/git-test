<?php
// Fælles data og små hjælpefunktioner til ESSENCE.
session_start();
$products = [
 'ambre' => ['name'=>'Ambre No. 04','category'=>'Unisex','price'=>895,'description'=>'Varm amber, blød vanilje og et strejf af tørre træsorter. En rolig duft med dybde.','notes'=>'Amber · Vanilje · Sandeltræ','size'=>'50 ml','image'=>'https://images.unsplash.com/photo-1594035910387-fea47794261f?auto=format&fit=crop&w=900&q=85'],
 'fleur' => ['name'=>'Fleur de Peau','category'=>'Til hende','price'=>1_095,'description'=>'Lys og elegant med delikate blomster, iris og ren musk.','notes'=>'Iris · Hvid musk · Pæon','size'=>'50 ml','image'=>'https://images.unsplash.com/photo-1541643600914-78b084683601?auto=format&fit=crop&w=900&q=85'],
 'bois' => ['name'=>'Bois Serein','category'=>'Til ham','price'=>995,'description'=>'Frisk bergamot møder cedertræ og en diskret krydret varme.','notes'=>'Bergamot · Cedertræ · Vetiver','size'=>'50 ml','image'=>'https://images.unsplash.com/photo-1592945403244-b3fbafd7f539?auto=format&fit=crop&w=900&q=85'],
 'musc' => ['name'=>'Musc Blanc','category'=>'Unisex','price'=>795,'description'=>'En afdæmpet, hudnær duft med blød musk og saltet træ.','notes'=>'Musk · Havsalt · Cashmeretræ','size'=>'30 ml','image'=>'https://images.unsplash.com/photo-1595425970377-c9703cf48b6d?auto=format&fit=crop&w=900&q=85']
];
function e($value) { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
function money($amount) { return number_format((float)$amount, 0, ',', '.') . ' kr.'; }
function cartCount() { return array_sum($_SESSION['cart'] ?? []); }
function pageHeader($title, $active='') { require __DIR__ . '/header.php'; }
function pageFooter() { require __DIR__ . '/footer.php'; }
?>
