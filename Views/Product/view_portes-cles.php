<div class="container">
        <header>
            <center><h1>Portes-clés</h1></center>
            <br>
        </header>
        <div class="row">
            <?php foreach ($portes_cles as $p) : ?>
                <div class="col-md-3">
                    <div class="card mb-4">
                        
                    
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($p->name) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($p->description) ?></p>
                            <p class="card-text"><strong><?= htmlspecialchars($p->price) ?>€</strong></p>
                        
                          
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

