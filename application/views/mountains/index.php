<h2><?php echo $title; ?></h2>

<?php foreach ($mountains as $mountains_item): ?>

    <h3><?php echo $mountains_item['Name']; ?></h3>
    <div class="main">
        <?php echo $mountains_item['Mountains']; ?>
    </div>
    <p><a href="<?php echo site_url('mountains/'.$mountains_item['Name']); ?>">View mountain</a></p>

<?php endforeach; ?>
