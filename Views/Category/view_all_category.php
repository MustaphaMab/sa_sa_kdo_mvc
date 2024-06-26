<div>

<p> <?= isset($search)?'Nos catégories : ' .$search:'' ?></p> 

<?php
// syntaxe courte qui remplace < ?php echo ... ? >
// isset ($search) controle que la variable est bien défini
?>

<table class="table table-success table-striped">

    <thead>
        <th >Description</th>
        <th >Nom</th>
    </thead>

    <?php foreach($category as $c ): ?>
        <tr>
            <td ><?=$c->description?></td>
            <td ><?=$c->name?></td>
        </tr>
<?php endforeach; ?>
</table>
</div>