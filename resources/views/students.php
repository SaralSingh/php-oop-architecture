<h1>Students</h1>

<ul>
<?php foreach ($students as $student): ?>
    <li><?= $student['id'] ?> - <?= htmlspecialchars($student['name']) ?></li>
<?php endforeach; ?>
</ul>
