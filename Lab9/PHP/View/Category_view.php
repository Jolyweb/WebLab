<?php
    foreach ($categories as $category) {
?>
    <ref class="blog-ref" href="/<?= $category["url"]?>"><?= $category["titel"]?></ref>
<?php
    }
?>